<?php
get_header();
$home = new WP_Query('page_id=5');
$studio = new WP_Query('page_id=13');
$correspondent = new WP_Query('page_id=23');
$contact = new WP_Query('page_id=27');
$areas = new WP_Query('page_id=33');
$flia = new WP_Query('page_id=50');
$comercial = new WP_Query('page_id=52');
$notorial = new WP_Query('page_id=54');
$novedades = new WP_Query('page_id=67');

$news = new WP_Query(array(
    'cat' => '2',
    'order' => 'ASC'
));

?>
<body <?php body_class(); ?>>
<div id="main" class="clearfix wrapper">
    <header id="header" class="header">
        <?php include "nav.php" ?>
    </header>
    <div id="main" class="grid-center main">
        <section class="col-12 grid slider">
            <?php if ($home->have_posts()):
                while ($home->have_posts()):$home->the_post(); ?>
                    <div class="col-12 image">
                        <img src="<?php echo the_field('page_image') ?>"/>
                    </div>
                    <div class="col-12 grid-center caption">
                        <div class="col-8 text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
        </section>
        <section class="col-12 grid-center section-menu">
            <div class="col-10 grid-spaceBetween">
                <div class="col-3 section-row flia">
                    <?php if ($flia->have_posts()):
                        while ($flia->have_posts()):$flia->the_post(); ?>
                            <figure class="section-icon">
                                <img src="<?php echo the_field('secondary_image') ?>"/>
                            </figure>
                            <h1 class="section-title"><?php the_title(); ?></h1>
                            <div class="section-content">
                                <?php echo the_field('resumen') ?>
                            </div>
                        <?php endwhile; endif; ?>
                    <div class="section-link">
                        <a href="#familia" class="more-info-btn">más info</a>
                    </div>
                </div>
                <div class="col-3 section-row comercial">
                    <?php if ($comercial->have_posts()):
                        while ($comercial->have_posts()):$comercial->the_post(); ?>
                            <figure class="section-icon">
                                <img src="<?php echo the_field('secondary_image') ?>"/>
                            </figure>
                            <h1 class="section-title"><?php the_title(); ?></h1>
                            <div class="section-content">
                                <?php echo the_field('resumen') ?>
                            </div>
                        <?php endwhile; endif; ?>
                    <div class="section-link">
                        <a href="#comercial" class="more-info-btn">más info</a>
                    </div>
                </div>
                <div class="col-3 section-row notorial">
                    <?php if ($notorial->have_posts()):
                        while ($notorial->have_posts()):$notorial->the_post(); ?>
                            <figure class="section-icon">
                                <img src="<?php echo the_field('secondary_image') ?>"/>
                            </figure>
                            <h1 class="section-title"><?php the_title(); ?></h1>
                            <div class="section-content">
                                <?php echo the_field('resumen') ?>
                            </div>
                        <?php endwhile; endif; ?>
                    <div class="section-link">
                        <a href="#notorial" class="more-info-btn">más info</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="estudio" class="col-12 grid-center about block">
            <?php if ($studio->have_posts()):
                while ($studio->have_posts()):$studio->the_post(); ?>
                    <div class="col-12 grid-center banner">
                        <img src="<?php echo the_field('page_image') ?>"/>
                    </div>
                    <div class="col-11 grid-spaceBetween content">
                        <div class="col-4">
                            <figure class="border-transparent-black">
                                <img src="<?php echo the_field('secondary_image') ?>"/>
                            </figure>
                        </div>
                        <div class="col-7">
                            <h1 class="title"><?php the_title(); ?></h1>
                            <div class="section-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
        </section>
        <section id="areas-del-derecho" class="col-12 grid-center block right-area">
            <div class="col-12 grid-center banner">
                <?php if ($areas->have_posts()):
                    while ($areas->have_posts()):$areas->the_post(); ?>
                        <img src="<?php echo the_field('page_image') ?>"/>
                    <?php endwhile; endif; ?>
            </div>
            <div id="familia" class="col-12 grid family">
                <?php if ($flia->have_posts()):
                    while ($flia->have_posts()):$flia->the_post(); ?>
                        <div class="col-12 grid pattern">
                            <img src="<?php echo the_field('page_image') ?>"/>
                        </div>
                        <div class="col-11 grid-spaceBetween content">
                            <div class="col-4 image">
                                <img src="<?php echo the_field('secondary_image') ?>"/>
                            </div>
                            <div class="col-8">
                                <h1 class="title"><?php the_title(); ?></h1>
                                <div class="section-content">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
            </div>
            <div id="comercial" class="col-12 grid commerce">
                <?php if ($comercial->have_posts()):
                    while ($comercial->have_posts()):$comercial->the_post(); ?>
                        <div class="col-12 grid pattern">
                            <img src="<?php echo the_field('page_image') ?>"/>
                        </div>
                        <div class="col-11 grid-spaceBetween content">
                            <div class="col-4 image">
                                <img src="<?php echo the_field('secondary_image') ?>"/>
                            </div>
                            <div class="col-8">
                                <h1 class="title"><?php the_title(); ?></h1>
                                <div class="section-content">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
            </div>
            <div id="notorial" class="col-12 grid notorial">
                <?php if ($notorial->have_posts()):
                    while ($notorial->have_posts()):$notorial->the_post(); ?>
                        <div class="col-12 grid pattern">
                            <img src="<?php echo the_field('page_image') ?>"/>
                        </div>
                        <div class="col-11 grid-spaceBetween content">
                            <div class="col-4 image">
                                <img src="<?php echo the_field('secondary_image') ?>"/>
                            </div>
                            <div class="col-8">
                                <h1 class="title"><?php the_title(); ?></h1>
                                <div class="section-content">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
            </div>
        </section>
        <section id="corresponsales" class="col-12 grid-center block correspondent">
            <?php if ($correspondent->have_posts()):
                while ($correspondent->have_posts()):$correspondent->the_post(); ?>
                    <div class="col-12 grid-center banner">
                        <img src="<?php echo the_field('page_image') ?>"/>
                    </div>
                    <div class="col-11 grid-spaceBetween content">
                        <div class="col-4">
                            <figure class="border-transparent-black">
                                <img src="<?php echo the_field('secondary_image') ?>"/>
                            </figure>
                        </div>
                        <div class="col-7">
                            <h1 class="title"><?php the_title(); ?></h1>
                            <div class="section-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
        </section>
        <section id="novedades" class="col-12 grid-center block news">
            <?php if ($novedades->have_posts()):
                while ($novedades->have_posts()):$novedades->the_post(); ?>
                    <div class="col-12 grid-center banner">
                        <img src="<?php echo the_field('page_image') ?>"/>
                    </div>
                <?php endwhile; endif; ?>
            <?php if ($news->have_posts()):
                while ($news->have_posts()):$news->the_post(); ?>
                    <div class="col-9 grid-spaceBetween grid-middle content">
                        <div class="col-4">
                            <figure class="border-transparent-black">
                                <img src="<?php echo the_field('page_image') ?>"/>
                            </figure>
                        </div>
                        <div class="col-7">
                            <h1 class="title"><?php the_title(); ?></h1>
                            <div class="section-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>

        </section>
        <section id="contacto" class="col-12 grid-center block contact">
            <?php if ($contact->have_posts()):
                while ($contact->have_posts()):$contact->the_post(); ?>
                    <div class="col-12 grid-center banner">
                        <img src="<?php echo the_field('page_image') ?>"/>
                    </div>
                    <div class="col-12 grid-center content">
                        <div class="col-9 grid-spaceBetween">
                            <div class="col-4">
                                <h1 class="title">Oficina</h1>
                                <ul class="data">
                                    <li class="gps"><?php echo the_field('addres') ?></li>
                                    <li class="phones"><?php echo the_field('phone') ?></li>
                                    <li class="email"><?php echo the_field('email') ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <figure class="border-transparent">
                                    <img src="<?php echo the_field('secondary_image') ?>"/>
                                </figure>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
        </section>
        <section class="col-12 grid-center block form">
            <div class="col-8 grid content">
                <h1 class="title">Envianos tu consulta</h1>
                <h2 class="sub-title">Póngase en contacto con nosotros y despeje sus dudas.</h2>
                <form class="col-12 grid">
                    <div class="col-12 grid-spaceBetween">
                        <div class="col-6">
                            <input type="text"/>
                        </div>
                        <div class="col-6">
                            <input type="text" class="right"/>
                        </div>
                    </div>
                    <div class="col-12 grid-spaceBetween">
                        <div class="col-6">
                            <input type="text"/>
                        </div>
                        <div class="col-6">
                            <input type="text" class="right"/>
                        </div>
                    </div>
                    <div class="col-12 grid">
                        <textarea class="col-12"></textarea>
                    </div>
                    <div class="col-12">
                        <input type="submit" class="right" value="Enviar consulta">
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
<div class="wrapper">
    <?php get_footer(); ?>
</div>
</body>
</html>
