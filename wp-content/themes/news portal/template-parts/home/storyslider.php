<section class="main_story_box">
        <div class="container">
            <div class="story_slider">
            <?php $args=[ 
                                'post_type'=> 'slider',
                                'posts_per_page' => 7,
                                'post_status'=> "publish",
                                
                            ];
                                $query=new WP_Query($args);
                                if ($query->have_posts()):
                                    while ($query->have_posts()):
                                       $query->the_post();
                                       $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                                      
                             ?>
                <div>
                    <div class="story_card">
                        <a href="<?php the_permalink();?>">
                            <div class="image_contianer" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 33.53%, 
                            rgba(0, 0, 0, 0) 100%), 
                            linear-gradient(0deg, 
                            rgba(0, 0, 0, 0.1), 
                            rgba(0, 0, 0, 0.1)), 
                            url(<?php  the_post_thumbnail_url( 'large');?>);">
                                
                            </div>
                            <div class="story_content">
                                <h4 class="main_title">
                                   <?php echo get_the_title();?>    
                                </h4>
                            </div>
                        </a> 
                    </div>
                </div>
                <?php endwhile;
                endif;?>
                
            </div>
        </div>
    </section>