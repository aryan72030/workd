<?php
class employ{
    public $name;
    public $age;
    public $salary;

    function __construct($n,$a,$s)
    {
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;
    }
    function info(){
        echo "<h3>Employee profile</h3>";
        echo "Employee name : ".$this->name."<br>";
        echo "Employee age : ".$this->age."<br>";
        echo "Employee salary : ".$this->salary."<br>";
    }
}
class manage extends employ{
    public $ta=1000;
    public $ph=300;
    public $totalsalary;

     function info(){
        $this->totalsalary=$this->salary+$this->ta+$this->ph;

        echo "<h3>mageger profile</h3>";
        echo "Employee name : ".$this->name."<br>";
        echo "Employee age : ".$this->age."<br>";
        echo "Employee salary : ".$this->totalsalary."<br>";
    }
}
$e1=new manage("aryan",21,50000);
$e2=new employ("yes",23,1000);
$e2->info();
$e1->info();
?>