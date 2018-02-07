<?php
class enterSchool{
    public $name;
    public static $nums=0;
    public static $fee;
    public function __construct($iname)
    {
        $this->name=$iname;
    }
    public static function getStudent()
    {
       self::$nums+=1;
    }
    public static function numsFee($ifee){
        self::$fee+=$ifee;
    }
    public static function getNumsFee()
    {
        return self::$fee;
    }
}
$e=new enterSchool("张三");
echo $e->getStudent();
echo $e->numsFee(500);
$e=new enterSchool("李四");
echo $e->getStudent();
echo $e->numsFee(300);
echo "总费用:".$e->getNumsFee()."<br>";
echo "总人数:".enterSchool::$nums."<br>";
class Person{
    public $name;
    protected  $age;//protect本类和子类可访问，
    private $salary;//本类可访问
    public function __construct($iname,$iage,$isalary)
    {
        $this->name=$iname;
        $this->age=$iage;
        $this->salary=$isalary;
    }
    public function showInfo()
    {
        echo "姓名：".$this->name."<br>";
        echo "年龄：".$this->age."<br>";
        echo "工资：".$this->salary."<br>";
    }
    public function getSalary($iname,$pass)
    {
        if ($iname=="黄" && $pass=="123")
        {
            return $this->salary;
        }else {
            echo "无法查看<br>";
        }    
    }
    public function setAge($iage)
    {
        if($iage<1||$iage>120){
            echo "年龄范围有误<br>";
        }else {
            $this->age=$iage;
        }
    }
    public function getAge(){
        return $this->age;
    }
    
}
$p1=new Person("张三",25,10000);
//echo $p1->name;
//echo $p1->showInfo();
echo $p1->getSalary("黄","111");
echo $p1->setAge(150);
echo $p1->getAge();
?>