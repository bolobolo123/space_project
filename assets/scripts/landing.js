$icons = document.querySelectorAll('.container-landing .container .planet .planet-icon');


for (let i = 0; i < $icons.length; i++) {
	$icons[i].addEventListener('mouseover', function(e) {
		this.setAttribute('src', this.getAttribute('alt')+'_hover.png');
	});
}