<?php
if(isset($_POST['rsubmit'])) {
$header = array(
    "MIME-Version: 1.0",
    "Content-Type: text/html;charset=utf-8"
);





        $title = 'Заказ в магазине посуды Tupper.online'; 

$messtext = " <h3>Спасибо за ваш заказ! Наш менеджер свяжется с Вами в течение часа.</h3> <br><br>";

$table=$_POST['manager_comments'];
$table = str_replace("[", "<tr bgcolor='#FFFFFF'><td>", $table);
$table = str_replace("]", "</td></tr>", $table);
$table = str_replace("|", "</td><td>", $table);

       $mess = $messtext ."\n<b>Номер заказа: </b>" .substr(htmlspecialchars(trim($_POST['order_number'])), 0, 100) ."\n<br><b>Имя: </b><tr></tr>" .substr(htmlspecialchars(trim($_POST['name'])), 0, 100)."\n<br><b>E-mail адрес: </b>" .substr(htmlspecialchars(trim($_POST['email'])), 0, 100)."\n<br><b>телефон: </b>" .substr(htmlspecialchars(trim($_POST['telephone'])), 0, 100)."\n<br><b>адрес доставки: </b>" .substr(htmlspecialchars(trim($_POST['delivery_adress'])), 0, 10000)."\n<br><b>ссылка на заказ: </b>" .substr(htmlspecialchars(trim($_POST['link_for_your_order'])), 0, 10000)."\n<br><b>комментарии: </b>" .substr(htmlspecialchars(trim($_POST['client_comments'])), 0, 10000) ."\n<br><b>Заказ:</b> <br> \n" ."<table border='0' align='left'   cellspacing='1' bgcolor='#000000' >" .$table ."</table>" ; 

      
      $to = $_POST['email'];

      $from=$_POST['shopmail'];

$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
$headers .= "From: Магазин посуды Tupper.online <". $from   . ">\r\n"; 




 

  mail($to, $title, $mess, $headers); 
  mail($from, $title, $mess,  $headers); 
        echo 'Спасибо! Ваш заказ отправлен.'; 




	
}
?>


