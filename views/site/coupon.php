<?php
$this->registerJsFile(Yii::$app->request->baseUrl.'/js/coupon.js',['depends' => [\yii\web\JqueryAsset::className()]]);
?>

<html>
    <head>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
        <script src="../../web/js/coupon.js" type="text/javascript"></script>
    </head>
<body>
    <button class="btn btn-primary" style="float:right" onclick="downloadExcel()">Download Excel</button>    
    <h1 style="text-align: center">COUPONS</h1>
<table class="table">
    <tr>
        <td style="vertical-align: top">
            <table style="vertical-align: top">
                <tr><td style="vertical-align: top">
                        <h4 onclick="showDealsOrCoupons()">OFFER TYPE</h4>
                        
                        <div style="height:100px" class="scrollable">   
                            <input type="radio" name="coupontype" value="Deal" onclick="showDealsOrCoupons(this.value)">Deal<br>
                            <input type="radio" name="coupontype" value="Coupon" onclick="showDealsOrCoupons(this.value)">Coupon
                            
                        </div>
                    </td></tr>
                            
                <tr><td style="vertical-align: top">
                        <h4>CATEGORIES</h4>
                        <div style="height: 500px" class="scrollable">    
                            <?php
                                foreach ($categories as $category){
                            ?>
                            <input onclick="categoryHandler(this.value)" type="checkbox" id="categories" name="categories" value="<?=$category->Name?>"><?= $category->Name ?><br>
                            <?php        
                                }
                            ?>
                        </div>
                    </td></tr>
                    
                    <tr><td>
                        <h4>STORES</h4>
                        <div style="height: 500px" class="scrollable">
                            <?php
                                foreach ($websites as $website){
                            ?>
                            <input onclick="websiteHandler(this.value)" type="checkbox" id="websites" name="websites" value="<?=$website->WebsiteName?>"><?= $website->WebsiteName ?><br>
                            <?php        
                                }
                            ?>
                        </div>
                    </td></tr>
                    
            </table>
        </td>
        <td style="vertical-align: top">
            <ul id="coupons" class="list-group-item">
                <?php foreach ($coupons as $coupon): ?>
                <li>
                    <?= $coupon->CouponCode ?>,
                    <?= $coupon->Description?>,
                    <?= $coupon->WebsiteName?>
                </li>
                <br>
                <?php endforeach; ?>
            </ul>
        </td>
    </tr>
</table>
<div id="wait" style="display:none;width:69px;height:89px;border:1px solid black;position:absolute;top:50%;left:50%;padding:2px;"><img src='http://www.w3schools.com/jquery/demo_wait.gif'/><br>Loading..</div>  
</body>
</html>