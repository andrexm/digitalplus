let navbar = document.querySelector("#navbar-default")
let toggleBtn = document.querySelector(".navbar-toggle")

toggleBtn.addEventListener("click", () => {
  navbar.classList.toggle("hidden")
})
