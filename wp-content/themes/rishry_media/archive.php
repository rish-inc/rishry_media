<?php get_header(); ?>
        <div class="l-contents">
            <div class="p-detail-search">
                <form class="p-detail-search__window c-search-window" action="/" name="search-form" method="post">
                    <input type="text" name="search" placeholder="Search">
                    <button type="submit" class="c-search-window__button" aria-label="search" value="">
                        <img class="c-search-window__img" src="./images/search/search.svg" alt="">
                    </button>
                </form>
            </div>
            <main class="p-main">
                <article class="p-detail">
                    <ul class="p-pan c-pan-list">
                        <li class="pan-home"><a href="/">HOME</a></li>
                        <li class="pan-category"><a href="">BRAND</a></li>
                    </ul>
                    <ul class="p-post-list">
                        <li class="posted c-boundary-line">
                            <figure class="p-card">
                                <figcaption class="p-card__caption">
                                    <h2 class="p-card__caption__title p-search__title c-barline-border">ブログタイトル</h2>
                                    <ul class="data c-time-category-chunk">
                                        <li class="time"><time>投稿日時</time></li>
                                        <li class="category">カテゴリー名</li>
                                    </ul>
                                </figcaption>
                                <img class="p-card__img" src="././images/p-card/eye-catching.jpg" alt="アイキャッチ画像">
                            </figure>
                        </li>
                        <li class="posted c-boundary-line">
                            <figure class="p-card">
                                <figcaption class="p-card__caption">
                                    <h2 class="p-card__caption__title c-barline-border">ブログタイトル</h2>
                                    <ul class="data c-time-category-chunk">
                                        <li class="time"><time>投稿日時</time></li>
                                        <li class="category">カテゴリー名</li>
                                    </ul>
                                </figcaption>
                                <img class="p-card__img" src="./images/p-card/eye-catching.jpg" alt="アイキャッチ画像">
                            </figure>
                        </li>
                        <li class="posted c-boundary-line">
                            <figure class="p-card">
                                <figcaption class="p-card__caption">
                                    <h2 class="p-card__caption__title c-barline-border">ブログタイトル</h2>
                                    <ul class="data c-time-category-chunk">
                                        <li class="time"><time>投稿日時</time></li>
                                        <li class="category">カテゴリー名</li>
                                    </ul>
                                </figcaption>
                                <img class="p-card__img" src="./images/p-card/eye-catching.jpg" alt="アイキャッチ画像">
                            </figure>
                        </li>
                    </ul>
                </article>
                <nav class="p-pagination-enclosure">
                    <ul class="c-pagination">
                        <li class="page-list"><a class="before-to" href="#">前へ</a></li>
                        <li class="page-list"><a class="page-active" href="#">1</a></li>
                        <li class="page-list"><a class="page" href="#">2</a></li>
                        <li class="page-list"><a class="page" href="#">3</a></li>
                        <li class="page-list"><a class="extend" href="#">…</a></li>
                        <li class="page-list"><a class="next-for" href="#">次へ</a></li>
                    </ul>
                </nav>
            </main>
            <?php get_sidebar(); ?>
        </div>
<?php get_footer(); ?>