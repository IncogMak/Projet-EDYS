<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/CSS/styles.css">
  <title>Mysuggestion</title>
</head>
<style>
  /*-----------------------------------------------------Section Body----------------------------------------------*/
  * {
    /*Marge interrieur */
    margin: 0;
    /*Marge exterrieur*/
    padding: 0;
    text-decoration: none;
    list-style: none;

  }

  body {
    font-family: "Arial Rounded";
    height: 100%;
    /*Nouveau code ajouter 1 1H43*/
    margin: 0;
    padding: 0;
    background-color: #b1961f;
  }

  /*---------------------------------------------- Fin de la partie Body------------------------------------------*/


  /*-----------------------------------------------Cette section est pour le Header et ses classes  ------------------------------------------------*/
  /* Positionnement du texte sur grand écran */
  header .header-content {
    position: relative;
    top: 25%;
    left: 0;
    max-width: 40%;
    transform: none;
    text-align: left;
    color: #573823;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', "Geneva", Verdana, sans-serif;
  }

  header .header-content h1 {
    font-size: 3.5em;
    margin-bottom: 15px;
    white-space: nowrap;
    font-family: bold;
    padding: 100px;
    margin-left: 50%;
    margin-right: 50%;
    /*font-size: 25px;*/
  }

  header .header-content {
    font-size: 1.1em;
    line-height: 1.5;
  }

  header .header-content p {
    position: relative;
    font-family: 'Inter';
    white-space: pre-line;
    font-style: normal;
    font-size: 24px;
    line-height: 1.2em;
    font-weight: bold;
    left: 130%;


  }

  .header-content .Img-Header {
    position: absolute;
    top: 250px;
    left: 30px;
    margin: 0;
    padding: 0;
  }

  /*---------------------------------------------------------Fin de la section Header ----------------------------------------------------------*/


  /*--------------------------------------------------------Cette section c'est pour la partie Nav-bar-----------------------------------------*/
  .navBar {
    position: absolute;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    width: 100%;
    /*C'est lui la qui permet de faire sortie cette bar de navigation qu'on voit */
    box-sizing: border-box;
    text-align: center;
    /*top: 0;
  left: 0;*/
    background-color: #8A532E
      /*background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 1));: permet de faire une image en degradé*/
      /* C'est ici que le header peut changer de couleur*/
  }

  .navBar a {
    color: white;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 18px;
    font-style: italic;
  }

  /*.navBar .logo-img {
  width: 80px;
  height: 80px;
  border-radius: 30px;
}*/

  .navBar a.logo {
    font-size: 3.2em;

  }

  .navBar .nav-link ul {
    display: flex;
    /*Nouveau code ajouter 5/06 15h18
  pour centre */
    margin-right: 60vh;
    /*
  Eudes : Gere Page Etudiant 

  */

  }

  .navBar .nav-link {
    display: flex;
    align-items: center;
  }

  .navBar .nav-link ul li {
    margin: 20px;
    /*margin-left: 50px;*/
  }

  .navBar .nav-link ul li:hover {
    background-color: rgba(0, 0, 0, 0.1);
  }

  .navBar .nav-link ul li.Active a {
    color: red;
    font-weight: 650;
  }

  /*.menu-btn {
  display: none;
  background-color: transparent;
}*/

  .navBar .menu-btn {
    display: none;
    width: 35px;
    position: absolute;
    top: 20px;
    right: 20px;
    border-radius: 20%;
    /* background-color: transparent;
  width: 50px;
  height: 50px;
  */
    /* margin: 20px;*/
  }

  hr {
    border: none;
    height: 2px;
    background-color: #573823;
    margin: 20px 0;
    margin-top: 10%;
    width: 90%;
    margin-left: 60px;
  }

  .separat {
    position: absolute;
    top: 390%;
    margin-left: 60px;
    width: 90%;
  }

  /*----------------------------------------------------Fin de la section Nav-Bar---------------------------------------*/

  /*------------------------------------------------Debut de la Section Tache-----------------------------------------------*/
  .Tache {
    position: relative;
    left: 0;
    max-width: 100%;
  }

  .Tache h2 {
    position: relative;
    text-align: center;
    font-size: 50px;
    color: #8A532E;
    font-family: bold;
    margin-top: 5%;
    margin-bottom: 5%;
  }

  .Tache p {
    position: absolute;
    color: #573823;
  }

  /*------Section Exprimer----*/
  .Tache .Exprimer p {
    width: 720px;
    left: 50%;
    top: 4%;
    white-space: pre-line;
    font-size: 24px;
    line-height: 26px;
    margin: 3%;
  }

  .Exprimer .Img-Exprimer {
    position: relative;
    display: flex;
    width: 50%;
    height: 20%;
    padding: 26px;
    margin-top: -40px;
  }

  /*------------Fin section Exprimer---------*/


  /*----------Section Amelioration-----------*/

  .Tache .Amelioration p {
    white-space: pre-line;
    font-size: 24px;
    line-height: 26px;
    padding: 10px;
    top: 53%;
    margin: 15px;

  }

  .Amelioration .Img-Amelior {
    position: relative;
    width: 45%;
    height: 60%;
    left: 53%;
    margin: 15px;

  }


  /*-------Section Construit-Environnement-------*/
  .Tache .Construit-Environnement p {
    white-space: pre-line;
    font-size: 24px;
    line-height: 26px;
    left: 50%;

  }


  /*---------------------------------------Fin de la section Tache------------------------------------------------*/
  #Contact {
    position: absolute;
    top: 430%;
  }


  @media screen and (max-width: 850px) {
    .navBar {
      padding: 0;

    }

    .navBar .menu-btn {
      display: block !important;
      width: 45px;
      height: 45px;
      top: 10px;
      padding: 0px;
      margin: 0px;

    }

    .navBar .nav-link {
      top: 0;
      left: 0;
      position: absolute;
      background-color: rgba(255, 255, 255, 0.356);
      width: 100%;
      backdrop-filter: blur(10px);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-left: -100%;
      transition: all 0.4s ease-in-out;

      /*Texte rajouter a supprimer peut etre */
    }

    .navBar .nav-link.mobile_menu {
      position: absolute;
      margin-left: 0;
      margin-right: 0;
    }

    .navBar .nav-link ul {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-left: 10px;
    }

    .navBar .nav-link ul li {
      margin: 20px 0;
      font-size: 1.2em;
    }

    /*.navBar .logo-img {
    position: absolute;
    width: 80px;
    height: 80px;
    top: 0px;
    left: 0px;
    padding: 10px;
    margin: 10px;
  }*/
    .navBar a.logo {
      font-size: 50px;
      font-family: Georgia, 'Times New Roman', Times, serif;
    }

    .navBar .header-content {

      align-items: center;
      top: 50%;
      /* Remets le top à 50% */
      left: 50%;
      /* idem pour left */
      transform: translate(-50%, -50%);
      text-align: center;
      max-width: 90%;
      margin: 0 auto;

    }

    /* Texte centré en responsive */
    header .header-content {
      /*position: relative;
    top: auto;
    left: auto;
    transform: none;
    text-align: center;
    max-width: 90%;
    margin: 30px auto;*/
      position: absolute;
      /* assure la position absolue */
      top: 50%;
      /* centrer verticalement */
      left: 50%;
      /* centrer horizontalement */
      transform: translate(-50%, -50%);
      max-width: 90%;
      margin: 0 auto;
      text-align: center;
    }

    header .header-content h1 {
      font-size: 2.5em;
      margin-bottom: 15px;
      display: flex;
      font-size: bold;

    }

    header {
      height: 100vh;
      /* s'assurer que la hauteur reste plein écran */
      width: 100vw;
      background-position: top center;
    }

    header .header-content p {
      font-size: 1.1em;
      line-height: 1.5;
    }

    .menu-ouvert header .header-content {
      filter: blur(15px);

      user-select: none;
      transform: filter 0.4s ease-in-out;
    }

  }
