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
							$property->the_post();
							$titles = get_children(array(
								'post_type' => 'property'
							));
							$url = SCF::get('url');
							$property_name = SCF::get('property_name');
							if ($titles) {
								foreach ($titles as $title) {
									echo '<option value=' . $url . '>' . $property_name . '</option>';
								}
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
						'post_type' => 'property',
					));
					?>
					<?php $getposts = new WP_Query($args) ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
						<a href="<?php the_permalink(); ?>" class="item">
							<figure class="img-wrap"><img src="<?php the_post_thumbnail(); ?>" alt=""></figure>
							<div class="detail">
								<div class="name"><?php the_title(); ?></div>
							</div>
						</a>
					<?php endwhile;
					wp_reset_postdata(); ?>
				</div><!-- type-wrap -->
				<div class="text-link sp">More</div>
			</div>
		</div><!-- container -->
	</div><!-- room-type -->
</section><!--　room-area　-->