
    <?php get_header();
	$description = get_the_archive_description();?>
	   
   
    <div class="bread_crumb_box">
        <div class="container">
            <ul class="bread_crumb">
                <li>
                    <a href>कथालिका</a>
                </li>
                <li>
                    <a href><?php echo single_cat_title();?></a>
                </li>
                <li>
                   <?php echo get_the_title();?>
                </li>
            </ul>
        </div>
    </div>
    <section class="singlePage">
        <div class="container">
		<?php
                                
								while (have_posts()):
								   the_post();
								   $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
								   $reading_time = get_post_meta(get_the_ID(),"reading_time",1);
								
						 ?>
            <h1 class="main_title"><?php echo get_the_title();?></h1>
            <div class="image_container">
                <img src="<?php echo $featured_img_url;?>" alt="">
            </div>
            <div class="row">
                <div class="col-md-9 col-sm-12">
				
                    <ul class="news_meta">
                        <li class="category">
                            <a href="">काठमाडौँ</a>
                        </li>
                        <li>
                            असोज २२, २०७८
                        </li>
                    </ul>
                    <div class="single_main_content">
						<p><?php echo get_the_content();?></p>
 
                        <img width="100%" src="" alt="">
                       
                    </div>
					<?php endwhile;
					?>
					
                    <div class="news_sharing_box">
                        <div class="social_share_box">
                            <img src="<?php echo get_template_directory_uri(  );?>/assets/images/sharing_logo.png" alt="">
                            <ul>
                                <li>
                                    <a href=""><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="activity_box">
                            <div class="news_vote active">
                                <button type="button"><i class="fa fa-thumbs-o-up"></i></button>
                                <p>200 likes</p>
                            </div>
                            <div class="news_vote">
                                <button type="button"><i class="fa fa-thumbs-o-down"></i></button>
                                <p>10 dislikes</p>
                            </div>
                            <button type="button" class="share_btn_outline">share</button>
                        </div>
                    </div>
                </div>
				
                <div class="col-md-3 col-sm-12">
				
                    <div class="single_side_bar">
					<h4><?php echo single_cat_title();?></h4>
					<?php $args=[ 
                                
                                'posts_per_page' => 5,
                                'post_status'=> "publish",
								'cat'=> 8,
                                
                                
                                
                            ];
                                $query=new WP_Query($args);
                                if ($query->have_posts()):
                                    while ($query->have_posts()):
                                       $query->the_post();
                                       $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                                      
                                       
                                      
                             ?>
                        
                        <ul class="side_bar_list">
                            <li>
                                <a href="">
                                    <div class="side_bar_new_box">
                                        <div class="image_container" style="background-image: url('<?php echo $featured_img_url;?>');"></div>
                                        <div class="aside_news_content">
                                            <?php the_title();?>
                                        </div>
                                    </div>  
                                </a>
                            </li>
                            
                        </ul>
						<?php endwhile;
					endif;?>
                    </div>
					</div>
					
                
            </div>
        </div>
    </section>

    <?php echo get_template_part('template-parts/home/photo' );?>

   <?php get_footer();?>