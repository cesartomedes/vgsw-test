document.addEventListener('DOMContentLoaded', () => {
	const slider = document.querySelector('.mySwiper');
	if (!slider) return;

	new Swiper(slider, {
		loop: true,
		slidesPerView: 1,
		effect: 'fade',
		fadeEffect: { crossFade: true },
		speed: 1000,
		autoplay: { delay: 6000, disableOnInteraction: false },
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
	});
});

document.addEventListener('DOMContentLoaded', function () {
	const burger = document.getElementById('burger-button');
	const menu = document.getElementById('primary-menu');
	const burgerIcon = document.getElementById('burger-icon');
	const closeIcon = document.getElementById('close-icon');

	burger.addEventListener('click', function () {
		menu.classList.toggle('show');

		// Cambia aria-expanded
		const expanded = burger.getAttribute('aria-expanded') === 'true';
		burger.setAttribute('aria-expanded', !expanded);

		// Alterna los iconos
		burgerIcon.classList.toggle('hidden');
		closeIcon.classList.toggle('hidden');
	});
});
