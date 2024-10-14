<?php
class Salesman extends Employee{
    private $sales;
    private $commission;

    public function __construct($name, $salary, $date, $commission){
        parent::__construct($name, $salary, $date);
        $this->commission = $commission;
        $this->sales = 0;
    }

    public function sell($qty){
        $this->sales += $qty;
    }

    public function calculateSalary(): float {
        return $this->salary + $this->sales * $this->commission / 100;
    }
}