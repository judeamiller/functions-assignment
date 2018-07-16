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

			/*number function */
			function farenheightToCelcius($farenheight) {
				return ($farenheight - 32) * .5556;
			}

			echo farenheightToCelcius(78);

			/* String Function */
			function carDescription($year, $make, $model) {
				$carYearMakeModel = $year." ".$make." ".$model;
				return $carYearMakeModel;
			}

			echo carDescription("2000", "Mazda", "Miata");

			/* array function */
			$petArray = array("Matano", "Buster", "Arlo", "Oprah", "Uma", "Sister", "Chow", "Doby", "Harry", "Holly");

			function sortPets($petAlphaList) {
			sort($petArray);
			return $petAlphaList;
			}

			echo sortPets($petArray);

		?>

	</body>
</html>
