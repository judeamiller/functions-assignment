<!DOCTYPE html>
<html>
	<body>
		<?php
			/**
			 * Created by PhpStorm.
			 * User: judeamiller
			 * Date: 7/16/18
			 * Time: 1:28 PM
			 */

			function farenheightToCelcius($farenheight) {
				return ($farenheight - 32) * .5556;
			}

			echo farenheightToCelcius(78);


		?>

	</body>
</html>
