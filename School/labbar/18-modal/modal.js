// Element vi behöver

const modalEl = document.querySelector('#exampleModal')
const formEl = document.querySelector('#exampleModal form')
const loginEl = document.querySelector('#login')
const statusEl = document.querySelector('#status')

console.log(bootstrap)
let loginModal = new bootstrap.Modal(
    '#exampleModal',
    {
        // Options here
        backdrop: "static"
    }
)
// loginEl.addEventListener('click', () => {
//     loginModal.hide()
// })

formEl.addEventListener('submit', (e) => {
    e.preventDefault()
    const postData = new FormData(formEl)
    fetch('./login.php', {
        method: 'post',body: postData
    }).then(data => {
        console.log(data)
    })
})