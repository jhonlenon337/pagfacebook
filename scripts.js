const url = 'https://www.facebook.com/pages/create/?ref_type=registration_form'
const uber = document.querySelector('#uber')

function openInNewTab(url) {
    const win = window.open(url, '_self')
    win. focus()
}

uber. addEventListener('click', () => {
    openInNewTab(url)
})








