<?php
/*--------------------------------------------------------------------------
	Template Name: index
---------------------------------------------------------------------------*/

	/* 共通設定読み込み */
	include_once ('assets/class/base.class.php');
	include_once ('assets/class/functions.php');
	include ('assets/settings/site-config.php');

	/* このページに親がある場合true */
	$has_parent = false;

	/* ページ設定 */
	define( 'CURRENTDIR', 'top' );	// ディレクトリ名
	define( 'CURRENTPAGE', 'index' );	// ページ名
	$dirname 		= 'ディレクトリ名';

	/* ページ専用CSS */
	$css = '';
	$css .= '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/css/lib/slick.css" media="all">' . "\n";
	$css .= '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/css/lib/slick-theme.css" media="all">' . "\n";

	/* ページ専用JS */
	$js = '';
	$js .= '<script src="' . get_template_directory_uri() . '/js/lib/slick.min.js"></script>' . "\n";
	$js .= '<script src="' . get_template_directory_uri() . '/js/' . CURRENTDIR . '.js"></script>' . "\n";

	/* ページ専用SEO */
	$page_org_title	= '';
	$page_meta_d	= '';
	$page_meta_k	= '';

	// レイアウト個別指定
	$layout			= 'one-column';
//	$layout			= 'has-side';

	# header読み込み
	include ("assets/common/html-header.php");
	get_header();

?>
	<section class="promo-wrap <?php if ( $gnav_pos == 'header-fixed' ) { echo 'header-fixed'; };?>">
		<div class="mod-promo-slick slick-slider ">
			<div class="slider-content slider01">
				<div class="promo">
					<div class="promo-catch">
						<h2 class="promo-title">テストだよ</h2>
						<p>ここにはキャッチコピーが入ります。</p>
					</div>
				</div>
			</div>
			<div class="slider-content slider02">
				<div class="promo">
					<div class="promo-catch">
						<h2 class="promo-title">タイトル２です。</h2>
						<p>ここにはキャッチコピーが入ります。</p>
					</div>
				</div>
			</div>
			<div class="slider-content slider03">
				<div class="promo">
					<div class="promo-catch">
						<h2 class="promo-title">タイトル３です。</h2>
						<p>句読点を入て拾文字、ここまでで二拾文字。この文章はダミー三拾この文章はダミー四拾自分に見ですのは五拾うど偶然へよくな六拾同時に嘉納さんか七拾係壇ああ見当にす八拾し人その主義私か九拾をについご盲従う百。</p>
					</div>
				</div>
			</div>
		</div>

	</section>

<?php if( $header_type == 'standard' && $gnav_pos == 'promo-fixed' ): ?>
	<section class="gnav-wrap"><!-- gnav-wrap -->
		<div class="gnav">
			<nav class="mod-gnav-standard">
<?php include ("assets/settings/sitemap.php");?>
			</nav>
		</div>
	</section><!-- // gnav-wrap -->
