<main>
  <!-- Start pagina, met behulp van de javascript code krijg je het effect dat je door het portaal gaat -->
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 d-flex mx-5 justify-content-center align-items-center" style="margin-top: 58vh;">
        <div class="max-width: 646vh;">
          <img src="./images/animatie.gif" class="img-fluid">
        </div>
      </div>  
      <div class="col-12 col-lg-6 mx-5 d-flex justify-content-center">
        <img src="./images/beginlijn.png" class="beginlijn-class img-fluid"> 
        <p>
          <h1 style="position: absolute; margin-top: 60%;" data-toggle="collapse" data-target="#unesco">Unesco</h1>
                <div class="b-background collapse show" style="position: absolute; margin-top: 65%; margin-right: 50%;" id="unesco">
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
          <h1 style="position: absolute; margin-top: 200%;" data-toggle="collapse" data-target="#kw1c">Kw1c</h1>
                <div class="b-background1 collapse show" style="position: absolute; margin-top: 205%; margin-left: 50%;" id="kw1c">
                        <h1>Test</h1>
                        <p class="txt-button bb-background1">
                        De loper mag meerdere velden schuin bewegen en slaan. <br> 
                        Hij loopt dus over diagonalen. <br> 
                        Een loper die op een zwart veld staat zal dus altijd op een zwart veld blijven, <br>
                        hetzelfde geldt voor een loper op een wit veld.
                        </p>                           
                </div>
        </p> 
      </div>
      <div class="col-12 d-flex justify-content-center">
        <div class="col-12" id="image1" onclick="showNextImage()" style="margin-right: 50%; margin-top: 50%;">
          <img src="images/sterrenveel.gif" id="portaal1" class="veel-sterren" style="position: absolute; margin-left: 30%;">  
          <img src="images/portaal.png" id="portaal1" class="portaal-class" style="border: none; z-index: 2;">  
        </div>
        <div class="col-12" id="image2" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 1; display:none;">
          <img src="images/overgang.png" id="overgang2" class="overgang-class" style="border: none; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); pointer-events: none;" onload="imageLoaded()">
        </div>
      </div>
    </div>
  </div>
  
  <audio id="sound">
    <source src="./audio/sparklin.mp3" type="audio/mpeg">
  </audio>

  <script>
      let currentImage = 1;
      let imageLoadedFlag = false;
      
      document.querySelector('#unesco').classList.remove('show');
      document.querySelector('#kw1c').classList.remove('show');

      document.getElementById("image1").addEventListener("click", function(event) {
        if (event.target.id === "portaal1") {
          showNextImage();
        }
      });

      function showNextImage() {
        if (currentImage == 1) {
          document.getElementById("portaal1").style.display = "none";
          document.getElementById("image2").style.display = "block";
          currentImage = 2;
          if (imageLoadedFlag) {
            document.getElementById("sound").play(); // Speelt audio af
            setTimeout(function() {
              window.location.href = "portaal";
            }, 2500); // Geef tijd aan in secondes voor de overgang
          }
        }
      }

      function imageLoaded() {
        imageLoadedFlag = true;
      }
  </script>
</main>
