<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$num = $_GET["fact"];
$fac= 1;
for ($con = 1; $con <= $num; $con++) {
    $fac *= $con;
}
echo $fac;