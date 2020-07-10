<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * Template name: front-page
 * @package game-landing
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php if( have_rows('content') ): ?>
		<?php while ( have_rows('content') ): the_row(); ?>
		<?php if( get_row_layout() == 'hero' ):
								$title = get_sub_field('title');
								$subtitle = get_sub_field('subtitle');								
								$price = get_sub_field('price');
							?>

		<section id="hero">
			<div class="hero-content">
				<h1><?= $title ?></h1>
				<p><?= $subtitle ?></p>
				<button>Buy now on steam
					<?php if( $price ) : ?>
					<span>$<?= $price ?></span>
					<?php endif; ?>
				</button>
			</div>
		</section>


		<?php endif; ?>

		<?php if( get_row_layout() == 'about' ):
						$title = get_sub_field('title');
						$subtitle = get_sub_field('sub_title');
						$content = get_sub_field('content');
						$gallery = get_sub_field('gallery');
				?>
		<section id="about">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<div class="cell large-5">
						<span class="section-subtitle"><?= $subtitle ?></span>
						<h2 class="section-title"><?= $title ?></h2>
						<?= $content ?>
					</div>

					<?php if( $gallery ): ?>
					<div class="cell large-6 small-12">
						<div class="owl-carousel">

							<?php foreach( $gallery as $image ){ ?>

							<img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" width="502.76px" height="610.52px">

							<?php }; ?>

						</div>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</section>

		<?php endif; ?>

		<?php if( get_row_layout() == 'features' ):
			$title = get_sub_field('title');
			$sub_title = get_sub_field('subtitle');
				?>
		<section id="features">
			<div class="grid-container">
				<div class="grid-x">
					<div class="cell medium-5 medium-offset-7">
						<span class="section-subtitle"><?= $subtitle ?></span>
						<h2 class="section-title"><?= $title ?></h2>

						<?php if( have_rows('accordeon') ): ?>
						<div class="acc">
							<?php while ( have_rows('accordeon') ) : the_row();
										$acc_title = get_sub_field('title');
										$acc_content = get_sub_field('content');
									?>
							<div class="acc-item">
								<h3 class="acc-title"><span class="circle"></span><?= $acc_title ?></h3>
								<p class="acc-content"><?= $acc_content ?></p>
							</div>


							<?php endwhile; ?>
						</div>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</section>

		<?php endif; ?>
		<?php if( get_row_layout() == 'system_req' ) :
					$title = get_sub_field('title');
					$subtitle = get_sub_field('subtitle');
					$os = get_sub_field('os');
					$processor = get_sub_field('processor');
					$memory = get_sub_field('memory');
					$storage = get_sub_field('storage');
					$graphics = get_sub_field('graphics');
				?>

		<section id="system_req">
			<span class="section-subtitle"><?= $subtitle ?></span>
			<h2 class="section-title"><?= $title ?></h2>

			<div class="wrapper">
				<table>
					<tr>
						<td>
							<h3>os:</h3>
							<p><?= $os ?></p>
						</td>
						<td>
							<h3>processor:</h3>
							<p><?= $processor ?></p>
						</td>
					</tr>
					<tr>
						<td>
							<h3>memory:</h3>
							<p><?= $memory ?></p>
						</td>
						<td>
							<h3>storage:</h3>
							<p><?= $storage ?></p>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<h3>graphics:</h3>
							<p><?= $graphics ?></p>
						</td>
					</tr>
				</table>
			</div>
		</section>

		<?php endif; ?>

		<?php if( get_row_layout() == 'press_quotes' ) :
					$title = get_sub_field('title');
					$subtitle = get_sub_field('subtitle');
					$content = get_sub_field('content');
				?>
		<section id="testimonials">
			<div class="grid-container">
				<div class="grid-x align-spaced">
					<div class="cell large-5 left-cell">
						<span class="section-subtitle"><?= $subtitle ?></span>
						<h2 class="section-title"><?= $title ?></h2>
						<?= $content ?>
						<button>Read more testimonials</button>
					</div>


					<?php if( have_rows('cards') ) : ?>
					<div class="cell large-6 cards">
						<?php while( have_rows('cards') ) : the_row();
										$image = get_sub_field('card_image');
										$author = get_sub_field('card_author');
										$position = get_sub_field('card_author_position');
										$testimonial = get_sub_field('card_testimonial');
										$date = get_sub_field('card_date');
									?>

						<div class="card">
							<div class="card-header">
								<img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="author-photo">
								<div class="author">
									<h3><?= $author ?></h3>
									<span class="position"><?= $position ?></span>
								</div>
								<span class="tweet_icon"><img src="<?= get_template_directory_uri() . "/img/twitter.png"?>" width="14px"
										height="18px"></span>
							</div>
							<p class="card-body">"<?= $testimonial ?>"</p>
							<div class="card-footer">
								<?= $date ?>
							</div>
						</div>



						<?php endwhile; ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</section>


		<?php endif; ?>

		<?php if( get_row_layout() == 'newsletter' ) :
					$title = get_sub_field('title');
					$subtitle = get_sub_field('subtitle');
					$content = get_sub_field('content');
					$isForm = get_sub_field('add_form');
				?>
		<section id="subscribe">
			<div class="grid-container">
				<div class="grid-x">
					<div class="cell large-7 large-offset-5">
						<span class="section-subtitle"><?= $subtitle ?></span>
						<h2 class="section-title"><?= $title ?></h2>
						<p><?= $content ?></p>

						<?php if( $isForm ) : ?>
						<form class="subscribe" action="#" method="post">
							<div class="input">
								<input type="text" id="email" required>
								<label for="email">Your email adress:</label>
							</div>
							<button>Subscribe now</button>
						</form>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>

		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>


	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();