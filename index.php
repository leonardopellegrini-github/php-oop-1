<?php 

class Movie {

  //variabili d’istanza
  public $titolo;
  public $regista;
  public $tempo;

  //costruttore
  public function __construct($_titolo, $_regista, $_tempo){
         $this->titolo =  $_titolo;
         $this->regista =  $_regista;
         $this->tempo =  $_tempo;
  }

  public function getTitle(){
    return $this->titolo;
  }

  //metodo
  public function minutesToHours(){
     return $this->tempo / 60;
  }

}


$bastardi = new Movie ("Bastardi Senza Gloria", "Tarantino", 240);

var_dump($bastardi);

echo "Il titolo è ". $bastardi->getTitle() . " e dura " . $bastardi->minutesToHours() . " ore."  ;


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-OOP-1</title>
</head>
<body>

<h3 scoped="bastardi">
<php echo $bastardi>
</h3>
  
</body>
</html>