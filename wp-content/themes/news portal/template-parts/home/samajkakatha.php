<section class="news_contain_box">
        <div class="container">
            <div class="new_contain_head">
                <div class="main_title">
                    <img src="<?php echo get_template_directory_uri(  );?>/assets/images/titleFavicon.png" alt="Kathalika - Newsportals" />
                    समाजका कथा
                </div>
                <a href="">सबै हेर्नुहोस्</a>
            </div>
            <?php $args=[ 
                                
                                'posts_per_page' => 4,
                                'post_status'=> "publish",
                                'cat'=>3,
                                
                            ];
                                $query=new WP_Query($args);
                                if ($query->have_posts()):
                                    while ($query->have_posts()):
                                       $query->the_post();
                                       $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                                      
                             ?>
            <ul class="news_full_width_box">
                <li class="news_full_width_item">
                    <div class="row">
                        <div class="col-md-4 col-xs-12 image_container">
                            <a href="<?php the_permalink();?>">
                                <img src="<?php echo $featured_img_url; ?>" alt="">
                            </a>
                        </div>
                        <div class="col-md-8 col-xs-12 news_content">
                            <ul class="news_meta">
                                <li class="category">
                                    <a href="">काठमाडौँ</a>
                                </li>
                                <li>
                                    असोज २२, २०७८
                                </li>
                            </ul>
                            <a href="<?php the_permalink();?>" class="news_main_content">
                                <h4><?php echo get_the_title();?></h4>
                                <p><?php echo get_the_content();?></p>
                            </a>
                        </div>
                    </div>
                </li>
                
            </ul>
            <?php endwhile;
            endif;?>
        </div>
    </section>