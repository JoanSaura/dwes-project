const imgBG = document.getElementById("full-site");
const HiddenMenu = document.querySelector("#hidden-menu");

function ShowHiddenMenu() {
    if (HiddenMenu) {
        HiddenMenu.style.display = "flex";
    } else {
        HiddenMenu.style.display = "none";
    }
}
