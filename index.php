<?php 

class Movie {
  public $title;
  public $description;
  public $year;
  public $genres;
  public $checkYearVisibility = false;

  public function __construct(string $title, string $description, int $year, array $genres = [])
  {
    $this->title = $title;
    $this->description = $description;
    $this->year = $year;
    $this->genres = $genres;
  }

  //Controlla se l'anno e restituisce una stringa
  public function checkYear() {
    if($this->year < 2000) {
      print 'inizia ad essere d\'altri tempi';
      $this->checkYearVisibility = true;
    };
  }

  //Controlla se l'array dei generi è pieno
  public function hasGenres(){
    if(empty($this->genres)){
      $this->genres[0] = 'nessun genere definito';
    }
    $this->printGenres();
  }

  //Stampa i generi
  private function printGenres(){
    foreach($this->genres as $genre){
      print $genre .' ';
    }
  }
}

//crea instanze per film da classe Movie
$superman = new Movie('Superman', 'Un orfano proveniente da un altro pianeta arriva sulla Terra, dove crescerà e diventerà un super-eroe', 1978, ['Azione','Avventura','Fantascienza']);

echo 'Oggetto Film';
print '<br>';

print_r($superman);
print '<br><br>';

echo 'Elenco attributi';
print '<br>';

//Controlla se ci sono generi
echo $superman->title;
print '<br>';
echo $superman->year;
print '<br>';
//stampa i generi
$superman->hasGenres();

print '<br>'.'<br>';

echo $superman->description;

print '<br>'.'<br>';

if($mario->checkYearVisibility){
echo 'Metodi';
echo '<br>';
print $superman->checkYear();
}

echo '<br>';
echo '<hr>';
echo '<br>';

$mario = new Movie('Super Mario Bros - Il film', 'Un idraulico di nome Mario viaggia attraverso un labirinto sotterraneo con suo fratello Luigi, cercando di salvare una principessa catturata.', 2023, ['Animazione', 'Avventura', 'Commedia', 'Per famiglie', 'Fantastico']);

echo 'Oggetto Film';
print '<br>';

print_r($mario);
print '<br><br>';

echo 'Elenco attributi';
print '<br>';

//Controlla se ci sono generi
echo $mario->title;
print '<br>';
echo $mario->year;
print '<br>';
//stampa i generi
$mario->hasGenres();

print '<br>'.'<br>';

echo $mario->description;

print '<br>'.'<br>';

if($mario->checkYearVisibility){
  echo 'Metodi';
  echo '<br>';
  print $mario->checkYear();
}
