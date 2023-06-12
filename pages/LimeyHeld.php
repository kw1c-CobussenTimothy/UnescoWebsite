<?php
include "../includes/header.php";
include "../includes/Hamburger.php";
?>
<main>
    <div class="col-12">        
        <div class="row col-12">
            <h1 style="position:absolute; margin-top: 30%; margin-left: 15%;" class="guardian-tekst2"><strong>WereldBurgerschap</strong></h1>
            <h1 style="position:absolute; margin-top: 37%; margin-left: 15%;" class="guardian-tekst2"><strong><i>Emily/Limey</i></strong></h1>
            <div class="col-8 d-flex justify-content-center align-items-center">
                <img id="LimeyImage" src="<?= ROOT ?>images/limey.png" style=" margin-top: 233.5%;">
            </div>
            <div class="col-4">
                <img style="margin-left: 105%;" class="banner" src="<?= ROOT ?>images/bannerblauw.png">
                <div class="card3" style="position: absolute; margin-left: 20%; margin-top: 40%;">
                </div> 
            </div>
            <div style="position: absolute; font-size: 50px; margin-left: 86.5%; margin-top: 120%;">
                <h1 style="margin-left: 20%; color: black;" class="guardian-tekst2"><i>Dit is Limey</i></h1>
                <p class="mt-5" style="font-size: 41px; color: black;">
                Emily zit in het eerste jaar van de<br> 
                koksopleiding. Ze houdt ervan mensen<br> 
                blij te maken met het heerlijkste eten.<br> 
                Ze kookt al vanaf kleins af aan voor haar<br> 
                familie.  
                </p>
                <p style="font-size: 41px; color: black;">
                    Ze waren heel hecht als gezin.<br> 
                    Nu zij en haar broer ouder worden merkt<br> 
                    Emily dat er meer afstand ontstaat in het<br> 
                    gezin.Na de zoveelste ruzie gaat Emily<br> 
                    verdrietig naar haar kamer. Ze zou willen<br> 
                    dat ze met haar kookkunst de ruzies kon<br> 
                    oplossen.
                </p>
                <p style="font-size: 41px; color: black;">
                    Ineens verblindt een fel licht<br> 
                    wat de kamer binnen schijnt, haar zicht<br> 
                    en voelt Emily iets in zichzelf opborrelen. <br>
                    Ze loopt naar de keuken en tovert binnen <br> 
                    2 minuten een feestmaal wat bestaat uit <br> 
                    alle lievelingsgerechten van haar familie. <br> 
                    
                </p>
                <p style="font-size: 41px; color: black;">
                    Haar ouders en broer staan versteld, <br>
                    ze gaan samen aan tafel en onder het<br> 
                    eten praten ze hun meningsverschillen<br> 
                    uit. Als superheld heet ze Limey, degene <br> 
                    die mensen bij elkaar brengt <br>
                    en verbindt waar dat hard nodig is. <br>
                </p>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center">              
            <img onclick="Spinny()" class="rotate heartbeat-img" src="<?= ROOT ?>images/rotate.png" style="margin-right: 35%;">    
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
    var Image1 = document.getElementById("LimeyImage");

    if(Image1.classList.contains("Limey")) {
        Image1.classList.add("spinny");
        Image1.classList.remove("Limey");
    setTimeout(() => {
        Image1.src="<?= ROOT ?>images/limey.png";
        Image1.classList.remove("spinny");
        Image1.classList.add("spinny2");
    }, 2500);
    } else {
        Image1.classList.add("spinny");
        Image1.classList.add("Limey");
    setTimeout(() => {
        Image1.src="<?= ROOT ?>images/emily.png";
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