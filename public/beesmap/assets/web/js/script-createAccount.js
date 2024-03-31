const btnLogin = document.querySelector("#btnLogin");
btnLogin.addEventListener("click", () => {
    location.href = "http://localhost:9010/beesmap/login";
});

const btnCreate = document.querySelector("#btnCreate");
btnCreate.addEventListener("click",() => {
    location.href = "http://localhost:9010/beesmap/";
});