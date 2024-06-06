<?php
 include('../include/db_action.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<body>
        <div class="container">
            <div class="under_header">
            <div class="nazad_btn"><img src="../img/Back.svg" class="clear_img" alt="">Назад</div>
            <div class="title">Дебиторская задолженность</div>
            <div class="shesterenka_img" style="visibility: hidden;"><a href="#"><img src="../img/shesterenka.svg" alt=""></a></div>
            <div class="div_date" style="visibility: hidden;"><text class="date_text">Период C</text><input type="date" name="start_date"></div> 
            <div class="probel"></div>
            <div class="div_date" style="visibility: hidden;"><text class="date_text">Период ПО</text><input type="date" name="end_date"></div>  
            <div class="div_company">Компания<select class="company_select"></select></div>  
        </div>

        <div class="diagramma_main">
            <div class="info_block">
                <div class="diagramma_block">
                    <div class="diagramma"></div>
                    <div class="nastroiki">
                        <div class="row">
                            <div class="div_date">Период С<br> <input type="date" name="start_date"></div> 
                            <div class="tire tire_low"></div>
                            <div class="div_date">Период ПО <br><input type="date" name="end_date"></div>  
                        </div>
                        <div  class="row">
                            <div ><input class="search_btn" class="search_btn" type="submit" value="Поиск"></div>  
                            <div class="clear_btn"><a href="#">Очистить <img class="clear_img" src="../img/lastik.svg" alt=""></a></div>  
                        </div>
                    </div>
                </div>
                <div class="stick"></div>
                <div class="pokazateli_block">
                    <div class="scrollable_content">
                        <div class="pokazateli_title">История показателя дебиторской задолженности</div><br>
                        <div class="pokazateli_row row">
                            <div class="number"></div>
                            <div class="pokazatel_date">Дата <br><input type="text" ></div>  
                            <div class="pokazatel">Показатель<br><input type="text" ></div>
                            <div class="pokazatel_delete"><a href="#"><img src="../img/Plus Math.svg" alt=""></a></div>
                       </div>
                        <div class="pokazateli_row row">
                            <div class="number">#23</div>
                            <div class="pokazatel_date">Дата<br><input type="date" name="end_date"></div>  
                            <div class="pokazatel">Показатель<br><input type="text" name="end_date"></div>
                            <div class="pokazatel_delete"><a href="#"><img src="../img/Remove.svg" alt=""></a></div>
                       </div>
                       <div class="pokazateli_row row">
                        <div class="number">#23</div>
                        <div class="pokazatel_date">Дата<br><input type="date" name="end_date"></div>  
                        <div class="pokazatel">Показатель<br><input type="text" name="end_date"></div>
                        <div class="pokazatel_delete"><a href="#"><img src="../img/Remove.svg" alt=""></a></div>
                   </div>
                   <div class="pokazateli_row row">
                    <div class="number">#23</div>
                    <div class="pokazatel_date">Дата<br><input type="date" name="end_date"></div>  
                    <div class="pokazatel">Показатель<br><input type="text" name="end_date"></div>
                    <div class="pokazatel_delete"><a href="#"><img src="../img/Remove.svg" alt=""></a></div>
               </div>
               <div class="pokazateli_row row">
                <div class="number">#23</div>
                <div class="pokazatel_date">Дата<br><input type="date" name="end_date"></div>  
                <div class="pokazatel">Показатель<br><input type="text" name="end_date"></div>
                <div class="pokazatel_delete"><a href="#"><img src="../img/Remove.svg" alt=""></a></div>
           </div>                        <div class="pokazateli_row row">
            <div class="number">#23</div>
            <div class="pokazatel_date">Дата<br><input type="date" name="end_date"></div>  
            <div class="pokazatel">Показатель<br><input type="text" name="end_date"></div>
            <div class="pokazatel_delete"><a href="#"><img src="../img/Remove.svg" alt=""></a></div>
       </div>
                    </div>
                </div>
            </div>
           <div class="grafik_block"></div>
        </div>
    </div>
</body>
</html>