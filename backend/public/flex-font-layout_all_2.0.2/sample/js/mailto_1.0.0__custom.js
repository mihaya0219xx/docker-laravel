/****			このコメントを削除しないで下さい。
@package		mailto.js
@version		1.0.0
@license		フリーウェア（商用・非商用にかかわらず無料でご利用下さい。）

迷惑メール防止用のjavaScriptです。
悪意のあるメールアドレス収集プログラムが、<a href="mailto:xxx@xxxx.com">メール</a> のようなタグからメールアドレスを収集するのを妨げます。

■使用例
<script src="mailto_1.0.0__custom.js"></script> 
<a title="メール" href="javascript:void(0)" onclick="javascript:メールto()">メール</a>

※以下をご自身のサイトに合わせて適宜変更して下さい

****/


/////////////////////////////////////////////////////////////////////////
// ■mailto:
var メールto = function () {
    var $アット = '@';
    var $メールto = 'm' + 'a' + 'i' + 'l' + 't' + 'o' + ':';
    var $改行 = '%0D%0A';
	
	/* 以下をご自身のサイトに合わせて適宜変更して下さい */
    location.href = $メールto
	// 差出人
      + "●●●●.com <toi" + $アット + "●●●●.com>"
	// 件名
      + "?subject=" + "お問い合わせ"
	// 本文
      + "&body=" + "ご質問などありましたらお気軽におたずね下さい。" + $改行 +$改行 + "●●●●.com" + $改行 + $改行;
  }
