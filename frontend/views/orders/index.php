<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use frontend\assets\AppAsset;
use yii\grid\GridView;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<?php $this->title ='Del-York Group International';?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!-- web fonts -->
    <link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- //web fonts -->
    <?php $this->head() ?>

  <!-- start-smooth-scrolling -->

  <!-- //end-smooth-scrolling -->
</head>
<body>
<?php $this->beginBody() ?>


<?php


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'order_code',
            'order_content:ntext',
            'order_total:ntext',
            //'order_status',
            //'payment_method',
            //'payment_status',
            //'delivery_address',
            //'delivery_instruction',
            //'delivery_date',
            //'delivery_time',
            //'recipient_lastname',
            //'recipient_firstname',
            //'recipient_phoneno',
            //'recipient_email:email',
            //'discount_code',
            //'notified',
            //'created',
            //'deactivate',
            //'cancel_reason_id',
            //'payment_reference',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
