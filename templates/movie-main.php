<?php
require_once __DIR__. '/../db.php';
require_once __DIR__. '/../Model/Utils.php';
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
        <div><?php echo Utils::checkYear($movie->year) ?></div>
    </li>
    <?php endforeach; ?>
</ul>
<div>
    <h3>Film totali</h3>
    <div><?php echo Movie::getTotalMovie(); ?></div>
    <?php var_dump($superman); ?>
    <?php var_dump($mario); ?>
</div>