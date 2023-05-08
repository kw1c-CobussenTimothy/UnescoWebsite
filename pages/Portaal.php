<main>
        <!--Hierin staan de afbeeldingen voor het portaal en met behulp van boostrap is het ook responsive-->
  <div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 d-flex mx-5 justify-content-center align-items-center" style="margin-top: 44vh;">
        <div class="max-width: 646vh;">
            <img src="./images/animatie.gif" class="img-fluid">
        </div>
        </div>
        <div class="col-12 col-lg-6 mx-5 d-flex justify-content-center">
        <!--Buttons met informatie-->
        <p>
        <h1 class="mt-5" style="position: absolute;" data-toggle="collapse" data-target="#loper">test</h1>
                <div class="b-background collapse show" style="position: absolute; margin-top: 10%; margin-right: 50%;" id="loper">
                        <h1>Test</h1>
                        <p class="txt-button bb-background">
                        De loper mag meerdere velden schuin bewegen en slaan. <br> 
                        Hij loopt dus over diagonalen. <br> 
                        Een loper die op een zwart veld staat zal dus altijd op een zwart veld blijven, <br>
                        hetzelfde geldt voor een loper op een wit veld.
                        </p>                           
                </div>
        </p>
        <p>
        <h1 style="position: absolute; margin-top: 50%;" data-toggle="collapse" data-target="#hallo">Hallo</h1>
                <div class="bsch-background collapse show" style="position: absolute; margin-top: 55%; margin-right: 50%;" id="hallo">
                        <h1>Test</h1>
                        <p class="txt-button">
                        De loper mag meerdere velden schuin bewegen en slaan. <br> 
                        Hij loopt dus over diagonalen. <br> 
                        Een loper die op een zwart veld staat zal dus altijd op een zwart veld blijven, <br>
                        hetzelfde geldt voor een loper op een wit veld.
                        </p>                           
                </div>
        </p>
        <p>
        <h1 style="position: absolute; margin-top: 100%;" data-toggle="collapse" data-target="#bob">bob</h1>
                <div class="bsch-background collapse show" style="position: absolute; margin-top: 105%; margin-right: 50%;" id="bob">
                        <h1>Test</h1>
                        <p class="txt-button">
                        De loper mag meerdere velden schuin bewegen en slaan. <br> 
                        Hij loopt dus over diagonalen. <br> 
                        Een loper die op een zwart veld staat zal dus altijd op een zwart veld blijven, <br>
                        hetzelfde geldt voor een loper op een wit veld.
                        </p>                           
                </div>
        </p>
                <img src="./images/beginlijn.png" class="beginlijn-class img-fluid">            
        </div>
        <div class="col-12 col-lg-6 mx-5 d-flex justify-content-center" style="margin-top: 131%;">
                <img src="./images/heldenlijn.png" class="heldenlijn-class img-fluid">            
        </div>
        <div class="col-12 col-lg-6 mx-5 d-flex justify-content-center" style="margin-top: 131%;">
                <img src="./images/eindlijn.png" class="heldenlijn-class img-fluid">            
        </div>
        <div class="col-12 col-lg-6 mx-5 d-flex justify-content-center" style="margin-top: 80%;">
                <img src="./images/karakter_eind_groepspose.png" class="karakters-einde img-fluid">            
        </div>
  </div>
</main>
<script>
        document.querySelector('#loper').classList.remove('show');
        document.querySelector('#hallo').classList.remove('show');
        document.querySelector('#bob').classList.remove('show');
</script>