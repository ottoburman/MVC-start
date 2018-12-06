<?php
class Malli {
    private $tiedosto = "datat/data1_chat.txt";
    public function viestit() {
    // luetaan data1-tiedostosta jos on olemassa... 
        if (file_exists($this->tiedosto)) 
		{ 	return file($this->tiedosto); } 
		else 
		{	return array();   }
    }		
    public function lisaa($viesti, $nimim) {
		// funktio lisaa tietoja ja kirjoittaa viesti-muuttujaan tietoja
       $viesti = date("H:i:s: ") . $nimim . ": ". $viesti;
	    	// tiedosto-muuttujan osoittamaan tiedostoon
         file_put_contents($this->tiedosto, "{$viesti}\n", FILE_APPEND);
    }
}
?>
