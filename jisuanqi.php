<?php
require_once 'OperService.php';
if (isset($_REQUEST['num1'])){
    $num1=$_REQUEST['num1'];
}
if (isset($_REQUEST['num2'])){
    $num2=$_REQUEST['num2'];
}
if (isset($_REQUEST['oper'])){
    $oper=$_REQUEST['oper'];
}

$operService=new OperService();
echo $operService->getResult($num1, $num2, $oper);