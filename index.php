<ul>
    <?php $tacos = array("This", "That", "And", "Repeat"); ?>

    <?php foreach ($tacos as $taco) : ?>

        <nav>
            <a href="#<?php echo $taco; ?>"><?php echo $taco; ?></a>
        </nav>

    <?php endforeach; ?>

</ul>
