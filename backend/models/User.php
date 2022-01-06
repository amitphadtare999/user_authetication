<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_refresh_tokens".
 *
 * @property int $user_refresh_tokenID
 * @property int $urf_userID
 * @property string $urf_token
 * @property string $urf_ip
 * @property string $urf_user_agent
 * @property string $urf_created UTC
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_refresh_tokens';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['urf_userID', 'urf_token', 'urf_ip', 'urf_user_agent', 'urf_created'], 'required'],
            [['urf_userID'], 'integer'],
            [['urf_created'], 'safe'],
            [['urf_token', 'urf_user_agent'], 'string', 'max' => 1000],
            [['urf_ip'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_refresh_tokenID' => 'User Refresh Token ID',
            'urf_userID' => 'Urf User ID',
            'urf_token' => 'Urf Token',
            'urf_ip' => 'Urf Ip',
            'urf_user_agent' => 'Urf User Agent',
            'urf_created' => 'Urf Created',
        ];
    }
}
