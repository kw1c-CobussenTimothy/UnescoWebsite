<?php
    include "../includes/header.php";
    include "../includes/Hamburger.php";
?>
<main>
<div class="container col-12">
  <div class="card4 position-absolute mt-4">
  </div>
     <div class="col-12 mt-5"><br><p style="font-size:100px;"><strong><em>De makers</em></strong></p>
    <div class="row mt-5">
        <div class="col-6"><img class="image1" src="<? echo ROOT ?>images/portretBerend.png"></div>
        <div class="col-6 center-block"><br> <p style="font-size:25px;"><em>Hallo mensen! Mijn naam is Berend Beerendonk, ik ben een 21 jarige student 
            Software Development op het KW1C en ik heb mijn eind-stage gelopen bij het Productiehuis. Ik heb voor dit project
                veel gepland en code geschreven, ik was projectleider voor de groep programmeurs. Ik was verantwoordelijk voor het 
                start pagina, portaal en helden pagina's, wat ik het leuks vond was het maken van de animatie voor de pagina.</em> </p>
        </div>
    </div> 

    <div class="row mt-5">
        <div class="col-6"><br> <p style="font-size:25px;"><em>Hey! Mijn naam is Yahye Mohamed, ik ben een 19 jarige student Software Development 
            op het KW1C en ik heb mijn eind-stage gelopen bij het Productiehuis. Voor dit project heb ik veel code geschreven, bijvoorbeeld 
            voor het quiz systeem. Ik heb ook veel lopen mee denken aan manieren waarop we de app zo gebruikersvriendelijk en 
            aantrekkelijk mogelijk konden maken.</em> </p>
        </div>
        <div class="col-6"><img class="image1" src="<?= ROOT ?>images/portretYahye.png"></div>
    </div> 

    <div class="row mt-5">
        <div class="col-6"><img class="image1" src="<?= ROOT ?>images/portretFay.png"></div>
        <div class="col-6"><br> <p style="font-size:25px;"><em>Hoi! Ik ben Fay Kooijmans, ik ben 17 jaar en studeer mediavormgeving 
            op het KW1C en ik heb stage gelopen bij het Productiehis. Aan dit project heb ik de meeste tekeningen bijgedragen. 
            De karakters, banners, het logo etc. Ook heb ik samen met Jesse het concept, werking en ontwerp van de app bedacht.</em>  
            </p>
        </div>
    </div>

    <div class="row mt-5"> 
        <div class="col-6 center-block"><br> <p style="font-size:25px;"><em>Hallo! Mijn naam is Jesse Gerritsen, ik ben een 21 jarige student mediavormgeving 
            op het KW1C en heb stage gelopen bij het Productiehuis. Voor de app heb ik een aantal tekeningen gemaakt, waaronder ideeën 
            voor het achtergrond en de lijn die te zien is, ook heb ik grotendeels de opmaak en indeling van de app bedacht. Ook heb ik 
            samen met Fay het concept, de eerste karakter schetsen (de prototypes) en de werking van de app bedacht.</em> </p>
        </div>
        <div class="col-6"><img class="image1" src="<?= ROOT ?>images/portretJesse.png"></div>
    </div>
        
    <div class="row mt-5">
        <div class="col-6"><img class="image1" src="<?= ROOT ?>images/portretJason.png"></div>
        <div class="col-6 center-block"><br> <p style="font-size:25px;"><em>Heyo! Mijn naam is Jason Passeau, ik ben een 21 jarige student 
            Software Development op het KW1C in het derde jaar, en ik heb stage gelopen bij het productiehuis. Voor de web-app heb 
            ik deze pagina en de heldenpagina gemaakt.</em> </p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-6 center-block"><br> <p style="font-size:25px;"><em>Hallo! Mijn naam is Timothy Cobussen, ik ben 20 jaar en volg de opleiding 
            Software Developer aan het KW1C. Bij het productiehuis hebben wij gewerkt aan deze mooie unesco belevenis, 
            mijn rol hierbij was het creeeren van het menu en de navigatie over de hele website.</em> </p></div>
        <div class="col-6"><img class="image1" src="<?= ROOT ?>images/portretTimothy.png"></div>
    </div>
</div>      
</main>
<style>

@property --rotate {
  syntax: "<angle>";
  initial-value: 132deg;
  inherits: false;
}

:root {
    --card-height: 170%;
    --card-width: calc(var(--card-height) / 2.3);
  }

.card4 {
  background-color: transparent;
  width: var(--card-width);
  height: var(--card-height);
  border-radius: 6px;
  display: flex;
  font-size: 5em;
  cursor: pointer;
}

.card4::before {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 8px;
  background-image: linear-gradient(
    var(--rotate)
    , #4942E4,#C4B0FF 150%,#8696FE 120%,#0C134F 120% );
    position: absolute;
    top: -1%;
    left: -2%;
    animation: spin 2.5s linear infinite;
    z-index: -1;
}



@keyframes spin {
  0% {
    --rotate: 0deg;
  }
  100% {
    --rotate: 360deg;
  }
}
</style>
<?php
include "includes/footer.php"
?>