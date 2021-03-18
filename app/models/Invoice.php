<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "invoice".
 *
 * @property int $ID
 * @property string|null $Location
 * @property string|null $Task_ID
 * @property string|null $Inv_No
 * @property string|null $Inv_KSPS
 * @property string|null $Inv_Date
 * @property string|null $Invoice_Type
 * @property string|null $Account_No
 * @property string|null $Account_Name
 * @property string|null $Invoice_Subject
 * @property string|null $Faktur_No
 * @property string|null $Faktur_Date
 * @property int|null $Num_Proforma
 * @property float|null $Discount
 * @property float|null $Gross_Val
 * @property float|null $Discount_Val
 * @property float|null $Other_Val
 * @property float|null $Subtotal
 * @property float|null $PPN
 * @property float|null $PPNBM
 * @property int|null $Materai
 * @property float|null $Total
 * @property string|null $Status
 * @property string|null $Note
 * @property string|null $AR_No
 * @property string|null $AR_Status
 * @property string|null $Created_By
 * @property string|null $Created_Date
 * @property string|null $TTD_By
 * @property int|null $Materai_Cust
 * @property string|null $Invoice_Category
 * @property int|null $Manual
 * @property int|null $Manual_Proforma_Updated
 * @property string|null $Currency_Symbol
 * @property float|null $Currency_Value
 * @property float|null $Currency_BI
 * @property string|null $Stamp_Int
 * @property int|null $Branch_Flag
 * @property string|null $Branch_Acc
 * @property string|null $Branch_Inv
 * @property int|null $Branch_Closed_Status
 * @property string|null $Last_Inv_No
 * @property string|null $CM_Ref
 * @property float|null $Last_Invoice_Value
 * @property string|null $Invoice_Changes
 * @property string|null $Changes_By
 * @property string|null $CM_Report
 * @property int|null $Inv_Dedicated
 * @property string|null $Inv_Dedicated_Acc
 * @property int|null $Delivery_To_CC
 * @property string|null $Delivery_To_CC_Date
 * @property string|null $Delivery_To_CC_By
 * @property string|null $Delivery_To_CC_Note
 * @property string|null $News
 */
class Invoice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'invoice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Inv_Date', 'Faktur_Date', 'Created_Date', 'Delivery_To_CC_Date'], 'safe'],
            [['Num_Proforma', 'Materai', 'Materai_Cust', 'Manual', 'Manual_Proforma_Updated', 'Branch_Flag', 'Branch_Closed_Status', 'Inv_Dedicated', 'Delivery_To_CC'], 'integer'],
            [['Discount', 'Gross_Val', 'Discount_Val', 'Other_Val', 'Subtotal', 'PPN', 'PPNBM', 'Total', 'Currency_Value', 'Currency_BI', 'Last_Invoice_Value'], 'number'],
            [['Note', 'Delivery_To_CC_Note', 'News'], 'string'],
            [['Location', 'Invoice_Type', 'Account_No', 'AR_No', 'AR_Status', 'Created_By', 'TTD_By', 'Invoice_Category', 'Last_Inv_No', 'Changes_By', 'CM_Report', 'Inv_Dedicated_Acc', 'Delivery_To_CC_By'], 'string', 'max' => 30],
            [['Task_ID'], 'string', 'max' => 35],
            [['Inv_No', 'Inv_KSPS', 'Faktur_No', 'CM_Ref', 'Invoice_Changes'], 'string', 'max' => 40],
            [['Account_Name'], 'string', 'max' => 100],
            [['Invoice_Subject', 'Branch_Acc', 'Branch_Inv'], 'string', 'max' => 200],
            [['Status', 'Currency_Symbol'], 'string', 'max' => 20],
            [['Stamp_Int'], 'string', 'max' => 10],
            [['Inv_No'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Location' => 'Location',
            'Task_ID' => 'Task ID',
            'Inv_No' => 'Inv No',
            'Inv_KSPS' => 'Inv Ksps',
            'Inv_Date' => 'Inv Date',
            'Invoice_Type' => 'Invoice Type',
            'Account_No' => 'Account No',
            'Account_Name' => 'Account Name',
            'Invoice_Subject' => 'Invoice Subject',
            'Faktur_No' => 'Faktur No',
            'Faktur_Date' => 'Faktur Date',
            'Num_Proforma' => 'Num Proforma',
            'Discount' => 'Discount',
            'Gross_Val' => 'Gross Val',
            'Discount_Val' => 'Discount Val',
            'Other_Val' => 'Other Val',
            'Subtotal' => 'Subtotal',
            'PPN' => 'Ppn',
            'PPNBM' => 'Ppnbm',
            'Materai' => 'Materai',
            'Total' => 'Total',
            'Status' => 'Status',
            'Note' => 'Note',
            'AR_No' => 'Ar No',
            'AR_Status' => 'Ar Status',
            'Created_By' => 'Created By',
            'Created_Date' => 'Created Date',
            'TTD_By' => 'Ttd By',
            'Materai_Cust' => 'Materai Cust',
            'Invoice_Category' => 'Invoice Category',
            'Manual' => 'Manual',
            'Manual_Proforma_Updated' => 'Manual Proforma Updated',
            'Currency_Symbol' => 'Currency Symbol',
            'Currency_Value' => 'Currency Value',
            'Currency_BI' => 'Currency Bi',
            'Stamp_Int' => 'Stamp Int',
            'Branch_Flag' => 'Branch Flag',
            'Branch_Acc' => 'Branch Acc',
            'Branch_Inv' => 'Branch Inv',
            'Branch_Closed_Status' => 'Branch Closed Status',
            'Last_Inv_No' => 'Last Inv No',
            'CM_Ref' => 'Cm Ref',
            'Last_Invoice_Value' => 'Last Invoice Value',
            'Invoice_Changes' => 'Invoice Changes',
            'Changes_By' => 'Changes By',
            'CM_Report' => 'Cm Report',
            'Inv_Dedicated' => 'Inv Dedicated',
            'Inv_Dedicated_Acc' => 'Inv Dedicated Acc',
            'Delivery_To_CC' => 'Delivery To Cc',
            'Delivery_To_CC_Date' => 'Delivery To Cc Date',
            'Delivery_To_CC_By' => 'Delivery To Cc By',
            'Delivery_To_CC_Note' => 'Delivery To Cc Note',
            'News' => 'News',
        ];
    }




}
