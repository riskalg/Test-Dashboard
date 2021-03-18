<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
/*riska start*/
/*use dosamigos\tableexport\ButtonTableExport;
/*riska end*/
/* @var $this yii\web\View */
/* @var $model app\models\Invoice */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Invoices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="invoice-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
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
            'ID',
            'Location',
            'Task_ID',
            'Inv_No',
            'Inv_KSPS',
            'Inv_Date',
            'Invoice_Type',
            'Account_No',
            'Account_Name',
            'Invoice_Subject',
            'Faktur_No',
            'Faktur_Date',
            'Num_Proforma',
            'Discount',
            'Gross_Val',
            'Discount_Val',
            'Other_Val',
            'Subtotal',
            'PPN',
            'PPNBM',
            'Materai',
            'Total',
            'Status',
            'Note:ntext',
            'AR_No',
            'AR_Status',
            'Created_By',
            'Created_Date',
            'TTD_By',
            'Materai_Cust',
            'Invoice_Category',
            'Manual',
            'Manual_Proforma_Updated',
            'Currency_Symbol',
            'Currency_Value',
            'Currency_BI',
            'Stamp_Int',
            'Branch_Flag',
            'Branch_Acc',
            'Branch_Inv',
            'Branch_Closed_Status',
            'Last_Inv_No',
            'CM_Ref',
            'Last_Invoice_Value',
            'Invoice_Changes',
            'Changes_By',
            'CM_Report',
            'Inv_Dedicated',
            'Inv_Dedicated_Acc',
            'Delivery_To_CC',
            'Delivery_To_CC_Date',
            'Delivery_To_CC_By',
            'Delivery_To_CC_Note:ntext',
            'News:ntext',
        ],
    ]) ?>

</div>
