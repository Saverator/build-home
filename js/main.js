const topMenu = document.querySelector('#top-menu');
const topMenuButton = document.querySelector('#top-menu-button');

topMenuButton.addEventListener('click', () => {
    topMenu.classList.toggle('active');
    topMenuButton.classList.toggle('active');
});