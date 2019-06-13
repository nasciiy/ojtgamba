<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php echo wp_get_document_title(); ?> </title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style.css">
<!-- 必ず追加しておく！！ -->
<?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="header">
            <h1>About Dog</h1>
            <div class="header-right">
                <h3>Top</h3>
                <h3>Latest</h3>
                <h3>Contact</h3>
            </div>
        </div>
        <img width="960px" height="546px" src="<?php echo get_template_directory_uri(); ?>/assets/dog.jpg" alt="">
    </header>
    