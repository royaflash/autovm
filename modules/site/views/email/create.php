﻿<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

Yii::$app->setting->title .= ' - create a new email';

$template = '{input}{error}';

?>
<div class="content">
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <div class="title">
                <h3>Create Email <p>You need to confirm your email address</p></h3>
            </div>
            <?php echo \app\widgets\Alert::widget();?>
            <?php $form = ActiveForm::begin(['fieldConfig' => ['template' => $template]]);?>
                <?php echo $form->field($model, 'email')->textInput(['placeholder' => 'Email']);?>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Create</button>
                </div>
            <?php ActiveForm::end();?>
        </div>
    </div>
</div>