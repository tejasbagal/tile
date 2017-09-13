<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Employee".
 *
 * @property integer $empid
 * @property string $name
 * @property string $salary
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'salary'], 'required'],
            [['salary'], 'number'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'empid' => 'Empid',
            'name' => 'Name',
            'salary' => 'Salary',
        ];
    }

    /**
     * @inheritdoc
     * @return EmployeeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EmployeeQuery(get_called_class());
    }
}
