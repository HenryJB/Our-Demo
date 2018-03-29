<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int $user_id
 * @property string $order_code
 * @property string $order_content
 * @property string $order_total
 * @property int $order_status
 * @property string $payment_method
 * @property string $payment_status
 * @property string $delivery_address
 * @property string $delivery_instruction
 * @property string $delivery_date
 * @property string $delivery_time
 * @property string $recipient_lastname
 * @property string $recipient_firstname
 * @property string $recipient_phoneno
 * @property string $recipient_email
 * @property string $discount_code
 * @property int $notified
 * @property string $created
 * @property int $deactivate
 * @property int $cancel_reason_id
 * @property string $payment_reference
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'order_code', 'order_content', 'order_total', 'payment_method', 'delivery_address', 'created', 'cancel_reason_id'], 'required'],
            [['user_id', 'order_status', 'notified', 'deactivate', 'cancel_reason_id'], 'integer'],
            [['order_content', 'order_total'], 'string'],
            [['delivery_date', 'delivery_time', 'created'], 'safe'],
            [['order_code'], 'string', 'max' => 30],
            [['payment_method'], 'string', 'max' => 8],
            [['payment_status', 'delivery_address', 'delivery_instruction', 'discount_code'], 'string', 'max' => 255],
            [['recipient_lastname', 'recipient_firstname', 'recipient_email'], 'string', 'max' => 20],
            [['recipient_phoneno'], 'string', 'max' => 15],
            [['payment_reference'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'order_code' => 'Order Code',
            'order_content' => 'Order Content',
            'order_total' => 'Order Total',
            'order_status' => 'Order Status',
            'payment_method' => 'Payment Method',
            'payment_status' => 'Payment Status',
            'delivery_address' => 'Delivery Address',
            'delivery_instruction' => 'Delivery Instruction',
            'delivery_date' => 'Delivery Date',
            'delivery_time' => 'Delivery Time',
            'recipient_lastname' => 'Recipient Lastname',
            'recipient_firstname' => 'Recipient Firstname',
            'recipient_phoneno' => 'Recipient Phoneno',
            'recipient_email' => 'Recipient Email',
            'discount_code' => 'Discount Code',
            'notified' => 'Notified',
            'created' => 'Created',
            'deactivate' => 'Deactivate',
            'cancel_reason_id' => 'Cancel Reason ID',
            'payment_reference' => 'Payment Reference',
        ];
    }
}
