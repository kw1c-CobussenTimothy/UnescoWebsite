<!-- Zijmenu met daarin de links naar andere pagina's -->
<div id="NavBar" class="sidenav">
	<!-- Knop om het menu af te sluiten -->
	<a href="javascript:void(0)" id="closebutton" onclick="Close()">&times;</a>	
	<div style="margin-top: 20%;">
		<!-- Verwijzingen naar de andere pagina's / sites -->
		<a href="<?= ROOT ?>">Hoofdpagina</a>
		<a style="color: #B2BEB5;" href="<?= ROOT ?>/Quiz">Ontdek je Innerlijke Held</a>
		<a href="https://sdgs.un.org/goals" target="_blank">Unesco klimaatdoelen</a>
		<a style="color: #B2BEB5;" href="<?= ROOT ?>/Helden">Helden</a>
		<a href="<?= ROOT ?>/About">De makers</a>
	</div>
</div>

<!-- Knop voor het navigatie menu -->
<span style="font-size: 80px;cursor:pointer; position:fixed;" class="mx-5" id="Container" onclick="Open()">&#9776;</span>


<script>
// gives the sidebar a width of 45, thus putting it in view
function Open()
  {
    document.getElementById("NavBar").style.width = "45%";
  }

// gives the sidebar a width of 0, thus removing it from view
  function Close()
  {
    document.getElementById("NavBar").style.width = "0%";
  }
</script>
