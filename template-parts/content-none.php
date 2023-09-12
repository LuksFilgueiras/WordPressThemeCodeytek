<?php

/**
 * The template part for displaying a message that posts cannot be found.
 * 
 * @package Aquila
 */

 ?>

 <section class="no-result not-found">
    <Header class="page-header">
        <h1 class="page-title">
            <?php esc_html_e('Nothing Found', 'aquila'); ?>
        </h1>
    </Header>

    <div class="page-content">
        <?php
            if(is_home(  ) && current_user_can( 'publish_posts' )):
                ?>
                    <p>
                        <?php 
                        printf(wp_kses( 
                                __('Ready to publish your first post? <a href="%s>Get started here</a>', 'aquila'),
                                [
                                    'a' => [
                                        'href' => []
                                    ]
                                ]
                            ),
                            esc_url(admin_url( 'post-new.php' ))
                            )
                         ?>
                    </p>
            <?php
            elseif(is_search(is_search())):
                ?>
                    <p>Nothing matches your seach item. Please try again</p>
                <?php
                get_search_form(  );
            endif;
                ?>
                    <p>It seems that we cannot find what you are looking for.</p>
                <?php
        ?>
    </div>
 </section>