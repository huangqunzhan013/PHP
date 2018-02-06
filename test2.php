<?php
class Person{
    public $name;
    public $age;
    public function __construct($iname,$iage)
    {
        $this->name=$iname;
        $this->age=$iage;
    }
    public function __destruct()
    {
        echo $this->name."销毁资源.<br>";
    }
}
//最先创建的对象最慢销毁
$p1=new Person("张三", 20);
$p4=$p1;
$p1=null;//最先调用，对象为空，回收堆区空间
$p2=new Person("李四", 30);
$p3=new Person("赵五", 40);