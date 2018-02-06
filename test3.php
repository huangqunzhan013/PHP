<?php
class Child{
    public $name;
    public static $nums=0;
    public function __construct($iname)
    {
        $this->name=$iname;
    }
    public function join_game()
    {
        //类名::$nums /self::$nums
        self::$nums+=1;
        echo $this->name."加入游戏<br>";
    }
}
$p1=new Child("张三");
$p1->join_game();
$p2=new Child("李四");
$p2->join_game();
$p3=new Child("王五");
$p3->join_game();
echo "有".Child::$nums."人";
//类名::$nums
