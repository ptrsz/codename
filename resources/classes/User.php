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
    protected $name;
    protected $age;
    protected $gender;
    private $password;

    function User($n,$a,$g,$p){
        $this->name = $n;
        $this->age = $a;
        $this->gender = $g;
        $this->password = $p;
    }
}