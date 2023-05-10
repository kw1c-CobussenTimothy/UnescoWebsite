<main>
        <!--Hierin staan de afbeeldingen voor het portaal en met behulp van boostrap is het ook responsive-->
  <div class="container">
    <div class="row">         
        <div class="col-12 mx-5 d-flex justify-content-center">
                <img src="images/portaaluitgang.png" style="position: absolute;" class="img-fluid">
                <img src="images/sterren.gif" style="position: absolute; margin-right: 30%; margin-bottom: 10%;">
                <img src="images/sterren.gif" style="position: absolute; margin-right: 50%;">
        </div>              
        <div class="col-12 col-lg-6 mx-5 d-flex justify-content-center">
        <!--Buttons met informatie-->
        <p>
                <img src="images/duurzaamheid_icoon.png" style="position: absolute; margin-top: 30%; margin-left: 45%;" data-toggle="collapse" data-target="#duurzaam">
                <div class="b-background3 collapse show" style="position: absolute; margin-top: 40%; margin-right: 50%;" id="duurzaam">
                        <h1>Duurzaamheid</h1>
                        <p class="txt-button bb-background3">
                        De loper mag meerdere velden schuin bewegen en slaan. <br> 
                        Hij loopt dus over diagonalen. <br> 
                        Een loper die op een zwart veld staat zal dus altijd op een zwart veld blijven, <br>
                        hetzelfde geldt voor een loper op een wit veld.
                        </p>                           
                </div>
        </p>
        <p>
                <img src="images/vrede_en_mensenrechten_icoon.png" style="position: absolute; margin-top: 90%; margin-left: 45%;" data-toggle="collapse" data-target="#vrede">
                <div class="b-background4 collapse show" style="position: absolute; margin-top: 103%; margin-left: 55%;" id="vrede">
                        <h1>Vrede en mensenrechten</h1>
                        <p class="txt-button bb-background4">
                        De loper mag meerdere velden schuin bewegen en slaan. <br> 
                        Hij loopt dus over diagonalen. <br> 
                        Een loper die op een zwart veld staat zal dus altijd op een zwart veld blijven, <br>
                        hetzelfde geldt voor een loper op een wit veld.
                        </p>                           
                </div>
        </p>
        <p>
                <img src="images/intercultureel_leren.png" style="position: absolute; margin-top: 165%; margin-left: 45%;" data-toggle="collapse" data-target="#cultuur">
                <div class="b-background5 collapse show" style="position: absolute; margin-top: 180%; margin-right: 50%;" id="cultuur">
                        <h1>Intercultureel</h1>
                        <p class="txt-button bb-background5">
                        De loper mag meerdere velden schuin bewegen en slaan. <br> 
                        Hij loopt dus over diagonalen. <br> 
                        Een loper die op een zwart veld staat zal dus altijd op een zwart veld blijven, <br>
                        hetzelfde geldt voor een loper op een wit veld.
                        </p>                           
                </div>
        </p>
        <p>
                <img src="images/wereldburgerschap_icoon.png" style="position: absolute; margin-top: 270%; margin-left: 45%;" data-toggle="collapse" data-target="#wereld">
                <div class="b-background6 collapse show" style="position: absolute; margin-top: 285%; margin-left: 50%;" id="wereld">
                        <h1>Test</h1>
                        <p class="txt-button bb-background6">
                        De loper mag meerdere velden schuin bewegen en slaan. <br> 
                        Hij loopt dus over diagonalen. <br> 
                        Een loper die op een zwart veld staat zal dus altijd op een zwart veld blijven, <br>
                        hetzelfde geldt voor een loper op een wit veld.
                        </p>                           
                </div>
        </p>
        <button style="position: absolute; margin-top: 400%; font-size: 300%;" class="btn btn-quiz" onclick="window.location.href = 'quiz';">Quiz</button>
                <img src="./images/heldenlijn.png" class="heldenlijn-class img-fluid" style="margin-top: 4%;">            
        </div>
        <div class="col-12 col-lg-6 mx-5 d-flex justify-content-center" style="margin-top: 131%;">
                <img src="./images/eindlijn.png" class="heldenlijn-class img-fluid">   
        </div>
        <div class="col-12 mx-5 d-flex justify-content-center" style="margin-top: 85%;">
                <img src="./images/karakter_eind_groepspose.png" class="karakters-einde">             
        </div>
  </div>
</main>
<script>
        document.querySelector('#duurzaam').classList.remove('show');
        document.querySelector('#vrede').classList.remove('show');
        document.querySelector('#cultuur').classList.remove('show');
        document.querySelector('#wereld').classList.remove('show');
</script>