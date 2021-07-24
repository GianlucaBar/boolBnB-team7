
document.addEventListener('DOMContentLoaded', nav)
function nav(){
    const burger = document.getElementById("ms-burger");
    const nav = document.getElementById("ms-burger-menu");
    burger.addEventListener('click', ()=>{
        nav.classList.toggle('d-none')
    })
}

// document.addEventListener('DOMContentLoaded', seeFilters)
// function seeFilters(){
//     const burger = document.getElementById("home-burger");
//     const nav = document.getElementById("home-burger-menu");
//     burger.addEventListener('click', ()=>{
//         nav.classList.toggle('d-none')
//     })
// }