<?php

/*****  ЧТОБЫ КОД ЗАРАБОТАЛ, напишите новый пароль вместо YOUR_PASS_HERE и УДАЛИТЕ ЭТУ и предпоследнюю строчку


if(isset($_POST['phppublic']) and $_POST['name2']=="YOUR_PASS_HERE") {
$header = array(
    "MIME-Version: 1.0",
    "Content-Type: text/html;charset=utf-8"
);
       $mess = $_POST['client_comments2']; 
$mess=get_magic_quotes_gpc()?stripslashes($mess):$mess;
      

 $file=fopen("../heeg.html", "w");
fwrite ($file, $mess);
fclose($file);

        echo 'Ваш магазин опубликован.'; 




	
}else{echo 'Произошла ошибка при публикации. Проверьте пароль'; }


ЭТУ СТРОЧКУ НУЖНО УДАЛИТЬ *********/
?>


