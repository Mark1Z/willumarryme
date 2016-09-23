<?php
/**
 * header.php template
 */
?>
<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="ie ie8" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie ie9" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><!--<![endif]-->
<head>
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . '/favicon.ico'; ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ILoveU</title>
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <div class="container">
        <h1>Дарюничка</h1>
    </div>
</header>
<main class="main">
    <?php
    $pageIndex = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $progress = round(($pageIndex / wp_count_posts('post')->publish) * 100);
    ?>
    <div class="progress">
        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
             aria-valuenow="<?php echo $progress; ?>" aria-valuemin="0" aria-valuemax="100"
             style="width: <?php echo $progress; ?>%">
        </div>
    </div>
