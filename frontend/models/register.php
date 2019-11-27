<?php

namespace frontend\models;
use Yii;
use yii\base\Model;


class Register extends  Model
{
    public $name;
    public $phone;
    public $cmnd;
    public $email;
    public $type;
    public $sub_name;
    public $relationship;
    public $check;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id'], 'required'],
            [['id', 'birth_day', 'cell_phone', 'city', 'district', 'ward', 'gender', 'user_id'], 'integer'],
            [['avatar'], 'string'],
            [['full_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'birth_day' => 'Birth Day',
            'cell_phone' => 'Cell Phone',
            'city' => 'City',
            'district' => 'District',
            'ward' => 'Ward',
            'avatar' => 'Avatar',
            'gender' => 'Gender',
            'user_id' => 'User ID',
        ];
    }
}
