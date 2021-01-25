<?php
class LoginAdmin
{
    function username($username)
    {
        if ($username == 'muhammad fadil') {
            return TRUE;
        }
    }
    function password($password)
    {
        if ($password == '12121999') {
            return TRUE;
        }
    }


    function main($username, $password)
    {
        if ($this->username($username) == false) {
            return 'Username yang dimasukkan salah';
        }
            if ($this->password($password) == false) {
                return 'Password yang dimasukkan salah';
            }
            return 'Anda berhasil login';
        
        }
    }

$authentikasi = new LoginAdmin;
$cek = $authentikasi->main('muhammad fadil', '12121999');
echo $cek;