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
                        <div class="index event-container">
                                    <?php
                                    while ( $the_query->have_posts() ) {
                                            $the_query->the_post();
                                            ?>  <div class="index single-event">
                                                <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                                <?php
                                                    the_excerpt();
                                                ?><?php if( get_field('event_date') ): ?>
                                                
                                                    <h3><?php
                                                    
                                                    $the_event_date=get_field('event_date');
                                                    
                                                    $date = new DateTime($the_event_date);
                                                    echo $date->format('j M Y');
                                                    ?></h3>
                                                <?php endif; ?></div>
                                                
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
