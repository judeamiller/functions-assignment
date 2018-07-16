

/* number function */
function multiplication(firstNumber, secondNumber){
	return firstNumber * secondNumber;
}

let product = multiplication(235, 5);

console.log(product);


/* string function */
function carDescription(year, make, model) {
	let carYearMakeModel = year + " " + make + " " + model;
	return carYearMakeModel;
}

console.log(carDescription("2000", "Mazda", "Miata"));

/* array function */

let petArray = ["Matano", "Buster", "Arlo", "Oprah", "Uma", "Sister", "Chow", "Doby", "Harry"];

function sortPets(petList) {
	petList.sort();
	return petList;
}

console.log(sortPets(petArray));
