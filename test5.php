<?php
class A{
    private $n1;
    private $n2;
    private $n3;
    //__set()设置所有的属性，参数为键、值
    public function __set($pro_name,$pro_val)
    {
        $this->pro_name=$pro_val;
    }
    //__get()获取所有属性的值
    public function __get($pro_name)
    {
        if (isset($pro_name)){
            return $this->pro_name;
        }else {
            return null;
        }
    }
}
$a1=new A();
$a1->n1="hello world";
echo $a1->n1;

class Stu{
    public $name;
    protected $age;
    protected $grade;
    public function showInfo()
    {
        echo $this->name;
    }
}
class Pupil extends Stu{
    public function tesing(){
        echo "小学生考试";
    }
}
class Graduate extends Stu{
    public function tesing(){
        echo "研究生考试";
    }
}
$stu1=new Pupil();
$stu1->name="小明";
$stu1->tesing();
$stu1->showInfo();
