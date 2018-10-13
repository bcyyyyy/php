<?php
/**
 * Created by PhpStorm.
 * User: bcyphp
 * Date: 2018/10/13
 * Time: 下午2:32
 */

class Car
{
    var $color;
    function Car($color="green"){
        $this->color = $color;
    }
    function what_color(){
        return $this->color;
    }
}

$c = new Car();
$c1 = new Car('red');
echo $c -> what_color();
echo "<br>";
echo  $c1 -> what_color();