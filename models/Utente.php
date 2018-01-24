<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "Utente".
 *
 * @property integer $id_utente
 * @property string $username
 * @property string $password
 * @property string $ruolo
 * @property integer $id_museo
 */
class Utente extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'utente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['ruolo'], 'string'],
            [['id_museo'], 'integer'],
            [['username', 'password'], 'string', 'max' => 255],
            [['username'], 'unique'],
            [['id_museo'], 'exist', 'skipOnError' => true, 'targetClass' => Museo::className(), 'targetAttribute' => ['id_museo' => 'id_museo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_utente' => 'Id Utente',
            'username' => 'Username',
            'password' => 'Password',
            'ruolo' => 'Ruolo',
            'id_museo' => 'Id Museo',
        ];
    }

    /**
     * Finds an identity by the given ID.
     * @param string|int $id the ID to be looked for
     * @return IdentityInterface the identity object that matches the given ID.
     * Null should be returned if such an identity cannot be found
     * or the identity is not in an active state (disabled, deleted, etc.)
     */
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    /**
     * Finds an identity by the given token.
     * @param mixed $token the token to be looked for
     * @param mixed $type the type of the token. The value of this parameter depends on the implementation.
     * For example, [[\yii\filters\auth\HttpBearerAuth]] will set this parameter to be `yii\filters\auth\HttpBearerAuth`.
     * @return IdentityInterface the identity object that matches the given token.
     * Null should be returned if such an identity cannot be found
     * or the identity is not in an active state (disabled, deleted, etc.)
     * @throws Yii\base\NotSupportedException
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new yii\base\NotSupportedException();
    }

    /**
     * Returns an ID that can uniquely identify a user identity.
     * @return string|int an ID that uniquely identifies a user identity.
     */
    public function getId()
    {
        return $this->id_utente;
    }

    /**
     * Returns a key that can be used to check the validity of a given identity ID.
     *
     * The key should be unique for each individual user, and should be persistent
     * so that it can be used to check the validity of the user identity.
     *
     * The space of such keys should be big enough to defeat potential identity attacks.
     *
     * This is required if [[User::enableAutoLogin]] is enabled.
     * @return string a key that is used to check the validity of a given identity ID.
     * @see validateAuthKey()
     */
    public function getAuthKey()
    {
    }

    /**
     * Validates the given auth key.
     *
     * This is required if [[User::enableAutoLogin]] is enabled.
     * @param string $authKey the given auth key
     * @return bool whether the given auth key is valid.
     * @see getAuthKey()
     */
    public function validateAuthKey($authKey)
    {
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMuseo()
    {
        return $this->hasOne(Museo::className(), ['id_museo' => 'id_museo']);
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->ruolo;
    }

    /**
     * @param $username
     * @return null|static
     */
    public static function findByUsername($username)
    {
        return self::findOne(['username'=>$username]);
    }

    /**
     * @param $password
     * @return bool
     */
    public function validatePassword($password)
    {
        return $this->password === sha1($password);
    }
}
