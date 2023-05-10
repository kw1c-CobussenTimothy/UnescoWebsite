<main>
        <!--Hierin staan de afbeeldingen voor het portaal en met behulp van boostrap is het ook responsive-->
  <div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 mx-5 d-flex justify-content-center">
        <!--Buttons met informatie-->
        <p>
                <img src="images/duurzaamheid_icoon.png" style="position: absolute; margin-top: 25%; margin-left: 45%;" data-toggle="collapse" data-target="#loper">
                <div class="b-background3 collapse show" style="position: absolute; margin-top: 40%; margin-right: 50%;" id="loper">
                        <h1>Test</h1>
                        <p class="txt-button bb-background3">
                        De loper mag meerdere velden schuin bewegen en slaan. <br> 
                        Hij loopt dus over diagonalen. <br> 
                        Een loper die op een zwart veld staat zal dus altijd op een zwart veld blijven, <br>
                        hetzelfde geldt voor een loper op een wit veld.
                        </p>                           
                </div>
        </p>
        <p>
        <h1 style="position: absolute; margin-top: 80%;" data-toggle="collapse" data-target="#hallo">Hallo</h1>
                <div class="b-background1 collapse show" style="position: absolute; margin-top: 85%; margin-left: 50%;" id="hallo">
                        <h1>Test</h1>
                        <p class="txt-button bb-background1">
                        De loper mag meerdere velden schuin bewegen en slaan. <br> 
                        Hij loopt dus over diagonalen. <br> 
                        Een loper die op een zwart veld staat zal dus altijd op een zwart veld blijven, <br>
                        hetzelfde geldt voor een loper op een wit veld.
                        </p>                           
                </div>
        </p>
        <p>
        <h1 style="position: absolute; margin-top: 235%;" data-toggle="collapse" data-target="#bob">bob</h1>
                <div class="b-background2 collapse show" style="position: absolute; margin-top: 240%; margin-right: 50%;" id="bob">
                        <h1>Test</h1>
                        <p class="txt-button bb-background2">
                        De loper mag meerdere velden schuin bewegen en slaan. <br> 
                        Hij loopt dus over diagonalen. <br> 
                        Een loper die op een zwart veld staat zal dus altijd op een zwart veld blijven, <br>
                        hetzelfde geldt voor een loper op een wit veld.
                        </p>                           
                </div>
        </p>
        <p>
        <h1 style="position: absolute; margin-top: 345%;" data-toggle="collapse" data-target="#bart">bart</h1>
                <div class="b-background3 collapse show" style="position: absolute; margin-top: 350%; margin-left: 50%;" id="bart">
                        <h1>Test</h1>
                        <p class="txt-button bb-background3">
                        De loper mag meerdere velden schuin bewegen en slaan. <br> 
                        Hij loopt dus over diagonalen. <br> 
                        Een loper die op een zwart veld staat zal dus altijd op een zwart veld blijven, <br>
                        hetzelfde geldt voor een loper op een wit veld.
                        </p>                           
                </div>
        </p>
        <button style="position: absolute; margin-top: 400%; font-size: 300%;" class="btn btn-quiz" onclick="window.location.href = 'quiz';">Quiz</button>
                <img src="./images/heldenlijn.png" class="heldenlijn-class img-fluid">            
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
        document.querySelector('#loper').classList.remove('show');
        document.querySelector('#hallo').classList.remove('show');
        document.querySelector('#bob').classList.remove('show');
        document.querySelector('#bart').classList.remove('show');
</script>