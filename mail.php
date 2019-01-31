<?php
if(empty($_COOKIE['sendmail']) or $_COOKIE['sendmail']!=$_POST['email']){

    if (isset($_POST['name'])) { $name=$_POST['name']; if ($name =='') { unset($name);} }
    if (isset($_POST['phone'])) { $phone=$_POST['phone']; if ($phone =='') { unset($phone);} }
    if (isset($_POST['city'])) { $city=$_POST['city']; if ($city =='') { unset($city);} }
    if (isset($_POST['time'])) { $time=$_POST['time']; if ($time =='') { unset($time);} }
    if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }

/*имя, телефон, промежуток для звонка, мейл, город*/
/*
$name
$phone
$time
$city
$email
*/
    if (empty($phone) or empty($name) or strlen($phone)<7 or !is_numeric($phone))
    {
        echo("Вы заполнили не все поля! Попробуйте еще раз.");
        exit();
    }

    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $name = trim($name);
    $phone = stripslashes($phone);
    $phone = htmlspecialchars($phone);
    $phone = trim($phone);
    $city = stripslashes($city);
    $city = htmlspecialchars($city);
    $city = trim($city);
    if (isset($city) && !empty($city)) {
        $city = "\n\n<br>Город: ".$city;
    } else {
        unset($city);
    }
    $time = stripslashes($time);
    $time = htmlspecialchars($time);
    $time = trim($time);
    if (isset($time)) {
        $time = "\n\n<br>Удобное время для звонка: ".$time;
    } else {
        unset($time);
    }
    if (isset($email)) {
        $email = "\n\n<br>E-mail: ".$email;
    } else {
        unset($email);
    }
    

if (isset($name) &&  isset($phone)){
    $mail = array(  
        'to' => "martynenko.martynenks@yandex.ru",  
        'subject' => "Заявка по франшизе барбершоп TRUEMAN",  
        'message' => "<html><body>Имя отправителя: ".$name."\n\n<br>Телефон: ".$phone . $email . $city . $time . "</body></html>",  
        'headers' => "MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n"."From: info@trueman.by\r\n");  

    mail($mail['to'], $mail['subject'], $mail['message'], iconv ('utf-8', 'windows-1251', $mail['headers']));
    
/*
    $subject = "Заявка по франшизе кафе Garage";
        $mes = "Имя отправителя: ".$name."\n\nТелефон: ".$phone . $email . $city . $time;
        $mes_tele = "Имя отправителя: ".$name." - Телефон: ".$phone . $city;

        $mail = "martynenko.martynenks@yandex.ru"; //vp@eda.by
        mail($mail,$subject,$mes, 'From: info@cafegarage.by');

        */
        exit();
    }
    else {
        exit();
    }
}

exit();
?>