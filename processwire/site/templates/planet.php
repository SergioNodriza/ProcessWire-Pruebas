
<?php include('./_head.php'); // include header markup ?>

<html lang="es">

    <head>
        <title><?php echo $page->title; ?></title>
    </head>

    <body>
        <div id='content'>
            <h1><?php echo $page->title; ?></h1>
            <h2>
                Type: <?php echo $page->planet_type; ?>,
                Age: <?php echo $page->planet_age; ?> years
            </h2>

            <div>
                <?php $image = $page->images->getRandom(); ?>
                <?php echo "<img src='$image->url' alt='$image->description' style='float: inline-start; margin-right:10px;'/>"; ?>
                <?php echo $page->planet_summary; ?>
            </div>
        </div>

        <aside id='sidebar'><?php

            $section = $page->rootParent;
            if($section->hasChildren > 1) {
                renderNavTree($section);
            }

        ?></aside>
    </body>

</html>

<?php include('./_foot.php'); // include footer markup ?>