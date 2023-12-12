<?php
if ( !defined( 'ABSPATH' ) ) {
exit;
}

//SVGアップロードできるようにする
function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
    }
    add_action('upload_mimes', 'add_file_types_to_uploads');

//見出しのショートコード
function titleFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'element' => 'span',
        'class' => 'headline-default'
    ), $atts ) );
    return '<'.$element.' class="'.$class.'">' . $content . '</'.$element.'>';
}
add_shortcode('title', 'titleFunc');

function h2Func( $atts, $content = null ) {
    return '<span class="font-decoration-underline">' . $content . '</span>';
}
add_shortcode('タイトル下線', 'h2Func');


function h3Func( $atts, $content = null ) {
    return '<span class="font-decoration-btn">' . $content . '</span>';
}
add_shortcode('タイトル長方形', 'h3Func');


function h4Func( $atts, $content = null ) {
    return '<span class="font-decoration-barline">' . $content . '</span>';
}
add_shortcode('タイトル縦線', 'h4Func');

//ユーチューブのショートコード
function youtubeFunc( $atts, $content = null ) {
    return '<div class="youtube-container">' . $content . '</div>';
}
add_shortcode('ユーチューブ', 'youtubeFunc');


//出典のショートコード
function sourceFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
    ), $atts ) );
    return '<div class="sourcelink">出典 <a href="' . $content . '" target="_blank">' . $content . '</a></div>';
}
add_shortcode('出典', 'sourceFunc');

//出典リンクのショートコード（※リンクを追加）
function linksourceFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'text' => '',
        'link' => ''
    ), $atts ) );
    return '<div class="sourcelink">出典 <a href="' . $link . '" target="_blank">' . $text . '</a></div>';
}
add_shortcode('出典リンク', 'linksourceFunc');

//追記のショートコード
function postscriptFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
    ), $atts ) );
    return '<div class="postscript-info">' . $content . '</div>';
}
add_shortcode('追記', 'postscriptFunc');

//リンク囲いのショートコード
function linkdivFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
    ), $atts ) );
    return '<div class="link-div">' . $content . '</div>';
}
add_shortcode('リンク囲い', 'linkdivFunc');

//点線BOXのショートコード
function dotboxFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
    ), $atts ) );
    return '<div class="dotbox-div">' . $content . '</div>';
}
add_shortcode('点線box', 'dotboxFunc');



//強調のショートコード
function emphasisFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
    ), $atts ) );
    return '<div class="emphasis">' . $content . '</div>';
}
add_shortcode('強調', 'emphasisFunc');

//写真説明のショートコード
function photoinfoFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
    ), $atts ) );
    return '<div class="photo-info">[ ' . $content . ' ]</div>';
}
add_shortcode('写真説明', 'photoinfoFunc');


//お店詳細のショートコード
function shopBoxFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'name' => '',
        'time' => '',
        'address' => '',
        'website' => ''
    ), $atts ) );
    return '<div class="detail-box01"><div class="detail-box01__title">' . $name . '</div><div class="detail-box01__contain"><p><i class="fas fa-map-marker-alt"></i>' . $address . '</p><p><i class="fa fa-clock-o" aria-hidden="true"></i>' . $time . '</a></p><p><a href="' . $website . '" target="_blank"><i class="fa fa-link" aria-hidden="true"></i>WEBサイト</a></p></div></div>';
}
add_shortcode('お店詳細', 'shopBoxFunc');


//イベントのショートコード
function eventBoxFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'name' => '',
        'address' => '',
        'website' => ''
    ), $atts ) );
    return '<div class="detail-box01"><div class="detail-box01__title">' . $name . '</div><div class="detail-box01__contain"><p><i class="fas fa-map-marker-alt"></i>' . $address . '</p><p><a href="' . $website . '" target="_blank"><i class="fa fa-link" aria-hidden="true"></i>WEBサイト</a></p></div></div>';
}
add_shortcode('イベント', 'eventBoxFunc');


//詳細テンプレのショートコード
function detailBoxFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'title' => '',
        'detail' => ''
    ), $atts ) );
    return '<div class="detail-box01"><div class="detail-box01__title">' . $title . '</div><div class="detail-box01__contain"><p>' . $detail . '</p></div></div>';
}
add_shortcode('詳細テンプレ', 'detailBoxFunc');


//関連リンクのショートコード
function relatedLinksBoxFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'title' => '',
        'img' => '',
        'url' => ''

    ), $atts ) );
    return '<div class="detail-box02 flexbox"><div class="detail-box02__img"><a href="' . $url . '" target="_blank"><img src="' . $img . '"/></a></div><div class="detail-box02__txt"><div class="detail-box02__sub-title">＞関連記事リンク</div><div class="detail-box02__title"><a href="' . $url . '" target="_blank">' . $title . '</a></div></div></div>';
}
add_shortcode('関連リンク', 'relatedLinksBoxFunc');


