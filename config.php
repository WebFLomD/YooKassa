<?php 

const SHOP_ID = 'YOUR_SHOP_ID'; # <--- Вставьте ваш ID
const API_KEY = 'YOUR_API_KEY'; # <--- Вставьте ваш API ключ
const SUCCESS_URL = 'https://your_success_url/success.php'; # <--- Вместо "your_success_url" укажите вашу

$db = [
    'host' => 'DB_HOST', # <--- Хост БД (Может быть localhost)
    'username' => 'DB_USERNAME', # <--- Логин для входа в БД
    'password' => 'DB_PASSWORD', # <--- Пароль для входа в БД
    'dbname' => 'DB_NAME', # <--- Имя БД
    'charset' => 'utf8md4',
    'options' => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ],
];

$dsn = "mysql:host=" . $db['host'] . ";dbname=" . $db['dbname'] . ";charset=utf8";
$pdo = new PDO($dsn, $db['username'], $db['password'], $db['options']);

$products = [
    1 => [
        'title' => 'Product 1',
        'price' => 1000,
    ],
    2 => [
        'title' => 'Product 2',
        'price' => 2000,
    ],
    3 => [
        'title' => 'Product 3',
        'price' => 3000,
    ],
    4 => [
        'title' => 'Product 4',
        'price' => 4000,
    ],
];