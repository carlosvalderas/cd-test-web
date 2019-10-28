<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
        private $_id;
        private $_rol;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		/*$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);*/
                
                $usuario = Login::model()->findByAttributes(array('id_rut'=>$this->username));
                
                
                
                
		if($usuario==null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif (!CPasswordHelper::verifyPassword ($this->password, $usuario->pass)){
                        $this->errorCode=self::ERROR_PASSWORD_INVALID;
                }
		else{
			$this->errorCode=self::ERROR_NONE;
                        $this->_id = $usuario->id_rut;
                        $this->_rol = $usuario->cargo;
                }
		return !$this->errorCode;
	}
}