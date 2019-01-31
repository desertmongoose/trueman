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
    if (isset($time) && !empty($time)) {
        $time = "\n\n<br>Удобное время для звонка: ".$time;
    } else {
        unset($time);
    }
    if (isset($email) && !empty($email)) {
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
        $mes_tele = "Имя отправителя: ".$name." - Телефон: ".$phone." - Город: ".$city;

        $mail = "martynenko.martynenks@yandex.ru"; //  franchsale@gmail.com     vp@eda.by    FRANCHISE@CAFEGARAGE.BY
        mail($mail,$subject,$mes, 'From: admin@garage.by');        

*/
    }
    else {
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>франшиза Trueman</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.fiveth.css">
<link rel="stylesheet" href="../css/owl.carousel.min.css" />
<link rel="stylesheet" href="../css/owl.theme.default.css" />
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto+Condensed:100'>
<link rel="stylesheet" type="text/css" href="../css/main.css"> 
<script src="../js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">  
function showHide(element_id) {
    //Если элемент с id-шником element_id существует
    if (document.getElementById(element_id)) {
        //Записываем ссылку на&nbsp;элемент в&nbsp;переменную obj
        var obj = document.getElementById(element_id);
        //Если css-свойство display не block, то: 
        if (obj.style.display != "block") {
            obj.style.display = "block"; //Показываем элемент
        } else obj.style.display = "none"; //Скрываем элемент
    }
    //Если элемент с id-шником element_id не найден, то выводим сообщение
    else alert("Элемент с id: " + element_id + " не найден!");
}  
function showelem(element_id) {
    //Если элемент с id-шником element_id существует
    if (document.getElementById(element_id)) {
        //Записываем ссылку на&nbsp;элемент в&nbsp;переменную obj
        var obj = document.getElementById(element_id);      
        obj.style.display = "block"; //Показываем элемент       
    }
    //Если элемент с id-шником element_id не найден, то выводим сообщение
    else alert("Элемент с id: " + element_id + " не найден!");
}
function hideelem(element_id)  {
    //Если элемент с id-шником element_id существует
    if (document.getElementById(element_id)) {
        //Записываем ссылку на&nbsp;элемент в&nbsp;переменную obj
        var obj = document.getElementById(element_id);      
        obj.style.display = "none"; //Показываем элемент        
    }
    //Если элемент с id-шником element_id не найден, то выводим сообщение
    else alert("Элемент с id: " + element_id + " не найден!");
}

function writeTextByJS(id, text, speed){

var ele = document.getElementById(id),
    txt = text.join("").split("");

var interval = setInterval(function(){

    if(!txt[0]){

        return clearInterval(interval);
    };

    ele.innerHTML += txt.shift();
}, speed != undefined ? speed : 150);

return false;
};
</script>
</head>
<body>
    <div class="thankswrapper" style="background: url(../img/png/thanks/fon.jpg) no-repeat; background-size:cover;">
        <div class="thankswrapperBody">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <h2>
                            <span class="thanksname"><?php echo $name;?></span>, рады видеть вас в TRUEMAN!
                        </h2>                        
                    </div>
                    <div class="col-xs-12 descript">
                        <p>
                            Мы уже получили ваши данные и в ближайшее рабочее время перезвоним вам.
                        </p>
                        <p>
                            Прямо сейчас посмотрите подробную презентацию нашей франшизы!
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-1 col-sm-3 col-md-4"></div>
                    <div class="col-xs-10 col-sm-6 col-md-4 bluebut">
                        <a href="presentation-trueman.pdf">Посмотреть презентацию</a>
                    </div>
                    <div class="col-xs-1 col-sm-3 col-md-4"></div>
                </div>
                <div class="row">
                    <div class="hidden-xs col-sm-1"></div>
                    <div class="col-xs-12 col-sm-10">
                        <p class="help">
                            Если по каким-то причинам презентация не открывается — напишите нам на e-mail <a href="mailto:barber.trueman@gmail.com">barber.trueman@gmail.com
                        </p>
                    </div>
                    <div class="hidden-xs col-sm-1"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>