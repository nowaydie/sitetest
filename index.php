<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Travel Form Test</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--adding css files-->
    <link rel="stylesheet" type="text/css" href="./reset.css">
    <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker3.standalone.css">
    <link rel="stylesheet" type="text/css" href="./style.css?v_1207">
    <!--adding js files-->
    <script src="./jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-dateFormat/1.0/jquery.dateFormat.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="travel.css">
    <script src="./jquery.twidget.js?v_1207"></script>

    <!--adding google font-->
    <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,300italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

</head>
<body style="margin: 0;background: #ffffff">
<br><br>
<!-- <p><b>Example of avia search form on Russian</b></p> -->
<br><br>
<div class="twidget-container" id="twidget"></div>
<br><br>
<script>
        $('#twidget').twidget({
            locale: 'ru',
            marker: 78606,
            type: 'avia'
        });
</script>
<div class="ajax_form">
    
</div>
<!-- <div class="tickets">
    <div class="travel-info">
        <div class="departure">
            <div class="companyImg">
                <img src="assets/avia.jpg" alt="" srcset="">
            </div>
            <div class="timeDeparture">
            <div class="time">
                <p>18:35</p>
            </div>
            <div class="city">
                <p>Москва</p>
            </div>
        </div>
        </div>
        <div class="arrival">
            <div class="time">
                <p>23:35</p>
            </div>
            <div class="city">
                <p>Стамбул</p>
            </div>
        </div>
    </div>
    <div class="times">
        <div class="coltimes">
            <p>5 часов в пути</p>
        </div>
        <div class="datetimes">
            <div class="dateDeparture">
                <p class="date">12 нояб</p>
            </div>
            <div class="arrow">
                <img src="assets/arrow.png" alt="">
                <div class="hz">
                    <p>VKO</p>
                    <p class="type">прямой</p>
                    <p>IST</p>
                </div>
            </div>
            <div class="dateDeparture">
                <p class="date">12 нояб</p>
            </div>
        </div>
    </div>
    <div class="priceBlock">
        <div class="price">
            <p class="cena">8 219 <span>₽</span></p>
            <p class="onetext">цена за 1 пассажира </p>
        </div>
        <button type="submit">Купить</button>
    </div>

</div> -->
<script src="js/search.js"></script>
</body>
</html>
