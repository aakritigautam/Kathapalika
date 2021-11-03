<section class="new_half_box special_story">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="shahitya_box">
                        <div class="heading_title">
                            <h2>स्पेशेल स्टोरी</h2>
                        </div>
                        <a href="">सबै हेर्नुहोस् </a>
                    </div>
                    <ul class="news_list image_box_with_overlay">
                    <?php $args=[ 
                                
                                'posts_per_page' => 3,
                                'post_status'=> "publish",
                                'cat'=>8,
                                
                                
                            ];
                                $query=new WP_Query($args);
                                if ($query->have_posts()):
                                    while ($query->have_posts()):
                                       $query->the_post();
                                       $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                                      
                                       
                                      
                             ?>
                        <li class="news_box">
                            <div class="image_container" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 33.53%, 
                            rgba(0, 0, 0, 0) 100%), 
                            linear-gradient(0deg, 
                            rgba(0, 0, 0, 0.1), 
                            rgba(0, 0, 0, 0.1)), 
                            url(<?php echo $featured_img_url; ?>;"></div>
                            <div class="overlay_title">
                                <a href="<?php the_permalink();?>">
                                    <p><?php echo get_the_title();?></p>
                                </a>
                            </div>
                        </li>
                        <?php endwhile;
                        endif;?>
                        
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="shahitya_box">
                        <div class="heading_title">
                            <h2>पालिका</h2>
                        </div>
                        <a href="">सबै हेर्नुहोस् </a>
                    </div>
                    <?php $args=[ 
                                
                                'posts_per_page' => 4,
                                'post_status'=> "publish",
                                'cat'=>9,
                                
                                
                            ];
                                $query=new WP_Query($args);
                                if ($query->have_posts()):
                                    while ($query->have_posts()):
                                       $query->the_post();
                                       $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                                      
                                       
                                      
                             ?>
                    <ul class="new_plika_list">
                        
                        <li class="plika_news_box">
                            <h4 class="plika_title">
                                <a href="<?php the_permalink();?>">
                                   <?php echo get_the_title();?>
                                </a>
                            </h4>
                            <ul class="news_meta">
                                <li class="category">
                                    <a href="">काठमाडौँ</a>
                                </li>
                                <li>
                                    असोज २२, २०७८
                                </li>
                            </ul>
                            <div class="plika_content">
                                <p>
<?php echo get_the_content();?>                                </p>
                            </div>
                        </li>
                       
                    </ul>
                    <?php endwhile;
                    endif;?>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="tips_box">
                        <div class="tips_title">
                            <h2>टिप्स</h2>
                        </div>
                       
                        <ul class="tips_list">
                        <?php $args=[ 
                                
                                'posts_per_page' => 7,
                                'post_status'=> "publish",
                                'cat'=>10,
                                
                                
                            ];
                                $query=new WP_Query($args);
                                if ($query->have_posts()):
                                    while ($query->have_posts()):
                                       $query->the_post();
                                       $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                                      
                                       
                                      
                             ?>
                            <li class="tips_item">
                                <h4 class="tips_item_title">
                                    <a href="<?php the_permalink();?>">
                                       <?php echo get_the_title();?>
                                    </a>
                                </h4>
                            </li>
                            <?php endwhile;
                        endif;?>
                            
                            <li class="tips_more_btn">
                                    <a href="">
                                        सबै हेर्नुहोस् 
                                    </a>
                            </li>
                        </ul>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>