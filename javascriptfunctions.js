/* number function */
function farenheightToCelcius(farenheight){
	return (farenheight - 32) * .5556;
}

let celcius = farenheightToCelcius(78);

console.log(celcius);

/* string function */
function carDescription(year, make, model) {
	let carYearMakeModel = year + " " + make + " " + model;
	return carYearMakeModel;
}

console.log(carDescription("2000", "Mazda", "Miata"));

/* array function */

let petArray = ["Matano", "Buster", "Arlo", "Oprah", "Uma", "Sister", "Chow", "Doby", "Harry", "Holly"];

function sortPets(petAlphaList) {
	petAlphaList.sort();
	return petAlphaList;
}

console.log(sortPets(petArray));
