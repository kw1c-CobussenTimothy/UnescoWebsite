<html>
    <body>
        <div class="container col-12">
            <div class="row">
                <div class="col-6 d-flex justify-content-center align-items-center">
                    <img id="VeraImage" class="image2 px-4 py-3" src="/UnescoWebsite/images/Vera.png"> 
                </div>
                <div class="col-6 center-block fs-5"><br>
                    <p>Dit is Vera. Zij studeert mediavormgeving bij ICT & Creatief. Daarnaast heeft ze een bijbaan in een restaurant. Er wordt daar vaak eten weggegooid Porties zijn te groot en mensen kunnen hun maaltijd niet op.  Op een avond serveert Vera een ouder echtpaar en vraagt of alles naar wens was. 
                    </p>
                    <p>“Het eten is heerlijk”, antwoord de vrouw. De portie is zo groot dat ik het niet op krijg en k vind het zonde dat het nu weggegooid moet worden.
                    </p>
                    <p>Plotseling krijgt Vera een vreemd gevoel van binnen. Er straalt een fel licht wat uit het niets komt. Wanneer het licht gedoofd is bezit ze superkrachten. 
                    </p>
                    <p>Vera is verandert in Reave en strijd voor duurzaamheid. Vliegensvlug kan zij ultra duurzame doggybags toveren die het overgebleven voedsel meteen bevriezen zodat gasten het eten mee naar huis kunnen nemen. 
                    </p>
                    <p>Zo vermindert Raeve voedselverspilling. Het echtpaar, nog steeds onder de indruk van wat er voor hun ogen gebeurde neemt met een glimlach en een goedgevulde doggybag afscheid.
                    </p>
                </div>
                <div class="col-12 mt-1">
                    <button class="col-4" style="margin-left: 8.333%;" onclick="Spinny()">switch</button> 
                </div>
            </div>
            
            <div class="row">
                <div class="col-6 center-block fs-5"><br>
                    <p>Taiana  komt uit Kiev en leert voor Allround Constructiewerker. Zij is statushouder en omdat ze moest vluchten heeft ze alles achter moeten laten. Sommige van haar vrienden zijn gevlucht anderen zijn daar gebleven. De beelden in het nieuws laten zien dat het wel jaren kan duren voordat alles wat is verwoest is hersteld.
                    </p>
                    <p>Na de oorlog wil ze terug naar de Oekraïne om te helpen haar moederland weer op te bouwen. Dit verlangen wordt op een dag zo groot dat ook zij zichzelf ziet veranderen een licht vanbinnen uit straalt en zij megasterk wordt en zij zonder moeite de zwaarste dingen kan tillen. Deze superkracht zal haar in staat stellen te helpen met de wederopbouw. 
                    </p>
                    <p>Tatiana is veranderd in Tianat die strijd voor vrede en mensenrechten</p>
                </div>
                <div class="col-6 d-flex justify-content-center align-items-center"><img id="TatianaImage" class="image2 px-4 py-3" src="/UnescoWebsite/images/Tatiana.png"></div>
                <div class="col-12 mt-1">
                    <button class="col-4" style="margin-left: 58.333%;" onclick="Spinny2()">switch</button> 
                </div>
            </div>

            <div class="row">
                <div class="col-6 d-flex justify-content-center align-items-center"><img id="RobImage" class="image2 px-4 py-3" src="/UnescoWebsite/images/Rob.png"></div>
                <div class="col-6 center-block fs-5"><br>
                    <p>Dit is Rob, student Leidinggevende travel en hospitality. Tijdens de lunchpauze op school ziet hij dat een klasgenoot wordt gepest vanwege zijn Aziatische afkomst. Rob heeft een hekel aan discriminatie en buitensluiten hij springt daarom in actie. Wanneer Rob de pestkop aan wil spreken op zijn gedrag voelt Rob een krachtig gevoel in zijn borst opwellen en ziet een fel licht om zich heen. Wanneer hij de pester aanraakt bij zijn schouder blijkt Rob te zijn veranderd in Bohr, een superheld met teleportatiekrachten. Op deze manier neemt hij de pestkop mee naar een andere cultuur en kan zo laten zien hoe mooi en interessant andere culturen zijn. Bohr laat de pester een tijd achter in Japan. Daarna teleporteert Bohr de jongen terug. Na deze ervaring blijkt hij meer begrip te hebben voor mensen met een andere culturele achtergrond dan de zijne. </p>
                </div>
                <div class="col-12 mt-1">
                    <button class="col-4" style="margin-left: 8.333%;" onclick="Spinny3()">switch</button> 
                </div>
            </div>

            <div class="row">
                <div class="col-6 center-block fs-5"><br>
                    <p>Emily zit in het eerste jaar van de koksopleiding. Ze houdt ervan mensen blij te maken met het heerlijkste eten. Ze kookt al vanaf kleins af aan voor haar familie. Ze waren heel hecht als gezin nu zij en haar broer ouder worden merkt Emily ze dat er meer afstand ontstaat in haar gezin. Na de zoveelste ruzie gaat Emily verdrietig naar haar kamer ze zou willen dat ze met haar kookkunst de ruzies kon oplossen. Ineens verblindt een fel licht wat de kamer binnen schijnt haar zicht en voelt Emily iets in zichzelf opborrelen. Ze loopt naar de keuken en tovert binnen 2 minuten een feestmaal wat bestaat uit alle lievelingsgerechten van haar familie. Haar ouders en broer staan versteld, ze gaan samen aan tafel en onder het eten praten ze hun conflicten uit. Als superheld heet ze Limey degene die mensen bij elkaar brengt en verbindt waar dat hard nodig is. </p>
                </div>
                <div class="col-6 d-flex justify-content-center align-items-center"><img id="EmilyImage" class="image2 px-4 py-3" src="/UnescoWebsite/images/Emily.png"></div>
                <div class="col-12 mt-1">
                    <button class="col-4" style="margin-left: 58.333%;" onclick="Spinny4()">switch</button> 
                </div>
            </div>
        </div>
    </body>
