<?php
/**
 * Created by PhpStorm.
 * User: bcyyyyy
 * Date: 2018/10/14
 * Time: 上午9:33
 */
$name = $_POST['username'];
$p = $_POST['pwd'];
//$s =$_POST['sex'];
//$h = $_POST['hobby'];
//echo "您的用户名是".$name,"密码是".$p;
//echo $s;
//var_dump($h);

if($name=='admin' && $p == '123'){
    echo '恭喜成功登录';
}else{
    echo '用户名或者密码错误';
}