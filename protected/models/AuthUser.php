<?php

/**
 * This is the model class for table "auth_user".
 *
 * The followings are the available columns in table 'auth_user':
 * @property integer $id
 * @property string $password
 * @property string $last_login
 * @property integer $is_superuser
 * @property string $username
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property integer $is_staff
 * @property integer $is_active
 * @property string $date_joined
 *
 * The followings are the available model relations:
 * @property AuthUserGroups[] $authUserGroups
 * @property AuthUserUserPermissions[] $authUserUserPermissions
 * @property DjangoAdminLog[] $djangoAdminLogs
 */
class AuthUser extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

	protected function afterValidate()
	{
		parent::afterValidate();
		$this->password = $this->encrypt($this->password);
	}

	public function encrypt($value)
	{
		return md5($value);
	}


	public function tableName()
	{
		return 'auth_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('password, last_login, is_superuser, username, first_name, last_name, email, is_staff, is_active, date_joined', 'required'),
			array('is_superuser, is_staff, is_active', 'numerical', 'integerOnly'=>true),
			array('password', 'length', 'max'=>128),
			array('username, first_name, last_name', 'length', 'max'=>30),
			array('email', 'length', 'max'=>75),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, password, last_login, is_superuser, username, first_name, last_name, email, is_staff, is_active, date_joined', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'authUserGroups' => array(self::HAS_MANY, 'AuthUserGroups', 'user_id'),
			'authUserUserPermissions' => array(self::HAS_MANY, 'AuthUserUserPermissions', 'user_id'),
			'djangoAdminLogs' => array(self::HAS_MANY, 'DjangoAdminLog', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'password' => 'Password',
			'last_login' => 'Last Login',
			'is_superuser' => 'Is Superuser',
			'username' => 'Username',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'email' => 'Email',
			'is_staff' => 'Is Staff',
			'is_active' => 'Is Active',
			'date_joined' => 'Date Joined',
		);
	}

	
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('is_superuser',$this->is_superuser);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('is_staff',$this->is_staff);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('date_joined',$this->date_joined,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AuthUser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
