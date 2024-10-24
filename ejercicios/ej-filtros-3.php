<?php
// Array de productos
$products = [
    [
        'name' => 'Laptop',
        'price' => 1000,
        'category' => 'Electronics'
    ],
    [
        'name' => 'T-shirt',
        'price' => 20,
        'category' => 'Clothing'
    ],
    [
        'name' => 'Smartphone',
        'price' => 800,
        'category' => 'Electronics'
    ],
    [
        'name' => 'Coffee Maker',
        'price' => 45,
        'category' => 'Home Appliances'
    ]
];

// 1. Usar array_filter para seleccionar productos cuyo precio sea superior a 50
$filteredProducts = array_filter($products, function($product) {
    return $product['price'] > 50;
});

// 2. Usar array_map para aplicar un descuento del 20% a esos productos
$discountedProducts = array_map(function($product) {
    $product['discounted_price'] = $product['price'] * 0.80;
    return $product;
}, $filteredProducts);

// 3. Mostrar el nombre del producto, su precio original y el precio con descuento
foreach ($discountedProducts as $product) {
    echo "Producto: " . $product['name'] . "<br>";
    echo "Precio original: " . $product['price'] . " unidades<br>";
    echo "Precio con descuento: " . $product['discounted_price'] . " unidades<br>";
    echo "---------------------<br>";
}