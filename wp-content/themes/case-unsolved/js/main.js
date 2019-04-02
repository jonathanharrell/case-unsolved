'use strict'

function toggleSiteMenu () {
    const menu = document.querySelector('.site-menu')
    menu.classList.toggle('visible')
}

function fluidVideos () {
    var iframes = document.getElementsByTagName('iframe')
    for (var i = 0; i < iframes.length; i++) {
        const iframe = iframes[i]
        const players = /www.youtube.com|player.vimeo.com/

        if (iframe.src.search(players) > 0) {
            var videoRatio = (iframe.height / iframe.width) * 100
            iframe.style.position = 'absolute'
            iframe.style.top = '0'
            iframe.style.left = '0'
            iframe.width = '100%'
            iframe.height = '100%'
            const wrap = document.createElement('div')
            wrap.className = 'fluid-vids'
            wrap.style.width = '100%'
            wrap.style.position = 'relative'
            wrap.style.paddingTop = videoRatio + '%'
            const iframeParent = iframe.parentNode
            iframeParent.insertBefore(wrap, iframe)
            wrap.appendChild(iframe)
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    document
        .querySelector('.site-menu-toggle')
        .addEventListener('click', toggleSiteMenu)

    fluidVideos()
})
