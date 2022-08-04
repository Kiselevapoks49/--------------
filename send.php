<?php
if(!isset($_POST['fio']) and !isset($_POST['title'])){
    
else {
$fio = $_POST['fio'];
$title = $_POST['title'];
$comment = $_POST['comment'];
$defect = $_POST['defect'];
$opisanie = $_POST['opisanie'];
$energy = $_POST['energy'];
$meh = $_POST['meh'];
$electr = $_POST['electr'];

$fio = htmlspecialchars($fio);
$title = htmlspecialchars($title);
$comment = htmlspecialchars($comment);
$defect = htmlspecialchars($defect);
$opisanie = htmlspecialchars($opisanie);
$energy = htmlspecialchars($energy);
$meh = htmlspecialchars($meh);
$electr = htmlspecialchars($electr);

$fio = urldecode($fio);
$title = urldecode($title);
$comment = urldecode($comment);
$defect = urldecode($defect);
$opisanie = urldecode($opisanie);
$energy = urldecode($energy);
$meh = urldecode($meh);
$electr = urldecode($electr);

$fio = trim($fio);
$title = trim($title);
$comment = trim($comment);
$defect = trim($defect);
$opisanie = trim($opisanie);
$energy = trim($energy);
$meh = trim($meh);
$electr = trim($electr);

echo $fio;
//echo "<br>";
//echo $email;
if (mail("alen05kiseleva@yandex.ru", "Создано новое обращение ", "Заявитель:".$fio.". Тема: ".$title ,"From: example2@mail.ru \r\n"))
 {     echo "Обращение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}
}}?>