<section class="news_contain_box">
        <div class="container">
            <div class="new_contain_head">
                <div class="main_title">
                    <img src="<?php echo get_template_directory_uri(  );?>/assets/images/titleFavicon.png" alt="Kathalika - Newsportals" />
                    आजका समाचार
                </div>
                <a href="">सबै हेर्नुहोस्</a>
            </div>
            <div class="row">

                <div class="col-md-6 col-sm-12 main_news">
                <?php $args=[ 
                                
                                'posts_per_page' => 1,
                                'post_status'=> "publish",
                                'cat'=>7,
                                
                                
                            ];
                                $query=new WP_Query($args);
                                if ($query->have_posts()):
                                    while ($query->have_posts()):
                                       $query->the_post();
                                       $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                                      
                                       
                                      
                             ?>
                        <div class="image_container">
                            <a href="<?php the_permalink();?>">
                                <img src="<?php echo $featured_img_url; ?>" alt="">
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
                            <a href="<?php the_permalink();?>" class="news_links">
                                <h2 class="news_title">
                                   <?php echo get_the_title();?>
                                </h2>
                             
                                <p class="news_short_details">
                                    <?php echo get_the_content();?>
                                </p>

                            </a>  
                            
                        </div>
                    </a>
                    <?php endwhile;
                    endif;?>
                </div>
                <div class="col-md-6 col-sm-12 news_lists">
                <?php $args=[ 
                                
                                'posts_per_page' => 3,
                                'post_status'=> "publish",
                                'cat'=>7,
                                
                                
                            ];
                                $query=new WP_Query($args);
                                if ($query->have_posts()):
                                    while ($query->have_posts()):
                                       $query->the_post();
                                       $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                                      
                                       
                                      
                             ?>

                    <ul>
                        <li class="side_news_box">
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
                            <div class="image_container">
                                <img src="<?php echo $featured_img_url;?>" alt="">
                            </div>
                        </li>
                        
                    </ul>
                </a>
                <?php endwhile;
                endif;?>
            </div>
            </div>
        </div>
    </section>