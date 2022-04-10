const mobMenu = document.querySelector('#menuMob')
const btnHumb = document.querySelector('#btnHumberger')
const overlayM = document.querySelector('#overlayM')
const toggleSearchBox = document.querySelector('#toggleSearchBox')
const modaleSearch = document.querySelector('#modaleSearch')
const closeModalSearch = document.querySelector('#closeModalSearch')

btnHumb.addEventListener('click', (e) => {
    e.preventDefault()
    if (mobMenu.classList.contains('-left-[83.333333%]')) {
        mobMenu.classList.remove('-left-[83.333333%]')
        mobMenu.classList.add('left-0')
        overlayM.classList.replace('scale-0', 'scale-100')
        return
    }
    overlayM.classList.replace('scale-100', 'scale-0')
    mobMenu.classList.remove('left-0')
    mobMenu.classList.add('-left-[83.333333%]')
})
overlayM.addEventListener('click', (e) => {
    e.preventDefault()
    overlayM.classList.replace('scale-100', 'scale-0')
    mobMenu.classList.remove('left-0')
    mobMenu.classList.add('-left-[83.333333%]')
})
toggleSearchBox.addEventListener('click', (e) => {
    e.preventDefault(),
        modaleSearch.classList.remove('-z-10', 'scale-0', 'opacity-0')
    modaleSearch.classList.add('z-[1006]')
    //modaleSearch.classList.remove(
    modaleSearch.querySelector('#modalContent').classList.remove('-translate-y-full', 'opacity-0')
})
closeModalSearch.addEventListener('click', (e) => {
    e.preventDefault()
    modaleSearch.classList.remove('z-[1006]')
    modaleSearch.classList.add('-z-10', 'opacity-0', 'scale-0') // 'opacity-0',
    modaleSearch.querySelector('#modalContent').classList.add('-translate-y-full', 'opacity-0')
})
