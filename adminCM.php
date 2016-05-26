<?php
include 'head.inc.php';
// bloc head + header du doc html

echo '
	<div id="container">';

	include 'new_menu.inc.php';

	echo '<section>';

		include 'formulaire_admin.inc.php';

	echo "
		</section>
	</div>";

include 'footer.inc.php';
?>
