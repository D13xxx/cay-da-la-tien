<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $name
 * @property int $parent_id
 * @property int $level
 * @property int $status
 */
class Category extends \yii\db\ActiveRecord
{
    const IS_ACTIVE         = 1;
    const IS_NEW           = 0;

    /**
     * @return array trang thai list
     */


    public static function TT_ARRAY()
    {
        return [
            self::IS_ACTIVE => Yii::t('backend', 'Hoạt động'),
            self::IS_NEW => Yii::t('backend', 'Mới'),
        ];
    }
    public static function TT_COLOR_ARRAY()
    {
        return [
            self::IS_NEW => 'label label-default',
            self::IS_ACTIVE => 'label label-success',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'parent_id', 'level', 'status'], 'required'],
            [['parent_id', 'level', 'status'], 'integer'],
            [['name','code'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Tên đầy đủ',
            'parent_id' => 'Nhóm cha',
            'level' => 'Level',
            'status' => 'Trạng thái',
            'code' => 'Mã',
        ];
    }

    //lọc dữ liệu dropdown list
    public $data;
    public function getCat($parentId = null,$level="")
    {
        $result = Category::find()->asArray()->where(['parent_id'=>$parentId])->all();

        $level .= " |-- ";
        foreach ($result as $key => $value){
            if($parentId == null){
                $level = '';
            }
            $this->data[$value["id"]]  = $level.$value["name"];
            self::getCat($parentId = $value["id"],$level);
        }
        return $this->data;
    }
}
