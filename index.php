<?php
get_header(); 
?>

<div class="content-area">
    <div class="main-content">
        <div class="featured-blog-layout">
            <?php
            // Define the query to fetch the latest 5 posts for the main content
            $args = array(
                'posts_per_page' => 5,
                'post_status'    => 'publish',
            );

            $query = new WP_Query($args);
            if ($query->have_posts()) :
                $i = 1;
                while ($query->have_posts()) : $query->the_post();

                    // First row, first 3 posts
                    if ($i <= 3): ?>
                        <div class="column">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    <?php
                    endif;

                    // Second row, first post (post 4)
                    if ($i == 4): ?>
                        <div class="column">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    <?php
                    endif;

                    // Second row, second post (post 5) spans 2 columns
                    if ($i == 5): ?>
                        <div class="column large-column">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large'); ?>
                            </a>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    <?php
                    endif;

                    $i++;
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>

    <div class="sidebar">
        <h2>Latest Posts</h2>
        <ul>
            <?php
            // Query to fetch the 10 latest posts for the sidebar
            $latest_args = array(
                'posts_per_page' => 10,
                'post_status'    => 'publish',
            );
            $latest_query = new WP_Query($latest_args);
            if ($latest_query->have_posts()) :
                while ($latest_query->have_posts()) : $latest_query->the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </ul>
    </div>
</div>

<?php
get_footer();
?>
