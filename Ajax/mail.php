<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["fio"]!='' && $_POST["email"]!=''&& $_POST["phone"]!='') { // Проверяем, что запрос пришел методом POST
    $fio = $_POST["fio"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $to = "your-email@example.com"; // Адрес, на который должно прийти письмо

    $subject = "Новый заказ"; // Тема письма

    // Сообщение, которое придет на почту
    $message = "Имя: ".$fio."\n"
        ."Email: ".$email."\n"
        ."Телефон: ".$phone;

    // Для отправки HTML-письма должен быть установлен заголовок Content-type
    $headers = "Content-type: text/plain; charset=UTF-8\r\n";
    $headers .= "From: your-email@example.com\r\n";

    // Отправляем письмо функцией mail()
    if(mail($to, $subject, $message, $headers)) {
        echo "Спасибо за заказ! Мы свяжемся с вами в ближайшее время.";
    } else {
        echo "Ошибка отправки заказа. Пожалуйста, повторите попытку позже.";
    }

} else {
    echo "Данные для отправки не были получены.";
}
?>