<?php endif;?>

	<div class="contents-wrap <?php echo $layout;?>"><!-- contents-wrap -->

		<main>

			<section class="page-section bg-cover bg-atfix" id="top-intro">

				<div class="contents fadeup"><!-- contents -->

					<div class="hgroup">
						<div class="mod-contents-header">
							<h1 class="header-title font-designed center">ABOUT</h1>
							<p class="subtitle center">わたしたちについて</p>
						</div>
					</div>

					<div class="block">
						<div class="mod-image-texts">
							<div class="image-cont">
								<p class="pic"><img src="<?php bloginfo('template_url');?>/images/dummy.jpg" alt=""></p>
							</div>
							<div class="texts-cont texts">
								<h3 class="heading03">ここには見出しが入ります</h3>
								<p>句読点を入て拾文字、ここまでで二拾文字。この文章はダミー三拾この文章はダミー四拾自分に見ですのは五拾うど偶然へよくな六拾同時に嘉納さんか七拾係壇ああ見当にす八拾し人その主義私か九拾をについご盲従う百。句読点込み百拾文字、ここまで百二拾文字。この文章はダミ百三拾この文章はダミ百四拾自分に見ですの百五拾うど偶然へよく百六拾同時に嘉納さん百七拾係壇ああ見当に百八拾し人その主義私百九拾をについご盲従弐百。</p>
							</div>
						</div>
					</div>

					<div class="block mbcut">
						<p class="section-more center"><a href="" class="button bc-ghost">ボタン<i class="fas fa-chevron-right"></i></a></p>
					</div>

				</div>

			</section>

			<section class="page-section bg-light mod-cutclip-message">

				<div class="contents"><!-- contents -->

					<div class="hgroup">
						<div class="mod-contents-header">
							<h1 class="header-title font-designed center">MESSAGE</h1>
							<p class="subtitle center">メッセージ</p>
						</div>
					</div>

					<div class="block texts main-copy">
						<h2 class="catchphrase">未来への躍進のために。<br>この文章はダミーですので、意味はありません。</h2>
						<div class="part">
							<p>句読点を入て拾文字、ここまでで二拾文字。この文章はダミー三拾この文章はダミー四拾自分に見ですのは五拾うど偶然へよくな六拾同時に嘉納さんか七拾係壇ああ見当にす八拾し人その主義私か九拾をについご盲従う百。句読点込み百拾文字、ここまで百二拾文字。この文章はダミ百三拾この文章はダミ百四拾自分に見ですの百五拾うど偶然へよく百六拾同時に嘉納さん百七拾係壇ああ見当に百八拾し人その主義私百九拾をについご盲従弐百。</p>
							<p class="signature font-mincho"><span class="supple">代表取締役社長</span> 山田　太郎</p>
						</div>
					</div>


				</div><!-- // contents -->

			</section>

			<section class="page-section bg-cover bg-atfix" id="top-service">

				<div class="contents fadeup white-text"><!-- contents -->

					<div class="hgroup">
						<div class="mod-contents-header">
							<h1 class="header-title font-designed center">SERVICE</h1>
							<p class="subtitle center">サービス概要</p>
						</div>
					</div>

					<div class="block">
						<div class="mod-texts-image">
							<div class="image-cont">
								<p class="pic"><img src="<?php bloginfo('template_url');?>/images/dummy.jpg" alt=""></p>
							</div>
							<div class="texts-cont texts">
								<h3 class="heading03">ここには見出しが入ります</h3>
								<p>句読点を入て拾文字、ここまでで二拾文字。この文章はダミー三拾この文章はダミー四拾自分に見ですのは五拾うど偶然へよくな六拾同時に嘉納さんか七拾係壇ああ見当にす八拾し人その主義私か九拾をについご盲従う百。句読点込み百拾文字、ここまで百二拾文字。この文章はダミ百三拾この文章はダミ百四拾自分に見ですの百五拾うど偶然へよく百六拾同時に嘉納さん百七拾係壇ああ見当に百八拾し人その主義私百九拾をについご盲従弐百。</p>
							</div>
						</div>
					</div>

					<div class="block mbcut">
						<p class="section-more center"><a href="" class="button bc-ghost">ボタン<i class="fas fa-chevron-right"></i></a></p>
					</div>

				</div>

			</section>

			<section class="page-section" id="top-weblog">

				<div class="contents fadeup"><!-- contents -->

					<div class="hgroup">
						<div class="mod-contents-header">
							<h1 class="header-title font-designed center">WEBLOG</h1>
							<p class="subtitle center">スタッフブログ1</p>
						</div>
					</div>
<script>
	$(function() {
		$('.mod-slick-slider').slick({
			infinite: true,
			//dots:true,
			dots:false,
			<?php if( is_pc()|is_tb() ){ ?>
			slidesToShow: 3,
			slidesToScroll: 3
			<?php } else {;?>
			dots: true,
			slidesToShow: 1,
			slidesToScroll: 1
			<?php };?>
		});
	});
</script>
					<div class="block">
						<div class="mod-arc-list-1">
							<ul class="mod-slick-slider eq-height">