</html>


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
function Spinny() {
    var Image1 = document.getElementById("VeraImage");

    if(Image1.classList.contains("Vera")) {
        Image1.classList.add("spinny");
        Image1.classList.remove("Vera");
    setTimeout(() => {
        Image1.src="/UnescoWebsite/images/Vera.png";
        Image1.classList.remove("spinny");
        Image1.classList.add("spinny2");
    }, 2500);
    } else {
        Image1.classList.add("spinny");
        Image1.classList.add("Vera");
    setTimeout(() => {
        Image1.src="/UnescoWebsite/images/Raeve.png";
        Image1.classList.remove("spinny");
        Image1.classList.add("spinny2");
    }, 2500);
    }
    setTimeout(() => {
        Image1.classList.remove("spinny2");
    }, 5000);
    
}

function Spinny2() {
    var Image1 = document.getElementById("TatianaImage");

    if(Image1.classList.contains("Tatiana")) {
        Image1.classList.add("spinny");
        Image1.classList.remove("Tatiana");
    setTimeout(() => {
        Image1.src="/UnescoWebsite/images/Tatiana.png";
        Image1.classList.remove("spinny");
        Image1.classList.add("spinny2");
    }, 2500);
    } else {
        Image1.classList.add("spinny");
        Image1.classList.add("Tatiana");
    setTimeout(() => {
        Image1.src="/UnescoWebsite/images/Tianat.png";
        Image1.classList.remove("spinny");
        Image1.classList.add("spinny2");
    }, 2500);
    }
    setTimeout(() => {
        Image1.classList.remove("spinny2");
    }, 5000);
}

function Spinny3() {
    var Image1 = document.getElementById("RobImage");

    if(Image1.classList.contains("Rob")) {
        Image1.classList.add("spinny");
        Image1.classList.remove("Rob");
    setTimeout(() => {
        Image1.src="/UnescoWebsite/images/Rob.png";
        Image1.classList.remove("spinny");
        Image1.classList.add("spinny2");
    }, 2500);
    } else {
        Image1.classList.add("spinny");
        Image1.classList.add("Rob");
    setTimeout(() => {
        Image1.src="/UnescoWebsite/images/Bohr.png";
        Image1.classList.remove("spinny");
        Image1.classList.add("spinny2");
    }, 2500);
    }
    setTimeout(() => {
        Image1.classList.remove("spinny2");
    }, 5000);    
}

function Spinny4() {
    var Image1 = document.getElementById("EmilyImage");

    if(Image1.classList.contains("Emily")) {
        Image1.classList.add("spinny");
        Image1.classList.remove("Emily");
    setTimeout(() => {
        Image1.src="/UnescoWebsite/images/Emily.png";
        Image1.classList.remove("spinny");
        Image1.classList.add("spinny2");
    }, 2500);
    } else {
        Image1.classList.add("spinny");
        Image1.classList.add("Emily");
    setTimeout(() => {
        Image1.src="/UnescoWebsite/images/Limey.png";
        Image1.classList.remove("spinny");
        Image1.classList.add("spinny2");
    }, 2500);
    }
    setTimeout(() => {
        Image1.classList.remove("spinny2");
    }, 5000);  
}
</script>