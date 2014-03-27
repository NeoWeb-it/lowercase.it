<div id="content" class="<?php echo implode( ' ', responsive_get_content_classes() ); ?>"  style="position:relative; float:left;">
	<?php if (have_posts()) : ?>
    <?php 
    query_posts($query15);
    ?>              
    <?php while (have_posts()) : the_post(); ?>
    	<div class="post-blog-template" style="height:100%; position:relative; float:left; border-bottom: dotted 2px #000; padding-top: 40px;">
    	    <span style="font-size:2em; line-height:30px; font-weight:bold">
    	    	lowercase<br />
    	        wunderkammer<br /><br />
    	    </span>
   			<?php get_template_part( 'loop-header' ); ?>
   			<?php responsive_entry_before(); ?>
	   		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>       
    			<?php responsive_entry_top(); ?>
    			<?php get_template_part( 'post-meta-page' ); ?>
                <div class="post-entry">
                    <?php the_content(__('Read more &#8250;', 'responsive')); ?>
                    <?php wp_link_pages(array('before' => '<div class="pagination">' . __('Pages:', 'responsive'), 'after' => '</div>')); ?>
                </div><!-- end of .post-entry -->
    			<?php get_template_part( 'post-data' ); ?>
   	 			<?php responsive_entry_bottom(); ?>      
</div>  		    </div><div style="border-bottom: dotted 2px #000; height:100%; position:relative; float:left;"></div>  
    		<!-- end of #post-<?php the_ID(); ?> -->    
    		<?php responsive_entry_after(); ?>
    		<?php responsive_comments_before(); ?>
    		<?php comments_template( '', true ); ?>
    		<?php responsive_comments_after(); ?>
    	 
    	<?php 
   		endwhile; 
    		get_template_part( 'loop-nav' ); 
    	else : 
    		get_template_part( 'loop-no-posts' ); 
    	endif; 
    	?> 
</div> 