<?php
	$paged = get_query_var('paged') ? get_query_var('paged') : 1;
	$args = array(
		'paged' => $paged ,
		'post_type' => 'post',
		'posts_per_page' => 6,
//		'cat' => 3,4,5,
	);
	$the_query = new WP_Query($args);
?>
<?php if($the_query->have_posts()): ?>
<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
<?php
	$terms = get_the_terms($post->ID, 'category');
	$term_name = $terms[0]->name;
	$term_slug = $terms[0]->slug;
	$term_id   = $terms[0]->term_id;
	$term_link = get_term_link($term_id);
?>
								<li class="list-cont">
									<a class="list-inner disp-block item-eq-height" href="<?php the_permalink();?>">
										<div class="aspect-fix-wrap pic">
											<?php if (has_post_thumbnail()) : ?>
											<div class="aspect-fix bg-cover" style="background-image: url(<?php the_post_thumbnail_url('thumb640');?>);">
												<object><a class="tx-icon cat-<?php echo $term_id;?>" href="<?php echo $term_link;?>"><?php echo $term_name;?></a></object>
											</div>
											<?php else:?>
											<div class="aspect-fix bg-cover" style="background-image: url(<?php bloginfo('template_url');?>/images/common/noimage.png);?>">
												<object><a class="tx-icon cat-<?php echo $term_id;?>" href="<?php echo $term_link;?>"><?php echo $term_name;?></a></object>
											</div>
											<?php endif;?>
										</div>
										<p class="date"><time datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y.m.d');?></time></p>
										<h3 class="arc-title"><?php the_title();?></h3>
									</a>
								</li>
<?php endwhile; wp_reset_postdata(); ?>
<?php else: endif;?>
							</ul>
						</div>
					</div>

					<div class="block mbcut">
						<p class="section-more center"><a href="<?php bloginfo('url');?>/weblog/" class="button bc-ghost">記事一覧<i class="fas fa-chevron-right"></i></a></p>
					</div>

				</div>

			</section>


			<section class="page-section bg-light" id="top-news">

				<div class="contents fadeup"><!-- contents -->

					<div class="hgroup">
						<div class="mod-contents-header">
							<h1 class="header-title font-designed center">NEWS</h1>
							<p class="subtitle center">新着情報2</p>
						</div>
					</div>

					<div class="block">
						<div class="mod-arc-list-2">
							<ul>
<?php
	$paged = get_query_var('paged') ? get_query_var('paged') : 1;
	$args = array(
		'paged' => $paged ,
		'post_type' => 'news',
		'posts_per_page' => 6,
//		'cat' => 3,4,5,
	);
	$the_query = new WP_Query($args);
?>
<?php if($the_query->have_posts()): ?>
<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
<?php
	$terms = get_the_terms($post->ID, 'news_category');
	$term_name = $terms[0]->name;
	$term_slug = $terms[0]->slug;
	$term_id   = $terms[0]->term_id;
	$term_link = get_term_link($term_id);
?>
								<li>
									<a class="disp-block list-inner" href="<?php the_permalink();?>">
										<div class="mod-image-texts">
											<div class="image-cont">
												<div class="aspect-fix-wrap">
													<?php if (has_post_thumbnail()) : ?>
													<div class="aspect-fix bg-cover" style="background-image: url(<?php the_post_thumbnail_url('thumb640');?>);">
														<object><a class="tx-icon cat-<?php echo $term_id;?>" href="<?php echo $term_link;?>"><?php echo $term_name;?></a></object>
													</div>
													<?php else:?>
													<div class="aspect-fix bg-cover" style="background-image: url(<?php bloginfo('template_url');?>/images/common/noimage.png);?>">
														<object><a class="tx-icon cat-<?php echo $term_id;?>" href="<?php echo $term_link;?>"><?php echo $term_name;?></a></object>
													</div>
													<?php endif;?>
												</div>
											</div>
											<div class="texts-cont texts">
												<p class="date"><time datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y.m.d');?></time></p>
												<h3 class="arc-title"><?php the_title();?></h3>
												<div class="text">
													<?php the_excerpt();?>
												</div>
											</div>
										</div>
									</a>
								</li>
