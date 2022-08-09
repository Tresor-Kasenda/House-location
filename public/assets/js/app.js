const mobileMenu = document.querySelector('[data-navigation]')
const buttonHumb = document.querySelector('[data-toggle-navigation]')
const overlayMe = document.querySelector('[data-overlay-navigation]')

const toggleNavigation = () =>{

  let overlay_aria_state = overlayMe.getAttribute('aria-istoggle')
  if (overlay_aria_state === "true") {
    overlayMe.setAttribute('aria-istoggle',"false")
    buttonHumb.classList.remove('humbergerIsToggle')
    overlayMe.classList.remove("openOverlayOnMob")
    mobileMenu.classList.remove("openNavBarOnMob")
    document.body.classList.add('overflow-y-auto')
    return
  }
  buttonHumb.classList.add('humbergerIsToggle')
  overlayMe.classList.add('openOverlayOnMob')
  mobileMenu.classList.add("openNavBarOnMob")
  document.body.classList.remove('overflow-y-auto')
  overlayMe.setAttribute('aria-istoggle',"true")
}


if(buttonHumb!=null && buttonHumb!=undefined){
buttonHumb.addEventListener('click', (e) => {
    e.preventDefault()
    
    toggleNavigation()
})
}

if(overlayMe!=null && overlayMe!=undefined){
overlayMe.addEventListener('click', e=>{
  e.preventDefault()
  console.log('')
  toggleNavigation()
})
}


// const selected = document.querySelector(".selected");
// const optionsContainer = document.querySelector(".optionsBox");

// const optionsList = document.querySelectorAll(".option");

// if (selected) {
//   selected.addEventListener("click", () => {
//   optionsContainer.classList.toggle("active");
// });
// }
// if (optionsList) {
  
// optionsList.forEach(o => {
//   o.addEventListener("click", () => {
//     selected.innerHTML = o.querySelector("label").innerHTML;
//     optionsContainer.classList.remove("active");
//   });
// });
// }



