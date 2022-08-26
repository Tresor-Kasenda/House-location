export const createLoader = () => {
    const loader = document.createElement('div')
    loader.classList.add('spinner-border')
    loader.innerHTML = "<div class='visually-hidden'></div>"
    document.body.appendChild(loader)
}

export const removeLoader = () => {
    const loader = document.querySelector('.app-loader')
    document.body.removeChild(loader)
}
