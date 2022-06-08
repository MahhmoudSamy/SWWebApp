<?php
require_once 'UserModel.php';
class LoginModel extends UserModel
{
    public  $title = '';

    public function login()
    {
        $this->dbh->query('SELECT * from admins WHERE email = :email');
        $this->dbh->bind(':email', $this->email);

        $record = $this->dbh->single();
        $hash_pass = $record->password;

        if (password_verify($this->password,  $hash_pass)) {
            return $record;
        } else {
            return false;
        }
    }
}
