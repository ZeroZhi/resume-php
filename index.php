<?php
$A["Zilin"]["name"]="Жилин Евгений Юрьевич";
$A["Zilin"]["age"]="21 окт 1983 (31год)";
$A["Zilin"]["email"]="zekazilin@gmail.com";
$A["Zilin"]["region"]="Харьков";
$A["Zilin"]["telephone"]="+38(093)140 92 87";

$opitraboti = array (
  array (
    "Должность" => "Оператор видеонаблюдения",
    "Организация" => "casino 'COLISEUM', 'Аргус'",
    "Стаж" => "мар 2008 - июн 2013 (5 лет 4 мес)"
    ),
  array (
    "Должность" => "Оператор цифровой фотолаборатории",
    "Организация" => "'Royal Foto Center'",
    "Стаж" => "июл 2002 - май 2007 (4 года 11 мес)"
    ),
  );
?>
<html>
  <head>
    <title>Резюме</title>
    <link href="style/bootstrap.min.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">
  </head>
  <body>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <img src="img/f11.jpg" align="right" width="120" border="0">
    <h3><?php echo $A["Zilin"]["name"]."<br>";?></h3>
     <table margin="50">
       <tr>
         <td height="15" width="150">Дата рождения:</td>
         <td><?php echo $A["Zilin"]["age"]."<br>";?></td>
       </tr>
       <tr>
         <td height="15">Регион:</td>
         <td><?php echo $A["Zilin"]["region"]."<br>";?></td>
       </tr>
       <tr>
         <td height="15">Телефон(ы):</td>
         <td><?php echo $A["Zilin"]["telephone"]."<br>";?></td>
       </tr>
       <tr>
         <td height="15">E-mail:</td>
         <td><a href="mailto:zekazilin@gmail.com"><?php echo $A["Zilin"]["email"]."<br>";?></a></td>
       </tr>
     </table>
       <br><br><br>
   <h1><center>Intern PHP</center></h1>
     <br><br><br>
   <font size="+2" color="#003366">Образование</font>
     <hr>
       <ul><li><font size="+1">Среднее</font></li></ul>
        <br><br><br>
         <font size="+2" color="#003366">Ключевая информация</font>
     <hr>
       <ul><li><font size="+1">Ответственность, пунктуальность.</font></li></ul>
        <br><br><br>
   <font size="+2" color="#003366">Опыт работы</font>
     <hr>
         <ul><li><font size="+1"><?php echo $opitraboti[0]["Должность"] . "<br/>";?></font>
            <?php echo $opitraboti[0]["Стаж"] . "<br/>";?>
                 <font color="#333333"><b><?php echo $opitraboti[0]["Организация"] . "<br/>";?></b></font>
                   <font size="-1" color="#999999">Охрана и Безопасность</font></li>
                    <br><br>
             <li><font size="+1"><?php echo $opitraboti[1]["Должность"] . "<br/>";?></font>
               <?php echo $opitraboti[1]["Стаж"] . "<br/>";?>
                   <font color="#333333"><b><?php echo $opitraboti[1]["Организация"] . "<br/>";?></b></font>
                     <font size="-1" color="#999999">Промышленность и Производство</font></li></ul>
                      <br><br><br>
   <font size="+2" color="#003366">Курсы, тренинги, сертификаты</font>
     <hr>
         <ul><li><font size="+1" color="#333333">Курсы PHP</font>
           <br>
            <font size="-1" color="#999999">Год окончания 2015</font>
              <br>
                <b>В процессе обучения.</b></li></ul>
                  <br><br><br>
   <font size="+2" color="#003366">Дополнительная информация</font>
     <hr>
         <ul><li><font size="+1" color="#333333">Водительское удостоверение</font>
           <br>
            B.C.</li>
              <br><br>
   <li><font size="+1" color="#333333">Увлечения и интересы</font>
     <br>
        Велосипед, бильярд, физ-ра.</li></ul>
