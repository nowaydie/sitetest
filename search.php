<?php
include("classes/db.php");
$departure = $_POST["departure"];
$arrival= $_POST["arrival"];

$dat = new Db;
$search = $dat->dbf("SELECT * FROM `tickets` WHERE departure='$departure' AND arrival = '$arrival'");
while($myrow_c = mysqli_fetch_array($search)){
    $idtickets = $myrow_c['idClothes'];
    $departure = $myrow_c['departure'];
    $arrival= $myrow_c['arrival'];
    $datedep = $myrow_c['dateDeparture'];
    $datearr= $myrow_c['dateArrival'];
    $price = $myrow_c['price'];
    $places = $myrow_c['places'];
    $timedep = $myrow_c['timeDeparture'];
    $timearr = $myrow_c['timeArravel'];
    echo"
    <div class='tickets'>
    <div class='travel-info'>
        <div class='departure'>
            <div class='companyImg'>
                <img src='assets/avia.jpg' alt='' srcset=''>
            </div>
            <div class='timeDeparture'>
            <div class='time'>
                <p>$timedep</p>
            </div>
            <div class='city'>
                <p>$departure</p>
            </div>
        </div>
        </div>
        <div class='arrival'>
            <div class='time'>
                <p>$timearr</p>
            </div>
            <div class='city'>
                <p>$arrival</p>
            </div>
        </div>
    </div>
    <div class='times'>
        <div class='coltimes'>
            <p>$timedep часов в пути</p>
        </div>
        <div class='datetimes'>
            <div class='dateDeparture'>
                <p class='date'>$datedep</p>
            </div>
            <div class='arrow'>
                <img src='assets/arrow.png' alt=''>
                <div class='hz'>
                    <p>VKO</p>
                    <p class='type'>прямой</p>
                    <p>IST</p>
                </div>
            </div>
            <div class='dateDeparture'>
                <p class='date'>$datearr</p>
            </div>
        </div>
    </div>
    <div class='priceBlock'>
        <div class='price'>
            <p class='cena'>$price <span>₽</span></p>
            <p class='onetext'>цена за 1 пассажира </p>
        </div>
        <button type='submit'>Купить</button>
    </div>

</div>
    ";
}

?>