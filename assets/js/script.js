/***********************************
 * MENU 
 ************************************/

// je crée une fonction
function subMenu(menuButton) {
    const button = document.querySelector(menuButton);
    console.dir(button.nextElementSibling);
    const menuFrame = button.nextElementSibling;
    console.log(button.childNodes);
    const icone = button.childNodes[1];
    menuFrame.style.transition = "all .5s";
    menuFrame.style.maxHeight = "0";
    menuFrame.style.overflow = "hidden";
    menuFrame.classList.toggle("menu-category-items");
    icone.classList.toggle("fa-caret-down");
    icone.classList.toggle("fa-caret-right");
  
    button.addEventListener("click", () => {
      icone.classList.toggle("fa-caret-down");
      icone.classList.toggle("fa-caret-right");
      menuFrame.classList.toggle("menu-category-items");
  
      if (menuFrame.style.maxHeight === "40rem") {
        menuFrame.style.maxHeight = "0";
        button.classList.toggle("category-active");
      } else {
        menuFrame.style.maxHeight = "40rem";
        button.classList.toggle("category-active");
      }
    });
  }
  
  // j'appelle ma fonction
  
  subMenu("#clinique");
  subMenu("#conseils");