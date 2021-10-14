<?php get_header(); ?>
        <div class="l-contents">
            <div class="p-search">
                <form class="p-search__window c-search-window" action="/" name="search-form" method="post">
                    <input type="text" name="search" placeholder="Search">
                    <button type="submit" class="c-search-window__button" aria-label="search" value="">
                        <img class="c-search-window__img" src="./images/search/search.svg" alt="">
                    </button>
                </form>
            </div>
            <main class="p-main">
                <article class="p-detail">
                    <div class="p-entry-card">
                        <h2 class="c-entry-title c-barline-border">ブログタイトル</h2>
                        <ul class="data c-time-category-chunk">
                            <li class="time"><time>投稿日時</time></li>
                            <li class="category">カテゴリー名</li>
                        </ul>
                    </div>
                    <div class="p-eye-catching"><img src="./images/eye-catching02.jpg" alt="記事アイキャッチ画像"></div>
                    <section class="p-entry-content c-boundary-line">
                        <h3 class="c-barline-border">見出し</h3>
                        <p>本文です本文です本文です本文です本文です本文です本文です本文です</p>
                        <p>本文です本文です本文です本文です本文です本文です本文です本文です</p>
                        <p>本文です本文です本文です本文です本文です本文です本文です本文です</p>
                        <p>本文です本文です本文です本文です本文です本文です本文です本文です</p>
                        <div class="p-entry-tag">
                            <a href="">#タグ名</a>
                            <a href="">#タグ名</a>
                            <a href="">#タグ名</a>
                        </div>
                        <div class="p-share">
                            <p class="p-share__title">SHARE!</p>
                            <ul class="p-share__sns c-sns__icon">
                                <li><a href=""><img src="./images/sns/t_logo.png" alt="Twitterアイコン画像"></a></li>
                                <li><a href=""><img src="./images/sns/f_logo.png" alt="Facebookアイコン画像"></a></li>
                                <li><a href=""><img src="./images/sns/l_logo.png" alt="LINEアイコン画像"></a></li>
                            </ul>
                        </div>
                    </section>
                    <aside class="p-related">
                        <h4 class="p-related__title">関連記事</h4>
                        <ul class="p-related-list">
                            <li class="p-related-item">
                                <a href="">
                                    <figure class="p-related-card">
                                        <img src="./images/eye-catching03.jpg" alt="関連記事アイキャッチ画像">
                                        <figcaption class="p-related-card__caption">
                                            <ul class="p-related-card__caption__data c-time-category-chunk">
                                                <li class="time"><time>投稿日時</time></li>
                                                <li class="category">カテゴリー名</li>
                                            </ul>
                                            <h5 class="p-related-card__caption__title">タイトル</h5>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <li class="p-related-item">
                                <a href="">
                                    <figure class="p-related-card">
                                        <img src="./images/eye-catching03.jpg" alt="関連記事アイキャッチ画像">
                                        <figcaption class="p-related-card__caption">
                                            <ul class="p-related-card__caption__data c-time-category-chunk">
                                                <li class="time"><time>投稿日時</time></li>
                                                <li class="category">カテゴリー名</li>
                                            </ul>
                                            <h5 class="p-related-card__caption__title">タイトル</h5>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <li class="p-related-item">
                                <a href="">
                                    <figure class="p-related-card">
                                        <img src="./images/eye-catching03.jpg" alt="関連記事アイキャッチ画像">
                                        <figcaption class="p-related-card__caption">
                                            <ul class="p-related-card__caption__data c-time-category-chunk">
                                                <li class="time"><time>投稿日時</time></li>
                                                <li class="category">カテゴリー名</li>
                                            </ul>
                                            <h5 class="p-related-card__caption__title">タイトル</h5>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                        </ul>
                    </aside>
                    <nav class="p-pager">
                        <ul class="p-prev-next">
                            <li class="prev">前へ</li>
                            <li class="next">次へ</li>
                        </ul>
                    </nav>
                </article>
            </main>

            <?php get_sidebar(); ?>
        </div>
<?php get_footer(); ?>