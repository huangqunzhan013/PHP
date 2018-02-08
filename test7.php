<?php
//工厂模式，其实就是设计这样一个类（工厂类F），该类可以接受一个“参数”，该参数代表某个类名（比如B），然后，这个类F就可以生产出所传过来的这个类名（B）的对象
//工厂类的作用，生产各种不同的类的对象
class A{}
class B{}
class Factory{
    static function GetObject($class_name){
        $obj=new $class_name();
        return $obj;
    }
}
$obj1=Factory::GetObject("A");
$obj2=Factory::GetObject("A");
$obj3=Factory::GetObject("B");
$obj4=Factory::GetObject("B");
echo var_dump($obj1)."<br>";
echo var_dump($obj2)."<br>";
echo var_dump($obj3)."<br>";
echo var_dump($obj4)."<br>";

//单例模式，有的类，他只要new出“一个对象”，就足以完成该类的设计目标，如果设计一个类，让该类就“只能得到一个对应对象”,此时这个类称为单例类，new出来的对象称为“单例对象”
class Single{
    public $p1=1;//测试数据
    //实现单例模式三部曲
    //1.定义一个私有的静态属性
    private static $s=null;//用于装一个对象
    //2.私有化构造方法，不让外界new对象
    private function __construct()
    {
        
    }
    //3.给外界提供一个静态方法，让它从这个方法来获得一个对象
         static function GetOne(){
            if(empty(self::$s)){//没有new过
                    self::$s=new self();//new一个，并放进去
                    return self::$s;
            }else{
                    return self::$s;
                    //返回之前的
                        }
        }
}
$obj1=Single::GetOne();
$obj2=Single::GetOne();
echo var_dump($obj1)."<br>";
echo var_dump($obj2)."<br>";
$obj1->p1=11;
echo var_dump($obj1)."<br>";
echo var_dump($obj2)."<br>";
$obj2->p1=22;
echo var_dump($obj1)."<br>";
echo var_dump($obj2)."<br>";