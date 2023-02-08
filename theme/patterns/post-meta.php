<?php
/**
 * Title: Post Meta
 * Slug: rescored/post-meta
 * Categories: query
 * Keywords: post meta
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"className":"post-meta","layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph -->
			<p>
				<?php echo esc_html_x( 'Posted', 'Verb to explain the publication status of a post', 'rs' ); ?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:post-date /-->

			<!-- wp:paragraph -->
			<p>
				<?php echo esc_html_x( 'in', 'Preposition to show the relationship between the post and its categories', 'rs' ); ?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:post-terms {"term":"category"} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0.5ch"}},"layout":{"type":"flex"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph -->
					<p>
						<?php echo esc_html_x( 'by', 'Preposition to show the relationship between the post and its author', 'rs' ); ?>
					</p>
					<!-- /wp:paragraph -->

					<!-- wp:post-author {"showAvatar":false} /-->
				</div>
				<!-- /wp:group -->
		</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0.5ch"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph -->
			<p>
				<?php echo esc_html_x( 'Tags:', 'Label for a list of post tags', 'rs' ); ?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:post-terms {"term":"post_tag"} /-->
		</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
