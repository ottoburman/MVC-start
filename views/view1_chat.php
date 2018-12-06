<!DOCTYPE html>
<html>
  <head>
    <title>Tsätti</title>
  </head>
  <body>
    <h1>Tsätti MVC v1.0</h1>
    <h2>Kirjoita uusi viesti ja <br> paina Lähetä-nappia</h2>
    <form action="?toiminto=lahetys" method="post">
     Nimimerkki:<input type="text" name="nimim" maxlength="10" size="10" value = "noname" > <br><br> 
	  <textarea name="viesti" maxlength="160" size="40" rows="4" cols="40" ></textarea> <br>
      <input type="submit" value="Lähetä">
    </form>
	<!-- Lähteet: <br>
	https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller <br>
	https://fi.wikipedia.org/wiki/MVC-arkkitehtuuri <br> 
	https://www.ohjelmointiputka.net/oppaat/opas.php?tunnus=php_14#mvcmalli<br>
	<br> -->
	<?php
	// tämä on käyttöliittymä  ja näkymä tietoihin 	
    if (empty($this->viestit)) {
        echo "Chatissa ei ole vielä viestejä...";
    } else {
		$lkm=0;    
		foreach ($this->viestit as $viesti) {
        	$lkm=$lkm+1; // laskee rivien määrän määrän   
			// echo " " . htmlspecialchars($viesti) . "<br>";
			echo " " . ($viesti) . "<br>";
			include("models/model2_lkm.php"); // model2 -rajoittaa rivien määrää 		
        }
    }
    ?>
  </body>
</html>