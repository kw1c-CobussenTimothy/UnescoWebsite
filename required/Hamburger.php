<div class="dropdown">
  <button class="dropbtn" onclick="showDropdown()"> &#8801; </button>
  <div class="dropdown-content" id="myDropdown">
    <?php
        $miau = ["1", "2", "3", "4"];

        foreach($miau as $mlem) {
            echo '<a href="#">'. $mlem .'</a>';
        }?>
    <a href="#">Item 1</a>
    <a href="#">Item 2</a>
    <a href="#">Item 3</a>
  </div>
</div>

<style>
  .dropdown {
    position: relative;
    display: inline-block;
    width: 30vw;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    z-index: 1;
  }

  .dropdown-content a {
    display: block;
  }

  .show {
    display: block;
  }
</style>

<script>
  function showDropdown() {
    document.getElementById("myDropdown").classList.toggle("show");
  }

  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      for (var i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
</script>


