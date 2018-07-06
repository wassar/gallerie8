<?php

require('gallerie7.class.php');
require('sellers.php');

if(!$_POST)
    die(header('Location:index.php'));


if(!empty($_POST['search']))
    $gallerie = new Gallerie8('i5',$sellers);

include 'result.php';
