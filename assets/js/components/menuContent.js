const menuContent = [
    {
        nom: "Accueil",
        url: "./index.php",
    },
    {
        nom: "La Clinique",
        url: "",
        sousMenu: [
            {
                nom: "Notre Clinique",
                url: "./clinique.php",
            },
            {
                nom: "Nos Équipements",
                url: "./equipements.php",
            },
            {
                nom: "Nos Honoraires",
                url: "#",
            },
        ],
    },
    {
        nom: "L'équipe",
        url: "./equipe.php",
       
    },
    {
        nom: "Les Conseils",
        url: "",
        sousMenu: [
            {
                nom: "Nos conseils",
                url: "#",
            },
            {
                nom: "Chiens",
                url: "#",
            },
            {
                nom: "Chats",
                url: "#",
            },
            {
                nom: "NAC",
                url: "#",
            },
            {
                nom: "Infos Pratiques",
                url: "#",
            },
        ],
    },
];

export default menuContent;
