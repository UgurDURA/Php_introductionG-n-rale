<?php

$file="bd/base.sqlite";    //Connextion sqlite

try{
    $db=new PDO("sqlite:$file");

    
}
catch (PDOException $e)
{
    exit("Erreur de connexion".$e->getMessage());

}

$host="localhost";    //connection MySQL
$login="username"
$mdp='password';
$db"base";

try{

    $db=new PDO("mysql:host=$host;dbname=$db",$login,$mdp);
}
catch (PDOException $e)
{
    exit("Erreur de connexion".$e->getMessage());

}




$x=3+4;
$x="bonjour";
$tab[3]=10;
$tab1["Avril"]=4;
$info=['nom'=>'john','prenom'=>'Doe','age'=>30];

$d=date("D");

if($d=="Fri")
{
    echo "Hello!<br />";
    echo "Have a nice weekend!";

}
else{
    echo "Have a nice day!";
} 


switch($x)
{
    case 1: echo "N 1"; break;
    case 2: echo "N 2"; break;
    case 3: echo "N 3"; break;
    case 4: echo "N 4"; break;
    case "one": echo "1 en anglais";
    default: print("autre");
}

$i=0;

while($i<=5)
{
    echo "le nb est $i <br/>";
    $i++;

}

for($i; $i<=10;$i++)
{
    $sq=$i*$i;
    echo "$i: $sq <br>";
}

foreach($tab as $valeur)
{
    print("la valeur courante est: $valeur");

}

function essai ($nom,$prenom)
{
    echo $nom.$prenom."<br/>";

}

essai("jean","Lemoigne");



// include("nom_fichier");
// include_once("nom_fishier");

// require("nom_fishier");
// require_once("nom_fishier");


class Exemple   //Object

{
    //attribut

    public $var = 'valeur par defaut';

    // methode
    public function affiche ()
    {
        echo $this -> var;

    }
}


class Exemple2  //constructeur
{
    public $bar;

    public function __construct()
    {

        $this->bar= function()
        {
            return 42;

        };

    }
}

// $instance= new Example (); //instances
// //en utilisant une variable:

// $className="Exemple";
// $instance = new $className();

// $obj = new Example2();
// echo $obj->var. "\n".$obj->bar();

// class Exemple3    //acces statique & Constantes
// {
//     public static $bar2;

//     const GRANDE_VALEUR=50;

// }

// Exemple3::bar2 = 10;
// Exemple3::bar2=Exemple3::GRANDE_VALEUR;

class ExempleH extends Exemple    //Heritage

{
    //redefinition de la methode du parent

    function affiche()
    {
        echo "Extending class \n";
        parent::affiche();

    }
}


// try{

//     //pour lever l'exception
//     throw new Exception("Erreur");

//     catch(Exception $e)
//     {
        
//     }
// }

<form action = "action.php" method ="post">

Nom:

<input type= "text" name ="nom">

Prenom:

<input type="text" name="prenom">
<input type="submit" value "Envoyer">
</form> 






echo
"
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Premiere page</title>
    </head>
    <body>
        <p>Welcome </p>
        <p> $sq </p>";

    $t = [ "a" =>1, "b" => 2, "c"=>4] ;

    foreach( $t as $clef=> $element)
    {
        echo "<p> $clef : $element </p>";

    }





    echo"
    </body>

</html>
";


