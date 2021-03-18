<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Opportunity */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Opportunities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="opportunity-view">

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
            'Source_Information',
            'Source_Reference',
            'Location',
            'Task_ID',
            'Created_Date',
            'Created_By',
            'Oppor_Subject:ntext',
            'Account_No',
            'Company_Name',
            'Address',
            'Street',
            'City',
            'Industry_Type',
            'Type_Activity',
            'PIC_Function',
            'PIC_Phone',
            'Phone',
            'Ext',
            'Fax',
            'Email:email',
            'Reference',
            'PIC',
            'Note:ntext',
            'Estimated_Rev',
            'Category',
            'Sub_Category',
            'Priority',
            'Status',
            'Expected_Closing_Date',
            'Type_Object',
            'Grade_Status',
            'uuid',
            'Posting',
            'Posting_By',
            'Posting_Date',
        ],
    ]) ?>

</div>
