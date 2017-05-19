<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$n1 = $_GET["num1"];
$n2 = $_GET["num2"];
if ($n1 > $n2) {
    echo 'El numero mayor es: '.$n1;
}
else
{
    echo 'El numero mayor es: '.$n2;
}

