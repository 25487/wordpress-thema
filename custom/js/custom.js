//mijn script
const heeftSubmenu = document.querySelectorAll('.menu-item-has-children');

for(let i = 0; i < heeftSubmenu.length; i++) {
	const submenu = heeftSubmenu[i].querySelector('.sub-menu');
	const linkSubMenu = heeftSubmenu[i].querySelector('a');

	submenu.classList.toggle('menu-verbergen');

	linkSubMenu.addEventListener('click', (e) => {
		e.preventDefault();
		submenu.classList.toggle('menu-verbergen');
		linkSubMenu.classList.toggle('menu-is-open');
	})
}

let zoekVenster = document.getElementById('s');
zoekVenster.setAttribute('placeholder', 'Zoeken...');
zoekVenster.setAttribute('type', 'search');
