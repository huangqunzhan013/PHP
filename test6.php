<?php
class Person{
    static $p1=1;
    public $name;
    public $age;
    function __construct($iname,$iage)
    {
        $this->name=$iname;
        $this->age=$iage;
    }
    function ShowInfo()
    {
        echo "姓名：".$this->name."<br>";
        echo "年龄：".$this->age."<br>";
    }
}
class Teacher extends Person{
    public $edu;
    function __construct($iname,$iage,$iedu)
    {
        //$this->name=$name;
        //$this->age=$age;
        parent::__construct($iname, $iage);//parent代表父类对象
        $this->edu=$iedu;
    }
    function ShowInfo()
    {
        parent::ShowInfo();//parent代表父类对象
        echo "学历："."$this->edu"."<br>";
        echo "访问父类静态属性：".parent::$p1."<br>";//parent代表父类
    }
}
$t1=new Teacher("张三",20,"大学");
var_dump($t1);
echo $t1->ShowInfo();