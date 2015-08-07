<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Coupon".
 *
 * @property integer $CouponID
 * @property string $CouponCode
 * @property integer $CountSuccess
 * @property integer $CountFail
 * @property integer $Hits
 * @property integer $IsFeatured
 * @property integer $WL_IsOffline
 * @property string $FeatureStartDate
 * @property string $FeatureEndDate
 * @property string $LastFeaturedActivityTimestamp
 * @property string $DateAdded
 * @property string $Discount
 * @property string $Title
 * @property string $Description
 * @property integer $WebsiteID
 * @property string $Expiry
 * @property integer $IsApproved
 * @property string $DateVerified
 * @property integer $AddedByAdmin
 * @property integer $AdminID
 * @property integer $EmailSent
 * @property integer $UseLandingPageOnly
 * @property string $Link
 * @property string $MobileWebType
 * @property string $MobileWebUrl
 * @property string $CustomMobileWebUrl
 * @property string $MobileAppType
 * @property string $MobileAppUrl
 * @property string $CustomMobileAppUrl
 * @property string $IP
 * @property integer $HasBeenReviewed
 * @property integer $Priority
 * @property integer $IsOneTimeUse
 * @property string $CouponType
 * @property integer $OneCodeIssuedPerNumSeconds
 * @property integer $IsDeal
 * @property integer $IncludeInAlertEmails
 * @property integer $Gender
 * @property string $MakeActiveDate
 * @property double $CouponPopularityScore
 * @property string $ExclusiveStartDate
 * @property integer $PinExpireTime
 * @property string $FullTerms
 * @property integer $FeaturedCouponRank
 * @property integer $FeaturedRankUnderMerchant
 * @property string $MerchantFeatureEndTime
 * @property string $MicroSitePartners
 * @property integer $AllowWoSignIn
 * @property string $APIClients
 * @property string $DiscountByValue
 * @property string $DiscountByPercentage
 * @property string $DiscountByFreeItem
 * @property integer $Category
 * @property integer $Tags
 * @property integer $SubCategory
 * @property integer $diwaliScore
 * @property string $Status
 * @property double $NewCouponPopularityScore
 */



