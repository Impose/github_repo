<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PUBG Randomizer</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/scripts.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <script language="javascript">
	function show_all_weps(){
		document.getElementById("all-wep-select").style.display='block';
		document.getElementById("wep-select").style.display='none';
		document.getElementById("mode-select").style.display='none';
	}
	function show_weps(){
		document.getElementById("all-wep-select").style.display='none';
		document.getElementById("wep-select").style.display='block';
		document.getElementById("mode-select").style.display='none';
	}
	function show_modes(){
		document.getElementById("all-wep-select").style.display='none';
		document.getElementById("wep-select").style.display='none';
		document.getElementById("mode-select").style.display='block';
	}
  </script>
</head>
<body>
  <h1>Random PUBG Weapon, Attachment, &amp; Mode Selector</h1>
  <h2>UPDATED 02-04-2019</h2>

  <h2 class="select-subheader">Select the Randomization You'd Prefer</h2>>
<ul class="radio-options">
	<li class="radio">
	  <input type="radio" name="tab" value="allweapons" onclick="show_all_weps();" />
	  <label class="select">All Weapons</label>
	</li>
	<li class="radio">
	  <input type="radio" name="tab" value="weapons" onclick="show_weps();" />
	  <label class="select">Pick Weapons</label>
	</li>
	<li class="radio">
	  <input type="radio" name="tab" value="modes" onclick="show_modes();" />
	  <label class="select">Pick Modes</label>
	</li>
</ul>


<div class="checkbox-container" id="all-wep-select">
  <form action="wep_results.php" method="post">
	<ul class="results-options">
		<li class="checkbox">
			<input class="wep all-weps" type="checkbox" name="all-wep">
			<label class="option-select">All Weapons</label>
		</li>
		<li class="checkbox">
			<input class="attachment all-attach" type="checkbox" name="all-attachments">
			<label class="option-select">All Attachments</label>
		</li>
	</ul>
	<div class="list-submit">
		<input type="submit" value="Submit">
	</div>
  </form>
</div>
<div class="checkbox-container" id="wep-select">
  <form action="wep_results.php" method="post">
	<ul class="results-options">
		<li class="checkbox">
			<input class="attachment all-attach" type="checkbox" name="all-attachments">
		    	<label class="option-select">All Attachments</label>
		</li>
	        <li class="checkbox">
			<input class="wep ar" type="checkbox" name="AR">
			<label class="option-select">Asssault Rifles</label>
		</li>
	        <li class="checkbox">
			<input class="wep crossbow" type="checkbox" name="Crossbow">
			<label class="option-select">Crossbow</label>
		</li>
	        <li class="checkbox">
			<input class="wep pistol" type="checkbox" name="Pistol">
			<label class="option-select">Pistols</label>
		</li>
	        <li class="checkbox">
			<input class="wep shotgun" type="checkbox" name="Shotguns">
			<label class="option-select">Shotguns</label>
		</li>
	        <li class="checkbox">
			<input class="wep sniper" type="checkbox" name="Snipers">
			<label class="option-select">Snipers</label>
		</li>
	        <li class="checkbox">
			<input class="wep smg" type="checkbox" name="SMG">
			<label class="option-select">Sub Machine Guns</label>
		</li>
	</ul>
	<div class="list-submit">
		<input type="submit" value="Submit">
	</div>
  </form>
</div>
<div class="checkbox-container" id="mode-select">
  <form action="wep_results.php" method="post">
	<ul class="results-options">
		<li class="checkbox">
        		<input class="mode" type="checkbox" name="modes">
			<label class="option-select">Modes</label>
		</li>
	</ul>
	<div class="list-submit">
		<input type="submit" value="Submit">
	</div>
  </form>
</div>

</body>
<footer>
<p>PLAYERUNKNOWN'S BATTLEGROUNDS, logo, photos, &amp; text are property of Bluehole, Inc.</p>
<h2>I made this one day while I was bored. If you use the website and would like more features or have any requests, please contact me: <a href="mailto:Impose08@gmail.com">Impose08@gmail.com</a> </h2>
</footer>
</html>













