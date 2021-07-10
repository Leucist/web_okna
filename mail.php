<?php

$window = $_POST['window'];
$height = $_POST['height'];
$width = $_POST['width'];
$phone = $_POST['phone_number'];

$window = htmlspecialchars($window);
$height = htmlspecialchars($height);
$width = htmlspecialchars($width);
$phone = htmlspecialchars($phone);

$window = urldecode($window);
$height = urldecode($height);
$width = urldecode($width);
$phone = urldecode($phone);

$window = trim($window);
$height = trim($height);
$width = trim($width);
$phone = trim($phone);

$message = "<html><head><style type='text/css'>body {background: #fafafa;font-family: 'Montserrat', sans-serif;}.sizeblock {display: block;position: relative;margin-left: 30px;}p {color: #222;font-size: 16px;}</style></head>
<body><p><strong>Тип окна:</strong> " . $window . "</p><p><strong>Размеры окна:</strong></p><div class='sizeblock'><p>Высота: " . $height . "мм</p><p>Ширина: " . $width . "мм</p></div><br /><p><strong>Номер телефона:</strong> +" . $phone . "</p></body></html>";
$message = wordwrap($message, 70, "\r\n");


if (mail("svoiopt@mail.ru",
        "Рассчет стоимости",
        $message,
        "From: no-reply@oknavit.ru \r\n"
        ."Content-type: text/html; charset=utf-8\r\n"
        ."X-Mailer: PHP mail script")){
    echo '<script>alert("Спасибо, форма успешно отправлена");document.location="index.html"</script>';
}
else {
    echo '<script>alert("Ошибка. Форма не отправлена")</script>';
}

?>