</style>

<body>
  <!-- La bar de navigation pour acceder au autres pages-->
  <nav class="navBar">
    <a href="#" class="logo">MySuggestion</a>
    <div class="nav-link">
      <!--La liste non ordonnee pour naviguer entre les pages-->
      <ul>
        <li class="Active"><a href="Acceuille">Acceuille</a></li>
        <li><a href="Sugest-Etudiant">Suggestion</a></li>
        <li><a href="#Contact">Contact</a></li>
        <li><a href="A-propos.html">A propos De</a></li>
      </ul>
    </div>
    <img src="image/menu-btn.jpg" alt="menu-btn" class="menu-btn">
  </nav>
  <header>
    <!-- Le texte contenue dans la bar de navogation Expliquant brievement le but du site -->
    <div class="header-content">
      <h1>Bienvenue sur Mysuggestion</h1>
      <img src="image/Fond_Header.jpg" alt="Img-Header" class="Img-Header">
      <p>Une plateforme d'expression pour étudiants et enseignants.
        Cette plateforme a été pensée pour donner la parole à tous les
        acteurs de notre communauté éducative.Que vous soyez étudiant ou enseignant,
        vous avez ici l'opportunité de partager vos idées, proposer des améliorations
        ou tout simplement vous exprimer. Votre avis compte,
        et c’est ensemble que nous construirons un environnement plus dynamique,
        plus juste et plus efficace. Parcourez les différentes sections,
        découvrez les suggestions des autres et contribuez à faire évoluer notre cadre de vie académique.
      </p>
    </div>
  </header>

  <hr>


  <div class="Tache">
    <div class="Exprimer">
      <h2>S'exprimer</h2>
      <img src="image/Exprimer2.jpg" alt="Img-Exprimer" class="Img-Exprimer">
      <p>
        🎓 Parce qu’une bonne communication améliore la vie scolaire…
        Cet espace donne la parole à ceux qui la vivent au quotidien.
        Que vous souhaitiez partager, évaluer ou proposer, votre avis compte.

        💬 Exprimez-vous librement.
        Étudiants comme enseignants, vous avez la parole !

        👨‍🎓 Étudiants
        • Donnez votre avis sur les cours suivis
        • Évaluez vos enseignants de manière constructive

        👨‍🏫 Professeurs
        • Partagez votre retour sur l’implication des étudiants
        • Signalez les comportements positifs ou problématiques

        ✅ Un espace respectueux et objectif
        🗣️ Contribuez à une meilleure expérience académique pour tous !
      </p>
    </div>

    <hr>

    <div class="Amelioration">
      <h2>Proposer des ameliorations</h2>
      <img src="image/code.jpg" alt="Img-Amelior" class="Img-Amelior">
      <p>
        Sur My Suggestion, chaque étudiant devient une force de proposition.
        Une remarque bien placée peut faire évoluer un cours, une règle
        ou un espace. Proposer, c’est montrer qu’on tient à son école et
        qu’on veut l’améliorer. C’est aussi une manière de participer activement
        à la vie scolaire.Même les enseignants accueillent ces idées
        avec ouverture et réflexion.

        🧠 Proposer, c’est réfléchir à ce qui pourrait mieux fonctionner
        au quotidien.

        📣 Exprimer une idée, c’est ne plus subir ce qui dérange, mais agir.

        🔍 Relever un problème, c’est déjà avancer vers une solution.

        🛠️ Chaque suggestion peut améliorer l’ambiance, les outils
        ou l’organisation.

        🤝 Contribuer, c’est montrer qu’on fait partie de la vie de l’école,
        pas à côté.
      </p>
    </div>

    <hr>

    <div class="Construit-Environnement">
      <h2>Construire un environnement ideal</h2>
      <img src="" alt="Img-Construit-Environnement" class="Construit-Environnement">
      <p>
        Un bon cadre d’étude, ça se construit ensemble, pas tout seul.
        Quand chacun fait un effort, l’ambiance devient plus sereine,
        plus motivante.Grâce à My Suggestion, élèves et profs peuvent
        bâtir un espace commun. Un environnement idéal, c’est un lieu où
        on se sent bien, respecté et soutenu. Et tout commence par une idée,
        un geste, une volonté partagée.

        🧱 Construire ensemble, c’est penser à tous, pas seulement à soi.

        🌱 Un bon environnement naît d’actions simples mais continues.

        🎯 Créer les bonnes conditions, c’est favoriser l’écoute, le respect et
        le confort.

        🤲 Participer, c’est prendre soin du lieu où on vit une grande partie de
        sa journée.

        🔄 Un cadre idéal, c’est le résultat d’une volonté partagée, pas d’un miracle.
      </p>
    </div>
  </div>

  <hr class="separat">

  <section id="Contact">
    <h2>Contactez-nous</h2>
    <form action="#" method="POST">
      <div class="Information-User">
        <label for="nom">*Nom:</label>
        <input type=" text" name="nom" placeholder="Ex: Jean Dubois" require>
        <label for="email">*E-mail</label>
        <input type="email" name="email" placeholder="xyz1234@gmail.com" require>
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" placeholder="Cocody II Plateau">
        <input type="submit" value="Soumettre">
        <label for="msg">Message</label>
        <textarea name="msg" rows="10" cols="50" class="msg-text" placeholder="Votre Message ..."></textarea>
      </div>
    </form>
  </section>

</body>


<!--Le scripte qui permet d'avoir un effet de bar de navigation coulissante sur le coté gauche de la page web -->
<script>
  const menuBtn = document.querySelector(".menu-btn")
  const navLink = document.querySelector(".nav-link")
  const body = document.body

  menuBtn.addEventListener('click', () => {
    navLink.classList.toggle('mobile_menu');
    body.classList.toggle('menu-ouvert');
  })
</script>


</html>