<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Category;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

<div class="col-lg-6">
  <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
</div>

<div class="col-lg-6">
    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
</div>

<div class="col-lg-6">

    <?php
    $items = Category::find()
            ->select(['name'])
            ->indexBy('id')
            ->column();
    echo $form->field($model, 'category_id')->dropDownList(['text' => 'Please select', 'options' => $items]);
    ?>
</div>
<div class="col-lg-6">
  <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>
</div>

<div class="col-lg-6">
    <?= $form->field($model, 'modelNo')->textInput(['maxlength' => true]) ?>
</div>

<div class="col-lg-6">
    <?= $form->field($model, 'manufactureDate')->textInput(['type'=>'date']) ?>
</div>

<div class="col-lg-6">
  <?= $form->field($model, 'cost')->textInput(['type'=>'number']) ?>
</div>

<div class="col-lg-6">
  <?= $form->field($model, 'warranty')->textInput() ?>
</div>

<div class="col-lg-3">
  <?= $form->field($model, 'isFeatured')->checkbox() ?>
</div>


<div class="col-lg-3">
  <?= $form->field($model, 'isNew')->checkbox() ?>
</div>

<div class="col-lg-3">
  <?= $form->field($model, 'imageUrl')->fileInput() ?>
</div>

<div class="col-lg-3">
  <?= $form->field($model, 'imageUrl2')->fileInput() ?>
</div>


<div class="col-lg-6">
    <?= $form->field($model, 'date')->textInput(['type'=>'date']) ?>
</div>
<div class="col-lg-12">
  <div class="form-group">
      <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
  </div>
</div>

    <?php ActiveForm::end(); ?>

</div>
