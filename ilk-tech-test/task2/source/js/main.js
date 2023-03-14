let openMenu = document.getElementById("openMenu");
let closeMenu = document.getElementById("closeMenu");
let nav = document.querySelector("nav");
let body = document.querySelector("body");

window.onload = () => {
	openMenu.addEventListener("click", () => {
		nav.classList.add("active");
		body.classList.add("overflow-hidden");
	});

	closeMenu.addEventListener("click", () => {
		nav.classList.remove("active");
		body.classList.remove("overflow-hidden");
	});
};
