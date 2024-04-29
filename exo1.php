<h1>Exercice 1</h1>

<p>Calculer l'âge exact d'une personne à 
    partir de sa date de naissance (en années, mois, jours).</p>

<?php

/*
    commentaire sur plusieurs lignes
*/

// DECLARATION DE VARIABLES


Class CalcAge {

    public $_dateCouranteJ=000 ;
    public $_dateCouranteM=000 ;
    public $_dateCouranteA=000 ;
    public $_dateNaissanceJ=000 ;
    public $_dateNaissanceM000 ;
    public $_dateNaissanceA=000 ;
    public function birth($j,$m,$a) {
       $this->_dateNaissanceJ=$j;
       $this->_dateNaissanceM=$m;
       $this->_dateNaissanceA=$a;
       
    }
    public function currentDay($j,$m,$a) {
        $this->_dateCouranteJ=$j;
        $this->_dateCouranteM=$m;
        $this->_dateCouranteA=$a;
        
     }
     public function age() {
        $age_jour=$this->_dateCouranteJ-$this->_dateNaissanceJ;
        $age_mois=$this->_dateCouranteM-$this->_dateNaissanceM;
        $age_annee=$this->_dateCouranteA-$this->_dateNaissanceA;
        
        echo "Age de la personne : $age_annee  ans,
        $age_mois mois,
        $age_jour jour,<br>";
     }
    
}

$phrase = "Notre formation DL commence aujourd'hui";
$_nbcharacters=10;
$calc_age = new CalcAge();
$calc_age->birth(17,1,1985);
$calc_age->currentDay(21,05,2018);
$calc_age->age();
