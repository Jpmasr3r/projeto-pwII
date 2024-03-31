const lblLogo = document.querySelector("#lblLogo");
lblLogo.addEventListener("click", () => {
    location.href = "http://localhost:9010/beesmap/";
})

const btnLoginOut = document.querySelector("#btnLoginOut");
btnLoginOut.addEventListener("click", () => {
    location.href = "http://localhost:9010/beesmap/login";
})