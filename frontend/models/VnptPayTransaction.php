<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vnpt_pay_transaction".
 *
 * @property int $id
 * @property string $action
 * @property string $version
 * @property int $merchant_service_id
 * @property string $merchant_order_id
 * @property int $amount
 * @property string $amount_detail
 * @property string $service_id
 * @property int $device
 * @property string $locale
 * @property string $currency_code
 * @property string $payment_method
 * @property string $description
 * @property string $create_date
 * @property string $client_ip
 * @property string $secure_code
 * @property string $response
 */
class VnptPayTransaction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vnpt_pay_transaction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['action', 'version', 'merchant_service_id', 'merchant_order_id', 'amount', 'amount_detail', 'service_id', 'device', 'locale', 'currency_code', 'payment_method', 'description', 'create_date', 'client_ip', 'secure_code', 'response'], 'required'],
            [['merchant_service_id', 'amount', 'device'], 'integer'],
            [['action', 'version', 'currency_code', 'payment_method', 'create_date', 'client_ip'], 'string', 'max' => 50],
            [['merchant_order_id', 'amount_detail', 'service_id', 'description', 'secure_code', 'response'], 'string', 'max' => 255],
            [['locale'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'action' => 'Action',
            'version' => 'Version',
            'merchant_service_id' => 'Merchant Service ID',
            'merchant_order_id' => 'Merchant Order ID',
            'amount' => 'Amount',
            'amount_detail' => 'Amount Detail',
            'service_id' => 'Service ID',
            'device' => 'Device',
            'locale' => 'Locale',
            'currency_code' => 'Currency Code',
            'payment_method' => 'Payment Method',
            'description' => 'Description',
            'create_date' => 'Create Date',
            'client_ip' => 'Client Ip',
            'secure_code' => 'Secure Code',
            'response' => 'Response',
        ];
    }
}
