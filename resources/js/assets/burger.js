export default function emburger(buger, nav, layers) {

    let hamburger = burger
    let navs = nav
    let layer = layers

    hamburger.addEventListener('click', function(){
        if (navs.classList.contains('h-0')){
            navs.classList.replace('h-0', 'h-64')
            navs.classList.replace('-translate-y-10', 'translate-y-0')
            navs.classList.add('py-6')
            layer.classList.replace('invisible', 'visible')
        } else{
            navs.classList.replace('h-64', 'h-0')
            navs.classList.remove('py-6')
            navs.classList.replace('translate-y-0', '-translate-y-10')
            layer.classList.replace('visible', 'invisible')
        }
    })
}

