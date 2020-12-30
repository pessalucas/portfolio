<?php
/**
 * Modulo de works en home.
 *
 * @package atencionusuarios
 */

if ( have_posts() ) {
	?>
	<div class="m-0 p-0">
		<div class="row" id='works'>
		<?php
		$query_post=new WP_Query(array(
			'posts_per_page' => '3',
			'post_type' => 'post'
		));

		while ( $query_post->have_posts() ) {

			//Obtengo la informacion de los posts
			$query_post->the_post();
			$post_id=get_the_ID();

			//Obtengo el url de la imagen destacada
			$featured_img_url = get_the_post_thumbnail_url($post_id,'full'); 

		?>
		<div class="col-sm-6 col-lg-4 p-0 m-0">
            <div class="portfolio-item m-0 p-0">
                <a href="<?php the_permalink(); ?>">
                    <span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0"   style='background: none;'>
                        <span class="thumb-info-wrapper">
                            <img src="<?php echo $featured_img_url; ?>" class="img-fluid" alt="">
                            <span class="thumb-info-title bg-transparent p-4">
                                <span class="thumb-info-inner line-height-1 text-4 font-weight-bold colorfirst"><?php the_excerpt(); ?></span>
                                <span class="thumb-info-type opacity-6"></span>
                                <span class="thumb-info-show-more-content pr-3">
                                    <span class="d-inline-flex align-items-center mt-2 border-0 btn font-weight-bold px-2 btn-py-1 text-1 rounded  button-viewmore"><span class="text-2 py-1 pl-2">VIEW MORE</span> <i class="fa fa-arrow-right ml-2 mr-2 pl-4 text-3"></i></span>
                                </span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </div>

			<?php

		}
		?>
		</div>
	</div>
    <?php
		}
		?>