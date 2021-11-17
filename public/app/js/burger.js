let hamburger = document.querySelector('#hamburger')
let navitems = document.querySelector('#navitems')
let layer = document.querySelector('#layer')

hamburger.addEventListener('click', function(){
    if (navitems.classList.contains('h-0')){
        navitems.classList.replace('h-0', 'h-64')
        navitems.classList.replace('-translate-y-10', 'translate-y-0')
        navitems.classList.add('py-6')
        layer.classList.replace('invisible', 'visible')
    } else{
        navitems.classList.replace('h-64', 'h-0')
        navitems.classList.remove('py-6')
        navitems.classList.replace('translate-y-0', '-translate-y-10')
        layer.classList.replace('visible', 'invisible')
    }
})
