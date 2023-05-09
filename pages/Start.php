<main>
  <!-- Start pagina, met behulp van de javascript code krijg je het effect dat je door het portaal gaat -->
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 d-flex mx-5 justify-content-center align-items-center" style="margin-top: 44vh;">
        <div class="max-width: 646vh;">
          <img src="./images/animatie.gif" class="img-fluid">
        </div>
      </div>  
      <div class="col-12 col-lg-6 mx-5 d-flex justify-content-center">
        <img src="./images/beginlijn.png" class="beginlijn-class img-fluid">       
      </div>
      <div class="col-12 d-flex justify-content-center">
        <div class="col-12" id="image" onclick="showNextImage()" style="margin-right: 40%;">
          <img src="images/portaal.png" id="portaal1" class="portaal-class" style="border: none;">
        </div>              
      </div>
      <div class="col-12 d-flex justify-content-center" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%;">
        <div class="col-12" id="image" onclick="showNextImage()">
          <img src="images/overgang.png" id="overgang2" class="overgang-class" style="display:none; border: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%;" onload="imageLoaded()">
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
    function showNextImage() {
      if (currentImage == 1) {
        document.getElementById("portaal1").style.display = "none";
        document.getElementById("overgang2").style.display = "block";
        currentImage = 2;
        if (imageLoadedFlag) {
          document.getElementById("sound").play(); // Speelt audio af
          setTimeout(function() {
            window.location.href = "portaal";
          }, 1500); // Geef tijd aan in secondes voor de overgang
        }
      }
    }
    function imageLoaded() {
      imageLoadedFlag = true;
    }
  </script>
</main>
