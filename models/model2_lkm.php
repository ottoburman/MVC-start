<?php
		# Tutkitaan viestien määrä lkm-muuttujasta
			if ($lkm > 6) /* jos suurempi kuin 50 niin */
			{
			file_put_contents("datat/data1_chat.txt", "*Vain viisi(kymmentä) riviä ja nollataan... Aloitus... \n ");
			/* koska file_put_contents ei lopu appen -määritykseen niin kaikki tiedot korvautuvat. */
			}
?>