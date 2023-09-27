<?php

use app\models\Category;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$items = Category::find()
    ->select(['name'])
    ->indexBy('id')
    ->column();
/** @var yii\web\View $this */
/** @var app\models\Request $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="request-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->hiddenInput(['value'=>Yii::$app->user->getId()])->label(false)?>

    <?= $form->field($model, 'id_category')->dropdownList($items,

        ['prompt'=>'Выберите категорию']
    ); ?>

    <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
