<?php 
/*
    Template Name: Employees
 */

?>
<?php get_header(); ?> 

<?php 
// the query
$wpb_all_query = new WP_Query(array(
    'post_type'=>'employees', 
    'post_status'=>'publish', 
    'posts_per_page'=> -1
    )); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
 
<ul>
 
    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?><?php get_the_post_thumbnail(); ?></a></li>
        
    <?php endwhile; ?>
    <!-- end of the loop -->
 
</ul>
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php the_content(); ?>
<?php get_footer(); ?>