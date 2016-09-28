<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%users}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $email
 * @property string $password
 * @property integer $category
 * @property integer $authKey
 * @property integer $accessToken
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
            [['name', 'surname', 'email', 'password', 'category', 'authKey', 'accessToken'], 'required'],
            [['category', 'authKey', 'accessToken'], 'integer'],
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
            'category' => 'Категория пользователя',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        ];
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
