<?php
get_header();
$home = new WP_Query('page_id=5');
$cassem = new WP_Query('page_id=7');
$directives = new WP_Query('page_id=11');
$mission = new WP_Query('page_id=21');
$entities = new WP_Query('page_id=25');
?>
<body>
<div id="main" class="clearfix wrapper">
    <section id="home" class="grid home">
        <header class="col-6 col-top grid header" data-push-left="off-3">
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

    <section id="cassem" class="grid cassem">
        <div class="col-9 col-top grid content" data-push-left="off-3">
            <?php if ($cassem->have_posts()):
                while ($cassem->have_posts()):$cassem->the_post(); ?>
                    <h1 class="col-12 section-title"><?php the_title(); ?></h1>
                    <div class="col-6 text">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; endif; ?>
        </div>
    </section>

    <section id="directivos" class="grid directives">
        <div class="col-9 col-top grid content" data-push-left="off-3">
            <?php if ($directives->have_posts()):
                while ($directives->have_posts()):$directives->the_post(); ?>
                    <h1 class="col-12 section-title"><?php the_title(); ?></h1>
                    <div class="col-9 grid grid-spaceBetween text">
                        <div class="col-5">
                            <h1 class="col-title">COMISIÓN DIRECTIVA</h1>
                            <div class="col-12">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="col-5">
                            <h1 class="col-title">COMISIÓN REVISADORA DE CUENTAS</h1>
                            <div class="col-12">
                                <?php echo the_field('comision_revisadora_de_cuentas') ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
        </div>
    </section>

    <section id="mision" class="grid mission">
        <div class="col-9 col-top grid content" data-push-left="off-3">
            <?php if ($mission->have_posts()):
                while ($mission->have_posts()):$mission->the_post(); ?>
                    <h1 class="col-12 section-title"><?php the_title(); ?></h1>
                    <div class="col-8 text">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; endif; ?>
        </div>
    </section>

    <section id="entidades" class="grid entities">
        <div class="col-9 col-top grid content" data-push-left="off-3">
            <?php if ($entities->have_posts()):
                while ($entities->have_posts()):$entities->the_post(); ?>
                    <h1 class="col-12 section-title"><?php the_title(); ?></h1>
                    <div class="col-6 text">
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
