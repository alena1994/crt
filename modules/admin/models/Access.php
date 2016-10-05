<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "{{%access}}".
 *
 * @property integer $id
 * @property string $type
 * @property string $login
 * @property integer $password
 * @property integer $project_id
 * @property integer $authKey
 * @property integer $accessToken
 *
 * @property Project $project
 */
class Access extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%access}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'login', 'password', 'project_id', 'authKey', 'accessToken'], 'required'],
            [['password', 'project_id', 'authKey', 'accessToken'], 'integer'],
            [['type', 'login'], 'string', 'max' => 255],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'тип доступа',
            'login' => 'Логин для входа в проект',
            'password' => 'Пароль для входа в проект',
            'project_id' => 'id проекта',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }

    /**
     * @inheritdoc
     * @return AccessQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AccessQuery(get_called_class());
    }
}
