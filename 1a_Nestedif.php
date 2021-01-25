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
        if ($this->username($username) == TRUE) {
            if ($this->password($password) == TRUE) {
                    return 'Anda berhasil login';
                } else {
                    return 'Password yang dimasukkan salah';
                }
            } else {
                return 'Username yang dimasukkan salah';
            }
        }
    }

$authentikasi = new LoginAdmin;
$cek = $authentikasi->main('muhammad fadil', '12121999');
echo $cek;