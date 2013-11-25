<?php
/**
 * Created by JetBrains PhpStorm.
 * User: szombat
 * Date: 24/11/13
 * Time: 00:34
 * To change this template use File | Settings | File Templates.
 */

class User {
    protected $id;
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $age;
    protected $gender;
    private $password;

    function User($f,$l,$e,$a,$g,$p){
        $this->firstname = $f;
        $this->lastname = $l;
        $this->email = $e;
        $this->age = $a;
        $this->gender = $g;
        $this->password = $p;
    }
}