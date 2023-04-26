import menuContent from "./components/menuContent.js";
const ulPrincipal = document.querySelector(".menuJS");

menuContent.map((value, index) => {
  const menuEntrie = document.createElement("li");
  const chevron = document.createElement("i");
  chevron.classList.add("fa-solid");
  chevron.classList.add("fa-chevron-down");
  menuEntrie.innerText = value.nom;
  menuEntrie.append(chevron);
  ulPrincipal.append(menuEntrie);
  menuEntrie.classList.add("menuEntrie");

  menuEntrie.addEventListener("click", () => {
    //console.dir(value);

    // 1 ouvrir fenetre du sous-menu
    if (document.body.contains(document.querySelector("#sousUl" + index))) {
      console.log("yatahhh !!!");
      document.querySelector("#sousUl" + index).remove();
    } else {
      menuContent.map((value3, index3) => {
        if (document.body.contains(document.querySelector("#sousUl" + index3))) {
          document.querySelector("#sousUl" + index3).remove();
        }
      });
      const sousUl = document.createElement("ul");
      sousUl.id = "sousUl" + index;
      sousUl.classList.add("sousUl");
      menuEntrie.append(sousUl);
      value.sousMenu.map((value2, index) => {
        // console.dir(value.sousMenu[index].nom);
        const sousMenuEntrie = document.createElement("li");
        sousMenuEntrie.innerText = value2.nom;
        sousUl.append(sousMenuEntrie);
      });
    }
  });
});