<?php

namespace vendor\kouosl\harita\models;

use Yii;

/**
 * This is the model class for table "useropts".
 *
 * @property int $id
 * @property int $map_height
 * @property int $map_width
 */
class Useropts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'useropts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['map_height', 'map_width'], 'required'],
            [['map_height', 'map_width'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'map_height' => 'Map Height',
            'map_width' => 'Map Width',
        ];
    }
}
