<div id="NavBar" class="sidenav">
					<a href="javascript:void(0)" id="closebutton" onclick="Close()">&times;</a>
					<a href="/UnescoWebsite/index">Hoofdpagina</a>
					<a href="/UnescoWebsite/pages/Quiz">Quiz</a>
					<a href="https://sdgs.un.org/goals" target="_blank">Unesco klimaatdoelen</a>
					<a href="/UnescoWebsite/pages/About">Over ons</a>
				</div>
<span style="font-size: 30px;cursor:pointer;" id="Container" onclick="Open()">&#9776;</span>


<script>
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

<style>

.sidenav
{
	height: 100%;
	width: 0%;
	position: fixed;
	top: 0px;
	left: 0px;
	background-color: #000000;
	overflow-x: hidden;
	transition: 0.5s;
	padding-top: 60px;
	z-index: 1;
}

.sidenav a
{
	padding: 8px 8px 8px 32px;
	text-decoration: none;
	display: block;
	transition: 0.3s;
	font-size: 17px;
}

.sidenav #closebutton
{
	position: absolute;
	top: 40px;
	right: 25px;
	margin-right: 0;
}
</style>