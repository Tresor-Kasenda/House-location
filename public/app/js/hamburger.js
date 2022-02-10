let hamburger = document.querySelector('#hamburger')
let navItems = document.querySelector('#navitems')
let layer = document.querySelector('#layer')

hamburger.addEventListener('click', function(){
    if (navItems.classList.contains('h-0')){
        navItems.classList.replace('h-0', 'h-64')
        navItems.classList.replace('-translate-y-10', 'translate-y-0')
        navItems.classList.add('py-6')
        layer.classList.replace('invisible', 'visible')
    } else{
        navItems.classList.replace('h-64', 'h-0')
        navItems.classList.remove('py-6')
        navItems.classList.replace('translate-y-0', '-translate-y-10')
        layer.classList.replace('visible', 'invisible')
    }
})
