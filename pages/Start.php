<main>
  <!-- Start pagina, met behulp van de javascript code krijg je het effect dat je door het portaal gaat -->
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 d-flex mx-5 justify-content-center align-items-center position-absolute">
        <div class="max-width: 646vh;">
          <img src="./images/arrow.gif" class="img-fluid" style="width: 60%; height: 60%; margin-top: 485%; position: static;">          
        </div>
      </div>  
      <div class="col-12 col-lg-6 d-flex mx-5 justify-content-center align-items-center" style="margin-top: 58vh;">
        <div class="max-width: 646vh;">

          <img src="./images/animatie.gif" class="img-fluid">          
        </div>
      </div>  
      <div class="col-12 col-lg-6 mx-5 d-flex justify-content-center">
        <img src="./images/beginlijn.png" class="beginlijn-class img-fluid"> 
        <p>
          <div style="position: absolute; margin-top: 60%;" data-toggle="collapse" data-target="#unesco" class="heartbeat-tekst">What the</div>
          <div style="position: absolute; margin-top:65%;" data-toggle="collapse" data-target="#unesco" class="heartbeat-tekst"> Unesco?!</div>
          <div class="b-background collapse show" style="position: absolute; margin-top: 65%; margin-right: 50%;" id="unesco">
            <h1>Unesco-scholennetwerk</h1>
            <p class="txt-button bb-background" style="font-size: 35px;">
              <em><strong>‘Since wars begin in the minds of men, it is in the minds of men that the defences of peace must be constructed’.</strong></em><br>
              Deze gedachte vormt de essentie van de missie van Unesco. <br> 
              Unesco-scholen ondersteunen deze missie: ze maken hun leerlingen vertrouwd met het Unesco-gedachtegoed en dragen <br>
              zo hun steentje bij aan vrede en verdraagzaamheid.
            </p>                           
          </div>
        </p>
        <img src="images/vliegtuigkw1c.gif" style="position: absolute; margin-top: 130%;" data-toggle="collapse" data-target="#kw1c">
        <p>
          <div class="b-background1 collapse show" style="position: absolute; margin-top: 190%; margin-left: 50%;" id="kw1c">
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
    </div>      
  </div>
    <div class="col-6" >
        <a href="portaal" id="image1">
          <img src="images/portaal.png" id="portaal1" class=" portaal-class" style="position:absolute; margin-top: 40%;">
          <img src="images/sterrenveel.gif" id="portaal1" class="veel-sterren" style="position: absolute; margin-left: 30%; margin-top: 20%;"> 
        </a>
      </div>
  <script>
    let currentImage = 1;
    let imageLoadedFlag = false;

    document.querySelector('#unesco').classList.remove('show');
    document.querySelector('#kw1c').classList.remove('show');

    function playAudio() {
      document.getElementById("sound").play(); // Play the audio
      setTimeout(function() {
        window.location.href = "next-page-url"; // Navigate to the next page after a delay
      }, 2500); // Set the delay in milliseconds
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

    function hideAndShowImage() {
  const arrowImage = document.querySelector('img[src="./images/arrow.gif"]');
  const originalImagePosition = arrowImage.style.marginLeft; // Store the original margin-left value

  arrowImage.style.visibility = 'hidden'; // Hide the image initially

  setTimeout(function() {
    arrowImage.style.visibility = 'visible'; // Show the image after 4 seconds
    arrowImage.style.marginLeft = originalImagePosition; // Restore the original margin-left value
  }, 4000);
}

hideAndShowImage();




  </script>
</main>
