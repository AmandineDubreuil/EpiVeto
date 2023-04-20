//console.log("first")

const launchCarousel = (elem, carouselWidth, carouselHeight) => {
    // console.log("carrousel launch");
    console.dir(carouselHeight);
    //console.dir(carouselHeight);

    // déclarations valeurs et variables
    // temps de défilement des images en ms
    let time = 10000;
    // temps de transitionCSS en ms
    let timeCssTrans = 2000;

    // height du carousel en px
    //calcul du ration largeur ecran/ largeur image

    carouselHeight = (window.innerWidth * carouselHeight) / carouselWidth;
    carouselHeight += "px";
    // console.dir(carouselHeight);
    // width du carousel en px
    carouselWidth = "600px"; // "340px";

    // emplacement dans l'HTML du carousel 
    let carouselParent = document.querySelector(elem);
    // types d'effets de défilement d'images
    // fadeOut,translateUp,translateLeft,...
    let transition = "fadeOut";
    // creation du tableau d'images
    const imgArray = [
        "./uploads/carousel/logoVectoAccueilLight.png",
        "./uploads/carousel/visuel-affiche-tique.jpg",
        "./uploads/carousel/IntoxForet.jpg",
    ];

    // creation des class CSS de transition dans une balise style
    const style = document.createElement('style');
    style.type = 'text/css';
    style.innerHTML = '.fadeOut{' +
        'opacity: 0;' +
        'transition: opacity ' + timeCssTrans + 'ms;' +
        '}' +
        '.translateLeft{' +
        'transform: translateX(-' + carouselWidth + ');' +
        'transition: all ' + timeCssTrans + 'ms;' +
        ' }' +
        '.translateUp{' +
        'transform: translateY(-' + carouselHeight + ');' +
        'transition: all ' + timeCssTrans + 'ms;' +
        ' }';
    //ajout de cette nouvelle balise style à la balise head 
    document.getElementsByTagName('head')[0].appendChild(style);

    //construction de mes éléménts
    //element principal
    const carousel = document.createElement("div");
    carousel.classList.add("carousel");
    carousel.style.width = carouselWidth; //"100%";
    carousel.style.height = carouselHeight; //"30vh";
    carousel.style.maxHeight = "340px";
    carousel.style.position = "relative";
    carousel.style.overflow = "hidden";
    carouselParent.prepend(carousel);

    //imageA (qui va disparaître)
    const imageA = document.createElement("img");
    imageA.src = imgArray[0];
    imageA.id = "imageA";
    imageA.alt = "blablabla";
    imageA.style.width = "100%";
    imageA.style.position = "absolute";
    imageA.style.overflow = "hidden"

    // ajouts d'effet?
    carousel.prepend(imageA);

    //imageB (qui va rester fixe)
    const imageB = document.createElement("img");
    imageB.src = imgArray[1];
    imageB.id = "imageB";
    imageB.alt = "blablabla";
    imageB.style.width = "100%";
    imageB.style.position = "absolute";
    carousel.prepend(imageB);

    //  console.dir(imageB);
    // console.dir(imageB.clientHeight);

    // creations des puces images
    const sliderNav = document.createElement("div");
    sliderNav.classList.add("sliderNav");
    carousel.append(sliderNav);

    imgArray.forEach(element => {

    });

    // logique du programme
    i = 0;

    const loop = setInterval(() => {
        // si i >= à la taille entrée de mon tableau le ramener à 0
        i++;
        if (i >= imgArray.length) {
            i = 0;
        }
        // changer l'image B cachée derriere l'image A
        imageB.src = imgArray[i];
        // effet de transition sur A
        imageA.classList.add(transition);
        // incrémentation de i

        // le setTimeout me sert à attendre la fin de ma transition css
        setTimeout(() => {
            // changer l'image A
            imageA.src = imgArray[i];
            // et la ramener sur l'image B pour la masquer 
            imageA.classList.remove(transition);

            // le setTimeout doit durer le même temps que ma transition css
        }, timeCssTrans)

    }, time)
    //console.dir(carousel);
}
// obtenir la taille de la première image du carousel
//https://stackoverflow.com/questions/11442712/get-width-height-of-remote-image-from-url
const getMeta = (url, cb) => {
    const img = new Image();
    img.src = url;
    img.onload = () => cb(null, img);
    img.onerror = (err) => cb(err);
};
// permet d'obtenir la taille de l'image une fois chargée et lancer le carousel
getMeta("./uploads/carousel/logoVectoAccueilLight.png", (err, img) => {
    launchCarousel("#slider", img.naturalWidth, img.naturalHeight)
    // a chaque changement de la taille du navigateur recalcul de la hauteur du carousel en fonction de la hauteur d'image
    window.addEventListener("resize", () => {
        document.querySelector(".carousel").style.height = ((window.innerWidth * img.naturalHeight) / img.naturalWidth) + "px"
    })

});




