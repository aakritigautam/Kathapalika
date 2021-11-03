<section class="news_contain_box">
        <div class="container">
            <div class="new_contain_head">
                <div class="main_title">
                    <img src="<?php echo get_template_directory_uri(  );?>/assets/images/titleFavicon.png" alt="Kathalika - Newsportals" />
                    जीवनका कथा
                </div>
                <a href="">सबै हेर्नुहोस्</a>
            </div>
            <div class="row">
            <?php $args=[ 
                                
                                'posts_per_page' => 4,
                                'post_status'=> "publish",
                                'cat'=>5,
                                
                            ];
                                $query=new WP_Query($args);
                                if ($query->have_posts()):
                                    while ($query->have_posts()):
                                       $query->the_post();
                                       $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                                      
                                       
                                      
                             ?>
            
                <div class="col-md-6 col-sm-12 news_lists_next">
                    <ul>
                        <li class="side_news_box">
                            <div class="image_container">
                                <img src="<?php echo $featured_img_url; ?>" alt="">
                            </div>
                            <div class="news_content">
                                <ul class="news_meta">
                                    <li class="category">
                                        <a href="">काठमाडौँ</a>
                                    </li>
                                    <li>
                                        असोज २२, २०७८
                                    </li>
                                </ul>
                                <a href="<?php the_permalink();?>">
                                    <h4>
                                       <?php echo get_the_title();?>
                                    </h4>
                                </a>
                            </div>
                        </li>
                       
                    </ul>
                </div>
                <?php endwhile;
                endif;?>
                
            </div>
        </div>
    </section>