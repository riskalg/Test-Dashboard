<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Opportunity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="opportunity-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Source_Information')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Source_Reference')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Task_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Created_Date')->textInput() ?>

    <?= $form->field($model, 'Created_By')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Oppor_Subject')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Account_No')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Company_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Street')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'City')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Industry_Type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Type_Activity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PIC_Function')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PIC_Phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ext')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Reference')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PIC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Estimated_Rev')->textInput() ?>

    <?= $form->field($model, 'Category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Sub_Category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Priority')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Expected_Closing_Date')->textInput() ?>

    <?= $form->field($model, 'Type_Object')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Grade_Status')->textInput() ?>

    <?= $form->field($model, 'uuid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Posting')->textInput() ?>

    <?= $form->field($model, 'Posting_By')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Posting_Date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
