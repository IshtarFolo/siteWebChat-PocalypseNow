<!DOCTYPE html>
<html lang="en">
	
<script type="text/javascript">
    var pageInfo = '<?php echo get_bloginfo("template_url") . "/" . is_page() ? get_the_title() : "Not a page"; ?>';
</script>
	
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat-Pocalypse Now</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <!-- Style du site -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

</head>

<body class="container-fluid px-0">
    <!-- HEADER -->
    <header class="px-3">
        <!-- Menu -->
        <div class="menu">
            <div class="demoR boutonNav"><a href="<?php echo home_url(); ?>"></a></div>

            <div class="aPropos boutonNav">
                <a href="<?php echo get_permalink(get_page_by_path('a-propos')->ID); ?>">?</a>
            </div>

            <div class="creation boutonNav"><a href="<?php echo get_permalink(get_page_by_path('creation')->ID); ?>"></a></div>
        </div>
        <!-- Menu -->
    </header>