<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php echo $form->field($model, 'username') ?>
    <?php echo $form->field($model, 'email') ?>
    <?php echo $form->field($model, 'password')->passwordInput() ?>
    <?php echo $form->field($model, 'status')->dropDownList(\app\models\User::statuses()) ?>
    <?php echo $form->field($model, 'roles')->checkboxList($roles) ?>
    <div class="form-group">
        <?php echo Html::submitButton('Save', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
    </div>
    <?php ActiveForm::end(); ?>


</div>
