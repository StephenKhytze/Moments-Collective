const menuBtn = document.querySelector('.menu_button');
const headerBottom = document.querySelector('.header_bottom');


menuBtn.addEventListener('click', () => {
    menuBtn.classList.toggle('active');
    headerBottom.classList.toggle('active');
});