<?php
include "../includes/header.php";
include "../includes/Hamburger.php";
?>
<main>
    <div class="col-12">        
        <div class="row col-12">
            <h1 style="position:absolute; margin-top: 30%; margin-left: 15%;" class="guardian-tekst2"><strong>Intercultureel</strong></h1>
            <h1 style="position:absolute; margin-top: 37%; margin-left: 15%;" class="guardian-tekst2"><strong><i>Rob/Bohr</i></strong></h1>
            <div class="col-8 d-flex justify-content-center align-items-center">
                <img id="BohrImage" class="raeve"  src="<?= ROOT ?>images/bohr.png" style=" margin-top: 200%;">
            </div>
            <div class="col-4">
                    <img style="margin-left: 105%;" class="banner" src="<?= ROOT ?>images/bannerroze.png">
                <div class="card2" style="position: absolute; margin-left: 20%; margin-top: 40%;">
                </div> 
            </div>
            <div style="position: absolute; font-size: 50px; margin-left: 86.5%; margin-top: 120%;">
                <h1 style="margin-left: 20%;" class="guardian-tekst2"><i>Dit is Bohr</i></h1>
                <p class="mt-5" style="font-size: 41px;">
                    student Leidinggevende travel <br> 
                    en hospitality. Tijdens de lunchpauze<br> 
                    op school ziet hij dat een klasgenoot <br> 
                    wordt gepest vanwege zijn Aziatische<br> 
                    afkomst.  
                </p>
                <p style="font-size: 41px;">
                    Rob heeft een hekel aan <br> 
                    discriminatie en buitensluiten hij komt <br> 
                    daarom in actie. Wanneer Rob de <br>
                    pestkop aan wil spreken op zijn gedrag <br>
                    voelt Rob een krachtig gevoel in zijn <br> 
                    borst opwellen en ziet hij een fel licht <br> 
                    om zich heen. 
                </p>
                <p style="font-size: 41px;">
                    Wanneer hij de pester <br> 
                    aanraakt bij zijn schouder blijkt Rob <br> 
                    te zijn veranderd in Bohr, een superheld <br> 
                    met ‘teleportatiekrachten'.  Op deze <br> 
                    manier neemt hij de pestkop mee naar <br> 
                    een andere cultuur en kan zo laten zien <br> 
                    hoe mooi en interessant andere culturen<br> 
                    zijn. Bohr laat de pester een tijd achter in <br> 
                    Japan. Daarna teleporteert Bohr de <br> 
                    jongen terug. Na deze ervaring blijkt hij <br> 
                    meer begrip te hebben voor mensen <br>
                    met een andere culturele achtergrond <br> 
                    dan de zijne.  
                </p>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center">              
            <img onclick="Spinny()"class="rotate heartbeat-img" src="<?= ROOT ?>images/rotate.png" style="margin-right: 35%;">    
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center text-center" style="margin-left: 30%;">
            <a id="helden-link" class="helden-link-pagina" href="helden" style="margin-top: 40%;"><strong>klik hier voor alle helden!</strong></a>
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
    var Image1 = document.getElementById("BohrImage");

    if(Image1.classList.contains("Bohr")) {
        Image1.classList.add("spinny");
        Image1.classList.remove("Bohr");
    setTimeout(() => {
        Image1.src="<?= ROOT ?>images/Bohr.png";
        Image1.classList.remove("spinny");
        Image1.classList.add("spinny2");
    }, 2500);
    } else {
        Image1.classList.add("spinny");
        Image1.classList.add("Bohr");
    setTimeout(() => {
        Image1.src="<?= ROOT ?>images/Rob.png";
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