function cardSelection(object) {
	let counter = parseInt(
		document.getElementById('selected-items').innerHTML,
		10
	);

	let selection;

	selection = getCookie('selection');
	// I translate my string cookie into a convenient array
	let arraySelection;
	if (selection != 'undefined') {
		if (selection[selection.length - 1] == ',') {
			selection = selection.substring(0, selection.length - 1);
		}
		arraySelection = JSON.parse('[' + selection + ']');
	} else {
		arraySelection = [];
	}

	let id = parseInt(object.id);

	if (
		object.classList[2] != 'unselectable' &&
		object.classList[1] == 'selected-card'
	) {
		console.log(object.classList[2]);
		counter -= 1;
		arraySelection.splice(arraySelection.indexOf(id), 1);
		object.classList.toggle('selected-card');
	} else if (object.classList[2] == 'unselectable') {
		alert(
			'Impossible de ne pas "dé-selectionner" une recommandation par défaut...'
		);
	} else {
		counter += 1;
		arraySelection.push(object.id);
		object.classList.toggle('selected-card');
	}

	let newCookie = '';
	arraySelection.forEach((element) => (newCookie += element + ',')); // I translate my array back into a string
	newCookie = newCookie.substring(0, newCookie.length - 1); // I put off the last coma
	setCookie('selection', newCookie);

	document.getElementById('selected-items').innerHTML = counter.toString();
}

function setCookie(name, value) {
	const date = new Date();
	date.setTime(date.getTime() + 24 * 60 * 60 * 1000);
	let expires = 'expires=' + date.toUTCString();
	document.cookie = name + '=' + value + ';' + expires + ';path=/';
}

function getCookie(cname) {
	let name = cname + '=';
	let decodedCookie = decodeURIComponent(document.cookie);
	let ca = decodedCookie.split(';');
	for (let i = 0; i < ca.length; i++) {
		let c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
	}
	return '';
}

function clearCookies() {
	setCookie('selection', 'undefined');
}

function cookieBigbang() {
	setCookie(
		'selection',
		'7,27,32,52,64,67,79,103,108,126,127,128,135,147,150,153,154,181,182,194,196,204,206,228,250,259,290,310,339,351,356,393,405,409,446,448,475,491,499,512,525,530,533'
	);
}

function downloadPage() {
	window.print();
}

function triSonny() {
	let cardList = document.getElementById('list_car_ul');
	console.log(cardList);

	// document.querySelectorAll('.filter').forEach(function (element) {
	// 	element.addEventListener('keyup', () => {
	// 		let category = document.getElementsByTagName('h2').innerHTML;

	// 		for (let i = 0; i < cars.children.length; i++) {
	// 			if (true) {
	// 				cars.children[i].style.display = 'inline-block';
	// 			} else {
	// 				cars.children[i].style.display = 'none';
	// 			}
	// 		}
	// 	});
	// });
}
