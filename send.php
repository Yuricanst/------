<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $budget = $_POST['budget'];
    $service = $_POST['service'];
    
    // Адрес, на который будет отправлено письмо
    $to = "duvarov_1987@mail.ru";

    // Тема письма
    $subject = "Новая заявка с формы";

    // Формирование тела письма
    $body = "От: $name\n";
    $body .= "Email: $email\n";
    $body .= "Номер телефона: $phone\n";
    $body .= "Услуга: $service\n";
    $body .= "Бюджет: $budget\n";

    // Отправка письма
    $mail_sent = mail($to, $subject, $body);

    // Проверка успешности отправки
     if ($mail_sent) {
        header("Location: thank_you.html");
    } else {
        echo "Ошибка отправки. Пожалуйста, попробуйте еще раз.";
    }
?>