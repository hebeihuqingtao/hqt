<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wx_num".
 *
 * @property integer $w_id
 * @property string $w_name
 * @property string $w_appid
 * @property string $w_serveid
 */
class WxNum extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wx_num';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['w_name'], 'string', 'max' => 200],
            [['w_appid', 'w_serveid'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'w_id' => 'W ID',
            'w_name' => 'W Name',
            'w_appid' => 'W Appid',
            'w_serveid' => 'W Serveid',
        ];
    }
}
