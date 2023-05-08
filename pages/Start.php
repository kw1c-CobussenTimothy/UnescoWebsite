<main>
  <!--Start pagina, met behulp van de javascript code krijg je het effect dat je door het portaal gaat-->
  <div class="row">
    <div class="">
      <div id="image" onclick="showNextImage()">
        <img src="images/portaal.png" id="portaal1" class="img-fluid portaal-class" style="position: absolute; border: none;">
        <img src="images/overgang.png" id="overgang2" class="img-fluid overgang-class" style="display:none; border: none;">
      </div>
    </div>
  </div>

  <audio id="sound">
    <source src="./audio/sparklin.mp3" type="audio/mpeg">
  </audio>

  <script>
    let currentImage = 1;
    function showNextImage() {
      if (currentImage == 1) {
        document.getElementById("portaal1").style.display = "none";
        document.getElementById("overgang2").style.display = "block";
        currentImage = 2;
        document.getElementById("sound").play(); // Speelt audio af
        setTimeout(function() {
          window.location.href = "portaal";
        }, 1500); // Geef tijd aan in secondes voor de overgang
      }
    }
  </script>
</main>
