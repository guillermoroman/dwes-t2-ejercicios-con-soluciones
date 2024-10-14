<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include("Employee.php");
include("Salesman.php");

$paco = new Employee("Paco Rodríguez", 2000, "22/03/2021");
$ana = new Salesman("Ana Santana", 1500, "22/03/2023", 20);

$salaryPaco = $paco->calculateSalary();
echo "<p>El salario de Paco es $salaryPaco</p>";

$ana->sell(20000);
$salaryAna = $ana->calculateSalary();
echo "<p>El salario de Ana es $salaryAna</p>";
?>
</body>
</html>
