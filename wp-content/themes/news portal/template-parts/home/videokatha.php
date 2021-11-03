<section class="news_contain_box video_section">
        <div class="container">
            <div class="new_contain_head">
                <div class="main_title">
                    <img src="<?php echo get_template_directory_uri(  );?>/assets/images/titleFavicon.png" alt="Kathalika - Newsportals" />
                    भिडियो कथा
                </div>
                <a href="">सबै हेर्नुहोस्</a>
            </div>
            <div class="row">
            <?php $args=[ 
                                
                                'posts_per_page' => 3,
                                'post_status'=> "publish",
                                'cat'=>6,
                                
                            ];
                                $query=new WP_Query($args);
                                if ($query->have_posts()):
                                    while ($query->have_posts()):
                                       $query->the_post();
                                       $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                                      
                                       
                                      
                             ?>
                <div class="col-md-4 col-xs-12 video_item">
                    <div class="video_container">
                        <iframe width="100%" height="220px" src="https://www.youtube-nocookie.com/embed/jXVOUPSUII8?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h4>
                            <a href="<?php the_permalink();?>">
                           <?php echo get_the_title();?>
                            </a>
                        </h4>
                        
                    </div>
                </div>
                <?php endwhile;
                endif;?>
                
            </div>
        </div>
    </section>