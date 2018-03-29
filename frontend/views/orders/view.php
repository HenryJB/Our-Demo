<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Order */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'order_code',
            'order_content:ntext',
            'order_total:ntext',
            'order_status',
            'payment_method',
            'payment_status',
            'delivery_address',
            'delivery_instruction',
            'delivery_date',
            'delivery_time',
            'recipient_lastname',
            'recipient_firstname',
            'recipient_phoneno',
            'recipient_email:email',
            'discount_code',
            'notified',
            'created',
            'deactivate',
            'cancel_reason_id',
            'payment_reference',
        ],
    ]) ?>

</div>
