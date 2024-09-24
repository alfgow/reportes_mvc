const menuButton = document.getElementById('menu-button');
const menu = document.getElementById('menu');

menuButton.addEventListener('click', () => {

    console.log('menuButton clicked');
    menuButton.classList.toggle('hover:bg-green-800');
    menuButton.classList.toggle('bg-blue-700');
    menu.classList.toggle('hidden');

})