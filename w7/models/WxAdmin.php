<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wx_admin".
 *
 * @property integer $u_id
 * @property string $u_name
 * @property string $u_pwd
 * @property string $create_time
 */
class WxAdmin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wx_admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_time'], 'safe'],
            [['u_name'], 'string', 'max' => 20],
            [['u_pwd'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'u_id' => 'U ID',
            'u_name' => 'U Name',
            'u_pwd' => 'U Pwd',
            'create_time' => 'Create Time',
        ];
    }
}
