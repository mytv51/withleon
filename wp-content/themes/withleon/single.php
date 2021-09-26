<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="format-detection" content="telephone=no, address=no, email=no">

	<meta property="og:type" content="website">
	<meta property="og:url" content=" ">
	<meta property="og:image" content="images/common/ogp.jpg">
	<meta property="og:site_name" content="Leonstyle">
	<meta property="og:title" content="Leonstyle">
	<meta property="og:description" content="texttexttesttextextexte">

	<meta name="keywords" content="キーワード,キーワード,キーワード">
	<meta name="description" content="texttexttesttextextexte">

	<link rel="shortcut icon" href="images/common/favicon.ico">
	<link rel="apple-touch-icon" href="images/common/apple-touch-icon-152x152.png">

	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-adjust.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/plugin/slick/slick-theme.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/plugin/slick/slick.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/plugin/lightbox/lightbox.min.css" rel="stylesheet">

	<link href="<?php echo get_template_directory_uri(); ?>/css/common.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/nav.css" rel="stylesheet">

	<link href="<?php echo get_template_directory_uri(); ?>/css/room.css" rel="stylesheet">

	<title>レオンコンフォート天王寺東 | Leonstyle</title>
</head>


<body id="top">


	<article>
		<header class="header">
			<div class="container">
				<div class="l-item">
					<h1 class="logo"><a href="/" class="en">LeonStyle</a></h1>
					<h1 class="room-name">
						<?php
						$taxonomy_name = get_the_terms($post->ID, 'danh_sach_toa_nha');
						echo $taxonomy_name[0]->name;
						?>
					</h1>
				</div>
				<div class="col-md-6">
					<div class="vertically-center h-100 flex-end">
						<div class="text-end">add to any chua lam</div>
					</div>
				</div>
			</div>
		</header>


		<main>

			<section class="interior-area">
				<div class="container">
					<div class="ttl-wrap">
						<h3 class="sec-ttl">内観</h3>
						<div class="en">Interior</div>
					</div>
					<div class="slider-wrap">
						<div class="slider-for">
							<?php $img_group = SCF::get('interior_group');
							?>
							<?php if (!empty($img_group)) : ?>
								<?php
								foreach ($img_group as $fields) {
									$image = $fields["interior_image"];
									$imageItem = wp_get_attachment_image_src($image, 'thumbnail');
									echo '<figure><a href="' . esc_url($imageItem[0]) . '" rel="lightbox[a-group]"><img src="' . esc_url($imageItem[0]) . '" alt=""></a></figure>';
								?>
								<?php } ?>
							<?php endif; ?>
						</div>
						<div class="slider-nav">
							<?php $img_group = SCF::get('interior_group'); ?>
							<?php if (!empty($img_group[0]['interior_image'])) : ?>
								<?php
								foreach ($img_group as $fields) {
									$image = $fields["interior_image"];
									$imageItem = wp_get_attachment_image_src($image, 'thumbnail');
									echo '<figure><img src="' . esc_url($imageItem[0]) . '" alt=""></figure>';
								?>
								<?php } ?>
							<?php endif; ?>
						</div>
					</div><!-- slider-wrap -->
				</div>
			</section><!--　interior-area　-->


			<div class="sec-wrap header-change">
				<div class="container">
					<section class="exterior-area">
						<div class="ttl-wrap fade-box">
							<h3 class="sec-ttl">外観</h3>
							<div class="en">Exterior</div>
						</div>
						<div class="slider-wrap fade-box">
							<div class="slider-for">
								<?php $img_group = SCF::get('exterior_group');
								?>
								<?php if (!empty($img_group)) : ?>
									<?php
									foreach ($img_group as $fields) {
										$image = $fields["exterior_image"];
										$imageItem = wp_get_attachment_image_src($image, 'thumbnail');
										echo '<figure><a href="' . esc_url($imageItem[0]) . '" rel="lightbox[a-group]"><img src="' . esc_url($imageItem[0]) . '" alt=""></a></figure>';
									?>
									<?php } ?>
								<?php endif; ?>
							</div>
							<div class="slider-nav">
								<?php $img_group = SCF::get('exterior_group'); ?>
								<?php if (!empty($img_group)) : ?>
									<?php
									foreach ($img_group as $fields) {
										$image = $fields['exterior_image'];
										$imageItem = wp_get_attachment_image_src($image, 'thumbnail');
										echo '<figure><img src="' . esc_url($imageItem[0]) . '" alt=""></figure>';
									?>
									<?php } ?>
								<?php endif; ?>
							</div>
						</div><!-- slider-wrap -->
					</section><!--　exterior-area　-->
					<section class="access-area">
						<div class="access-wrap fade-box">
							<div class="ttl-wrap">
								<h3 class="sec-ttl">所在地</h3>
								<div class="en sp">Location</div>
							</div>
							<?php $address = SCF::get('address') ?>
							<div class="text">
								<?php echo $address ?>
							</div>

						</div><!-- access-area -->
						<div class="station-wrap fade-box">
							<div class="ttl-wrap">
								<h3 class="sec-ttl">アクセス</h3>
								<div class="en sp">Access</div>
							</div>
							<div class="station-box">
								<div class="item-wrap">
									<?php $station_group = SCF::get('station_group'); ?>
									<?php if (!empty($station_group)) : ?>
										<?php
										foreach ($station_group as $fields) {
											$route = $fields['route'];
											$station_name = $fields['station_name'];
											$walking_time = $fields['walking_time'];
											$station_image = $fields['station_image'];
											$station_image_item = wp_get_attachment_image_src($station_image, 'thumbnail');
											echo '<div class="item">';
											echo '<div class="text">';
											echo '<div class="line">' . $route . '</div>';
											echo '<div class="wrap">';
											echo '<span class="name">' . $station_name . '</span>';
											echo '<span class="time">徒歩<span>' . $walking_time . '</span>分</span>';
											echo '</div>';
											echo '</div>';
											echo '<figure>';
											echo '<img src="' . esc_url($station_image_item[0]) . '" alt="">';
											echo '</figure>';
											echo '</div>';
										?>
										<?php } ?>
									<?php endif; ?>
								</div>
								<div class="main-time">
									<?php $distance = SCF::get('distance') ?>
									<p>
										<?php echo $distance ?>
									</p>
								</div><!-- main-time -->
							</div><!-- station-box -->
						</div><!-- station-wrap -->
					</section><!--　access-area　-->
				</div><!-- container -->
				<div class="ttl-wrap access fade-box">
					<div class="en pc">Access</div>
				</div>
			</div><!-- sec-wrap -->


			<section class="room-area">
				<div class="container">
					<div class="ttl-wrap fade-box">
						<h3 class="sec-ttl white">部屋詳細</h3>
						<div class="en sp">Room</div>
					</div>
					<div class="room-wrap">
						<table class="fade-box">
							<tr>
								<th>部屋タイプ</th>
								<?php $room_type = SCF::get('room_type') ?>
								<td><?php echo $room_type ?></td>
								<th>間取り</th>
								<?php $style_room = SCF::get('style_room') ?>
								<td><?php echo $style_room ?></td>
							</tr>
							<tr>
								<th>専有面積</th>
								<?php $square = SCF::get('square') ?>
								<td><?php echo $square ?>㎡</td>
								<th>帖数</th>
								<?php $tatami1 = SCF::get('tatami_number_1') ?>
								<?php $tatami2 = SCF::get('tatami_number_2') ?>
								<td>DK：<?php echo $tatami1 ?><br>洋室：<?php echo $tatami2 ?></td>
							</tr>
							<tr>
								<th>賃料</th>
								<?php $price = SCF::get('price') ?>
								<td><?php echo $price ?></td>
								<th>共益費</th>
								<?php $social_fee = SCF::get('social_fee') ?>
								<td><?php echo $social_fee ?></td>
							</tr>
							<tr>
								<th>敷金</th>
								<?php $deposit = SCF::get('deposit') ?>
								<td><?php echo $deposit ?></td>
								<th>礼金</th>
								<?php $gift_fee = SCF::get('gift_fee') ?>
								<td><?php echo $gift_fee ?></td>
							</tr>
							<tr>
								<th>竣工年月</th>
								<?php $established_date = SCF::get('established_date') ?>
								<td><?php echo $established_date ?></td>
								<th>構造</th>
								<?php $structure = SCF::get('structure') ?>
								<td><?php echo $structure ?></td>
							</tr>
							<tr>
								<th>総戸数</th>
								<?php $quantity = SCF::get('quantity') ?>
								<td><?php echo $quantity ?></td>
								<th>敷地内駐車場</th>
								<?php $parking = SCF::get('parking') ?>
								<td><?php echo $parking ?></td>
							</tr>
							<tr>
								<th>所在地</th>
								<?php $address = SCF::get('address') ?>
								<td colspan="3"><?php echo $address ?></td>
							</tr>
						</table>
						<div class="slider-wrap fade-box">
							<div class="slider-for">
								<?php $img_group = SCF::get('access_group');
								?>
								<?php if (!empty($img_group)) : ?>
									<?php
									foreach ($img_group as $fields) {
										$image = $fields['access_image'];
										$imageItem = wp_get_attachment_image_src($image, 'thumbnail');
										echo '<figure><a href="' . esc_url($imageItem[0]) . '" rel="lightbox[a-group]"><img src="' . esc_url($imageItem[0]) . '" alt=""></a></figure>';
									?>
									<?php } ?>
								<?php endif; ?>
							</div>
							<div class="slider-nav">
								<?php $img_group = SCF::get('access_group'); ?>
								<?php if (!empty($img_group)) : ?>
									<?php
									foreach ($img_group as $fields) {
										$image = $fields['access_image'];
										$imageItem = wp_get_attachment_image_src($image, 'thumbnail');
										echo '<figure><img src="' . esc_url($imageItem[0]) . '" alt=""></figure>';
									?>
									<?php } ?>
								<?php endif; ?>
							</div>
						</div><!-- slider-wrap -->
					</div><!-- room-wrap -->
					<div class="ttl-wrap room pc fade-box">
						<div class="en">Room</div>
					</div>
					<div class="icon-wrap fade-box">
						<ul>
							<?php
							$array = array(
								'エレベーター' => 'off',
								'オートロック' => 'off',
								'宅配BOX' => 'off',
								'防犯カメラ' => 'off',
								'モニターホン' => 'off',
								'顔認証キー' => 'off',
								'ネット無料' => 'off',
								'Wi-Fi有' => 'off',
								'浴室乾燥機' => 'off',
								'追い焚き機能' => 'off',
								'シャンプー' => 'off',
								'温水洗浄便座' => 'off',
								'エアコン付' => 'off',
								'カウンターキッチン' => 'off',
								'ウォークインクローゼット' => 'off',
								'シューズインクローゼット' => 'off',
								'ペット可' => 'off',
								'2人入居可' => 'off',
							);
							$service = SCF::get('service_name');
							foreach ($service as $item) {
								if (array_key_exists($item, $array)) {
									$array[$item] = "";
								}
							}
							?>
							<?php echo '<li class="' . $array['エレベーター'] . '">' ?>
							<i><img src="<?php echo get_template_directory_uri(); ?>/images/room/icon_elevator.svg" alt="エレベーター"></i>
							<span>エレベーター</span>
							</li>
							<?php echo '<li class="' . $array['オートロック'] . '">' ?>
							<i><img src="<?php echo get_template_directory_uri(); ?>/images/room/icon_key.svg" alt="オートロック"></i>
							<span>オートロック</span>
							</li>
							<?php echo '<li class="' . $array['宅配BOX'] . '">' ?>
							<i><img src="<?php echo get_template_directory_uri(); ?>/images/room/icon_box.svg" alt="宅配BOX"></i>
							<span>宅配BOX</span>
							</li>
							<?php echo '<li class="' . $array['防犯カメラ'] . '">' ?>
							<i><img src="<?php echo get_template_directory_uri(); ?>/images/room/icon_camera.svg" alt="防犯カメラ"></i>
							<span>防犯カメラ</span>
							</li>
							<?php echo '<li class="' . $array['モニターホン'] . '">' ?>
							<i><img src="<?php echo get_template_directory_uri(); ?>/images/room/icon_mf.svg" alt="モニターホン"></i>
							<span>モニターホン</span>
							</li>
							<?php echo '<li class="' . $array['顔認証キー'] . '">' ?>
							<i><img src="<?php echo get_template_directory_uri(); ?>/images/room/icon_facecheck.svg" alt="顔認証キー"></i>
							<span>顔認証キー</span>
							</li>
							<?php echo '<li class="' . $array['ネット無料'] . '">' ?>
							<i><img src="<?php echo get_template_directory_uri(); ?>/images/room/icon_free.svg" alt="ネット無料"></i>
							<span>ネット無料</span>
							</li>
							<?php echo '<li class="' . $array['Wi-Fi有'] . '">' ?>
							<i><img src="<?php echo get_template_directory_uri(); ?>/images/room/icon_wifi.svg" alt="Wi-Fi有"></i>
							<span>Wi-Fi有</span>
							</li>
							<?php echo '<li class="' . $array['浴室乾燥機'] . '">' ?>
							<i><img src="<?php echo get_template_directory_uri(); ?>/images/room/icon_dryroom.svg" alt="浴室乾燥機"></i>
							<span>浴室乾燥機</span>
							</li>
							<?php echo '<li class="' . $array['追い焚き機能'] . '">' ?>
							<i><img src="<?php echo get_template_directory_uri(); ?>/images/room/icon_bath.svg" alt="追い焚き機能"></i>
							<span>追い焚き機能</span>
							</li>
							<?php echo '<li class="' . $array['シャンプー'] . '">' ?>
							<i><img src="<?php echo get_template_directory_uri(); ?>/images/room/icon_shower.svg" alt="シャンプードレッサー"></i>
							<span>シャンプー<br>ドレッサー</span>
							</li>
							<?php echo '<li class="' . $array['温水洗浄便座'] . '">' ?>
							<i><img src="<?php echo get_template_directory_uri(); ?>/images/room/icon_wc.svg" alt="温水洗浄便座"></i>
							<span>温水洗浄便座</span>
							</li>
							<?php echo '<li class="' . $array['エアコン付'] . '">' ?>
							<i><img src="<?php echo get_template_directory_uri(); ?>/images/room/icon_air.svg" alt="エアコン付"></i>
							<span>エアコン付</span>
							</li>
							<?php echo '<li class="' . $array['カウンターキッチン'] . '">' ?>
							<i><img src="<?php echo get_template_directory_uri(); ?>/images/room/icon_ck.svg" alt="カウンターキッチン"></i>
							<span>カウンター<br>キッチン</span>
							</li>
							<?php echo '<li class="' . $array['ウォークインクローゼット'] . '">' ?>
							<i><img src="<?php echo get_template_directory_uri(); ?>/images/room/icon_wic.svg" alt="ウォークインクローゼット"></i>
							<span>ウォークイン<br>クローゼット</span>
							</li>
							<?php echo '<li class="' . $array['シューズインクローゼット'] . '">' ?>
							<i><img src="<?php echo get_template_directory_uri(); ?>/images/room/icon_sic.svg" alt="シューズインクローゼット"></i>
							<span>シューズイン<br>クローゼット</span>
							</li>
							<?php echo '<li class="' . $array['ペット可'] . '">' ?>
							<i><img src="<?php echo get_template_directory_uri(); ?>/images/room/icon_pet.svg" alt="ペット可"></i>
							<span>ペット可</span>
							</li>
							<?php echo '<li class="' . $array['2人入居可'] . '">' ?>
							<i><img src="<?php echo get_template_directory_uri(); ?>/images/room/icon_two.svg" alt="2人入居可"></i>
							<span>2人入居可</span>
							</li>
						</ul>
						<div class="text-link sp">More</div>
					</div><!-- icon-wrap -->
					<div class="sns-area sp fade-box">
						<p>物件情報を共有する</p>
						<div class="sns">
							icon icon icon
						</div>
					</div><!-- sns-area -->
				</div><!-- container -->


				<div class="room-type">
					<div class="container">
						<div class="ttl-wrap fade-box">
							<h3 class="sec-ttl">RoomType</h3>
							<div class="en sp">Type</div>
							<p class="detail">奇数階はナチュラルカラー、偶数階はモダンカラーとなっております。</p>
						</div>
						<div class="fade-box">
							<div class="tab-btn sp">
								<ul>
									<li data-group="a">A・A’</li>
									<li data-group="b" class="active">B</li>
									<li data-group="c">C</li>
									<li data-group="d">D</li>
									<li data-group="e">E</li>
									<li data-group="f">F</li>
									<li data-group="g">G</li>
								</ul>
							</div>
							<div class="type-wrap">
								<?php
								$titles = get_the_terms($post->ID, 'danh_sach_toa_nha');
								$posts_array = new WP_Query(array(
									'posts_per_page' => -1,
									'post_type' => 'property_detail',
									'tax_query' => array(
										array(
											'taxonomy' => 'danh_sach_toa_nha',
											'field' => 'term_id',
											'terms' => $titles[0]->term_id
										)
									)
								));



								if ($posts_array->have_posts()) {
									while ($posts_array->have_posts()) {
										$posts_array->the_post();
										$room_type = SCF::get('room_type');
										$style_room = SCF::get('style_room');
										$square = SCF::get('square');
										$price = SCF::get('price');

										$img_group = SCF::get('interior_group');



										foreach ($img_group as $fields) {
											$image = $fields["interior_image"];
											$imageItem = wp_get_attachment_image_src($image, 'thumbnail');
										}


										echo	'<a href="#" class="item color1 active" data-group="a">';
										echo	'<figure class="img-wrap">';
										echo    '<img src="' . esc_url($imageItem[0]) . '" alt="">';
										echo 	'</figure>';
										echo	'<div class="detail">';
										echo	'<div>';
										echo	'<span class="type">' . $room_type . '</span><span class="pc">/</span><span class="color">color1</span>/<span class="size">' . $style_room . '</span>';
										echo	'</div>';
										echo	'<div>';
										echo	'専有面積：<span class="area">' . $square . '</span>㎡';
										echo	'</div>';
										echo	'<div class="mini">';
										echo	'賃料：<span class="place">' . $price . '</span>円～';
										echo	'</div>';
										echo	'</div>';
										echo	'</a>';
									}
								}

								?>
							</div><!-- type-wrap -->
						</div>
					</div><!-- container -->
				</div><!-- room-type -->
			</section><!--　room-area　-->

			<section class="map-area">
				<div class="container">
					<div class="ttl-wrap fade-box">
						<h3 class="sec-ttl">地図</h3>
						<div class="en">Map</div>
					</div>
					<?php
					$map = SCF::get('map');
					$address = SCF::get('address');
					?>
					<div class="gmap-wrap fade-box">
						<iframe src="<?php echo $map ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						<p class="access">所在地：<span><?php echo $address ?></span></p>
					</div>
				</div>
			</section><!--　map-area　-->


			<section class="movie-area">
				<div class="container">
					<div class="ttl-wrap fade-box">
						<h3 class="sec-ttl">物件紹介動画</h3>
						<div class="en">Movie</div>
					</div>
					<?php
					$video = SCF::get('video');
					?>
					<div class="movie-wrap fade-box">
						<iframe width="560" height="315" src="<?php echo $video ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</section><!--　movie-area　-->


			<section class="contact-area container fade-box">
				<div class="ttl-wrap">
					<h3 class="sec-ttl">賃貸仲介業者様へ</h3>
				</div>
				<div class="link-wrap">
					<div class="item">
						<div class="btn-wrap">
							<a href="" target="_blank" class="btn orange"><span class="blank">リアプロ</span>
								<div class="anim"></div>
							</a>
						</div>
						<p>空室確認や入居お申し込みに関しては、<br>リアプロをご利用頂くようお願い致します。</p>
					</div><!-- item -->
					<div class="item">
						<div class="btn-wrap">
							<a href="" class="btn black"><span class="download">ダウンロード</span>
								<div class="anim"></div>
							</a>
						</div>
						<p>当Webサイトの物件写真はポータルサイト等の<br>掲載用にお使い頂けますのでご利用くださいませ。</p>
					</div><!-- item -->
				</div><!-- link-wrap -->
			</section><!--　contact-area　-->

		</main>


		<footer>
			<div class="container">
				<div class="copy">
					<p>Copyright © 2016 LEON URBAN DEVELOPMENT Inc. All Right Reserved.</p>
				</div>
			</div>
			<div class="pagetop">
				<a href="#top"><span></span>
					<div class="anim"></div>
				</a>
			</div>
		</footer>
	</article>


	<script src="https://use.typekit.net/fya1swr.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-2.2.4.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/plugin/slick/slick.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/plugin/lightbox/lightbox.min.js"></script>

	<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/room.js"></script>


</body>

</html>