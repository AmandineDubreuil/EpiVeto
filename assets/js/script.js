/***********************************
 * MENU 
 ************************************/

// je crée une fonction
function subMenu(menuButton, menuBloc) {
    const button = document.querySelector(menuButton);
    const bloc = document.querySelector(menuBloc);
    console.dir(menuBloc)
    // console.dir(button.nextElementSibling);
    const menuFrame = button.nextElementSibling;
    // console.log(button.childNodes);
    const icone = button.childNodes[1];
    menuFrame.style.transition = "all 0s";
    menuFrame.style.maxHeight = "0";
    menuFrame.style.overflow = "hidden";
    menuFrame.classList.toggle("menu-category-items");
    icone.classList.toggle("fa-caret-down");
    icone.classList.toggle("fa-caret-right");

    bloc.addEventListener("mouseenter", () => {
        icone.classList.toggle("fa-caret-down");
        icone.classList.toggle("fa-caret-right");
        menuFrame.classList.toggle("menu-category-items");
        console.dir(menuFrame)

            menuFrame.style.maxHeight = "40rem";
            button.classList.toggle("category-active");
    });
    bloc.addEventListener("mouseleave", () => {
        icone.classList.toggle("fa-caret-down");
        icone.classList.toggle("fa-caret-right");
        menuFrame.classList.toggle("menu-category-items");
            menuFrame.style.maxHeight = "0";
            button.classList.toggle("category-active");
    });
}

// j'appelle ma fonction

subMenu("#clinique", "#blocClinique");
subMenu("#conseils", '#blocConseils');
subMenu("#admin", "#blocAdmin");

