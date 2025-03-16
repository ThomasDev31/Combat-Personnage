let btn = document.querySelector('.open-modal');
let modal = document.querySelector('.modal')

btn.addEventListener('click', ()=>{
    modal.style.display = "block"
})

let close = document.querySelector('.close')

close.addEventListener('click', ()=>{
    modal.style.display = "none"
})