<?php
// Array de empleados
$employees = [
    [
        'name' => 'John Doe',
        'department' => 'Sales',
        'years' => 6
    ],
    [
        'name' => 'Jane Smith',
        'department' => 'HR',
        'years' => 4
    ],
    [
        'name' => 'Sam Johnson',
        'department' => 'Sales',
        'years' => 3
    ],
    [
        'name' => 'Emily Davis',
        'department' => 'Sales',
        'years' => 8
    ]
];

// 1. Usar array_filter para seleccionar empleados que trabajen en el departamento de Ventas y que lleven más de 5 años
$filteredEmployees = array_filter($employees, function($employee) {
    return $employee['department'] == 'Sales' && $employee['years'] > 5;
});

// 2. Mostrar el nombre del empleado y los años que lleva trabajando
foreach ($filteredEmployees as $employee) {
    echo "Empleado: " . $employee['name'] . "<br>";
    echo "Años de servicio: " . $employee['years'] . " años<br>";
    echo "---------------------<br>";
}