export const EditProfile = (element = null, userProfile= null) => {
    if (element == null) {
        return
    }
    element.addEventListener('click', (e) => {
        e.preventDefault()
        userProfile.classList.remove('-translate-y-full')
    })
}

export const CloseProfile = (element = null, userProfile= null) => {
    if (element == null) {
        return
    }
    element.addEventListener('click', (e) => {
        e.preventDefault()
        userProfile.classList.add('-translate-y-full')
    })
}

