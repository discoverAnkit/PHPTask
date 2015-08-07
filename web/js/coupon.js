var isDeal = null;
var stores =new Array();
var categories = new Array();
var excelData = null;

$(document).ready(function(){
    $(document).ajaxStart(function(){
        $("#wait").css("display", "block");
    });
    $(document).ajaxComplete(function(){
        $("#wait").css("display", "none");
    });
});


function showDealsOrCoupons(str) {
    if(str=="Deal") isDeal = 1;
    else isDeal = 0;
    makeTheAjaxCall();
}

function categoryHandler(str){
    index = categories.indexOf(str);
    if(index==-1)
        categories.push(str);
    else
        categories.splice(index,1);

    makeTheAjaxCall();
}

function websiteHandler(str){
    //alert(str);
    index = stores.indexOf(str);
    if(index==-1)
        stores.push(str);
    else
        stores.splice(index,1);

    makeTheAjaxCall();
}

function makeTheAjaxCall(){

    var ajaxUrl = 'index.php?r=site/coupon-filter&isdeal='+isDeal+'&stores='+encodeURIComponent(JSON.stringify(stores))+'&categories='+encodeURIComponent(JSON.stringify(categories));
    $.ajax({
        url: ajaxUrl,
        data: {                     
            dataType: 'json',
            type: 'GET',
        },
        error: function () {
            alert("error");
        },
        success: function (data) {

            var obj = JSON.parse(data);
            excelData = obj;
            $('#coupons').empty();

            $.each(obj, function (key, value) {
                $('#coupons').append('<li>' + value + '</li><br>');
            });                           
        }
    });

}

function downloadExcel(){

    CSV = 'YOUR COUPONS\r\n\nOFFER TYPE : ';

    if(isDeal==0) CSV+='Coupon\n\n';
    else if(isDeal==1) CSV+='Deal\n\n';
    else CSV+='Deal and Coupon\n\n';

    CSV+='CATEGORIES : '+categories.toString()+'\n\n';
    CSV+='WEBSITES : '+stores.toString()+'\n\n';

    for (var i = 0; i < excelData.length; i++) {
        var line = '';
        for (var index in excelData[i]) {
            if (line != '') line += ','
                line+= excelData[i][index];
        }
        CSV += line + '\r\n';
    }                                             
    var fileName = "MyCoupons";             
    var uri = 'data:text/csv;charset=utf-8,' + encodeURIComponent(CSV);   
    var link = document.createElement("a");    
    link.href = uri;
    link.style = "visibility:hidden";
    link.download = fileName + ".csv";
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);                
}    

