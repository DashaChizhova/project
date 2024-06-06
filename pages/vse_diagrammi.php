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
            <div class="title">Железный кулак</div>
            <div class="shesterenka_img"><a href="#"><img src="../img/shesterenka.svg" alt=""></a></div>
            <div class="div_date"><text class="date_text">Период C</text><input type="date" name="start_date"></div> 
            <div class="probel"></div>
            <div class="div_date"><text class="date_text">Период ПО</text><input type="date" name="end_date"></div>  
            <div class="div_company">Компания<select class="company_select"></select></div>  
        </div>

        <div class="main">
            <a href="#" class="diagramma_link" class="diagramma_link"><div class="diagramma_div">
                <div class="diagramma_title">Дебиторская задолженность</div>
                <div class="diagramma"><img src="../img/diagramma.png" alt=""></div>
                <div class="diagramma_itog">1 500 000 руб.</div>
            </div></a>
            <a href="#" class="diagramma_link"><div class="diagramma_div">
                <div class="diagramma_title">Дебиторская задолженность</div>
                <div class="diagramma"><img src="../img/diagramma.png" alt=""></div>
                <div class="diagramma_itog">1 500 000 руб.</div>
            </div></a>
            <a href="#" class="diagramma_link"><div class="diagramma_div">
                <div class="diagramma_title">Дебиторская задолженность</div>
                <div class="diagramma"><img src="../img/diagramma.png" alt=""></div>
                <div class="diagramma_itog">1 500 000 руб.</div>
            </div></a>
            <a href="#" class="diagramma_link"><div class="diagramma_div">
                <div class="diagramma_title">Дебиторская задолженность</div>
                <div class="diagramma"><img src="../img/diagramma.png" alt=""></div>
                <div class="diagramma_itog">1 500 000 руб.</div>
            </div></a>
            <a href="#" class="diagramma_link"><div class="diagramma_div">
                <div class="diagramma_title">Дебиторская задолженность</div>
                <div class="diagramma"><img src="../img/diagramma.png" alt=""></div>
                <div class="diagramma_itog">1 500 000 руб.</div>
            </div></a>
            <a href="#" class="diagramma_link"><div class="diagramma_div">
                <div class="diagramma_title">Дебиторская задолженность</div>
                <div class="diagramma"><img src="../img/diagramma.png" alt=""></div>
                <div class="diagramma_itog">1 500 000 руб.</div>
            </div></a>
        </div>
    </div>
</body>
</html>