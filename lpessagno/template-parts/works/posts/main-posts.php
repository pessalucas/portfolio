<?php
/**
 * Main de posts o noticias individuales.
 *
 * @package atencionusuarios
 */

if ( have_posts() ) {

     the_post();

     $post_id=get_the_ID();
     //Obtengo el url de la imagen destacada
     $featured_img_url = get_the_post_thumbnail_url($post_id,'full'); 

?>

                <div class="pt-2 gradient-background-right" style='padding-top:100px!important; margin: 0px;'>

					<div class="row">
						<div class="col-md-6 mb-md-0 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300" style="animation-delay: 500ms; padding-left: 0px;">
                              <div class="post-image">
                                    <img class="card-img-top border-radius-0" src="<?php echo $featured_img_url; ?>" alt="Card Image">
                              </div>
						</div>
						<div class="col-md-6" style='padding: 30px;'>
							<div class="overflow-hidden">
								<h2 class="font-weight-normal text-4 mb-0 appear-animation animated maskUp appear-animation-visible colorfirst" data-appear-animation="maskUp" data-appear-animation-delay="600" style="animation-delay: 600ms;">Project <strong class="font-weight-extra-bold">Description</strong></h2>
							</div>
							<div class="appear-animation animated fadeInUpShorter appear-animation-visible text-color-primary" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;"><?php the_content(); ?></div>

							<div class="overflow-hidden mt-4">
								<h2 class="font-weight-normal text-4 mb-0 appear-animation animated maskUp appear-animation-visible colorfirst" data-appear-animation="maskUp" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">Project <strong class="font-weight-extra-bold">Details</strong></h2>
							</div>
							<ul class="list list-icons list-primary list-borders text-2 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200" style="animation-delay: 1200ms;">
								<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Date:</strong> <?php the_date(); ?></li>
								<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Skills:</strong> 
									<div class='containtags'>
										<?php
										$posttags = get_the_tags( $post_id );
										if ($posttags) {
										foreach($posttags as $tag) {
											echo '<span class="tags">' . $tag->name . '</span>'; 
										}
										} ?> 
									</div>
								</li>
                                <?php  
								$url_project = get_post_meta( $post_id, 'URL', true );
								if ( $url_project ){ 
                                ?>
								<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Project URL:</strong> <a href="<?php echo $url_project; ?>" target="_blank" class="colorfirst"><?php echo $url_project; ?></a></li>
								<?php  
								}
								$url_github = get_post_meta( $post_id, 'GitHub', true );
								if ( $url_github ){
                                ?>
								<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">GitHub URL:</strong> <a href="<?php echo $url_github; ?>" target="_blank" class="colorfirst"><?php echo $url_github; ?></a></li>
								<?php 
 										}
								?>
							</ul>
						</div>
					</div>

				</div>

				<a href="/" style='padding-left:20%;'>
						<button type="button" style='margin:auto; margin-top: 3em; margin-bottom: 3em!important;' class="btn btn-outline btn-success btn-return mb-2">Volver al inicio</button>
				</a>
<?php

}
?>



