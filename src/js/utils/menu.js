import { isMobile } from './isMobile.js';

const sidebar = document.querySelector('.main__sidebar');
const sidebarBurger = document.querySelector('.main__sidebar-open');

if (sidebarBurger) {
    sidebarBurger.addEventListener('click', (е) => {
        sidebarBurger.classList.toggle('_active');
        sidebar.classList.toggle('_active');
    })
}