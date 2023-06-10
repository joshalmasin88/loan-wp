<?php

/**
 * Template Name: Landing Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = 'container-fluid';
if (is_front_page()) {
	get_template_part('global-templates/hero');
}

$wrapper_id = 'full-width-page-wrapper';
if (is_page_template('page-templates/no-title.php')) {
	$wrapper_id = 'no-title-page-wrapper';
}
?>

<div class="wrapper" id="<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok.          
							?>">

	<div class="<?php echo esc_attr($container); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<div class="container hero">
						<div class="row d-flex align-items-center h-100">
							<div class="col-md-6">
								<h1>Quick and Easy Loans for Your Financial Needs.</h1>
								<p>Our loan services offer a hassle-free and streamlined borrowing experience, providing you with the funds you need in a timely manner to meet your financial requirements.</p>
								<button>Get Started</button>
							</div>
							<div class="col-md-6">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/hero.png" alt="">
							</div>
						</div>
					</div>


					<div class="services container-fluid">
						<h2>Our Services</h2>
						<div class="container">
							<div class="row d-flex text-center">
								<div class="col-md-4">
									<div class="service-card d-flex justify-content-center align-items-center">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/personal-loan-icon.png" alt="">
										<h3>Personal load</h3>
										<p>Personal loans provide
											borrowers with flexibility in how they use the funds.</p>
										<button>Apply now</button>
									</div>
								</div>
								<div class="col-md-4">
									<div class="service-card d-flex justify-content-center align-items-center">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/business-loan.png" alt="">
										<h3> Business loan</h3>
										<p>Business Loan Services provide
											financial assistance to businesses
											for various purposes..</p>
										<button>Apply now</button>
									</div>
								</div>
								<div class="col-md-4">
									<div class="service-card d-flex justify-content-center align-items-center">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/auto-loan.png" alt="">
										<h3>Auto loan</h3>
										<p>Auto Loan Services provide
											financing options for individuals
											businesses to purchase a vehicle.</p>
										<button>Apply now</button>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 mx-auto text-center">
									<button class="view-more-service-btn">View More</button>
								</div>
							</div>
						</div>
					</div>


					<div class="wework container">
						<div class="row workheadings">
							<div class="col-md-6 mx-auto text-center">
								<h2 class="work-heading">How we works?</h2>
								<p>This is a process, how you can get loan for your self.</p>
							</div>
						</div>
						<div class="row d-flex justify-content-center align-items-center">
							<div class="col-md-6">
								<img src="<?php echo get_stylesheet_directory_uri() . '/imgs/application.png' ?>" alt="">
							</div>
							<div class="col-md-6">
								<h2 class="work-nums">01</h2>
								<h3>Application</h3>
								<p>The borrower submits a loan application to the bank, either in person, online, or through other channels. The application includes personal and financial information, such as income, employment history, credit score, and the purpose of the loan.</p>
							</div>
						</div>
					</div>
				</main>

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok.          
			?> -->

<?php
get_footer();
