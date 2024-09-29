# 💳 Реализация оплаты на сайте ЮKassa
### ✏️ Описание проекта
Недавно я расширил свои знания в области программирования, освоив интеграцию системы оплаты на сайте с использованием PHP и библиотеки YooKassa. Это позволяет реализовать функциональность приема платежей через API YooKassa.

Видеоурок на YouTube: [Прием платежей с YooKassa](https://www.youtube.com/watch?v=ePlsbulSems&t=2090s)

## 🛠️ Стек технологий
- PHP
- MYSQL
- Хостинг [TimeWeb](https://timeweb.com/ru/)

## 📋 Установка (❗ Прочитайте до конца)
Сначала необходимо авторизироваться в ЮKassa ([Прочитайте инструкцию](https://yookassa.ru/docs/support/merchant/payments/implement/test-store))

После авторизации нам интересуют вкладки `Настройки->Магазин (Найдите слово - shopId)` и `Интеграция->Ключи API (Найдите раздел - Секретный ключ)`

Еще нам интересует вкладка `Интеграция->HTTP-уведомления (Найдите раздел - HTTP-уведомления)`, в `URL для уведомлений` вместо `your_success_url` вставьте ваш домен сайта - `https://your_success_url/payment-cd.php`. **Про домен читайте дальше**.

Скачайте проект:
```
git clone https://github.com/WebFLomD/YooKassa-payment.git
```
Затем внутри проекта перекиньте в хостинг TimeWeb. Откройте TimeWeb, создайте там сайт, откройте папку и найдите ваш сайт, которую вы содали и передивайте файл.

После этого соедините домен к сайту. Затем создайте БД и перекиньте файл `yookassa.sql` в MySQL.

Затем заполните поля в файле config.php:
```php
const SHOP_ID = 'YOUR_SHOP_ID'; # <--- Вставьте ваш ID
const API_KEY = 'YOUR_API_KEY'; # <--- Вставьте ваш API ключ
const SUCCESS_URL = 'https://your_success_url/success.php'; # <--- Вместо "your_success_url" укажите вашу, то есть ваш домен

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
```

После этого откройте ваш сайт и пользуйтесь. При нажатии кнопки "Buy" и после заполнение, вас перекинет на страницу оплаты. Выбираете способ оплаты картой **!!! НЕ ВВОДИТЕ СВОИ ДАННЫЕ КАРТЫ !!!**. Пишите это:
```
Номер тестовой карты: 5555 5555 5555 4444
Дату и месяц ставьте на будущее. А CVC подойдут любые числа
```

## ⭐ Полезные информации для реализации
- Беспланый хостинг Timeweb на 10 дней после авторизации - https://timeweb.com/ru/

- Официальный сайт ЮKassa - https://yookassa.ru/
- Для тестирование сайта - https://yookassa.ru/docs/support/merchant/payments/implement/test-store
- Документация - https://yookassa.ru/developers/payment-acceptance/getting-started/quick-start?codeLang=php#create-payment
- Документация GitHub - https://git.yoomoney.ru/projects/SDK/repos/yookassa-sdk-php/browse/README.md

- Видеоурок с YouTube - [Прием платежей с ЮKassa](https://www.youtube.com/watch?v=ePlsbulSems&t=2090s)

## 📃 Примечание
Если вы используете локальные серверы, такие как OpenServer или XAMPP, вместо хостинговых платформ, таких как TimeWeb, интеграция может не работать должным образом.

## 📌 Контакты
Если у вас есть вопросы или предложения, пожалуйста, свяжитесь со мной. Я открыт для обсуждения и всегда рад новым возможностям.

- Email: sashaplay9@gmail.com
- Telegram: @zzakharovv

### Спасибо за внимание!