<?php 
    class Pizza{
        
        function pizza(String $choix){

        switch($choix){
            case "Quatres Fromages":
                echo "Vous avez choisi Quatres Fromages";
                break;
            case "Marghuerita":
                echo "Vous avez choisi Quatres Fromages";
                break;
            case "Reine":
                echo "Vous avez choisi Quatres Fromages";
                break;
            case "Fruiti di mare":
                echo "Vous avez choisi Quatres Fromages";
                break;
            case "Quatres-saison":
                echo "Vous avez choisi Quatres Fromages";
                break;
            default:
                echo "Votre choix n'appartient pas a notre menu";
                exit();
        }
    }
         
    }
?>