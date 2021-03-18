<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/*riska*/
use lo\widgets\SlimScroll;
/*end riska*

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Invoices';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="invoice-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Invoice', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php 
    echo SlimScroll::widget([
        'options'=>[
            'height'=>'600px',
            'position' => 'right'
        ]
    ]); 

    
    Pjax::begin(); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Location',
            'Task_ID',
            'Inv_No',
            'Inv_KSPS',
            //'Inv_Date',
            //'Invoice_Type',
            //'Account_No',
            //'Account_Name',
            //'Invoice_Subject',
            //'Faktur_No',
            //'Faktur_Date',
            //'Num_Proforma',
            //'Discount',
            //'Gross_Val',
            //'Discount_Val',
            //'Other_Val',
            //'Subtotal',
            //'PPN',
            //'PPNBM',
            //'Materai',
            //'Total',
            //'Status',
            //'Note:ntext',
            //'AR_No',
            //'AR_Status',
            //'Created_By',
            //'Created_Date',
            //'TTD_By',
            //'Materai_Cust',
            //'Invoice_Category',
            //'Manual',
            //'Manual_Proforma_Updated',
            //'Currency_Symbol',
            //'Currency_Value',
            //'Currency_BI',
            //'Stamp_Int',
            //'Branch_Flag',
            //'Branch_Acc',
            //'Branch_Inv',
            //'Branch_Closed_Status',
            //'Last_Inv_No',
            //'CM_Ref',
            //'Last_Invoice_Value',
            //'Invoice_Changes',
            //'Changes_By',
            //'CM_Report',
            //'Inv_Dedicated',
            //'Inv_Dedicated_Acc',
            //'Delivery_To_CC',
            //'Delivery_To_CC_Date',
            //'Delivery_To_CC_By',
            //'Delivery_To_CC_Note:ntext',
            //'News:ntext',

           // ['class' => 'yii\grid\ActionColumn','template'=>'{view}'],
        ],
    ]); ?>

    <?php 
    echo SlimScroll::end(); 

    Pjax::end(); ?>

</div>
