<?php
get_header();
$home = new WP_Query('page_id=5');
?>
<body>
<div id="main" class="clearfix wrapper">
    <section class="grid home">
        <header class="col-7 col-top grid header" data-push-left="off-3">
            <?php include "nav.php" ?>
        </header>
        <div class="col-9 col-top grid content" data-push-left="off-3">
            <?php if ($home->have_posts()):
                while ($home->have_posts()):$home->the_post(); ?>
                    <h1 class="col-12 site-title"><?php the_title(); ?></h1>
                    <div class="col-7 site-slogan">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; endif; ?>
        </div>
    </section>
</div>
<div class="wrapper">
    <?php get_footer(); ?>
</div>
</body>
</html>