//外部リンクのショートコード
function externallinkFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
       'txt' => '',
       'url' => ''
    ), $atts ) );
    return '<div class="external-link"><a href="' . $url . '" target="_blank"><div class="external-link__title"><i class="fas fa-external-link-alt"></i>' . $txt . '</div></a></div>';
}
add_shortcode('外部リンク', 'externallinkFunc');


//記者紹介のショートコード
function authorinfoFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'img' => '',
        'author_name' => '',
        'read' => '',
        'weblink' => '',
        'instagramlink' => '',
        'twitterlink' => ''

    ), $atts ) );
    return '<div class="detail-author-box"><div class="detail-author-box__txt"><div class="detail-author-box__title">' . $author_name . '</div><div class="detail-author-box__read">' . $read . '</div>
    <ul class="detail-author-box__sns flexbox">
    <li class="author-box__btn" target="_blank"><a href="' . $weblink . '" target="_blank"><div class="author-box__btn web__btn__small" target="_blank"><i class="fas fa-link"></i></div></a></li>
    <li class="author-box__btn" target="_blank"><a href="' . $instagramlink . '" target="_blank"><div class="author-box__btn instagram__btn__small" target="_blank"><i class="fab fa-instagram"></i></div></a></li>
    <li class="author-box__btn" target="_blank"><a href="' . $twitterlink . '" target="_blank"><div class="author-box__btn twitter__btn__small" target="_blank"><i class="fab fa-twitter"></i></div></a></li></ul></div></div>';
}
add_shortcode('記者紹介', 'authorinfoFunc');

//記者紹介リンクなしのショートコード
function nolinkAuthorinfoFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'img' => '',
        'author_name' => '',
        'read' => ''
    ), $atts ) );
    return '<div class="detail-author-box"><div class="detail-author-box__txt"><div class="detail-author-box__title">' . $author_name . '</div><div class="detail-author-box__read">' . $read . '</div></div></div>';
}
add_shortcode('記者紹介リンクなし', 'nolinkAuthorinfoFunc');

//吹き出しのショートコード-
function balloonFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'img' => '',
        'author_name' => '',
        'read' => ''

    ), $atts ) );
    return '<div class="detail-balloon-box flexbox"><div class="detail-balloon-box__icon"><div class="detail-balloon-box__img"><img src="' . $img . '"/></div><div class="detail-balloon-box__title">' . $author_name . '</div></div><div class="detail-balloon-box__txt"><div class="detail-balloon-box__read">' . $read . '</div></div></div>';
}
add_shortcode('吹き出し', 'balloonFunc');


//商品＆サービス紹介ページ
//タイトルBOOのショートコード
function titlebooFunc( $atts, $content = null ) {
    return '<span class="font-decoration-btn title-boo">' . $content . '</span>';
}
add_shortcode('タイトルBOO', 'titlebooFunc');

//吹き出しBOOのショートコード
function balloonbooFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'img' => '',
        'read' => ''

    ), $atts ) );
    return '<div class="detail-balloon-box flexbox"><div class="detail-balloon-box__icon"><div class="detail-balloon-box__boo__img"><img src="' . $img . '"/></div></div><div class="detail-balloon-box__boo"><div class="detail-balloon-box__read">' . $read . '</div></div></div>';
}
add_shortcode('吹き出しBOO', 'balloonbooFunc');

//タイトル商品のショートコード
function producttitleFunc( $atts, $content = null ) {
    return '<span class="font-decoration-btn producttitle-btn">' . $content . '</span>';
}
add_shortcode('タイトル商品', 'producttitleFunc');



//商品詳細のショートコード
function productdetailboxFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'listone' => '',
        'listtwo' => '',
        'listthree' => '',
        'listfour' => '',
        'listfive' => ''

    ), $atts ) );
    return '<ul class="productdetailbox__lists"><li class="productdetailbox__lists__list">・' . $listone . '</li><li class="productdetailbox__lists__list">・' . $listtwo . '</li><li class="productdetailbox__lists__list">・' . $listthree . '</li><li class="productdetailbox__lists__list">・' . $listfour . '</li><li class="productdetailbox__lists__list">・' . $listfive . '</li></ul>';
}
add_shortcode('商品詳細', 'productdetailboxFunc');

//商品詳細のショートコード（リスト３）
function listthreeproductdetailboxFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'listone' => '',
        'listtwo' => '',
        'listthree' => ''

    ), $atts ) );
    return '<ul class="productdetailbox__lists"><li class="productdetailbox__lists__list">・' . $listone . '</li><li class="productdetailbox__lists__list">・' . $listtwo . '</li><li class="productdetailbox__lists__list">・' . $listthree . '</li></ul>';
}
add_shortcode('リスト3商品詳細', 'listthreeproductdetailboxFunc');

