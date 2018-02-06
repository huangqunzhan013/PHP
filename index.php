<?php
class Person{
    public $name;
    public $age;
    //php5
    public function __construct($iname,$iage)
    {
        //$name认为$name是一个新的变量
        //$name=$iname;
        //$age=$iage;
        $this->name=$iname;
        $this->age=$iage;
        //$this代表当前对象，可以理解就是这个对象的地址，哪个对象使用到$this，就是那个对象地址，不能再类外部使用
        //如果程序没有定义构造方法，系统会自动生成一个构造方法，有定义时则覆盖
        //echo $this->name."今年".$this->age."岁";
    }
    /*public function __construct()
    {
        
    }*/
    //php4,与类名一致，两种方法同时存在，调用php5的方法
    /*public function Person()
    {
        echo "ok";
    }*/
}
$p1 = new Person("张三", 20);//实例化的同时自动调用构造函数
echo $p1->name."今年".$p1->age."岁";
$p2 = new Person("李四", 30);
echo $p2->name."今年".$p2->age."岁";
