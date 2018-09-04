<?php
/**
 * Single Product Rating
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/rating.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

if ( 'no' === get_option( 'woocommerce_enable_review_rating' ) ) {
	return;
}

$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();
$average      = $product->get_average_rating();

if ( $rating_count > 0 ) : ?>
	<?php if ( function_exists('wc_get_rating_html') ) { ?>
		<div class="woocommerce-product-rating">
			<?php echo wc_get_rating_html( $average, $rating_count ); ?>
			<?php if ( comments_open() ) : ?>
				<div class="review-count-wrap">
					<span class="review-count"><?php printf( _n( '%s Review', '%s Reviews', $review_count, 'mythemeshop' ), '<span itemprop="ratingCount" class="count">' . $review_count . '</span>' ); ?></span><span class="delimiter">|</span><a href="#reviews" class="woocommerce-review-link" rel="nofollow"><?php _e('Add Your Review', 'mythemeshop')?></a>
				</div>
			<?php endif ?>
		</div>
	<?php } else { ?>
		<div class="woocommerce-product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
			<div class="star-rating" title="<?php printf( __( 'Rated %s out of 5', 'mythemeshop' ), $average ); ?>">
				<span style="width:<?php echo ( ( $average / 5 ) * 100 ); ?>%">
					<strong itemprop="ratingValue" class="rating"><?php echo esc_html( $average ); ?></strong> <?php printf( __( 'out of %s5%s', 'mythemeshop' ), '<span itemprop="bestRating">', '</span>' ); ?>
					<?php printf( _n( 'based on %s customer rating', 'based on %s customer ratings', $rating_count, 'mythemeshop' ), '<span itemprop="ratingCount" class="rating">' . $rating_count . '</span>' ); ?>
				</span>
			</div>
			<?php if ( comments_open() ) : ?>
				<div class="review-count-wrap">
					<span class="review-count"><?php printf( _n( '%s Review', '%s Reviews', $review_count, 'mythemeshop' ), '<span itemprop="ratingCount" class="count">' . $review_count . '</span>' ); ?></span><span class="delimiter">|</span><a href="#reviews" class="woocommerce-review-link" rel="nofollow"><?php _e('Add Your Review', 'mythemeshop')?></a>
				</div>
			<?php endif ?>
		</div>
	<?php } ?>
<?php endif; ?>
