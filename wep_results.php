<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PUBG Randomizer Results Page</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/scripts.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h1>Random PUBG Weapon, Attachment, & Mode Selector Results</h1>
  <h2 class="select-subheader">RESULTS</h2>

	<a class="reset" href="http://192.168.1.165">RESET</a>
	<div class="results-page-container">
		<?php
			if ($_POST["all-wep"] == TRUE){
				echo getAllWeapons();
			}
			if ($_POST["AR"] == TRUE){
				echo getAssaultRifles();
			}
			if ($_POST["Crossbow"] == TRUE){
				echo getCrossbow();
			}
			if ($_POST["Pistol"] == TRUE){
				echo getPistols();
			}
			if ($_POST["Shotguns"] == TRUE){
				echo getShotguns();
			}
			if ($_POST["Snipers"] == TRUE){
				echo getSnipers();
			}
			if ($_POST["SMG"] == TRUE){
				echo getSMGs();
			}
			if ($_POST["all-attachments"] == TRUE){
				echo getLowerRailAttachment();
				echo getMagAttachment();
				echo getMuzzleAttachment();
				echo getSightsAttachment();
				echo getStockAttachment();
			}
			if ($_POST["modes"] == TRUE){
				echo getModes();
		} ?>
	</div>
<?php
	function getAllWeapons(){
		$row = 1;
		if (($handle = fopen("weapons/all_options.csv", "r")) !== FALSE) {
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $num = count($data);
		        $row++;
			$item = $data[rand(0,$num-1)];
	                echo "<h3 class='";
			echo $item;
			echo "'>";
	                echo $item;
			echo "</h3>";
		    }
		    fclose($handle);
		}
	}
	function getAssaultRifles(){
		$row = 1;
		if (($handle = fopen("weapons/ar.csv", "r")) !== FALSE) {
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $num = count($data);
		        $row++;
			$item = $data[rand(0,$num-1)];
	                echo "<h3 class='";
			echo $item;
			echo "'>";
	                echo $item;
			echo "</h3>";
		    }
		    fclose($handle);
		}
	}
	function getPistols(){
		$row = 1;
		if (($handle = fopen("weapons/pistol.csv", "r")) !== FALSE) {
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $num = count($data);
		        $row++;
	                $item = $data[rand(0,$num-1)];
	               echo "<h3 class='";
			echo $item;
			echo "'>";
	                echo $item;
			echo "</h3>";
		    }
		    fclose($handle);
		}
	}
	function getSnipers(){
		$row = 1;
		if (($handle = fopen("weapons/sniper.csv", "r")) !== FALSE) {
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $num = count($data);
		        $row++;
	                $item = $data[rand(0,$num-1)];
	               	echo "<h3 class='";
			echo $item;
			echo "'>";
	                echo $item;
			echo "</h3>";
		    }
		    fclose($handle);
		}
	}
	function getShotguns(){
		$row = 1;
		if (($handle = fopen("weapons/shotgun.csv", "r")) !== FALSE) {
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $num = count($data);
		        $row++;
	                $item = $data[rand(0,$num-1)];
	                echo "<h3 class='";
			echo $item;
			echo "'>";
	                echo $item;
			echo "</h3>";
		    }
		    fclose($handle);
		}
	}
	function getSMGs(){
		$row = 1;
		if (($handle = fopen("weapons/smg.csv", "r")) !== FALSE) {
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $num = count($data);
		        $row++;
	                $item = $data[rand(0,$num-1)];
	                echo "<h3 class='";
			echo $item;
			echo "'>";
	                echo $item;
			echo "</h3>";
		    }
		    fclose($handle);
		}
	}
	function getCrossbow(){
		$row = 1;
		if (($handle = fopen("weapons/crossbow.csv", "r")) !== FALSE) {
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $num = count($data);
		        $row++;
	                $item = $data[rand(0,$num-1)];
	                echo "<h3 class='";
			echo $item;
			echo "'>";
	                echo $item;
			echo "</h3>";
		    }
		    fclose($handle);
		}
	}





	function getLowerRailAttachment(){
		$row = 1;
		if (($handle = fopen("attachments/attachment_lowerrail.csv", "r")) !== FALSE) {
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $num = count($data);
		        $row++;
	                $item = $data[rand(0,$num-1)];
	                echo "<h3 class='";
			echo $item;
			echo "'>";
	                echo $item;
			echo "</h3>";
		    }
		    fclose($handle);
		}
	}
	function getMagAttachment(){
		$row = 1;
		if (($handle = fopen("attachments/attachment_mag.csv", "r")) !== FALSE) {
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $num = count($data);
		        $row++;
	                $item = $data[rand(0,$num-1)];
	                echo "<h3 class='";
			echo $item;
			echo "'>";
	                echo $item;
			echo "</h3>";
		    }
		    fclose($handle);
		}
	}
	function getMuzzleAttachment(){
		$row = 1;
		if (($handle = fopen("attachments/attachment_muzzle.csv", "r")) !== FALSE) {
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $num = count($data);
		        $row++;
	                $item = $data[rand(0,$num-1)];
	                echo "<h3 class='";
			echo $item;
			echo "'>";
	                echo $item;
			echo "</h3>";
		    }
		    fclose($handle);
		}
	}
	function getSightsAttachment(){
		$row = 1;
		if (($handle = fopen("attachments/attachment_sights.csv", "r")) !== FALSE) {
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $num = count($data);
		        $row++;
	                $item = $data[rand(0,$num-1)];
	                echo "<h3 class='";
			echo $item;
			echo "'>";
	                echo $item;
			echo "</h3>";
		    }
		    fclose($handle);
		}
	}
	function getStockAttachment(){
		$row = 1;
		if (($handle = fopen("attachments/attachment_stock.csv", "r")) !== FALSE) {
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $num = count($data);
		        $row++;
	                $item = $data[rand(0,$num-1)];
	                echo "<h3 class='";
			echo $item;
			echo "'>";
	                echo $item;
			echo "</h3>";
		    }
		    fclose($handle);
		}
	}




	function getModes(){
		$row = 1;
		if (($handle = fopen("modes/modes.csv", "r")) !== FALSE) {
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $num = count($data);
		        $row++;
	                $item = $data[rand(0,$num-1)];
	                echo "<h3 class='mode-result ";
			echo $item;
			echo "'>";
	                echo $item;
			echo "</h3>";
		    }
		    fclose($handle);
		}
	}


	?>
	



</body>
<footer>
<p>PLAYERUNKNOWN'S BATTLEGROUNDS, logo, photos, & text are property of Bluehole, Inc.</p>
</footer>
</html>