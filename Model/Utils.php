<?php

class Utils {
      //Controlla se l'anno e restituisce una stringa
  public static function checkYear($year)
  {
    if ($year < 2000)
    {
      print 'inizia ad essere d\'altri tempi';
    } else
    {
      print 'guardalo e lascia una recensione';
    }
  }
}