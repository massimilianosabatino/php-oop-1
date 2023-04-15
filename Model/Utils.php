<?php

class Utils {
  /**
   * Controlla se l'anno è inferiore al 2000 e restituisce una stringa
   *
   * @param int $year Anno d'uscita
   * @return string Frase call to action
   */
  public static function checkYear($year)
  {
    if ($year < 2000)
    {
      return 'inizia ad essere d\'altri tempi';
    } else
    {
      return 'guardalo e lascia una recensione';
    }
  }
}