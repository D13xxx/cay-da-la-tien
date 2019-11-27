<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property int $cat_articles_id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $tags
 * @property int $created_at
 * @property int $status
 * @property int $author
 * @property int $views
 * @property string $avatar
 * @property int $is_del
 * @property int $is_hot_new
 *  @property int $type
 */
class Articles extends \yii\db\ActiveRecord
{
    const TT_MOI            = 0;
    const TT_CHOKIEMDUYET     = 1;
    const TT_DUOCDUYET      = 2;
    const TT_KIEMTRALAI     = 3;

    const T_TINTUC              = 3;
    const T_DULICH              = 1;
    const T_DACSANQUEHUONG      = 2;

    const IS_ACTIVE         = 0;
    const IS_DEL            = 1;

    public static function T_ARRAY()
    {
        return [
            self::T_TINTUC => Yii::t('backend', 'Trang tin tức'),
            self::T_DULICH => Yii::t('backend', 'Trang du lịch'),
            self::T_DACSANQUEHUONG => Yii::t('backend', 'Đặc sản quê hương'),
        ];
    }
    public static function T_COLOR_ARRAY()
    {
        return [
            self::T_TINTUC => 'label label-default',
            self::T_DULICH => 'label label-success',
            self::T_DACSANQUEHUONG => 'label label-eurro',
        ];
    }

    /**
     * @return array trang thai list
     */


    public static function TT_ARRAY()
    {
        return [
            self::TT_MOI => Yii::t('backend', 'Mới tạo'),
            self::TT_DUOCDUYET => Yii::t('backend', 'Được duyệt'),
            self::TT_KIEMTRALAI => Yii::t('backend', 'Kiểm tra lại'),
            self::TT_CHOKIEMDUYET => Yii::t('backend', 'Kiểm duyệt'),
        ];
    }
    public static function TT_COLOR_ARRAY()
    {
        return [
            self::TT_MOI => 'label label-default',
            self::TT_DUOCDUYET => 'label label-success',
            self::TT_KIEMTRALAI => 'label label-eurro',
            self::TT_CHOKIEMDUYET => 'label label-warning',
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'content', 'tags', 'created_at', 'status', 'author', 'avatar', 'is_del'], 'required'],
            [['cat_articles_id', 'created_at', 'status', 'author', 'views', 'is_del','is_hot_new','type'], 'integer'],
            [['content', 'tags'], 'string'],
            [['avatar'], 'safe'],
            [['title', 'description', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_articles_id' => 'Nhóm bài viết',
            'title' => 'Tiêu đề bài viết',
            'description' => 'Mô tả ngắn',
            'content' => 'Nội dung',
            'tags' => 'Tags',
            'created_at' => 'Thời gian tạo',
            'status' => 'Trạng thái',
            'author' => 'Tác giả',
            'views' => 'Lượt xem',
            'avatar' => 'Avatar',
            'is_del' => 'Đã xóa',
            'is_hot_new' => 'Bài viết tiêu biểu',
            'type' => 'Trang tin'
        ];
    }
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'author']);
    }
    public function getCatArtiles()
    {
        return $this->hasOne(CatArticles::className(), ['id' => 'cat_articles_id']);
    }
}
