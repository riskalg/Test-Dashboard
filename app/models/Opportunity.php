<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "opportunity".
 *
 * @property int $ID
 * @property string|null $Source_Information
 * @property string|null $Source_Reference
 * @property string|null $Location
 * @property string|null $Task_ID
 * @property string|null $Created_Date
 * @property string|null $Created_By
 * @property string|null $Oppor_Subject
 * @property string|null $Account_No
 * @property string|null $Company_Name
 * @property string|null $Address
 * @property string|null $Street
 * @property string|null $City
 * @property string|null $Industry_Type
 * @property string|null $Type_Activity
 * @property string|null $PIC_Function
 * @property string|null $PIC_Phone
 * @property string|null $Phone
 * @property string|null $Ext
 * @property string|null $Fax
 * @property string|null $Email
 * @property string|null $Reference
 * @property string|null $PIC
 * @property string|null $Note
 * @property float|null $Estimated_Rev
 * @property string|null $Category
 * @property string|null $Sub_Category
 * @property string|null $Priority
 * @property string|null $Status
 * @property string|null $Expected_Closing_Date
 * @property string|null $Type_Object
 * @property int|null $Grade_Status
 * @property string|null $uuid
 * @property int $Posting
 * @property string|null $Posting_By
 * @property string|null $Posting_Date
 */
class Opportunity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'opportunity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Created_Date', 'Expected_Closing_Date', 'Posting_Date'], 'safe'],
            [['Oppor_Subject', 'Note'], 'string'],
            [['Estimated_Rev'], 'number'],
            [['Grade_Status', 'Posting'], 'integer'],
            [['Source_Information', 'Company_Name'], 'string', 'max' => 150],
            [['Source_Reference', 'Reference'], 'string', 'max' => 100],
            [['Location', 'Created_By', 'Account_No', 'Type_Activity', 'PIC_Phone', 'Fax', 'PIC', 'Status', 'Type_Object', 'Posting_By'], 'string', 'max' => 30],
            [['Task_ID', 'City', 'Phone', 'Category'], 'string', 'max' => 40],
            [['Address', 'Street'], 'string', 'max' => 200],
            [['Industry_Type', 'PIC_Function', 'Sub_Category'], 'string', 'max' => 50],
            [['Ext'], 'string', 'max' => 15],
            [['Email'], 'string', 'max' => 255],
            [['Priority'], 'string', 'max' => 20],
            [['uuid'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Source_Information' => 'Source Information',
            'Source_Reference' => 'Source Reference',
            'Location' => 'Location',
            'Task_ID' => 'Task ID',
            'Created_Date' => 'Created Date',
            'Created_By' => 'Created By',
            'Oppor_Subject' => 'Oppor Subject',
            'Account_No' => 'Account No',
            'Company_Name' => 'Company Name',
            'Address' => 'Address',
            'Street' => 'Street',
            'City' => 'City',
            'Industry_Type' => 'Industry Type',
            'Type_Activity' => 'Type Activity',
            'PIC_Function' => 'Pic Function',
            'PIC_Phone' => 'Pic Phone',
            'Phone' => 'Phone',
            'Ext' => 'Ext',
            'Fax' => 'Fax',
            'Email' => 'Email',
            'Reference' => 'Reference',
            'PIC' => 'Pic',
            'Note' => 'Note',
            'Estimated_Rev' => 'Estimated Rev',
            'Category' => 'Category',
            'Sub_Category' => 'Sub Category',
            'Priority' => 'Priority',
            'Status' => 'Status',
            'Expected_Closing_Date' => 'Expected Closing Date',
            'Type_Object' => 'Type Object',
            'Grade_Status' => 'Grade Status',
            'uuid' => 'Uuid',
            'Posting' => 'Posting',
            'Posting_By' => 'Posting By',
            'Posting_Date' => 'Posting Date',
        ];
    }
}
