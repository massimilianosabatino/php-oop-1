<?php
class Media {
    public $media_type;
    /**
     * Classe per testare le classi dipendenti da altre classi, 
     * questa aggiunge un oggetto tipologia di media alla classe movie
     *
     * @param string $type tipologia di film
     * @return mixed se inserito aggiunge la tipologia di media, altrimenti è nullo
     */
    public function __construct(string $type)
    {
        if (is_null($type))
        {
            $this->media_type = '';
        }else 
        {
            $this->media_type = $type;
        }
    }
}