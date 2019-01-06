<?php

namespace vendor\kouosl\harita\models;

use Yii;

/**
 * This is the model class for table "queries".
 *
 * @property int $num
 * @property string $query
 * @property string $username
 */
class Queries extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'queries';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['query', 'username'], 'required'],
            [['query', 'username'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'num' => 'Num',
            'query' => 'Query',
            'username' => 'Username',
        ];
    }
}