//商品リストのショートコード
function productlistsboxFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'img' => '',
        'url' => '',
        'producttitle' => '',
        'listone' => '',
        'listtwo' => '',
        'listthree' => ''

    ), $atts ) );
    return '<div class="productlistsbox flexbox"><div class="productlistsbox__img"><img src="' . $img . '"/></div><div class="productlistsbox__container"><p class="productlistsbox__title"><a href="' . $url . '" target="_blank">' . $producttitle . '</a></p><ul class="productlistsbox__lists"><li class="productlistsbox__lists__list">・' . $listone . '</li><li class="productlistsbox__lists__list">・' . $listtwo . '</li><li class="productlistsbox__lists__list">・' . $listthree . '</li></ul></div></div>';
}
add_shortcode('商品リスト', 'productlistsboxFunc');

//詳細テーブルのショートコード
function detailtableFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'thone' => '',
        'thtwo' => '',
        'ththree' => '',
        'tdone' => '',
        'tdtwo' => '',
        'tdthree' => ''

    ), $atts ) );
    return '<table class="table table-bordered">
    <tbody><hr><td>' . $thone . '</td><td>' . $tdone . '</td></hr></tbody></table>';
}
add_shortcode('詳細テーブル', 'detailtableFunc');

//アマゾンボタンUSAのショートコード
function amazonbtnFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'url' => ''

    ), $atts ) );
    return '<div class="shortcode__btn"><a href="' . $url . '" class="btn-shine btn-fly btn-amazon shortcode-btn" target="_blank">amazon(アメリカ)で商品を詳しく見る <i class="fa fa-chevron-circle-right"></i></a></div>';
}
add_shortcode('アマゾンボタン', 'amazonbtnFunc');

//楽天ボタンのショートコード
function rakutenbtnFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'url' => ''

    ), $atts ) );
    return '<div class="shortcode__btn"><a href="' . $url . '" class="btn-shine shortcode-btn btn-rakuten btn-fly"target="_blank">楽天(日本)で商品を詳しく見る <i class="fa fa-chevron-circle-right"></i></a></div>';
}
add_shortcode('楽天ボタン', 'rakutenbtnFunc');


//日本ボタンのショートコード
function japanbtnFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'url' => ''

    ), $atts ) );
    return '<div class="shortcode__btn"><a href="' . $url . '" class="btn-shine shortcode-btn btn-amazon-jan btn-fly"target="_blank">amazon(日本)で商品を詳しく見る  <i class="fa fa-chevron-circle-right"></i></a></div>';
}
add_shortcode('日本アマゾンボタン', 'japanbtnFunc');

//成果報酬アフィリエイト商品ボタンのショートコード
function affiliatemarketingproductbtnFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'productname' => '',
        'url' => ''

    ), $atts ) );
    return '<div class="affiliate-btn"><a href="' . $url . '"  class="btn-shine btn-fly shortcode-btn affiliate-btn__product " target="_blank">' . $productname . 'の詳細を見る <i class="fa fa-chevron-circle-right"></i></a></div>';
}
add_shortcode('成果報酬アフィリエイト商品ボタン', 'affiliatemarketingproductbtnFunc');

//成果報酬アフィリエイトサービスボタンのショートコード
function affiliatemarketingservicebtnFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'fronttxt' =>'',
        'servicename' => '',
        'btmtxt' =>'',
        'url' => ''

    ), $atts ) );
    return '<div class="affiliate-btn"><div class="affiliate-btn__txt-top">' . $fronttxt . '</div><a href="' . $url . '" class="btn-shine btn-fly shortcode-btn affiliate-btn__service" target="_blank">' . $servicename . ' <i class="fa fa-chevron-circle-right"></i></a><div class="affiliate-btn__txt-btm">' . $btmtxt . '</div></div>';
}
add_shortcode('成果報酬アフィリエイトサービスボタン', 'affiliatemarketingservicebtnFunc');

//広告リンクなしの成果報酬アフィリエイトサービスボタンのショートコード
function nolinkaffiliatemarketingservicebtnFunc( $atts, $content = null ) {
    return '<div class="affiliate-btn"><div class="btn-shine btn-fly shortcode-btn affiliate-btn__service" target="_blank">' . $content . ' </div></div>';
}
add_shortcode('ボタン装飾', 'nolinkaffiliatemarketingservicebtnFunc');


//クーポンボタンのショートコード
function
couponbtnFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'fronttxt' =>'',
        'name' => '',
        'btmtxt' =>'',
        'url' => ''

    ), $atts ) );
    return '<div class="affiliate-btn"><div class="affiliate-btn__txt-top">' . $fronttxt . '</div><a href="' . $url . '" class="shortcode-btn affiliate-btn__service affiliate-btn__service-coupon btn-shine btn-fly" target="_blank">' . $name . ' <i class="fa fa-chevron-circle-right"></i></a><div class="affiliate-btn__txt-btm">' . $btmtxt . '</div></div>';
}
add_shortcode('クーポンリンクボタン', 'couponbtnFunc');


// ユーザープロフィールの項目の追加
function set_user_meta($profile) {
  $profile['twitter'] = 'twitter';
  return $profile;
}
add_filter('user_contactmethods', 'set_user_meta', 10, 1);