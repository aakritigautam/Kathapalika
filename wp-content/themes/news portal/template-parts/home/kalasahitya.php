<section class="new_half_box">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="shahitya_box">
                        <div class="heading_title">
                            <h2>कला / साहित्या</h2>
                        </div>
                        <a href="">सबै हेर्नुहोस् </a>
                    </div>
                    <?php $args=[ 
                                
                                'posts_per_page' => 3,
                                'post_status'=> "publish",
                                'cat'=>11,
                                
                                
                            ];
                                $query=new WP_Query($args);
                                if ($query->have_posts()):
                                    while ($query->have_posts()):
                                       $query->the_post();
                                       $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                                      
                                       
                                      
                             ?>
                    <ul class="shahitya_news">
                        <li class="news_item">
                            <div class="image_container">
                                <img src="<?php echo $featured_img_url; ?>" alt="">
                            </div>
                            <div class="news_content">
                                <h4>
                                    <a href="<?php the_permalink();?>"><?php echo get_the_title();?></a>
                                </h4>
                                <ul class="news_meta">
                                    <li class="category">
                                        <a href="">काठमाडौँ</a>
                                    </li>
                                    <li>
                                        असोज २२, २०७८
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
<?php endwhile;
endif;?>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="shahitya_box">
                        <div class="heading_title">
                            <h2>अर्थ / वाणिज्य</h2>
                        </div>
                        <a href="">सबै हेर्नुहोस् </a>
                    </div>
                    <div class="main_news pr-0">
                    <?php $args=[ 
                                
                                'posts_per_page' => 1,
                                'post_status'=> "publish",
                                'cat'=>12,
                                
                                
                            ];
                                $query=new WP_Query($args);
                                if ($query->have_posts()):
                                    while ($query->have_posts()):
                                       $query->the_post();
                                       $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                                      
                                       
                                      
                             ?>
                        <div class="image_container">
                            <a href="">
                                <img src="<?php echo $featured_img_url;?>" alt="">
                            </a>
                        </div>
                        <div class="news_contain">
                            <ul class="news_meta">
                                <li class="category">
                                    <a href="">काठमाडौँ</a>
                                </li>
                                <li>
                                    असोज २२, २०७८
                                </li>
                            </ul>
                            <a href="" class="news_links">
                                <h2 class="news_title">
                                    <?php echo get_the_title();?>
                                </h2>
                             
                                <p class="news_short_details">
                                    <?php echo get_the_content();?>
                                </p>
    
                            </a>  
                            
                        </div>
                        <?php endwhile;
                        endif;?>
                    </div>
                </div>
            </div>
        </div>
    </section>