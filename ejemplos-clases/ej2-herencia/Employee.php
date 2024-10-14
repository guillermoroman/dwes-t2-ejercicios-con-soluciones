<?php
class Employee{
    private $name;
    protected $salary;
    private $joinDate;
    private $endDate;

    public function __construct($name, $salary, $joinDate){
        $this->name = $name;
        $this->salary = $salary;
        $this->joinDate = $joinDate;
    }

    public function endContract($date){
        $this->endDate = $date;
        $this->salary = 0;
    }

    public function calculateSalary(): float{
        return $this->salary;
    }
}
