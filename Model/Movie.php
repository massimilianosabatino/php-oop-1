<?php 
class Movie {
  /**
   * Classe per creare un oggetto movie. Passando i parametri il costruttore crea un oggetto film.
   * Sono presenti due metodi:
   * @method mixed printGenres() stampa l'elenco dei generi contenuti nell oggetto
   * @method mixed getTotalMovie() restituisce quanti oggetti sono stati creati dalla classe movie
   */
  public $title;
  public $description;
  public $year;
  public $genres;
  public $media_type;

  private static $movie_counter = 0;

/**
 * Costruttore per la classe Movie
 *
 * @param string $title Titolo del film
 * @param string $description Descrizione del film
 * @param integer $year Anno del film
 * @param string ...$genres
 * @return  mixed Restituisce un oggetto film
 */
  public function __construct (string $title, string $description, int $year, Media $type, ...$genres)
  {
    $this->title = $title;
    $this->description = $description;
    $this->year = $year;
    $this->genres = $genres;
    $this->media_type = $type; 

    self::$movie_counter++;
  }

  //Controlla se l'array dei generi è pieno
  public function hasGenres()
  {
    if (empty($this->genres))
    {
      $this->genres[0] = 'nessun genere definito';
    }
    $this->printGenres();
  }

  //Stampa i generi
  private function printGenres()
  {
    foreach ($this->genres as $genre)
    {
      echo $genre . ' ';
    }
  }

  public static function getTotalMovie()
  {
    return self::$movie_counter;
  }
}