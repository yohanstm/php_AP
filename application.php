<?php 

class appVC {
    private $bdd; 

    public function __construct() // Corrected the constructor name
    {
        $this->bdd = new BDD();
    }

    public function afficherpage($mapage) 
    {
        // Vérifier la connexion
        if (!$this->bdd->connexion()) { // Corrigé : vérifier si la connexion a échoué
            echo "Une erreur de connexion a été trouvée !";
            return;
        }

        // Afficher la page en fonction de $mapage
        if ($mapage == 1) {
            $this->page1();
        } else if ($mapage == 2) {
            $this->page2();
        } else {
            $this->page_introuvable();
        }
    }

    public function page1()
    {
        echo "C'est la première page.";
    }

    public function page2()
    {
        echo "C'est la deuxième page.";
    }

    public function page_introuvable()
    {
        echo "Page introuvable.";
    }
}
?>
