
    <?php get_header();
	$description = get_the_archive_description();?>
	?>    
   
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
                            <img src="/images/sharing_logo.png" alt="">
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
                        <h4>स्पेशेल स्टोरी</h4>
                        <ul class="side_bar_list">
                            <li>
                                <a href="">
                                    <div class="side_bar_new_box">
                                        <div class="image_container" style="background-image: url('/images/main_news.png');"></div>
                                        <div class="aside_news_content">
                                            आजदेखि प्रदेश १ को हिउँदे अधिवेशन, मुख्यमन्त्रीले विश्वासको मत लिने मिति अनिश्चित
                                        </div>
                                    </div>  
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="side_bar_new_box">
                                        <div class="image_container" style="background-image: url('/images/main_news.png');"></div>
                                        <div class="aside_news_content">
                                            आजदेखि प्रदेश १ को हिउँदे अधिवेशन, मुख्यमन्त्रीले विश्वासको मत लिने मिति अनिश्चित
                                        </div>
                                    </div>  
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="side_bar_new_box">
                                        <div class="image_container" style="background-image: url('/images/main_news.png');"></div>
                                        <div class="aside_news_content">
                                            आजदेखि प्रदेश १ को हिउँदे अधिवेशन, मुख्यमन्त्रीले विश्वासको मत लिने मिति अनिश्चित
                                        </div>
                                    </div>  
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="side_bar_new_box">
                                        <div class="image_container" style="background-image: url('/images/main_news.png');"></div>
                                        <div class="aside_news_content">
                                            आजदेखि प्रदेश १ को हिउँदे अधिवेशन, मुख्यमन्त्रीले विश्वासको मत लिने मिति अनिश्चित
                                        </div>
                                    </div>  
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="side_bar_new_box">
                                        <div class="image_container" style="background-image: url('/images/main_news.png');"></div>
                                        <div class="aside_news_content">
                                            आजदेखि प्रदेश १ को हिउँदे अधिवेशन, मुख्यमन्त्रीले विश्वासको मत लिने मिति अनिश्चित
                                        </div>
                                    </div>  
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="side_bar_new_box">
                                        <div class="image_container" style="background-image: url('/images/main_news.png');"></div>
                                        <div class="aside_news_content">
                                            आजदेखि प्रदेश १ को हिउँदे अधिवेशन, मुख्यमन्त्रीले विश्वासको मत लिने मिति अनिश्चित
                                        </div>
                                    </div>  
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news_contain_box photo_slider_section">
        <div class="container">
            <div class="new_contain_head">
                <div class="main_title">
                    <img src="./images/titleFavicon.png" alt="Kathalika - Newsportals" />
                    फोटो
                </div>
                <a href="">सबै हेर्नुहोस्</a>
            </div>
            <div class="slider_container">
                <ul class="slick-slider">
                    <li class="slick-slider-item" aria-setsize="7" aria-posinset="1">
                        <div class="imagecontainer" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 33.53%, rgba(0, 0, 0, 0) 100%), linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url(./images/main_news.png);"></div>
                        <!-- <img src="./images/main_news.png" alt="image"> -->
                        <div class="photo_title">
                            <p>नेकपा शैली पछ्याउँदै नेकपा (एकीकृत समाजवादी), ११ जना सदस्यीय सचिवालय गठन</p>
                        </div>
                    </li>
                    <li class="slick-slider-item" aria-setsize="7" aria-posinset="2">
                        <div class="imagecontainer" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 33.53%, rgba(0, 0, 0, 0) 100%), linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url(./images/main_news.png);"></div>
                        <div class="photo_title">
                            <p>नेकपा शैली पछ्याउँदै नेकपा (एकीकृत समाजवादी), ११ जना सदस्यीय सचिवालय गठन</p>
                        </div>
                    </li>
                    <li class="slick-slider-item" aria-setsize="7" aria-posinset="3">
                        <div class="imagecontainer" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 33.53%, rgba(0, 0, 0, 0) 100%), linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url(./images/main_news.png);"></div>
                        <div class="photo_title">
                            <p>नेकपा शैली पछ्याउँदै नेकपा (एकीकृत समाजवादी), ११ जना सदस्यीय सचिवालय गठन</p>
                        </div>
                    </li>
                    <li class="slick-slider-item" aria-setsize="7" aria-posinset="4">
                        <div class="imagecontainer" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 33.53%, rgba(0, 0, 0, 0) 100%), linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url(./images/main_news.png);"></div>
                        <div class="photo_title">
                            <p>नेकपा शैली पछ्याउँदै नेकपा (एकीकृत समाजवादी), ११ जना सदस्यीय सचिवालय गठन</p>
                        </div>
                    </li>
                    <li class="slick-slider-item" aria-setsize="7" aria-posinset="5">
                        <div class="imagecontainer" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 33.53%, rgba(0, 0, 0, 0) 100%), linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url(./images/main_news.png);"></div>
                        <div class="photo_title">
                            <p>नेकपा शैली पछ्याउँदै नेकपा (एकीकृत समाजवादी), ११ जना सदस्यीय सचिवालय गठन</p>
                        </div>
                    </li>
                    <li class="slick-slider-item" aria-setsize="7" aria-posinset="6">
                        <div class="imagecontainer" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 33.53%, rgba(0, 0, 0, 0) 100%), linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url(./images/main_news.png);"></div>
                        <div class="photo_title">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, maxime!</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

   <?php get_footer();?>