<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%projects}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $category
 * @property string $description
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%projects}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'category', 'description'], 'required'],
            [['description'], 'string'],
            [['name', 'category'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название проекта',
            'category' => 'Категория которой доступен проект',
            'description' => 'Описание проекта',
        ];
    }

    /**
     * @inheritdoc
     * @return ProjectsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProjectsQuery(get_called_class());
    }
}
