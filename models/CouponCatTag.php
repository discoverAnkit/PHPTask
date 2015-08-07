<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Coupon_Cat_Tag".
 *
 * @property integer $ID
 * @property integer $CouponCatTagID
 * @property integer $CouponID
 */
class CouponCatTag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Coupon_Cat_Tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CouponCatTagID', 'CouponID'], 'required'],
            [['CouponCatTagID', 'CouponID'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'CouponCatTagID' => 'Coupon Cat Tag ID',
            'CouponID' => 'Coupon ID',
        ];
    }
}
