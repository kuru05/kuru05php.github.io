

<?php
class Menu{
    private $index;
    private $_index;
    private $seasons;
    private $_seasons;
    private $about;
    private $_about;

    

    public function __construct(){
        $this->index= "index.php";
        $this->_index="../index.php";
        $this->seasons="fr/seasons.php";
        $this->_seasons="seasons.php";
        $this->about="fr/about.php";
        $this->_about="about.php";
    }
    public function header(){
        echo "<li><a href=" . $this->index . "> Home</a></li>\n";
        echo "<li><a href=" . $this->seasons . "> Seasons</a></li>\n";
        echo "<li><a href=" . $this->about . "> About</a></li>";
    }
    public function _header(){
        echo "<li><a href=" . $this->_index . "> Home</a></li>\n";
        echo "<li><a href=" . $this->_seasons . "> Seasons</a></li>\n";
        echo "<li><a href=" . $this->_about . "> About</a></li>";
    }
}

/* Création de classes et interfaces 

Une image, un titre H2 et un paragraphe */

/*class Character{
}

interface GenerateCode
{
    public function generateHTML();
}
class GameCharacter extends Character{
    //Propriétés ( /Attributs)
    public $Name;
    public $Picture;
    public $Description;

    //Méthodes ( /Fonctions)
    public function __construct($Name, $Picture, $Description)
    {
        $this -> Name = $Name;
        $this -> Picture = $Picture;
        $this -> Description = $Description;

        echo "<h2>". $this -> Name. "</h2>";
    }

    public function _destruct()
    {
        
    }
    public function generateHTML()
    {

    }
    */