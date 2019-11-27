<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "huong_ve_que_huong".
 *
 * @property int $id
 * @property string $full_name
 * @property string $cell_phone
 * @property string $address
 * @property int $created_at
 */
class HuongVeQueHuong extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'huong_ve_que_huong';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'cell_phone', 'address', 'created_at'], 'required'],
            [['created_at'], 'integer'],
            [['full_name', 'address'], 'string', 'max' => 255],
            [['cell_phone'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Họ và tên',
            'cell_phone' => 'Số điện thoại',
            'address' => 'Địa chỉ',
            'created_at' => 'Ngày tạo',
        ];
    }
}
