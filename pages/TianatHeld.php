<?php
include "../includes/header.php";
include "../includes/Hamburger.php";
?>
<main>
    <div class="col-12">        
        <div class="row col-12">
            <h1 style="position:absolute; margin-top: 35%; margin-left: 15%;" class="guardian-tekst2"><strong>Vrede<br>& <br> Mensenrechten</strong></h1>
            <h1 style="position:absolute; margin-top: 62%; margin-left: 15%;" class="guardian-tekst2"><strong><i>Tatiana/Tianat</i></strong></h1>
            <div class="col-8 d-flex justify-content-center align-items-center">
                <img id="TianatImage" src="<?= ROOT ?>images/tianat.png" style=" margin-top: 200%; margin-left: 10%;">
            </div>
            <div class="col-4">
                <img style="margin-left: 105%;" class="banner" src="<?= ROOT ?>images/banneroranje.png">
                <div class="card1" style="position: absolute; margin-left: 20%; margin-top: 40%;">
                </div> 
            </div>
            <div style="position: absolute; font-size: 50px; margin-left: 86.5%; margin-top: 120%;">
                <h1 style="margin-left: 20%;" class="guardian-tekst2"><i>Dit is Tianat</i></h1>
                <p class="mt-5" style="font-size: 41px;">
                    Tatiana komt uit Kiev en leert <br> 
                    voor Allround Constructiewerker. Zij is<br>  
                    statushouder en omdat ze moest <br> 
                    vluchten heeft ze alles achter moeten <br> 
                    laten.
                </p>
                <p style="font-size: 41px;">
                    Sommige van haar vrienden zijn <br> 
                    gevlucht, anderen zijn daar gebleven. De <br>
                    beelden in het nieuws laten zien dat het <br> 
                    wel jaren kan duren voordat alles wat is <br> 
                    verwoest is hersteld. Na de oorlog wil ze <br> 
                    terug naar Oekraïne om te helpen haar <br>
                    moederland weer op te bouwen. <br> 
                </p> 
                <p style="font-size: 41px;">
                    Dit verlangen wordt op een dag zo groot<br> 
                    dat ook zij zichzelf ziet veranderen. Een<br> 
                    licht  van binnen uit straalt en zij wordt <br> 
                    megasterk en zonder moeite kan ze de <br> 
                    zwaarste dingen tillen. Deze superkracht <br> 
                    zal haar in staat stellen te helpen met de wederopbouw. <br> 
                    Tatiana is veranderd in Tianat <br> 
                    die strijd voor vrede en mensenrechten.
                </p> 
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center">              
            <img onclick="Spinny()" class="rotate heartbeat-img" src="<?= ROOT ?>images/rotate.png" style="margin-right: 35%;">    
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center text-center" style="margin-left: 30%;">
            <a id="helden-link" class="helden-link-pagina" href="helden" style="margin-top: 47%;"><strong>klik hier voor alle helden!</strong></a>
        </div>
    </div>
    <style>
        .hidden  {
            display: none;
        }

        .spinny{
            animation: spinY 2.5s ease-in 1s;
        } 
        .spinny2{
            animation: spinY 2.5s ease-out 1.5s;
        } 

        @keyframes spinY {
            0% {
                transform: rotateY(0deg);
            }
            100% {
                transform: rotateY(1800deg);
            }
        }
    </style>
    <script>
        function fadeEffect(element, duration) {
        element.style.opacity = 0;
        let opacity = 0;
        const interval = 10;
        const targetOpacity = 1;

        const fadeIn = setInterval(() => {
            if (opacity >= targetOpacity) {
                clearInterval(fadeIn);
                setTimeout(() => {
                    const fadeOut = setInterval(() => {
                        if (opacity <= 0) {
                            clearInterval(fadeOut);
                        } else {
                            opacity -= 0.1;
                            element.style.opacity = opacity;
                        }
                    }, interval);
                }, duration);
            } else {
                opacity += 0.1;
                element.style.opacity = opacity;
            }
        }, interval);
    }

    const link = document.getElementById('helden-link');
    const duration = 2000; // Duration in milliseconds (3 seconds)

    setInterval(() => {
        fadeEffect(link, duration);
    }, duration * 2);

    function Spinny() {
    var Image1 = document.getElementById("TianatImage");

    if(Image1.classList.contains("Tianat")) {
        Image1.classList.add("spinny");
        Image1.classList.remove("Tianat");
    setTimeout(() => {
        Image1.src="<?= ROOT ?>images/Tianat.png";
        Image1.classList.remove("spinny");
        Image1.classList.add("spinny2");
    }, 2500);
    } else {
        Image1.classList.add("spinny");
        Image1.classList.add("Tianat");
    setTimeout(() => {
        Image1.src="<?= ROOT ?>images/Tatiana.png";
        Image1.classList.remove("spinny");
        Image1.classList.add("spinny2");
    }, 2500);
    }
    setTimeout(() => {
        Image1.classList.remove("spinny2");
    }, 5000);
    
    }
    </script>
</main>
<?php
include "includes/footer.php"
?>