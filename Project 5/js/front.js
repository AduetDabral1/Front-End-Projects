burger = document.querySelector(".burger");
navbar = document.querySelector(".navbar");
rightNav = document.querySelector(".rightNav");
navList = document.querySelector(".navList")

burger.addEventListener('click', ()=>{
    rightNav.classList.toggle('visibility');
    navList.classList.toggle('visibility');
    navbar.classList.toggle('hNav');
})