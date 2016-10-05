<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "{{%users}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $email
 * @property string $password
 * @property integer $authKey
 * @property integer $accessToken
 *
 * @property Project[] $projects
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%users}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'email', 'password', 'authKey', 'accessToken'], 'required'],
            [['authKey', 'accessToken'], 'integer'],
            [['name', 'surname', 'email', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя пользователя',
            'surname' => 'Фамилия пользователя',
            'email' => 'Почта\\логин пользователя',
            'password' => 'Пароль пользователя',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['user_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return UsersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsersQuery(get_called_class());
    }
}
