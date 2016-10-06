<?php
get_header();
$home = new WP_Query('page_id=5');
$cassem = new WP_Query('page_id=7');
$directives = new WP_Query('page_id=11');
$mission = new WP_Query('page_id=21');
$entities = new WP_Query('page_id=25');
$agreement = new WP_Query('page_id=36');
$contact = new WP_Query('page_id=48');
?>
<body>
<div id="main" class="clearfix wrapper">
    <section id="home" class="grid home">
        <header id="header" class="header">
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
                    <h1 class="col-7 section-title"><?php the_title(); ?></h1>
                    <div class="col-7 text">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; endif; ?>
        </div>
    </section>

    <section id="directivos" class="grid directives">
        <div class="col-9 col-top grid content" data-push-left="off-3">
            <?php if ($directives->have_posts()):
                while ($directives->have_posts()):$directives->the_post(); ?>
                    <h1 class="col-9 section-title"><?php the_title(); ?></h1>
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
                    <h1 class="col-8 section-title"><?php the_title(); ?></h1>
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
                    <h1 class="col-9 section-title"><?php the_title(); ?></h1>
                    <div class="col-9 text gallery">
                        <?php
                            $images = get_field('entities_logos');
                            if ($images) {
                                foreach ($images as $image) {
                                    echo '<img src="' . $image["url"] . '"/>';
                                }
                            }
                        ?>
                    </div>
                <?php endwhile; endif; ?>
        </div>
    </section>
    <section id="convenios" class="grid agreement">
        <div class="col-9 col-top grid content" data-push-left="off-3">
            <?php if ($agreement->have_posts()):
                while ($agreement->have_posts()):$agreement->the_post(); ?>
                    <h1 class="col-9 section-title"><?php the_title(); ?></h1>

                    <h2 class="col-9 section-subtitle">
                        <?php echo the_field('subtitle') ?>
                    </h2>
                    <div class="col-9 text">
                        <?php the_content(); ?>
                        <div class="grid grid-spaceBetween">
                            <div class="col-5 colums">
                                <?php echo the_field('col_derecha') ?>
                            </div>
                            <div class="col-5 colums">
                                <?php echo the_field('col_izquierda') ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
        </div>
    </section>
    <section id="contacto" class="grid contact">
        <div class="col-9 col-top grid content" data-push-left="off-3">
            <?php if ($contact->have_posts()):
                while ($contact->have_posts()):$contact->the_post(); ?>
                    <h1 class="col-5 section-title"><?php the_title(); ?></h1>
                    <div class="col-8 grid text">
                        <div class="col-7">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
        </div>
        <div class="col-12 col-bottom">
            <div class="col-12 logo-footer">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.png"/>
            </div>
            <div class="col-12 social">
                <img src="<?php echo get_template_directory_uri(); ?>/images/social-logos.png"/>
            </div>
            <div class="col-12 copy">
                ©Copyright CASSEM 2014. All rights reserved.
            </div>
        </div>
    </section>
</div>
<div class="wrapper">
    <?php get_footer(); ?>
</div>
</body>
</html>
