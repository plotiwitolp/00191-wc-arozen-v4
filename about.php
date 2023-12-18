<?php
/*
Template Name: Шаблон страницы "О компании"
Template Post Type: post, page
*/
?>
<?php get_header(); ?>
<div class="wrapper about">

    <!-- pervyj_ekran -->
    <?php if (get_field('pervyj_ekran_zagolovok')) { ?>
        <div class="top">
            <div class="container">
                <div class="top__inner">
                    <div class="top__first">
                        <h1 class="top__title"><?php the_field('pervyj_ekran_zagolovok') ?></h1>
                        <div class="bullet">
                            <?php if (have_rows('pervyj_ekran_preimushhestva')) :
                                while (have_rows('pervyj_ekran_preimushhestva')) : the_row();
                            ?>
                                    <div class="bullet__item">
                                        <?php
                                        $image = get_sub_field('kartinka');
                                        if (!empty($image)) : ?>
                                            <div class="bullet__img">
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                            </div>
                                        <?php endif; ?>
                                        <div class="bullet__text"><?php the_sub_field('tekst'); ?></div>
                                    </div>
                            <?php endwhile;
                            endif; ?>
                        </div>
                    </div>
                    <div class="top__second">
                        <div class="images">
                            <?php if (have_rows('pervyj_ekran_kartinki')) :
                                while (have_rows('pervyj_ekran_kartinki')) : the_row();
                            ?>
                                    <?php
                                    $image = get_sub_field('kartinka');
                                    if (!empty($image)) : ?>
                                        <div class="images__item">
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                        </div>
                                    <?php endif; ?>
                            <?php endwhile;
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>


    <!-- uslugi -->
    <?php if (get_field('uslugi_lejbl')) { ?>
        <!-- START УСЛУГИ -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('uslugi_lejbl'); ?></div>
                <h2 class="block__title"><?php the_field('uslugi_zagolovok'); ?></h2>

                <div class="service">
                    <?php
                    if (have_rows('uslugi_kartochki')) :
                        $i = 1;
                        while (have_rows('uslugi_kartochki')) : the_row();
                    ?>
                            <div class="service__item">
                                <div class="service__header">
                                    <div class="service__header-el">
                                        <?php
                                        $kartinka = get_sub_field('ikonka');
                                        if (!empty($kartinka)) : ?>
                                            <img src="<?php echo $kartinka['url']; ?>" alt="<?php echo $kartinka['alt']; ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="counter">
                                        <?php if ($i < 10) {
                                            echo '0' . $i;
                                        } else {
                                            echo $i;
                                        }; ?>
                                    </div>
                                </div>
                                <h3 class="service__title"><?php the_sub_field('zagolovok'); ?></h3>
                                <div class="service__desc"><?php the_sub_field('opisanie'); ?></div>
                                <div class="service__detail">
                                    <div class="service-list">
                                        <?php
                                        if (have_rows('spisok')) :
                                            while (have_rows('spisok')) : the_row();
                                        ?>
                                                <div class="service-list__item">
                                                    <span><?php the_sub_field('nazvanie'); ?></span>
                                                    <span><?php the_sub_field('opisanie'); ?></span>
                                                </div>
                                        <?php
                                            endwhile;
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="service__footer">
                                    <a href="<?php the_sub_field('ssylka_knopki'); ?>">
                                        <div class="btn"><?php the_sub_field('nazvanie_knopki'); ?></div>
                                    </a>
                                </div>
                            </div>
                    <?php
                            $i++;
                        endwhile;
                    endif;
                    ?>
                </div>

            </div>
        </div>
        <!-- END УСЛУГИ -->
    <?php } ?>


    <!-- clients -->
    <?php if (get_field('klienty_lejbl')) { ?>
        <!-- START КЛИЕНТЫ -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('klienty_lejbl'); ?></div>
                <h2 class="block__title"><?php the_field('klienty_zagolovok'); ?></h2>

                <div class="clients">
                    <div class="clients__first">
                        <div class="bullet bullet_clients">
                            <?php if (have_rows('klienty_preimushhestva')) :
                                while (have_rows('klienty_preimushhestva')) : the_row();
                            ?>
                                    <div class="bullet__item">
                                        <?php
                                        $image = get_sub_field('kartinka');
                                        if (!empty($image)) : ?>
                                            <div class="bullet__img">
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                            </div>
                                        <?php endif; ?>
                                        <div class="bullet__text"><?php the_sub_field('tekst'); ?></div>
                                    </div>
                            <?php endwhile;
                            endif; ?>
                        </div>
                    </div>
                    <div class="clients__second">
                        <?php
                        $image = get_field('klienty_kartinka');
                        if (!empty($image)) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <?php endif; ?>
                    </div>

                </div>

            </div>
        </div>
        <!-- END КЛИЕНТЫ -->
    <?php } ?>



    <!-- history -->
    <?php if (get_field('nasha_istoriya_lejbl')) { ?>
        <!-- START ИСТОРИЯ -->
        <div class="block block_yellow">
            <div class="container">
                <div class="block__label"><?php the_field('nasha_istoriya_lejbl'); ?></div>
                <h2 class="block__title"><?php the_field('nasha_istoriya_zagolovok'); ?></h2>

                <div class="history">

                    <div class="histslider1__wrapper">
                        <div class="histslider1">
                            <div class="histslider1__inner">

                                <div class="histslider1__item"><span>2013</span></div>
                                <div class="histslider1__item"><span>2014</span></div>


                                <div class="histslider1__item"><span>2015</span></div>
                                <div class="histslider1__item"><span>2016</span></div>
                                <div class="histslider1__item"><span>2017</span></div>
                                <div class="histslider1__item"><span>2018</span></div>
                                <div class="histslider1__item"><span>2019</span></div>
                                <div class="histslider1__item"><span>2020</span></div>
                                <div class="histslider1__item"><span>2021</span></div>
                                <div class="histslider1__item"><span>2022</span></div>
                                <div class="histslider1__item"><span>2023</span></div>
                            </div>
                        </div>
                        <div class="prev-next">
                            <div class="prev-arrow"> предыдущий </div>
                            <div class="next-arrow"> следующий </div>
                        </div>
                    </div>

                    <div class="histslider2">
                        <div class="histslider2__inner">

                            <div class="histslider2__item">
                                <div class="histslider2__item-inner">
                                    <div class="histslider2__item-year">2013</div>
                                    <div class="histslider2__item-desc">
                                        Постепенно, с усилением оптимизации и увеличением количества качественных обратных ссылок, вы начнете привлекать больше органического трафика на ваш сайт. Это может занять несколько месяцев, но по мере улучшения позиций в поисковых системах, трафик будет расти.
                                    </div>
                                </div>
                            </div>

                            <div class="histslider2__item">
                                <div class="histslider2__item-inner">
                                    <div class="histslider2__item-year">2014</div>
                                    <div class="histslider2__item-desc">
                                        Постепенно, с усилением оптимизации и увеличением количества качественных обратных ссылок, вы начнете привлекать больше органического трафика на ваш сайт. Это может занять несколько месяцев, но по мере улучшения позиций в поисковых системах, трафик будет расти.
                                    </div>
                                </div>
                            </div>



                            <div class="histslider2__item">
                                <div class="histslider2__item-inner">
                                    <div class="histslider2__item-year">2015</div>
                                    <div class="histslider2__item-desc">
                                        Постепенно, с усилением оптимизации и увеличением количества качественных обратных ссылок, вы начнете привлекать больше органического трафика на ваш сайт. Это может занять несколько месяцев, но по мере улучшения позиций в поисковых системах, трафик будет расти.
                                    </div>
                                </div>
                            </div>
                            <div class="histslider2__item">
                                <div class="histslider2__item-inner">
                                    <div class="histslider2__item-year">2016</div>
                                    <div class="histslider2__item-desc">
                                        Постепенно, с усилением оптимизации и увеличением количества качественных обратных ссылок, вы начнете привлекать больше органического трафика на ваш сайт. Это может занять несколько месяцев, но по мере улучшения позиций в поисковых системах, трафик будет расти.
                                    </div>
                                </div>
                            </div>
                            <div class="histslider2__item">
                                <div class="histslider2__item-inner">
                                    <div class="histslider2__item-year">2017</div>
                                    <div class="histslider2__item-desc">
                                        Постепенно, с усилением оптимизации и увеличением количества качественных обратных ссылок, вы начнете привлекать больше органического трафика на ваш сайт. Это может занять несколько месяцев, но по мере улучшения позиций в поисковых системах, трафик будет расти.
                                    </div>
                                </div>
                            </div>
                            <div class="histslider2__item">
                                <div class="histslider2__item-inner">
                                    <div class="histslider2__item-year">2018</div>
                                    <div class="histslider2__item-desc">
                                        Постепенно, с усилением оптимизации и увеличением количества качественных обратных ссылок, вы начнете привлекать больше органического трафика на ваш сайт. Это может занять несколько месяцев, но по мере улучшения позиций в поисковых системах, трафик будет расти.
                                    </div>
                                </div>
                            </div>
                            <div class="histslider2__item">
                                <div class="histslider2__item-inner">
                                    <div class="histslider2__item-year">2019</div>
                                    <div class="histslider2__item-desc">
                                        Постепенно, с усилением оптимизации и увеличением количества качественных обратных ссылок, вы начнете привлекать больше органического трафика на ваш сайт. Это может занять несколько месяцев, но по мере улучшения позиций в поисковых системах, трафик будет расти.
                                    </div>
                                </div>
                            </div>
                            <div class="histslider2__item">
                                <div class="histslider2__item-inner">
                                    <div class="histslider2__item-year">2020</div>
                                    <div class="histslider2__item-desc">
                                        Постепенно, с усилением оптимизации и увеличением количества качественных обратных ссылок, вы начнете привлекать больше органического трафика на ваш сайт. Это может занять несколько месяцев, но по мере улучшения позиций в поисковых системах, трафик будет расти.
                                    </div>
                                </div>
                            </div>
                            <div class="histslider2__item">
                                <div class="histslider2__item-inner">
                                    <div class="histslider2__item-year">2021</div>
                                    <div class="histslider2__item-desc">
                                        Постепенно, с усилением оптимизации и увеличением количества качественных обратных ссылок, вы начнете привлекать больше органического трафика на ваш сайт. Это может занять несколько месяцев, но по мере улучшения позиций в поисковых системах, трафик будет расти.
                                    </div>
                                </div>
                            </div>
                            <div class="histslider2__item">
                                <div class="histslider2__item-inner">
                                    <div class="histslider2__item-year">2022</div>
                                    <div class="histslider2__item-desc">
                                        Постепенно, с усилением оптимизации и увеличением количества качественных обратных ссылок, вы начнете привлекать больше органического трафика на ваш сайт. Это может занять несколько месяцев, но по мере улучшения позиций в поисковых системах, трафик будет расти.
                                    </div>
                                </div>
                            </div>
                            <div class="histslider2__item">
                                <div class="histslider2__item-inner">
                                    <div class="histslider2__item-year">2023</div>
                                    <div class="histslider2__item-desc">
                                        Постепенно, с усилением оптимизации и увеличением количества качественных обратных ссылок, вы начнете привлекать больше органического трафика на ваш сайт. Это может занять несколько месяцев, но по мере улучшения позиций в поисковых системах, трафик будет расти.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- END ИСТОРИЯ -->
    <?php } ?>



    <!-- komanda -->
    <?php if (get_field('komanda_lejbl')) { ?>
        <!-- START КОМАНДА -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('komanda_lejbl'); ?></div>
                <h2 class="block__title mw880"><?php the_field('komanda_zagolovok'); ?></h2>

                <div class="team2">

                    <!-- наша команда -->

                </div>

            </div>
        </div>
        <!-- END КОМАНДА -->
    <?php } ?>


</div>
<?php get_footer(); ?>