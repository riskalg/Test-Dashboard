<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Invoice */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="invoice-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Task_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Inv_No')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Inv_KSPS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Inv_Date')->textInput() ?>

    <?= $form->field($model, 'Invoice_Type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Account_No')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Account_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Invoice_Subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Faktur_No')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Faktur_Date')->textInput() ?>

    <?= $form->field($model, 'Num_Proforma')->textInput() ?>

    <?= $form->field($model, 'Discount')->textInput() ?>

    <?= $form->field($model, 'Gross_Val')->textInput() ?>

    <?= $form->field($model, 'Discount_Val')->textInput() ?>

    <?= $form->field($model, 'Other_Val')->textInput() ?>

    <?= $form->field($model, 'Subtotal')->textInput() ?>

    <?= $form->field($model, 'PPN')->textInput() ?>

    <?= $form->field($model, 'PPNBM')->textInput() ?>

    <?= $form->field($model, 'Materai')->textInput() ?>

    <?= $form->field($model, 'Total')->textInput() ?>

    <?= $form->field($model, 'Status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'AR_No')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AR_Status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Created_By')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Created_Date')->textInput() ?>

    <?= $form->field($model, 'TTD_By')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Materai_Cust')->textInput() ?>

    <?= $form->field($model, 'Invoice_Category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Manual')->textInput() ?>

    <?= $form->field($model, 'Manual_Proforma_Updated')->textInput() ?>

    <?= $form->field($model, 'Currency_Symbol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Currency_Value')->textInput() ?>

    <?= $form->field($model, 'Currency_BI')->textInput() ?>

    <?= $form->field($model, 'Stamp_Int')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Branch_Flag')->textInput() ?>

    <?= $form->field($model, 'Branch_Acc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Branch_Inv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Branch_Closed_Status')->textInput() ?>

    <?= $form->field($model, 'Last_Inv_No')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CM_Ref')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Last_Invoice_Value')->textInput() ?>

    <?= $form->field($model, 'Invoice_Changes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Changes_By')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CM_Report')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Inv_Dedicated')->textInput() ?>

    <?= $form->field($model, 'Inv_Dedicated_Acc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Delivery_To_CC')->textInput() ?>

    <?= $form->field($model, 'Delivery_To_CC_Date')->textInput() ?>

    <?= $form->field($model, 'Delivery_To_CC_By')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Delivery_To_CC_Note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'News')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
