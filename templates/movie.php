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
            <div>
                <?php $movie->hasGenres() ?>
            </div>
        </div>
        <div><?php echo $movie->checkYear() ?></div>
    </li>
    <?php endforeach; ?>
</ul>