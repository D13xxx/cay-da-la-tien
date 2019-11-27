<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "offset".
 *
 * @property int $id
 * @property string $full_name
 * @property int $cell_phone
 * @property string $description
 * @property int $interest
 * @property string $file
 * @property string $created_at
 * @property string $is_viewed
 * @property string $email
 * @property string $status
 */
class Offset extends \yii\db\ActiveRecord
{
    public $captcha;

    const V_NOTVIEW          = 0;
    const V_VIEWED          = 1;

    const TT_DAXULY          = 1;
    const TT_CHUAXULY          = 0;

    const QL_1               = 1;
    const QL_2               = 2;
    const QL_3               = 3;
    const QL_4               = 4;
    const QL_5               = 5;
    /**
     * @return array trang thai list
     */


    public static function QL_ARRAY()
    {
        return [
            self::QL_1 => Yii::t('backend', 'Trợ cấp viện phí hàng ngày '),
            self::QL_2 => Yii::t('backend', 'Trợ cấp chi trả phẫu thuật'),
            self::QL_3 => Yii::t('backend', 'Quyền lợi chi trả tử vong'),
            self::QL_4 => Yii::t('backend', 'Bồi hoàn thương tật vĩnh viễn'),
            self::QL_5 => Yii::t('backend', 'Hỗ trợ chi phí điều trị sau tai nạn'),
        ];
    }
    public static function QL_COLOR_ARRAY()
    {
        return [
            self::QL_1 => 'label label-success',
            self::QL_2 => 'label label-default',
            self::QL_3 => 'label label-default',
            self::QL_4 => 'label label-warning',
            self::QL_5 => 'label label-primary',
        ];
    }

    public static function tableName()
    {
        return 'offset';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
//            ['captcha', 'codeVerify'],
            [['full_name', 'cell_phone', 'interest','is_viewed','email','captcha','file'], 'required'],
            [['cell_phone', 'interest','card','is_viewed','created_at'], 'integer'],
//            [['file'], 'file', 'extensions' => 'jpg', 'mimeTypes' => 'image/jpeg', 'maxFiles' => 3, 'skipOnEmpty' => false],
            [['full_name', 'description','email'], 'string', 'max' => 255],
            [['file'], 'safe'],
            ['email', 'email'],
            ['captcha', 'captcha','captchaAction'=>'/offset/captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'full_name' => Yii::t('common', 'Họ tên Người yêu cầu/Người bảo hộ*:'),
            'card' => Yii::t('common', 'Số chứng nhận bảo hiểm/CMND*:'),
            'cell_phone' => Yii::t('common', 'Số điện thoại liên hệ*:'),
            'description' => Yii::t('common', 'Ghi chú'),
            'interest' => Yii::t('common', 'Quyền lợi bảo hiểm yêu cầu bồi
                thường*:'),
            'file' => Yii::t('common', 'Hồ sơ đính kèm xác thực bắt buộc *:'),
            'captcha' => Yii::t('common', 'Captcha'),
            'email' => Yii::t('common', 'Email'),
            'is_viewed' => Yii::t('common', 'Đã xem'),
            'created_at' => Yii::t('common', 'Thời gian gửi'),
        ];
    }

//    public function codeVerify($attribute) {
//
//        //Param:'captcha'，is name 'captcha' in actions() of controller；Yii::$app->controller，the controller that call this function
//
//        $captcha_validate  = new \yii\captcha\CaptchaAction('captcha',Yii::$app->controller);
//
//        if($this->$attribute){
//
//            $code = $captcha_validate->getVerifyCode();
//
//            if($this->$attribute!=$code){
//
//                $this->addError($attribute, 'Mã Capcha không chính xác, vui lòng kiểm tra lại');
//
//            }
//
//        }
//
//    }
}
