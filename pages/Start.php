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
            <div id="text1" style="position: absolute; margin-top: 60%;" data-toggle="collapse" data-target="#unesco">What the</div>
            <div style="position: absolute; margin-top:65%;" id="text2" data-toggle="collapse" data-target="#unesco"> Unesco?!</div>
                <div class="b-background collapse show" style="position: absolute; margin-top: 65%; margin-right: 50%;" id="unesco">
                        <h1>Unesco-scholennetwerk</h1>
                        <p class="txt-button bb-background" style="font-size: 35px;">
                        ‘Since wars begin in the minds of men, it is in the minds of men that the defences of peace must be constructed’. <br>
                         Deze gedachte vormt de essentie van de missie van Unesco. <br> 
                         Unesco-scholen ondersteunen deze missie: ze maken hun leerlingen vertrouwd met het Unesco-gedachtegoed en dragen <br>
                         zo hun steentje bij aan vrede en verdraagzaamheid.
                        </p>                           
                </div>
        </p>
          <img src="images/vliegtuigkw1c.gif" style="position: absolute; margin-top: 140%;" data-toggle="collapse" data-target="#kw1c">
        <p>
                <div class="b-background1 collapse show" style="position: absolute; margin-top: 205%; margin-left: 50%;" id="kw1c">
                        <h1>KW1C UNESCO SCHOOL</h1>
                        <p class="txt-button bb-background1" style="font-size: 35px;">
                        Het Koning Willem I College is als Unesco-school deel van een wereldwijd netwerk met meer dan 9700 scholen. <br>
                        In Nederland zijn 75 scholen aangesloten waarvan ongeveer 10 mbo’s. <br>
                        Wij vinden het als school belangrijk te streven naar een betere wereld. <br>
                        Met behulp van deze app ga je ontdekken hoe jij als student je steentje bij kunt dragen.
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
      function animateText() {
  const text1 = document.getElementById("text1");
  const text2 = document.getElementById("text2");

  // Show "What the" text slowly
  text1.style.animationName = "fadeInSlow";
  text1.style.animationDuration = "5s";
  text1.style.animationDelay = "0s";
  text1.style.opacity = "1";

  // After the first text is fully displayed, show "Unesco" text faster
  setTimeout(function() {
    text2.style.animationName = "fadeInFast";
    text2.style.animationDuration = "1s";
    text2.style.animationDelay = "0s";
    text2.style.opacity = "1";
  }, 5000);

  // Reset animations and repeat
  setTimeout(function() {
    text1.style.animationName = "";
    text1.style.opacity = "0";

    text2.style.animationName = "stayVisible";
    text2.style.animationDuration = "infinite";
    text2.style.animationDelay = "0s";

    animateText(); // Repeat the animation
  }, 7000);
}

animateText(); // Start the animation

      
  </script>
</main>
