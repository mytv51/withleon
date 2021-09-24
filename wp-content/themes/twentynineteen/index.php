<?php get_header() ?>

<body id="top">
    <article>
        <header class="header">
            <div class="container">
                <div class="l-item">
                    <h1 class="logo"><a href="/" class="en">with LEON</a></h1>
                </div>
            </div>
        </header>

        <main>

            <section class="mv-area">
                <div class="mv-slider">
                    <figure><img src="<?php echo get_template_directory_uri(); ?>/images/index/img_mv01.png" alt=""></figure>
                    <figure><img src="<?php echo get_template_directory_uri(); ?>/images/index/img_mv02.png" alt=""></figure>
                </div><!-- mv-slider -->
                <div class="mv-wrap">
                    <h2 class="catch"><span class="fade-box">洗練された都市生活を送る</span></h2>
                    <div class="scroll"><a href="#sec01"><span class="arrow"></span><span class="txt en">scroll</span></a></div>
                </div>
            </section><!--　mv-area　-->



            <section class="concept-area header-change" id="sec01">
                <div class="ttl-wrap fade-box sp">
                    <h3 class="en">Concept</h3>
                </div>
                <div class="container">
                    <div class="text-box fade-box">
                        <h3>（仮）入居者の志向やライフスタイルに合わせ、<br class="pc">お勧めできる物件をご提案いたします。</h3>
                        <p>
                            （仮）お客様に自信を持ってお勧め出来るものを提供する為に、<br class="pc">
                            綿密な調査・マーケティングによって分析したデータに基づき、<br class="pc">
                            洗練された都市空間を送るためのプランを立案。<br class="pc">
                            一貫した施工体制の中で、当社と設計事務所、ゼネコンの3者が緊密な連携をとり、<br class="pc">
                            厳しい品質のチェックと工程確認を繰り返し、細部まで点検を繰り返し、<br class="pc">
                            品質についても高いレベルを達成できるように力を注いでおります。<br class="pc">
                            洗練された都市生活を送るための、こだわりのある物件をご提案いたします。
                        </p>

                    </div><!-- text-box -->
                </div><!-- container -->
                <div class="ttl-wrap fade-box">
                    <h3 class="en pc">Concept</h3>
                    <figure><img src="<?php echo get_template_directory_uri(); ?>/images/index/img_concept.png" alt=""></figure>
                </div>
            </section><!--　concept-area　-->


            <section class="movie-area">
                <div class="container">
                    <div class="movie-wrap fade-box">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/imUtUJ5Obe8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="ttl-wrap fade-box">
                        <h3 class="en">Movie</h3>
                    </div>
                </div>
            </section><!--　movie-area　-->


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
                                            $selectId = "esc_url(get_permalink())";
                                            if ($titles) {
                                                foreach ($titles as $title) {
                                                    echo '<option value=' . $title->post_title . '>' . $title->post_title . '</option>';
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
                                
                                if ($property->have_posts()) {
                                   
                                    while ($property->have_posts()) {
                                        $property->the_post();
                                        $titles = get_children(array(
                                            'post_parent' => get_the_ID(),
                                            'post_type' => 'attachment',
                                        ));

                                        if ($titles) {
                                            foreach ($titles as $title) {
                                                echo '<a href="'.esc_url(get_permalink()).'" class="item">';
                                                echo '<figure class="img-wrap"><img src="' . esc_url($title->guid) . '" alt=""></figure>';
                                                echo '<div class="detail">';
                                                echo ' <div class="name">' . $title->post_title . '</div>';
                                                echo '</div>';
                                            }
                                        }
                                    }
                                }
                                ?>


                            </div><!-- type-wrap -->
                            <div class="text-link sp">More</div>
                        </div>
                    </div><!-- container -->
                </div><!-- room-type -->
            </section><!--　room-area　-->


            <section class="news-area">
                <div class="container">
                    <div class="ttl-wrap fade-box">
                        <h3 class="sec-ttl">News</h3>
                    </div>
                    <ul class="news-wrap fade-box">
                        <li>
                            <a href="">
                                <span class="day">2021年4月</span>
                                <span class="title">レオンコンフォート天王寺東ご入居者様募集開始いたします。</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="day">2021年4月</span>
                                <span class="title">レオンコンフォート天王寺東ご入居者様募集開始いたします。レオンコンフォート天王寺東ご入居者様募集開始いたしま…</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="day">2021年4月</span>
                                <span class="title">レオンコンフォート天王寺東ご入居者様募集開始いたします。</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="day">2021年4月</span>
                                <span class="title">レオンコンフォート天王寺東ご入居者様募集開始いたします。</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </section><!--　news-area　-->

        </main>

        <?php get_footer(); ?>
    </article>


    <script src="https://use.typekit.net/fya1swr.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugin/slick/slick.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>


</body>

</html>