const arrow =  document.querySelector(".arrow_bottom");
const searchDiv = document.querySelector(".search_container");

document.querySelector(".search_input").addEventListener("click", function() {
    arrow.classList.toggle('rotate180');
    searchDiv.classList.toggle('open');
});
