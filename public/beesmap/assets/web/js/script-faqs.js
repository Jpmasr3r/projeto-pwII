const lblFaqs = document.querySelectorAll(".lblFaq");

lblFaqs.forEach(e => {
    let clicked = false;
    e.querySelector("h3").style.display = "none";
    e.addEventListener("click",() => {
        if(clicked) {
            e.querySelector("h3").style.display = "none";
        }else {
            e.querySelector("h3").style.display = "flex";
        }
        clicked = !clicked;
    })
})