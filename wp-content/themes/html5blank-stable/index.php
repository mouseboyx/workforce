<?php get_header(); ?>

            <main role="main">
		<!-- section -->
		<section>

			<!-- <h1><?php // _e( 'Latest Posts', 'html5blank' ); ?></h1> -->

			<?php //get_template_part('loop'); ?>

			<?php // get_template_part('pagination'); ?>
			
			<?php
                            //$args=array('category_name' => 'events');
                            $the_query = new WP_Query( array( 
                            'post_type' => 'event',
                            'meta_key' => 'event_date',
                            'orderby' => 'meta_value',
                            'order'   => 'DESC',
                            'posts_per_page' => 3,
                            'paged' => 1,
                            ) );

                            // The Loop
                            if ( $the_query->have_posts() ) {
                                    ?>
                        <div class="index event-container row">
                                    <?php
                                    while ( $the_query->have_posts() ) {
                                            $the_query->the_post();
                                            ?>  <div class="index single-event row">
                                                <?php 

                                                $image = get_field('event_image');

                                                if( !empty($image) ): 

                                                        // vars
                                                        $url = $image['url'];
                                                        $title = $image['title'];
                                                        $alt = $image['alt'];
                                                        $caption = $image['caption'];

                                                        // thumbnail
                                                        $size = 'thumbnail';
                                                        $thumb = $image['sizes'][ $size ];
                                                        $width = $image['sizes'][ $size . '-width' ];
                                                        $height = $image['sizes'][ $size . '-height' ];

                                                        if( $caption ): ?>

                                                                <div class="wp-caption">

                                                        <?php endif; ?>
                                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                                        <a href="<?php the_permalink(); ?>" title="<?php echo $title; ?>">

                                                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" class="event-image-thumbnail"/>

                                                        </a>
                                                        </div>
                                                        <?php if( $caption ): ?>

                                                                        <p class="wp-caption-text"><?php echo $caption; ?></p>

                                                                </div>

                                                        <?php endif; ?>

                                                <?php endif; ?>
                                                <div class="event-text col-lg-10 col-md-8 col-sm-6 col-xs-12">
                                                <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                                <?php
                                                    the_excerpt();
                                                ?><?php if( get_field('event_date') ): ?>
                                                
                                                    <span class="event-date"><?php
                                                    
                                                    $the_event_date=get_field('event_date');
                                                    
                                                    $date = new DateTime($the_event_date);
                                                    echo $date->format('j M Y');
                                                    ?></span>
                                                <?php endif; ?></div></div>
                                                
                                    <?php
                                    }
                                    ?></div>
                    
                                    <?php
                                    /* Restore original Post Data */
                                    wp_reset_postdata();
                            } else {
                                    echo 'no posts';
                                    // no posts found
                            }
                            ?>
                            
                          
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
