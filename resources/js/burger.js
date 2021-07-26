
document.addEventListener('DOMContentLoaded', nav)

function nav(){
    const burger = document.getElementById("ms-burger");
    const nav = document.getElementById("ms-burger-menu");
    burger.addEventListener('click', ()=>{
        // nav.classList.toggle('d-none')
        if(nav.classList.contains('d-none')){
            nav.classList.remove('d-none');
            nav.classList.add('d-block');

        } else{
            nav.classList.remove('d-block');
            nav.classList.add('d-none');
        }
    })
}
