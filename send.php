<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $topic = trim($_POST['topic']);
    $message = trim($_POST['message']);

    // Проверяем, что поля не пустые
    if ($name === "" || $email === "" || $message === "") {
        echo "Пожалуйста, заполните все поля.";
        exit;
    }

    // Куда отправлять
    $to = "nicolasfr74@hotmail.com"; 
    $subject = "Сообщение с сайта: $topic";

    // Текст письма
    $body = "Имя: $name\nEmail: $email\nТема: $topic\n\nСообщение:\n$message";

    // Заголовки письма
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Отправка
    if (mail($to, $subject, $body, $headers)) {
        echo "Сообщение успешно отправлено!";
    } else {
        echo "Ошибка при отправке. Попробуйте позже.";
    }
}
?>