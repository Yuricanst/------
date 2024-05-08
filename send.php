<?php
// Проверяем, был ли отправлен запрос методом GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Получаем данные из строки запроса
    $name = $_GET['name'] ?? '';
    $email = $_GET['email'] ?? '';
    $phone = $_GET['phone'] ?? '';
    $service = $_GET['service'] ?? '';
    $budget = $_GET['budget'] ?? '';

    // Формируем сообщение
    $message = "ФИО: $name\n";
    $message .= "Email: $email\n";
    $message .= "Номер телефона: $phone\n";
    $message .= "Услуга: $service\n";
    $message .= "Бюджет: $budget\n";

    // Адрес электронной почты, на который будет отправлено сообщение
    $to = "admin@example.com";
    $subject = "Новая заявка с формы";

    // Дополнительные заголовки
    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Отправляем сообщение
    $mail_sent = mail($to, $subject, $message, $headers);

    // Проверяем, было ли успешно отправлено сообщение
    if ($mail_sent) {
        echo "<p>Спасибо за отправку заявки! Мы свяжемся с вами в ближайшее время.</p>";
    } else {
        echo "<p>Ошибка отправки. Пожалуйста, попробуйте еще раз.</p>";
    }
} else {
    // Если запрос не был методом GET, выводим сообщение об ошибке
    echo "<p>Доступ запрещен.</p>";
}
?>