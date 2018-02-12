<?php
require_once 'mysql-tools.php';
$db1=mysqlDBtool::GetDB($conf);
var_dump($db1);
$sql="INSERT INTO `tb_grade`(`id`, `xh`, `proid`, `grade`) VALUES (null,07160717,2,100)";
$result=$db1->exec($sql);
var_dump($result);
$query="select * from tb_grade";
$arr=$db1->getRows($query);
echo "<table border='1'>";
foreach ($arr as $row){
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    echo "<td>{$row['xh']}</td>";
    echo "<td>{$row['proid']}</td>";
    echo "<td>{$row['grade']}</td>";
    echo "</tr>";
}
var_dump($arr);
// $db1->select_database("liuwenqi");
// $sql="select * from user";
// $result=mysql_query($sql);//成功得到资源类型
// var_dump($result);
// $num=mysql_num_rows($result);
// echo "<br>行数为：".$num;
