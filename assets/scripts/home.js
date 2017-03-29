const $numbers = document.querySelectorAll('.container-door .container-birth .code-form .numbers .number'),
	  $birthdate = document.querySelector('.container-door .container-birth .inputs #birth');

let birth   = [[], [], []],
	clicks = 0;3
for (let i = 0; i < $numbers.length; i++) {
	$numbers[i].addEventListener('click', function(e) {

		if (clicks < 2) {
			if (birth[2].length == 2) birth[2] = this.innerHTML;
			else birth[2] += this.innerHTML;
		}
		else if (clicks < 4) {
			if (birth[1].length == 2) birth[1] = this.innerHTML;
			else birth[1] += this.innerHTML;
		}
		else {
			if (birth[0].length == 4) birth[0] = this.innerHTML;
			else birth[0] += this.innerHTML;
		}

		clicks = (clicks + 1)%8;
		$birthdate.value = birth.join('-');
	});	
}
