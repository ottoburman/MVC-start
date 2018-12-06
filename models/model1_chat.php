<?php
class Malli {
    private $tiedosto = "datat/data1_chat.txt";
    public function viestit() {
        if (file_exists($this->tiedosto)) 
		{ 	return file($this->tiedosto); } 
		else 
		{	return array();   }
    }
    public function lisaa($viesti, $nimim) {
		// funktio lähetys kutsuu funktiota lisaa
        $viesti = date("H:i:s: ") . $nimim . ": ". $viesti;
        file_put_contents($this->tiedosto, "{$viesti}\n", FILE_APPEND);
    }
}
?>