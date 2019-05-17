<div class="news-article">
		<div class="news-img">
			
			<?php 
				$field_name = "news_image";
				$image = get_field('news_image');
				$size = 'medium'; // (thumbnail, medium, large, full or custom size)

				if(!empty($image)) {
					$field = get_field_object($field_name); ?>

					<?php 

					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
				}

			?>
		</div>

		<div class="news-div">
			<?php 
				$newsHeading = "news_heading";
				$newsLink = "news_link";
				$newsText = "news_text";
				?>

				<h5><?php the_field($newsHeading); ?></h5>
				<p><?php the_field($newsText); ?></p>
		</div>
</div>
