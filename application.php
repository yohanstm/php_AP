<?php 

class NomClass {
    
    // on declare les attribut ici 
    private $monattribut; // 

        public function _construct()
        {
            $this -> monattribut = 10;
        }

        public function getMonattribut() // on veut qu'il soit compris entre 0 et 10
        {
            return $this -> monattribut = 10;
        }

        public function setmonattribut($value)
        {
            if(($value >=0) && ($value < 10))
            { 
                $this -> monattribut = $value; 
                
            }
            return $this -> monattribut;
            
            
            
        }
    }

?>