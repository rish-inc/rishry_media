<?php get_header(); ?>
		<main class="l-main">
			<div class="p-search">
				<?php get_search_form(); ?>
			</div>
			<article class="p-contents">
				<section class="p-detail p-contact">
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
				</section>
			</article>

			<?php get_sidebar(); ?>
		</main>

<?php get_footer(); ?>
