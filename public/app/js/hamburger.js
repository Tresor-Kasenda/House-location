const mobMenu = document.querySelector("[data-navigation]");
const btnHumb = document.querySelector("[data-toggle-navigation]");
const overlayM = document.querySelector("[data-overlay-navigation]");

const toggleNavigation = () => {
    let overlay_aria_state = overlayM.getAttribute("aria-istoggle");
    if (overlay_aria_state === "true") {
        overlayM.setAttribute("aria-istoggle", "false");
        btnHumb.classList.remove("humbergerIsToggle");
        overlayM.classList.remove("openOverlayOnMob");
        mobMenu.classList.remove("openNavBarOnMob");
        document.body.classList.add("overflow-y-auto");
        return;
    }
    btnHumb.classList.add("humbergerIsToggle");
    overlayM.classList.add("openOverlayOnMob");
    mobMenu.classList.add("openNavBarOnMob");
    document.body.classList.remove("overflow-y-auto");
    overlayM.setAttribute("aria-istoggle", "true");
};

btnHumb.addEventListener("click", (e) => {
    e.preventDefault();

    toggleNavigation();
});

overlayM.addEventListener("click", (e) => {
    e.preventDefault();
    console.log("");
    toggleNavigation();
});



// select all modalse on current document
const modals = document.querySelectorAll("[data-modal]");


// check first if there's a modal on the form
if (modals) {

    //loop list of all found modals on the document
    modals.forEach((modal) => {
        const toggleModal = () => {
            modal.classList.toggle("opacity-0");
            modal.classList.toggle("invisible");
            document.body.classList.toggle("overflow-y-auto");
        };

        document
            .querySelector(
                "[data-toggle-" + modal.getAttribute("data-modal-id") + "]"
            )
            .addEventListener("click", (e) => {
                e.preventDefault();
                toggleModal();
            });

        modal
            .querySelector("[data-btn-close-modal]")
            .addEventListener("click", (e) => {
                e.preventDefault();
                toggleModal();
            });

        modal
            .querySelector("[data-modal-overlay]")
            .addEventListener("click", (e) => {
                e.preventDefault();
                toggleModal();
            });
    });
}


const filterBox = document.querySelector('[data-filter-box]')

if (filterBox) {
    document.querySelector('[data-open-filterBox]').addEventListener('click', e=>{
        e.preventDefault()
        filterBox.classList.toggle('-translate-x-full')
        document.body.classList.toggle("overflow-y-auto");
    })

    filterBox.querySelector('[data-close-filter]').addEventListener('click', e=>{
        e.preventDefault()
        filterBox.classList.add('-translate-x-full')
        document.body.classList.add("overflow-y-auto");
    })
    filterBox.querySelector('[data-overlay-filter]').addEventListener('click', e=>{
        e.preventDefault()
        filterBox.classList.add('-translate-x-full')
        document.body.classList.add("overflow-y-auto");
    })
}


const costumSelectBoxs = document.querySelectorAll('[data-costum-select]')

if (costumSelectBoxs) {
    costumSelectBoxs.forEach(costumSelectBox=>{
        const costListItems = costumSelectBox.querySelector('[data-costum-select-list-box]')
        const inputValCost = costumSelectBox.querySelector('[fetch-selected]')

        const toggleBoxList = () =>{
            costumSelectBox.querySelector('[data-costum-select-container]').classList.toggle('translate-y-4')
            costumSelectBox.querySelector('[data-costum-select-container]').classList.toggle('invisible')
        }

        inputValCost.addEventListener('click', e=>{
            e.preventDefault()
            toggleBoxList()
        })

        let itemSelected = costListItems.querySelector('[selected-val]')
        inputValCost.value = itemSelected.innerHTML

        costListItems.querySelectorAll('[data-costum-liste-item]').forEach(listItem =>{
            listItem.addEventListener('click', e=>{
                e.preventDefault()
                inputValCost.value = listItem.innerHTML
                toggleBoxList()
            })
        })
    })
}
