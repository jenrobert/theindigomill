( function() {
	const images = document.querySelectorAll('.fade-in');

	const observer = new IntersectionObserver((entries) => {
		entries.forEach(entry => {
			if (entry.intersectionRatio > 0) {
				entry.target.classList.add('visible');
			}
		});
	});

	images.forEach(image => {
		observer.observe(image);
	});
} )();
