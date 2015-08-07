<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Coupon;
use app\models\Website;
use app\models\CouponCategories;
use app\models\CouponCategoryInfo;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionCoupon(){
        
            $coupons = Coupon::getCoupons();
            
            $Websites = Website::getWebsites();

            $categories = CouponCategories::getCategories();

            return $this->render('coupon', [
                'coupons' => $coupons,
                'websites'=> $Websites,            
                'categories'=>$categories
            ]);                       
              
    }
    
    public function actionCouponFilter($isdeal,$stores,$categories){
        
        
        $coupons = Coupon::getRequiredCoupons($isdeal,$stores,$categories);
        
        return json_encode($coupons);
    }
    
}


