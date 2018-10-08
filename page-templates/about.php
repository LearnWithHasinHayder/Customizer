<?php
/**
 * Template Name: Customizer About
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php wp_head(); ?>
</head>
<body>
<div class="section banner">
    <h1><?php bloginfo( 'name' ); ?></h1>
    <h2><?php bloginfo( 'description' ); ?></h2>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mission section">
                <h1 class="heading" id="about-heading">
                    <?php
                    echo get_theme_mod('cust_about_heading',__('About Page Heading','customizer'));
                    //echo esc_html(cs_get_customize_option('about_heading'));
                    ?>
                </h1>
                <div id="about-description">
	                <?php
	                echo apply_filters('the_content',get_theme_mod('cust_about_description'));
	                ?>

                    <?php
                    $attachment_id = attachment_url_to_postid(get_theme_mod("test_image"));
                    echo wp_get_attachment_image($attachment_id);
                    ?>
                    <br/>
	                <?php
	                $attachment_id = get_theme_mod("test_image2");
	                echo $attachment_id;
	                ?>

                    <br/>
	                <?php
	                //$attachment_id = attachment_url_to_postid(get_theme_mod("test_file1"));
	                $attachment_id = get_theme_mod("test_file1");
	                echo $attachment_id;
	                ?><br/>
	                <?php
	                //$attachment_id = attachment_url_to_postid(get_theme_mod("test_file1"));
	                $attachment_id = get_theme_mod("test_image3");

	                ?>

                    <br/>
	                <?php
	                echo esc_html(get_theme_mod('my_setting'));

	                ?>
                </div>


            </div>
        </div>
    </div>
</div>
<div class="section footer">
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cumque esse nobis recusandae ullam
        unde.
    </p>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Facebook</a></li>
        <li class="list-inline-item"><a href="#">Twitter</a></li>
        <li class="list-inline-item"><a href="#">Github</a></li>
    </ul>
</div>
</body>
<?php wp_footer(); ?>
</html>
