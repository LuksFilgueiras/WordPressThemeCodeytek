<?php
    /** Main template file
     * 
     * @package Aquila
     * 
     */

     get_header();
?>

<div id="primary">
    <main id="main" class="site-main mt-5" role="main">
        <?php
            if(have_posts(  )){
                ?>
                    <div class="container">
                        <?php
                            while(have_posts(  )) : the_post(  );
                            ?>
                              <h1> <?php the_title(); ?> </h1>
                              <?php
                                the_excerpt();
                                the_content();
                            endwhile;
                        ?>
                    </div>
                <?php
            }
        ?>  
    </main>
</div>

<?php 
    get_footer();
