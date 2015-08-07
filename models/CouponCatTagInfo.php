<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Coupon_Cat_Tag_Info".
 *
 * @property integer $CouponCatTagID
 * @property string $CouponCatTagName
 * @property string $CouponCatMatchesURL
 * @property string $Heading
 * @property string $PageTitle
 * @property string $SiteDescription
 * @property string $AboutHeading
 * @property string $PageIntro
 * @property integer $ParentTagID
 * @property integer $IsFestivalPage
 */
class CouponCatTagInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Coupon_Cat_Tag_Info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CouponCatTagName', 'CouponCatMatchesURL', 'Heading', 'PageTitle', 'SiteDescription', 'IsFestivalPage'], 'required'],
            [['ParentTagID', 'IsFestivalPage'], 'integer'],
            [['CouponCatTagName'], 'string', 'max' => 100],
            [['CouponCatMatchesURL'], 'string', 'max' => 50],
            [['Heading', 'PageTitle', 'SiteDescription', 'AboutHeading', 'PageIntro'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CouponCatTagID' => 'Coupon Cat Tag ID',
            'CouponCatTagName' => 'Coupon Cat Tag Name',
            'CouponCatMatchesURL' => 'Coupon Cat Matches Url',
            'Heading' => 'Heading',
            'PageTitle' => 'Page Title',
            'SiteDescription' => 'Site Description',
            'AboutHeading' => 'About Heading',
            'PageIntro' => 'Page Intro',
            'ParentTagID' => 'Parent Tag ID',
            'IsFestivalPage' => 'Is Festival Page',
        ];
    }
}
