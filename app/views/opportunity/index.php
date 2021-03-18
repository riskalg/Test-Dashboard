<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Opportunities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="opportunity-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Opportunity', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Source_Information',
            'Source_Reference',
            'Location',
            'Task_ID',
            //'Created_Date',
            //'Created_By',
            //'Oppor_Subject:ntext',
            //'Account_No',
            //'Company_Name',
            //'Address',
            //'Street',
            //'City',
            //'Industry_Type',
            //'Type_Activity',
            //'PIC_Function',
            //'PIC_Phone',
            //'Phone',
            //'Ext',
            //'Fax',
            //'Email:email',
            //'Reference',
            //'PIC',
            //'Note:ntext',
            //'Estimated_Rev',
            //'Category',
            //'Sub_Category',
            //'Priority',
            //'Status',
            //'Expected_Closing_Date',
            //'Type_Object',
            //'Grade_Status',
            //'uuid',
            //'Posting',
            //'Posting_By',
            //'Posting_Date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
