'use strict'

function toggleSiteMenu () {
    const menu = document.querySelector('.site-menu')
    menu.classList.toggle('visible')
}

document
    .querySelector('.site-menu-toggle')
    .addEventListener('click', toggleSiteMenu)