<?php endwhile; wp_reset_postdata(); ?>
<?php else: endif;?>
							</ul>
						</div>
					</div>

					<div class="block mbcut">
						<p class="section-more center"><a href="<?php bloginfo('url');?>/news/" class="button bc-ghost">記事一覧<i class="fas fa-chevron-right"></i></a></p>
					</div>

				</div>

			</section>

			<section class="page-section bg-cover bg-atfix" id="top-news2">

				<div class="contents fadeup narrow-contents"><!-- contents -->

					<div class="hgroup">
						<div class="mod-contents-header">
							<h1 class="header-title font-designed center">NEWS</h1>
							<p class="subtitle center">新着情報3</p>
						</div>
					</div>

					<div class="block">
						<div class="mod-arc-list-3">
							<ul>
<?php
	$paged = get_query_var('paged') ? get_query_var('paged') : 1;
	$args = array(
		'paged' => $paged ,
		'post_type' => 'news',
		'posts_per_page' => 6,
//		'cat' => 3,4,5,
	);
	$the_query = new WP_Query($args);
?>
<?php if($the_query->have_posts()): ?>
<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
<?php
	$terms = get_the_terms($post->ID, 'news_category');
	$term_name = $terms[0]->name;
	$term_slug = $terms[0]->slug;
	$term_id   = $terms[0]->term_id;
	$term_link = get_term_link($term_id);
?>
								<li>
									<p class="date">
										<time datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y.m.d');?></time>&emsp;
										<a class="tx-icon cat-<?php echo $term_id;?>" href="<?php echo $term_link;?>"><?php echo $term_name;?></a></p>
									<p class="arc-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
								</li>
<?php endwhile; wp_reset_postdata(); ?>
<?php else: endif;?>
							</ul>
						</div>
					</div>

					<div class="block mbcut">
						<p class="section-more center"><a href="<?php bloginfo('url');?>/news/" class="button bc-ghost">記事一覧<i class="fas fa-chevron-right"></i></a></p>
					</div>

				</div>

			</section>

			<section class="page-section bg-cover bg-atfix bg-light" id="top-instagram">
<?php echo '<script src="' . get_template_directory_uri() . '/js/lib/instafeed.min.js" charset="utf-8"></script>'; ?>
<script>
	$(document).ready(function() {
		var feed = new Instafeed({
			get: 'user',
			clientId: '0a9981f9d46942af8c3adfe217f84a36',
			accessToken: '5592657997.0a9981f.ce3ec27097f54b8a97235495ff1e7eb6',
			limit: 12,
			userId : '5592657997',
			resolution: 'standard_resolution',//612×612のサイズで出力
			//resolution: 'low_resolution', //320x320のサイズで出力
			sortBy: 'most-recent',//最新記事から順に取得
			template: '<li class="list_cont aspect-fix-wrap-even"><a class="aspect-fix" href="{{link}}" style="background-image: url({{image}})" target="_blank" rel="nofollow"></a></li>'
		});
		feed.run();
	});
</script>
				<div class="contents fadeup"><!-- contents -->

					<div class="hgroup">
						<div class="mod-contents-header">
							<h1 class="header-title font-designed center">INSTAGRAM</h1>
							<p class="subtitle center">インスタグラム</p>
						</div>
					</div>

					<div class="block">
						<div class="instagram">
							<ul id="instafeed"></ul>
						</div>
					</div>

					<div class="block mbcut">
						<p class="section-more center"><a href="<?php bloginfo('url');?>/news/" class="button bc-ghost">INSTAGRAM<i class="fas fa-chevron-right"></i></a></p>
					</div>

				</div>

			</section>

		</main>

<?php
	if ( $layout == 'has-side' ) {
		include ('assets/modules/mod-side-' . CURRENTDIR . '.php');
	};
?>

	</div><!-- // contents-wrap -->

<?php get_footer();?>