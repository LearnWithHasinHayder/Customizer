<?php
/**
 * Template Name: Customizer Landing
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
                <h1 class="heading" id="service-heading">
					<?php
					echo esc_html( get_theme_mod( 'cust_services_heading', __( 'Our Mission Statement', 'customizer' ) ) );
					//echo esc_html( get_option( 'cust_services_heading', __( 'Our Mission Statement', 'customizer' ) ) );
					?>
                </h1>
				<?php
				if ( get_theme_mod( 'cust_services_display_subheading', 1 ) ):
					?>
                    <p class="subheading">
						<?php
						echo esc_html( get_theme_mod( 'cust_services_subheading' ), __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.', 'customizer' ) );
						?>
                    </p>
				<?php
				endif;

				$cust_column = get_theme_mod('cust_services_number_of_items',4);
				?>
                <div class="row sub-section">
                    <div class="col-md-<?php echo esc_attr($cust_column); ?>">
                        <div class="service">
                            <i class="far fa-building"></i>
                            <h2>Service Name</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                        </div>
                    </div>
                    <div class="col-md-<?php echo esc_attr($cust_column); ?>">
                        <div class="service">
                            <i class="fas fa-chart-bar"></i>
                            <h2>Service Name</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                        </div>
                    </div>
                    <div class="col-md-<?php echo esc_attr($cust_column); ?>">
                        <div class="service">
                            <i class="fas fa-city"></i>
                            <h2>Service Name</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                        </div>
                    </div>
                    <div class="col-md-<?php echo esc_attr($cust_column); ?>">
                        <div class="service">
                            <i class="fas fa-haykal"></i>
                            <h2>Service Name</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                        </div>
                    </div>
                    <div class="col-md-<?php echo esc_attr($cust_column); ?>">
                        <div class="service">
                            <i class="fas fa-broadcast-tower"></i>
                            <h2>Service Name</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                        </div>
                    </div>
                    <div class="col-md-<?php echo esc_attr($cust_column); ?>">
                        <div class="service">
                            <i class="fas fa-bicycle"></i>
                            <h2>Service Name</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                        </div>
                    </div>
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
