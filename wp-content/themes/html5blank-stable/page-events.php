<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php
                            //$args=array('category_name' => 'events');
                            // The Query
                            $the_query = new WP_Query( array( 
                            'post_type' => 'event',
                            /*'meta_key' => 'event_date',
                            'orderby' => 'meta_value',
                            'order'   => 'DESC',*/
                            ) );

                            // The Loop
                            if ( $the_query->have_posts() ) {
                                    ?>
                                    <div>
                                    <?php
                                    while ( $the_query->have_posts() ) {
                                            $the_query->the_post();
                                            ?>
                                                <h2>
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                                </h2>
                                                <div>
                                                <?php
                                                    the_excerpt();
                                                ?>
                                                <?php if( get_field('event_date') ): ?>
                                                <h2>
                                                    <?php
                                                    
                                                    $the_event_date=get_field('event_date');
                                                    
                                                    $date = new DateTime($the_event_date);
                                                    echo $date->format('j M Y');
                                                    ?>
                                                </h2>
                                                <?php endif; ?>
                                                
                                                </div>
                                            <?php
                                          //  echo '<a href="'.the_permalink().'">' . get_the_title() . '</a>';
                                    }
                                    ?>
                                    </div>
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
