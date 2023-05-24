<!-- Zijmenu met daarin de links naar andere pagina's -->
<div id="NavBar" class="sidenav">
	<!-- Knop om het menu af te sluiten -->
	<a href="javascript:void(0)" id="closebutton" onclick="Close()">&times;</a>

	<!-- Verwijzingen naar de andere pagina's / sites -->
	<a href="/UnescoWebsite/index">Hoofdpagina</a>
	<a href="/UnescoWebsite/pages/Quiz">Ontdek je Innerlijke Held</a>
	<a href="https://sdgs.un.org/goals" target="_blank">Unesco klimaatdoelen</a>
	<a href="/UnescoWebsite/pages/Heroes">Helden</a>
	<a href="/UnescoWebsite/pages/About">De makers</a>
</div>

<!-- Knop voor het navigatie menu -->
<span style="font-size: 40px;cursor:pointer;" id="Container" onclick="Open()">&#9776;</span>


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
