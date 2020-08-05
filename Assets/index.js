document.addEventListener("scroll", function(event) {
    let width = (window.innerWidth < 500) ? 100 : 200;
    let scrolled = false;
    if(event.path[1].scrollY >= width) {
        document.querySelector("#header").classList.remove("unscrolled");
        document.querySelector("#header").classList.add("header-scrolled");
        scrolled = true;
    }
    else {
        document.querySelector("#header").classList.remove("header-scrolled");
        if(scrolled) {
            document.querySelector("#header").classList.add("unscrolled"); 
        }
    }
})