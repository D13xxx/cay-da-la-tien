<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "thu_vien_video".
 *
 * @property int $id
 * @property string $link
 * @property string $title
 * @property int $created_at
 */
class ThuVienVideo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'thu_vien_video';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['link', 'title', 'created_at'], 'required'],
            [['created_at'], 'integer'],
            [['link', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'link' => 'Link',
            'title' => 'Tiều đề',
            'created_at' => 'Ngày tạo',
        ];
    }
}
