<?php
/*
 * 目标：设计一个“mysql数据库操作类”，要求：
 * 1.设计该类的必要属性
 * 2.可以创建数据库对象的同时并建立数据库的连接（或连接失败的信息）;
 * 2.1.可以在建立连接的同时设定所要连接的数据库和所要使用的连接编码;
 * 2.2.还可以单独设置所需要连接的数据库;
 * 2.3.还可以单独设置所要使用的连接编码;
 * 3.可以断开连接;
 * 4.实现其单例化;
 * 5.该类对象可以调用一个方法，执行”增删改“这种没有返回结果集的语句，可以返回真假数据，真即执行成功；
 * 6.该类对象可以调用一个方法，执行可以返回多行数据的select语句，以二维数组放回结果；
 */
class mysqlDBtool{
    private $link=null;//用于存储连接之后的资源;
    public $host;
    public $port;
    public $user;
    public $pass;
    public $charset;
    public $dbname;
    //单例第一步，设定一个私有静态属性以存储该单利对象;
    private static $instance=null;
    //2.私有构造方法
    //function __construct($conf)
    private function __construct($conf)
    {
        $this->host=$conf['host'] ? $conf['host'] : "localhost";
        $this->port=$conf['port'] ? $conf['port'] : 3306;
        $this->user=$conf['user'] ? $conf['user'] : "root";
        $this->pass=$conf['pass'] ? $conf['pass'] : "";
        $this->charset=$conf['charset'] ? $conf['charset'] : "utf8";
        $this->dbname=$conf['dbname'] ? $conf['dbname'] : "huangqunzhan";
        $this->link=@mysql_connect("$this->host:$this->port","$this->user","$this->pass") or die("数据库连接失败");
        mysql_query("set names $this->charset",$this->link);
        mysql_query("use $this->dbname",$this->link);
    }
    function select_database($db)
    {
        mysql_query("use $db",$this->link);
        $this->dbname=$db;
    }
    function select_charset($charset)
    {
        mysql_query("set names $charset",$this->link);
        $this->charset=$charset;
    }
    function close()
    {
        mysql_close($this->link);
    }
    //3.设定一个静态方法，判断书否需要new一个对象，并返回
    static function GetDB($conf)
    {
        if (empty(self::$instance)){
            self::$instance=new self($conf);
        }else {
            return self::$instance;
        }
    }
}
$conf=array(
    "host"=>"localhost",
    "port"=>"3306",
    "user"=>"root",
    "pass"=>"",
    "charset"=>"utf8",
    "dbname"=>"huangqunzhan"
);
$db=mysqlDBtool::GetDB($conf);
var_dump($db);
//$db->select_database("liuwenqi");
$sql="select * from user";
$result=mysql_query($sql);
var_dump($result);
$num=mysql_num_rows($result);
var_dump($num);