class Coupon extends \yii\db\ActiveRecord
{
    public $WebsiteName;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Coupon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CountSuccess', 'CountFail', 'Hits', 'IsFeatured', 'WL_IsOffline', 'WebsiteID', 'IsApproved', 'AddedByAdmin', 'AdminID', 'EmailSent', 'UseLandingPageOnly', 'HasBeenReviewed', 'Priority', 'IsOneTimeUse', 'OneCodeIssuedPerNumSeconds', 'IsDeal', 'IncludeInAlertEmails', 'Gender', 'PinExpireTime', 'FeaturedCouponRank', 'FeaturedRankUnderMerchant', 'AllowWoSignIn', 'Category', 'Tags', 'SubCategory', 'diwaliScore'], 'integer'],
            [['FeatureStartDate', 'FeatureEndDate', 'LastFeaturedActivityTimestamp', 'DateAdded', 'Expiry', 'DateVerified', 'MakeActiveDate', 'ExclusiveStartDate', 'MerchantFeatureEndTime'], 'safe'],
            [['Discount', 'CouponPopularityScore', 'NewCouponPopularityScore'], 'number'],
            [['Description', 'MobileWebType', 'MobileAppType', 'CouponType', 'FullTerms', 'Status'], 'string'],
            [['AllowWoSignIn'], 'required'],
            [['CouponCode', 'DiscountByValue', 'DiscountByPercentage', 'DiscountByFreeItem'], 'string', 'max' => 100],
            [['Title'], 'string', 'max' => 250],
            [['Link', 'MobileWebUrl', 'CustomMobileWebUrl', 'MobileAppUrl', 'CustomMobileAppUrl', 'MicroSitePartners', 'APIClients'], 'string', 'max' => 1000],
            [['IP'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CouponID' => 'Coupon ID',
            'CouponCode' => 'Coupon Code',
            'CountSuccess' => 'Count Success',
            'CountFail' => 'Count Fail',
            'Hits' => 'Hits',
            'IsFeatured' => 'Is Featured',
            'WL_IsOffline' => 'Wl  Is Offline',
            'FeatureStartDate' => 'Feature Start Date',
            'FeatureEndDate' => 'Feature End Date',
            'LastFeaturedActivityTimestamp' => 'Last Featured Activity Timestamp',
            'DateAdded' => 'Date Added',
            'Discount' => 'Discount',
            'Title' => 'Title',
            'Description' => 'Description',
            'WebsiteID' => 'Website ID',
            'Expiry' => 'Expiry',
            'IsApproved' => 'Is Approved',
            'DateVerified' => 'Date Verified',
            'AddedByAdmin' => 'Added By Admin',
            'AdminID' => 'Admin ID',
            'EmailSent' => 'Email Sent',
            'UseLandingPageOnly' => 'Use Landing Page Only',
            'Link' => 'Link',
            'MobileWebType' => 'Mobile Web Type',
            'MobileWebUrl' => 'Mobile Web Url',
            'CustomMobileWebUrl' => 'Custom Mobile Web Url',
            'MobileAppType' => 'Mobile App Type',
            'MobileAppUrl' => 'Mobile App Url',
            'CustomMobileAppUrl' => 'Custom Mobile App Url',
            'IP' => 'Ip',
            'HasBeenReviewed' => 'Has Been Reviewed',
            'Priority' => 'Priority',
            'IsOneTimeUse' => 'Is One Time Use',
            'CouponType' => 'Coupon Type',
            'OneCodeIssuedPerNumSeconds' => 'One Code Issued Per Num Seconds',
            'IsDeal' => 'Is Deal',
            'IncludeInAlertEmails' => 'Include In Alert Emails',
            'Gender' => 'Gender',
            'MakeActiveDate' => 'Make Active Date',
            'CouponPopularityScore' => 'Coupon Popularity Score',
            'ExclusiveStartDate' => 'Exclusive Start Date',
            'PinExpireTime' => 'Pin Expire Time',
            'FullTerms' => 'Full Terms',
            'FeaturedCouponRank' => 'Featured Coupon Rank',
            'FeaturedRankUnderMerchant' => 'Featured Rank Under Merchant',
            'MerchantFeatureEndTime' => 'Merchant Feature End Time',
            'MicroSitePartners' => 'Micro Site Partners',
            'AllowWoSignIn' => 'Allow Wo Sign In',
            'APIClients' => 'Apiclients',
            'DiscountByValue' => 'Discount By Value',
            'DiscountByPercentage' => 'Discount By Percentage',
            'DiscountByFreeItem' => 'Discount By Free Item',
            'Category' => 'Category',
            'Tags' => 'Tags',
            'SubCategory' => 'Sub Category',
            'diwaliScore' => 'Diwali Score',
            'Status' => 'Status',
            'NewCouponPopularityScore' => 'New Coupon Popularity Score',
        ];
    }
    
    
    public function getCoupons(){
        
        $coupons = Coupon::find()
                    ->select(['{{coupon}}.*','({{website}}.`websitename`) AS WebsiteName'])
                    ->join('LEFT JOIN','website', '`coupon`.`websiteid`=`website`.`websiteid`')
                    ->limit(60)
                    ->all();
        
        return $coupons;
    }
    
