<?php 

class appVC {
    

        public function _construct()
        {

        }

        public function afficherpage($mapage) 
        {
            if ($mapage == 1){ $this -> page1();}
            else if ($mapage == 2) {$this -> page2();}
            else  $this -> page_introuvable();
            // else echo "c'est la premiere page ";
        }


        public function page1(){
            echo "c'est la premiere page";
        }

        public function page2(){
            echo "c'est la deuxieme page";
 
    }

    public function page_introuvable(){
        echo "c'est la premierre page ";
    }
}
?>