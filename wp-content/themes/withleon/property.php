<section class="room-area">
	<div class="room-type">
		<div class="ttl-wrap fade-box">
			<div class="container">
				<h3 class="sec-ttl">物件一覧</h3>
				<div class="search">
					<p>物件を探す</p>
					<!-- <select name="" id=""> -->
					<select name="custompost-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'>
						<?php
						$property = new WP_Query(array(
							'post_type' => 'property'
						));
						if ($property->have_posts()) {
							while ($property->have_posts()) {
								$property->the_post();
								$url = SCF::get('url');
								$property_name = SCF::get('property_name');
								echo '<option value=' . $url . '>' . $property_name . '</option>';
							}
						}

						?>
					</select>
				</div><!-- search -->
			</div>
			<div class="en">Property</div>
		</div><!-- ttl-wrap -->
		<div class="container">
			<div class="fade-box">
				<div class="type-wrap">

					<?php
					$property = new WP_Query(array(
						'post_type' => 'property'
					));
					if ($property->have_posts()) {
						while ($property->have_posts()) {
							$property->the_post();
							$url = SCF::get('url');
							$property_name = SCF::get('property_name');
							$image_thumbnail = SCF::get('thumbnail_image');
							$image_thumbnail_item = wp_get_attachment_image_src($image_thumbnail);
							echo '<a href="' . $url . '" class="item">';
							echo	'<figure class="img-wrap">';
							echo '<img src="' . esc_url($image_thumbnail_item[0]) . '" alt="">';
							echo '</figure>';
							echo	'<div class="detail">';
							echo		'<div class="name">' . $property_name . '</div>';
							echo	'</div>';
							echo	'</a>';
						}
					}

					?>
				</div><!-- type-wrap -->
				<div class="text-link sp">More</div>
			</div>
		</div><!-- container -->
	</div><!-- room-type -->
</section><!--　room-area　-->