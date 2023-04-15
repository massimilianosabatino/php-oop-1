<?php
require_once __DIR__. '/../db.php';
?>
<ul>
    <?php foreach ($all_movie as $movie): ?>
    <li>
        <h2><?php echo $movie->title ?></h2>
        <div>Anno di uscita: <?php echo $movie->year ?></div>
        <p><?php echo $movie->description ?></p>
        <div>
            <h3>Genere</h3>
            <ul>
                <?php foreach ($movie->genres as $genre): ?>
                <li><?php echo $genre ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div>Frase di controllo</div>
    </li>
    <?php endforeach; ?>
</ul>