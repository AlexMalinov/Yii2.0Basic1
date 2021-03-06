<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "NGTU2017".
 *
 * @property integer $ID
 * @property string $Name
 * @property string $Surname
 * @property integer $Password
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'NGTU2017';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'Name', 'Surname', 'Password'], 'required'],
            [['ID', 'Password'], 'integer'],
            [['Name', 'Surname'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Name' => 'Name',
            'Surname' => 'Surname',
            'Password' => 'Password',
        ];
    }
}
