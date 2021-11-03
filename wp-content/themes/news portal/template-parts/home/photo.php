<section class="news_contain_box photo_slider_section">
        <div class="container">
            <div class="new_contain_head">
                <div class="main_title">
                    <img src="<?php echo get_template_directory_uri(  );?>/assets/images/titleFavicon.png" alt="Kathalika - Newsportals" />
                    फोटो
                </div>
                <a href="">सबै हेर्नुहोस्</a>
            </div>
            <div class="slider_container">
           
                <ul class="slick-slider">
                <?php $args=[ 
                                
                                'posts_per_page' => 5,
                                'post_status'=> "publish",
                                'cat'=>13,
                                
                            ];
                                $query=new WP_Query($args);
                                if ($query->have_posts()):
                                    while ($query->have_posts()):
                                       $query->the_post();
                                       $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                                      
                                       
                                      
                             ?>
                    <li class="slick-slider-item" aria-setsize="7" aria-posinset="1">
                        <div class="imagecontainer" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 33.53%, rgba(0, 0, 0, 0) 100%), linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url(<?php echo $featured_img_url;?>);"></div>
                        <div class="photo_title">
                            <p><?php echo get_the_title();?></p>
                        </div>
                    </li>
                    <?php endwhile;
                endif;?>
                   
                </ul>
                
            </div>
        </div>
    </section>