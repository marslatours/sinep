<head>
    <style>
        header {
        background-color: rgb(130, 0, 0, .50);
	border: 1px solid black;
        border-radius: 15px;
        }
        
        header a h1{
            margin-left: 20px;
            color: white;
        }
        
        header a {
            text-decoration: none;

        }
        
   /* h1  {grid-area: a;
	margin-right:90px;
	padding:10px;
      
    
    }  
    */
    
    nav {
        margin: 20px;
        
    }
    nav a {margin: 2px 10px;
        justify-content: space-around;
	font-family: 'Montserrat', sans-serif;
	text-transform: uppercase;
        text-decoration: none; 
    }
    
    nav a.active {
        font-size: 30px;
    }
    
    main, header,footer {
         font-family: 'Montserrat', sans-serif;
         width: 800px;
         margin: 0 auto;
    }
    div#titre {margin: 5px auto;
               font-size: 20px;
    }
    
    dt {font-weight: bold
    }
    
    footer .textHeader {
        text-align: center;
        margin: 20px;
                
            
    }
    
    
    
    
    
    
    
    
    
    </style>
</head>
<body>
    <header>
        <a href="/stasta/robynson/agenda_formation/"><h1>Gestion Stage</h1></a>      
    </header>
    <main>       
        

    <?php

    require_once 'controller/controller.php';


    // Affichage du menu
    if (isset($_GET["page"])){

        //echo "<br>".$_GET["page"];

        if ($_GET["page"]!="fiche-formation" && $_GET["page"]!="fiche-stagiaire" ){
   
            echo "<nav>
            <a href='?page=liste-formation' ";
            if ($_GET["page"]=="liste-formation" || $_GET["page"]=="annonce-formation"){echo "class='active'";} 
            echo ">Les formations</a>
            <a href='?page=liste-stagiaire' ";
            if ($_GET["page"]=="liste-stagiaire" || $_GET["page"]=="annonce-stagiaire"){echo "class='active'";} 
            echo ">Les stagiaires</a>
            </nav>";
        }
    }

    
    

    if(isset($_GET['page'])){
        switch($_GET['page']){
            case "liste-formation":
                getFormation();
                break;
            case "liste-stagiaire":
                getStagiaire();
                break;
            case "fiche-formation":
                getFicheFormation($_GET["id"]);
                break;
            case "fiche-stagiaire":
                getFicheStagiaire($_GET["id"]);
                break;
            case "ajout-formation":
                if(!empty($_POST)){
                    ajouterFormation($_POST);
                    
                }
                else{
                    echo "<h1>Ajouter une formation :</h1>
                    <br>
                    <form action='?page=ajout-formation' method='post'>

                    Intitulé : <input name='intitule'>
                    <br><br>
                    Date de début : <input type='date' name='datedebut'>
                    <br><br>
                    Durée en heures : <input name='duree'>
                    <br><br>
                    Module : <input name='module'>
                    <br><br>
                    Nombre de places : <input name='nbplaces'>
                    <br><br>
                    <input type='reset' value='Annuler'>
                    <input type='submit'>


                    </form>";
                }
                
                break;
            case "ajout-stagiaire":
                if(!empty($_POST)){
                    ajouterStagiaire($_POST);
                }
                else{
                    echo "<hr>
                    <h1>Ajouter un stagiaire :</h1>

                    <br>

                    <form action='?page=ajout-stagiaire' method='post'>

                    Nom : <input name='nom'>
                    <br><br>
                    Prénom : <input name='prenom'>
                    <br><br>
                    Sexe : <select id='monselect' name='sexe'>
                            <option></option>
                            <option value='M'>Masculin</option> 
                            <option value='F'>Féminin</option>

                    </select>
                    <br><br>
                    Ville : <input name='ville'>
                    <br><br>
                    Mail : <input type='email' name='mail'>
                    <br><br>
                    Téléphone : <input name='phone'>
                    <br><br>
                    <input type='reset' value='Annuler'>
                    <input type='submit'>

                    </form>";
                }
                break;
            default:
                
                /*
                echo "<nav>
                <a href='?page=liste-formation' >Les formations</a>
                <a href='?page=liste-stagiaire' >Les stagiaires</a>
                </nav>";
                */
                getFormation();
                break;
        }
    }
    else{
        echo "<nav>
            <a href='?page=liste-formation' >Les formations</a>
            <a href='?page=liste-stagiaire' >Les stagiaires</a>
            </nav>";
        getFormation();
    }

         
        
        
    
    
    
    
    
        
        
        
         /*
         

        
        
        getFormation();
        getStagiaire();
        echo "<hr>
    <h1>Ajouter un stagiaire :</h1>

    <br>

    <form>

    Nom : <input>
    <br><br>
    Prénom : <input>
    <br><br>
    Sexe : <input>
    <br><br>
    Ville : <input>
    <br><br>
    Mail : <input>
    <br><br>
    Téléphone : <input>

    </form>


    <hr>
    <h1>Ajouter une formation :</h1>

    <br>

    <form>

    Intitulé : <input>
    <br><br>
    Date de début : <input>
    <br><br>
    Durée en heures : <input>
    <br><br>
    Module : <input>
    <br><br>
    Nombre de places : <input>


    </form>";
    */
         
         
    

    /*
    if (isset($_GET["id"])){
        echo "<br>".$_GET["id"];
    }
    */


    ?>
        
        

    </main>
    <footer>
        <div class="textHeader">Elan Formation - Juillet 2018</div>
    </footer>
</body>


