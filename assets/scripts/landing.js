const $icons  = document.querySelectorAll('.container-landing .container .planet .planet-icon'),
	  $panels = document.querySelectorAll('.container .resume'),
	  $recap  = document.querySelector('.recap-container'),
	  $recap_btn = document.querySelector('.header-right .summary'),
	  $close_btn = document.querySelector('.recap-container .close');


for (let i = 0; i < $icons.length; i++) {
	$icons[i].addEventListener('mouseover', function(e) {
		this.setAttribute('src', this.getAttribute('alt')+'_hover.png');
	});
	$icons[i].addEventListener('click', function(e) {
		
		if (this.classList.contains('ufo')) {
			for (let j = 0; j < $icons.length; j++) {
				$icons[j].classList.remove('active');
			}
			this.classList.add('active');
			for (let j = 0; j < $panels.length; j++) {
				if ($panels[j].classList.contains('facts')) $panels[j].style.display = 'block';
				else $panels[j].style.display = 'none';
			}
		}
		else if (this.classList.contains('astro')) {
			for (let j = 0; j < $icons.length; j++) {
				$icons[j].classList.remove('active');
			}
			this.classList.add('active');
			for (let j = 0; j < $panels.length; j++) {
				if ($panels[j].classList.contains('astrology')) $panels[j].style.display = 'block';
				else $panels[j].style.display = 'none';
			}
		}
		else if (this.classList.contains('advances')) {
			for (let j = 0; j < $icons.length; j++) {
				$icons[j].classList.remove('active');
			}
			this.classList.add('active');
			for (let j = 0; j < $panels.length; j++) {
				if ($panels[j].classList.contains('advance')) $panels[j].style.display = 'block';
				else $panels[j].style.display = 'none';
			}
		}
		else if (this.classList.contains('event')) {
			for (let j = 0; j < $icons.length; j++) {
				$icons[j].classList.remove('active');
			}
			this.classList.add('active');
			for (let j = 0; j < $panels.length; j++) {
				if ($panels[j].classList.contains('evolutions')) $panels[j].style.display = 'block';
				else $panels[j].style.display = 'none';
			}
		}
		else if (this.classList.contains('age')) {
			for (let j = 0; j < $icons.length; j++) {
				$icons[j].classList.remove('active');
			}
			this.classList.add('active');
			for (let j = 0; j < $panels.length; j++) {
				if ($panels[j].classList.contains('clock')) $panels[j].style.display = 'block';
				else $panels[j].style.display = 'none';
			}
		}
	});
}

$recap_btn.addEventListener('click', function(e) {
	$recap.style.display = 'block';
});
$close_btn.addEventListener('click', function(e) {
	e.preventDefault();
	$recap.style.display = 'none';
});


