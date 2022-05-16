jQuery( function( $ ) {
	$( ".js-hamburger" ).on( "click", function() { // js-hamburger を指定している箇所をクリックした際、以下のイベント処理が実行される
		$( this ).toggleClass( "is-open" ); // js-hamburger を指定している箇所に is-open のスタイルを付与したり削除したりする
		$( "body" ).toggleClass( "is-active" ); // body タグに is-active のスタイルを付与したり削除したりする
		$( ".js-drawer" ).slideToggle( 500 ); // js-drawer を指定している箇所が 0.5 秒かけてスライドダウンする
		$( ".js-drawer-bg" ).toggleClass( "is-open" ); // js-drawer-bg を指定している箇所に is-open のスタイルを付与したり削除したりする
	} );

	// ウィンドウのサイズが PC サイズになった場合
	// ドロワーメニューを閉じたときの挙動を無効化
	const pcWidth = 1025; // 1025 を pcWidth へ代入
	$( window ).on( "resize", function() { // ウィンドウサイズをリサイズしたら、 function の中身を実行する
		let w = $( window ).width(); // 現在のウィンドウ幅を w へ代入
		if( w >= pcWidth ) { // もし w という定数が pcWidth 以上だったら
			$( ".js-drawer" ).css( 'display', 'block' ); // js-drawer を指定している箇所に css 「 display: block; 」を指定する
			$( "body" ).removeClass( "is-active" ); // body タグの is-active を削除
		} else { // w という定数が pcWidth 以上ではない場合
			$( ".js-drawer" ).css( 'display', 'none' ); // js-drawer を指定している箇所に css 「 display: none; 」を指定する
			$( ".js-hamburger" ).removeClass( "is-open" ); // js-hamburger に指定している css 「 is-open 」を削除する
		}
	} );

} );
