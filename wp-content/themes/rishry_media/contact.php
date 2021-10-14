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
                <article class="p-detail p-contact">
                    <h1 class="c-title c-headline-border">お問い合わせ</h1>
                    <form class="p-contact__form" action="#">
                        <dl>
                            <dt>
                                <label for="name">お名前<span class="mandatory-tag">必須</span></label>
                            </dt>
                            <dd>
                                <input type="text" id="name" name="your-name">
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <label for="email">メールアドレス<span class="mandatory-tag">必須</span></label>
                            </dt>
                            <dd>
                                <input type="text" id="email" name="your-email">
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <label for="f_title">題名</label>
                            </dt>
                            <dd>
                                <input type="text" id="f_title" name="your-f_title">
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <label for="message">メッセージ本文<span class="mandatory-tag">必須</span></label>
                            </dt>
                            <dd>
                                <textarea name="message" id="your-message"></textarea>
                            </dd>
                        </dl>
                        <div>
                            <input type="submit" class="button" value="送信">
                        </div>
                    </form>
                </article>
            </main>

            <?php get_sidebar(); ?>
        </div>

<?php get_footer(); ?>