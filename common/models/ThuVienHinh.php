<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "thu_vien_hinh".
 *
 * @property int $id
 * @property string $title
 * @property string $avatar
 * @property string $file
 * * @property string $img1
 * * @property string $img2
 * * @property string $img3
 * * @property string $img4
 * * @property string $img5
 * * @property string $img6
 * 
 */
class ThuVienHinh extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'thu_vien_hinh';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'avatar'], 'required'],
            [['avatar','file'], 'safe'],
            [['title','img1','img2','img3','img4','img5','img6'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Tiêu đề albumn',
            'avatar' => 'Ảnh tiêu đề',
            'file' => 'File ảnh',
        ];
    }
}
