let btn = document.querySelector(".up");
let btn_nav = document.querySelector(".btn-nav");
let container_left = document.querySelector(".container-left");
let container_close = document.querySelector(".close");
let spinner = document .querySelector(".spinner-grow")

window.onscroll = function(){
    if(window.scrollY >= 500){
        btn.style.display = "block"
    }else{
        btn.style.display = "none"
    }
}
btn.onclick = function(){
    window.scrollTo({
        left:0, 
        top:0,
        behavior:"smooth" 
    })
}
btn_nav.onclick = function(){
    container_left.style.display = "block";
}
container_close.onclick = function(){
    container_left.style.display = "none"
}