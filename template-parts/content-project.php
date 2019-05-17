<div class="news-article">
		<div class="news-img">
			
			<?php 
				$field_name = "project_image";
				$image = get_field('project_image');
				$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

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
				$projectHeading = "project_heading";
				$projectLink = "project_link";
				$projectText = "project_text";
				?>

				<h5><?php the_field($projectHeading); ?></h5>
				<p><?php the_field($projectText); ?></p>
		</div>
</div>
