let btn = document.querySelector("#hidden-menu-btn");
let li = document.querySelectorAll(".hidden-a")
let menu = document.querySelector("#hidden-menu");
btn.addEventListener("click", () => {
    menu.classList.toggle("menu-active");
    btn.classList.toggle("toggle")
})


li.forEach((item) => {
    item.addEventListener("click", () => {
        menu.classList.toggle("menu-active");
        btn.classList.toggle("toggle")
    })
})