    public  function getRequiredCoupons($isdeal,$stores,$categories){
        
        $requiredStores = json_decode(stripslashes($stores));
        $requiredCategories = json_decode(stripslashes($categories));
        
        if($isdeal==NULL){
            //echo "Hi";
            if(count($requiredStores)==0 && count($requiredCategories)==0){
                $coupons = Coupon::find()
                                ->select(['{{coupon}}.*','({{website}}.`websitename`) AS WebsiteName'])
                                ->join('LEFT JOIN','website', '`coupon`.`websiteid`=`website`.`websiteid`')
                                ->limit(60)
                                ->all();
            } else if(count($requiredStores)!=0 && count($requiredCategories)==0){
                $coupons = Coupon::find()
                            ->select(['{{coupon}}.*','({{website}}.`websitename`) AS WebsiteName'])
                            ->join('LEFT JOIN','website', '`coupon`.`websiteid`=`website`.`websiteid`')
                            ->where(['website.WebsiteName' => $requiredStores])
                            ->limit(60)
                            ->all();
                
            } else if(count($requiredStores)==0 && count($requiredCategories)!=0){
                
                $selectedCategories = CouponCategories::find()
                                        ->where(['name'=>$requiredCategories])
                                        ->all();
                
                
                $selectedCategoryIds = array();
                foreach($selectedCategories as $sc){
                    array_push($selectedCategoryIds, $sc->CategoryID);
                }            
                
                $couponCategoryInfo = CouponCategoryInfo::find()
                                        ->where(['categoryid'=>$selectedCategoryIds])
                                        ->all();
                
                $selectedCoupons = array();
                foreach($couponCategoryInfo as $cci){
                    array_push($selectedCoupons,$cci->CouponID);
                }                             
                
                $coupons = Coupon::find()
                            ->select(['{{coupon}}.*','({{website}}.`websitename`) AS WebsiteName'])
                            ->join('LEFT JOIN','website', '`coupon`.`websiteid`=`website`.`websiteid`')
                            ->where(['coupon.couponid'=>$selectedCoupons])                          
                            ->limit(60)
                            ->all();             
                
                
            } else{
                //both filters have values. multiple where clause
                $selectedCategories = CouponCategories::find()
                                        ->where(['name'=>$requiredCategories])
                                        ->all();
                
                $selectedCategoryIds = array();
                foreach($selectedCategories as $sc){
                    array_push($selectedCategoryIds, $sc->CategoryID);
                }    
                
                
                $couponCategoryInfo = CouponCategoryInfo::find()
                                        ->where(['categoryid'=>$selectedCategoryIds])
                                        ->all();
                
                $selectedCoupons = array();
                foreach($couponCategoryInfo as $cci){
                    array_push($selectedCoupons,$cci->CouponID);
                }                                       
                
                $coupons = Coupon::find()
                            ->select(['{{coupon}}.*','({{website}}.`websitename`) AS WebsiteName'])
                            ->join('LEFT JOIN','website', '`coupon`.`websiteid`=`website`.`websiteid`')
                            ->where(['couponid'=>$selectedCoupons])    
                            ->andWhere(['website.WebsiteName' => $requiredStores])
                            ->limit(60)
                            ->all();
                
            }
            
            
        }else{
            if(count($requiredStores)==0 && count($requiredCategories)==0){
                $coupons = Coupon::find()
                                ->select(['{{coupon}}.*','({{website}}.`websitename`) AS WebsiteName'])
                                ->join('LEFT JOIN','website', '`coupon`.`websiteid`=`website`.`websiteid`')
                                ->where(['isdeal'=>$isdeal])
                                ->limit(60)
                                ->all();
            } else if(count($requiredStores)!=0 && count($requiredCategories)==0){
                $coupons = Coupon::find()
                            ->select(['{{coupon}}.*','({{website}}.`websitename`) AS WebsiteName'])
                            ->join('LEFT JOIN','website', '`coupon`.`websiteid`=`website`.`websiteid`')
                            ->where(['website.WebsiteName' => $requiredStores])
                            ->andWhere(['coupon.isdeal'=>$isdeal])
                            ->limit(60)
                            ->all();
                
            } else if(count($requiredStores)==0 && count($requiredCategories)!=0){
                $selectedCategories = CouponCategories::find()
                                        ->where(['name'=>$requiredCategories])
                                        ->all();
                $selectedCategoryIds = array();
                foreach($selectedCategories as $sc){
                    array_push($selectedCategoryIds, $sc->CategoryID);
                }
               
                
                $couponCategoryInfo = CouponCategoryInfo::find()
                                        ->where(['categoryid'=>$selectedCategoryIds])
                                        ->all();
                
                $selectedCoupons = array();
                foreach($couponCategoryInfo as $cci){
                    array_push($selectedCoupons,$cci->CouponID);
                }
                               
                
                $coupons = Coupon::find()
                            ->select(['{{coupon}}.*','({{website}}.`websitename`) AS WebsiteName'])
                            ->join('LEFT JOIN','website', '`coupon`.`websiteid`=`website`.`websiteid`')
                            ->where(['couponid'=>$selectedCoupons])    
                            ->andWhere(['isdeal'=>$isdeal])
                            ->limit(60)
                            ->all();
                
            } else{
                //both filters have values. multiple where clause
                $selectedCategories = CouponCategories::find()
                                        ->where(['name'=>$requiredCategories])
                                        ->all();
                $selectedCategoryIds = array();
                foreach($selectedCategories as $sc){
                    array_push($selectedCategoryIds, $sc->CategoryID);
                }
                //$selectedCategoryIds = $selectedCategories->CategoryID;
                
                $couponCategoryInfo = CouponCategoryInfo::find()
                                        ->where(['categoryid'=>$selectedCategoryIds])
                                        ->all();
                
                $selectedCoupons = array();
                foreach($couponCategoryInfo as $cci){
                    array_push($selectedCoupons,$cci->CouponID);
                }
                       
                //$selectedCoupons = $couponCategoryInfo->CouponID;
                
                $coupons = Coupon::find()
                            ->select(['{{coupon}}.*','({{website}}.`websitename`) AS WebsiteName'])
                            ->join('LEFT JOIN','website', '`coupon`.`websiteid`=`website`.`websiteid`')
                            ->where(['couponid'=>$selectedCoupons])    
                            ->andWhere(['website.WebsiteName' => $requiredStores])
                            ->andWhere(['isdeal'=>$isdeal])
                            ->limit(60)
                            ->all();
            }
        }
        $relevantCouponInfo = array();
        foreach($coupons as $coupon){
            $push = [$coupon->CouponCode, $coupon->Description, $coupon->WebsiteName];
            array_push($relevantCouponInfo,$push);
        }
        return $relevantCouponInfo;
    }
}
