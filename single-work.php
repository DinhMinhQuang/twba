<?php
/**
 * Template Name: Single Work
 *
 * This template is used to display a custom single interface.
 */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo str_replace(' ##### ', ' ', get_the_title()) ?> - <?php echo get_bloginfo('name'); ?></title>
    <meta property='og:title' content='<?php echo str_replace(' ##### ', ' ', get_the_title()) ?>' />
    <meta property="og:image" content="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'full')); ?>" />
    <?php wp_head(); ?>
</head>

<body class="dark single-article">
    <?php get_header(); ?>
    <?php get_template_part('cookie-notice'); ?>
    <section id="featured-media">
        <?php $featured_image_url = get_the_post_thumbnail_url($post->ID, 'full'); ?>
        <div class="vid-cover" style="background-image: url('<?php echo esc_url($featured_image_url); ?>');">
            <div class="image-darken" />
        </div>
        <div class="featured-media-overlay">
            <div class="client-date">
                <span class="client">
                    <?php echo get_post_meta($post->ID, 'client', true); ?>
                </span><span class="location"></span>
            </div>
            <div class="headline">
                <h1>
                    <?php
                    $title = get_the_title();
                    $parts = explode(' ##### ', $title);

                    // Hiển thị các phần con với mỗi phần bọc trong thẻ <h1>
                    foreach ($parts as $part) {
                        // Loại bỏ các khoảng trắng ở đầu và cuối phần
                        $part = trim($part);
                        // Hiển thị thẻ <h1> cho mỗi phần nếu phần không rỗng
                        if (!empty($part)) {
                            echo '<h1>' . $part . '</h1>';
                        }
                    }
                    ?>
                </h1>
            </div>
            <!-- headline -->
            <?php
            $heroVimeoId = get_post_meta($post->ID, 'hero_vimeo_id', true);
            if (!empty($heroVimeoId)) {
                echo "<a href='#' alt='" . str_replace(' ##### ', ' ', get_the_title()) . "' class='slanted-button' id='watch-vid-work'>";
                echo "<h4>Watch</h4>";
                echo "</a>";
            }
            ?>
        </div>
        </div>
        <!--/.vid-cover-->
        <div class="vid-container">
            <div id="vid-wrapper">
                <iframe id="article-featured-video"
                    data-url="https://player.vimeo.com/video/<?php echo get_post_meta($post->ID, 'hero_vimeo_id', true); ?>?dnt=1&autoplay=0&api=1"
                    frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay"></iframe>
                <div id="frame-shield"></div>
            </div>
            <div class="vid-controls">
                <div class="vid-play">
                    <a href="#" id="vid-play-btn">play</a>
                </div>
                <!--/.vid-play-->
                <div class="vid-progress" id="vid-progress-bar">
                    <span class="meter"></span>
                    <span class="progress-dot"></span>
                </div>
                <!--/.vid-progress-->
                <div class="vid-fullscreen">
                    <a href="#" id="fullscreen">fullscreen video</a>
                </div>
                <!--/.vid-fullscreen-->
                <div class="vid-close">
                    <a href="#" id="vid-close">close video</a>
                </div>
                <!--/.vid-close-->
            </div>
            <!--/.vid-controls-->
        </div>
        <!--/.vid-container-->
    </section>
    <!--/#featured-media-->
    <div id="article-slash"></div>
    <!-- end slash -->
    <section id="article-content" class="article-content-work-single">
        <div class="grid-container">
            <div class="row">
                <div class="small-offset-2 col-xs-12 xlarge-5 large-6 medium-8 small-11 columns">
                    <div id="main-copy">
                        <div class="blurb">
                            <?php echo trim(the_excerpt()) ?>
                        </div>
                        <div class="article-copy">
                            <?php
                            // Lấy nội dung của bài viết
                            $content = get_the_content();
                            $content = apply_filters('the_content', $content);
                            echo $content;
                            ?>
                        </div>
                    </div>
                    <!--/.main-copy-->
                </div>
            </div>
            <div class="row" id="awards-share">
                <div class="pl-0 large-1 large-offset-1 small-2 small-offset-2 columns article-share" style="display: none;">
                    <h2>Share</h2>
                </div>
                <div class="large-4 small-8 small-offset-1 medium-offset-0 columns end article-share"
                    style="display: none;">
                    <!-- 				<script type="text/javascript" async src="https://platform.twitter.com/widgets.js"></script>
               --> <a target="_blank" href="//www.facebook.com/sharer.php?u=<?php echo get_permalink() ?>"
                        class="fb-share">Share on Facebook</a>
                    <a target="_blank"
                        href="//www.linkedin.com/sharing/share-offsite/?url=<?php echo get_permalink() ?>"
                        class="linkedin-share">Share on LinkedIn </a>
                </div>
            </div>
            <div class="row">
                <!-- <div class=" ">
                    <div class="img-container ">
                        <img
                            src="/wordpress/wp-content/themes/tbwa/assets/images/Ảnh-chụp-Màn-hình-2020-09-08-lúc-12.20.55.png" />
                    </div>
                </div>
                <div class=" ">
                    <div class="img-container ">
                        <img
                            src="/wordpress/wp-content/themes/tbwa/assets/images/Ảnh-chụp-Màn-hình-2020-09-08-lúc-12.21.20.png" />
                    </div>
                </div> -->
                <div class=" ">
                    <?php
                    // Lấy nội dung của bài viết
                    $content = get_post_meta($post->ID, 'custom_editor', true);

                    // Hiển thị nội dung đã cắt và chỉnh sửa
                    echo apply_filters('the_content', $content);

                    ?>
                </div>
            </div>
            <!--/.row -->
            <div class="row">
                <div class="columns large-14" id="back-to-parent">
                    <a href="/work">More Work</a>
                </div>
            </div>
            <!--/.row -->
        </div>
        <!--/.grid-container-->
    </section>
    <?php get_template_part('footer-script'); ?>

    <?php get_footer(); ?>
    <?php
    wp_footer();
    ?>
</body>

</html>