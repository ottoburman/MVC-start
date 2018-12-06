<?php
# Kontrolloi sovellusta:
# Luokka Ohjain
# ja kolme funktiota Malli Lista Lahetys
class Ohjain {
    private $malli;
    public function __construct() {
        $this->malli = new Malli();
    }
    public function lista() {
        $this->viestit = $this->malli->viestit();	
        include("views/view1_chat.php"); // huomaa erot / vai \
    }
    public function lahetys() {
        // funktio lähetys kutsuu funktiota lisaa:
		$this->malli->lisaa($_POST["viesti"], $_POST["nimim"]);
        header("Location: alku.php?toiminto=lista");
    }
}
?>
