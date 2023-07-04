<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AppAsset;

use frontend\models\Berita;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en-US">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <title>ProjectYai</title>

  <link rel="stylesheet" href="assets/css/style.css">
  <meta name='robots' content='noindex, nofollow' />
  <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
  <link rel="alternate" type="application/rss+xml" title="ProjectYai &raquo; Feed"
    href="https://demos.projectyai.com/ProjectYai/standard/feed/" />
  <link rel="alternate" type="application/rss+xml" title="ProjectYai &raquo; Comments Feed"
    href="https://demos.projectyai.com/ProjectYai/standard/comments/feed/" />
  <script type="text/javascript">
    window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/demos.projectyai.com\/ProjectYai\/standard\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.2.2" } };
    /*! This file is auto-generated */
    !function (e, a, t) { var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d"); function s(e, t) { p.clearRect(0, 0, i.width, i.height), p.fillText(e, 0, 0); e = i.toDataURL(); return p.clearRect(0, 0, i.width, i.height), p.fillText(t, 0, 0), e === i.toDataURL() } function c(e) { var t = a.createElement("script"); t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t) } for (o = Array("flag", "emoji"), t.supports = { everything: !0, everythingExceptFlag: !0 }, r = 0; r < o.length; r++)t.supports[o[r]] = function (e) { if (p && p.fillText) switch (p.textBaseline = "top", p.font = "600 32px Arial", e) { case "flag": return s("\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !s("\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !s("\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"); case "emoji": return !s("\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff") }return !1 }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]); t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () { t.DOMReady = !0 }, t.supports.everything || (n = function () { t.readyCallback() }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () { "complete" === a.readyState && t.readyCallback() })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji))) }(window, document, window._wpemojiSettings);
  </script>
  <style type="text/css">
    img.wp-smiley,
    img.emoji {
      display: inline !important;
      border: none !important;
      box-shadow: none !important;
      height: 1em !important;
      width: 1em !important;
      margin: 0 0.07em !important;
      vertical-align: -0.1em !important;
      background: none !important;
      padding: 0 !important;
    }
  </style>
  <link rel='stylesheet' id='wp-block-library-css' href='assets/css/style.min.css' type='text/css' media='all' />
  <link rel='stylesheet' id='classic-theme-styles-css' href='assets/css/classic-themes.min.css' type='text/css'
    media='all' />
  <style id='global-styles-inline-css' type='text/css'>
    body {
      --wp--preset--color--black: #000000;
      --wp--preset--color--cyan-bluish-gray: #abb8c3;
      --wp--preset--color--white: #ffffff;
      --wp--preset--color--pale-pink: #f78da7;
      --wp--preset--color--vivid-red: #cf2e2e;
      --wp--preset--color--luminous-vivid-orange: #ff6900;
      --wp--preset--color--luminous-vivid-amber: #fcb900;
      --wp--preset--color--light-green-cyan: #7bdcb5;
      --wp--preset--color--vivid-green-cyan: #00d084;
      --wp--preset--color--pale-cyan-blue: #8ed1fc;
      --wp--preset--color--vivid-cyan-blue: #0693e3;
      --wp--preset--color--vivid-purple: #9b51e0;
      --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
      --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
      --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
      --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
      --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
      --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
      --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
      --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
      --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
      --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
      --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
      --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
      --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
      --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
      --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
      --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
      --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
      --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
      --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
      --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
      --wp--preset--font-size--small: 13px;
      --wp--preset--font-size--medium: 20px;
      --wp--preset--font-size--large: 36px;
      --wp--preset--font-size--x-large: 42px;
      --wp--preset--spacing--20: 0.44rem;
      --wp--preset--spacing--30: 0.67rem;
      --wp--preset--spacing--40: 1rem;
      --wp--preset--spacing--50: 1.5rem;
      --wp--preset--spacing--60: 2.25rem;
      --wp--preset--spacing--70: 3.38rem;
      --wp--preset--spacing--80: 5.06rem;
      --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
      --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
      --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
      --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
      --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
    }

    :where(.is-layout-flex) {
      gap: 0.5em;
    }

    body .is-layout-flow>.alignleft {
      float: left;
      margin-inline-start: 0;
      margin-inline-end: 2em;
    }

    body .is-layout-flow>.alignright {
      float: right;
      margin-inline-start: 2em;
      margin-inline-end: 0;
    }

    body .is-layout-flow>.aligncenter {
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained>.alignleft {
      float: left;
      margin-inline-start: 0;
      margin-inline-end: 2em;
    }

    body .is-layout-constrained>.alignright {
      float: right;
      margin-inline-start: 2em;
      margin-inline-end: 0;
    }

    body .is-layout-constrained>.aligncenter {
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
      max-width: var(--wp--style--global--content-size);
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained>.alignwide {
      max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
      display: flex;
    }

    body .is-layout-flex {
      flex-wrap: wrap;
      align-items: center;
    }

    body .is-layout-flex>* {
      margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
      gap: 2em;
    }

    .has-black-color {
      color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
      color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
      color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
      color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
      color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
      color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
      color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
      color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
      color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
      color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
      color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
      color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
      background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
      background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
      background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
      background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
      background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
      background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
      background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
      background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
      background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
      background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
      background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
      background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
      border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
      border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
      border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
      border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
      border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
      border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
      border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
      border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
      border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
      border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
      border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
      border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
      background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
      background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
      background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
      background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
      background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
      background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
      background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
      background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
      background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
      background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
      background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
      background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
      font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
      font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
      font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
      font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
      color: inherit;
    }

    :where(.wp-block-columns.is-layout-flex) {
      gap: 2em;
    }

    .wp-block-pullquote {
      font-size: 1.5em;
      line-height: 1.6;
    }

    
/*==================== Blog ====================*/
.small-post  {
	background: var(--box-color);
}
.small-post .title a {
	color: var(--head-color);
}
.small-post .title a:hover, .small-post .title a:focus {
	color: var(--pri-color);
}
/*==================== Blog ====================*/
.bs-blog-post {
    background: var(--blog-backcolor); 
}
.bs-blog-post .small {
    color: var(--blog-color);
}
.bs-blog-post .bs-header .btitle, .bs-blog-post .bs-header .btitle a {
	color: var(--head-color);
}
.bs-blog-post .bs-header .bs-read{
	color: #f56565;
}
.bs-blog-post .single .nav-links{
	background: var(--border-color);
}
.bs-blog-post .single .nav-links a, .bs-blog-post .single .single-nav-links a {
	color: var(--head-color);
}
.bs-blog-post .single .nav-links a:hover, .bs-blog-post .single .single-nav-links a:hover {
    color: var(--pri-color);
}
.bs-blog-post.two .small {
    background: var(--box-color);
    color: var(--text-color);
}
.bs-blog-post.three .title a {
	color: #fff;
}
.bs-blog-post.three .bs-blog-meta a, .bs-blog-post.three .bs-blog-meta span,
.bs-blog-post.three .bs-blog-meta span:before {
    color: #fff;
}
.bs-blog-post.four .small {
    background-color: var(--box-color);
}
.bs-blog-post .bs-header .bs-blog-date {
	color: var(--text-color);
}
.bs-blog-post .bs-header .tag-links, .tag-links a {
	color: var(--text-color);
}
.recentarea-slider .small-post  {
	border-color: #d7d7d7;
}
.bs-widget .bs-author h4{
	color: var(--head-color);
}
.bs-widget .bs-author {
	color: var(--text-color);
}
.bs-blog-thumb .bs-blog-inner.two::after {
    background-color: transparent; 
}
.bs-blog-thumb .bs-blog-inner .title, .bs-blog-thumb .bs-blog-inner .title a{
	color: var(--head-color);
}
.bs-blog-thumb .bs-blog-inner .title:hover, .bs-blog-thumb .bs-blog-inner .title a:hover, .bs-blog-thumb .bs-blog-inner .title a:focus{
	color: var(--pri-color);
}
.bs-blog-thumb .bs-blog-inner.two .title, .bs-blog-thumb .bs-blog-inner.two .title a {
    color: var(--bg-color);
}
.bs-blog-inner.two .bs-blog-category a {
    color: var(--wrap-color);
}
.bs-blog-category:before {
    background: var(--pri-color);
}
.bs-blog-category a {
	background: var(--pri-color);
	color: #fff;
}
.bs-blog-category a:hover, .bs-blog-category a:focus { 
	color: #fff;
	background: var(--pri-color);
}
.bs-blog-post .title, .bs-blog-post .title a,.bs-blog-post .title, .bs-blog-post .title a {
	color: var(--head-color);
}
.bs-blog-post .title a:hover, .bs-blog-post .title a:focus, .bs-blog-post .title a:hover, .bs-blog-post .title a:focus {
	color: var(--pri-color);
}
.bs-blog-meta, .bs-blog-meta a{
	color: var(--text-color);
}
.bs-blog-meta a:hover, .bs-blog-meta a:focus{
	color: var(--pri-color);
}
.bs-info-author-block {
	background: var(--box-color);
}
.bs-info-author-block .title a {
   color: var(--head-color);
}
.bs-info-author-block .title a:hover, .bs-info-author-block .title a:focus {
   color: var(--pri-color);
}
.comments-area a {
	color: var(--head-color); 
}
.comments-area a {
	color: var(--head-color); 
}
.comments-area .reply a {
	color: #fff;
    background: var(--pri-color);
    border-color: var(--pri-color);
}
.comments-area .comment-body{ 
    border-color: var(--border-color);
}
.comments-area .reply a:hover, .comments-area .reply a:focus {
	color: #fff;
    background: var(--secondary-color);
    border-color: var(--secondary-color);
}
blockquote {
	background: var(--border-color);
    border-left: 5px solid var(--pri-color);
    color: #718096;
}
blockquote::before {
	color: var(--pri-color);
}
blockquote p {
	color: var(--head-color);
}
.bs-widget .bs-author img.rounded-circle {
    border: var(--bxbr);
}
.widget_block h2 {
	color: var(--head-color);
	border-color: #d7d7d7;
}
.wp-block-tag-cloud a {
    background: #fff;
    border-color: #000;
}
.wp-block-tag-cloud a:hover, .wp-block-tag-cloud a:focus {
	color: #fff;
	background: var(--pri-color);
	border-color: var(--pri-color);
}
.widget_block .wp-block-search__button {
	background: var(--pri-color);
	border-color: #000;
	color: #fff ;
}
.widget_block .wp-block-search__button:hover, .wp-block-search__button:focus  {
	background: var(--secondary-color);
	border-color: var(--secondary-color);
	color: #fff;
}
/*==================== Sidebar ====================*/
.bs-sidebar .bs-widget {
	background: var(--box-color);
	border-color: #d7d7d7;
}
.bs-sidebar .bs-widget ul li {
	border-color: var(--border-color);
}
.bs-sidebar .bs-widget ul li a {
	color: var(--text-color);
}
.bs-sidebar .bs-widget ul li a:hover, .bs-sidebar .bs-widget ul li a:focus {
	color: var(--pri-color);
}
.bs-sidebar .bs-widget ul.bs-social li a {
	color: #fff;
}
.bs-sidebar .bs-widget .bs-widget-tags a, .bs-sidebar .bs-widget .tagcloud a {
	color: var(--pri-color);
    background: #F8F8F8;
	border-color: #000;
}
.bs-sidebar .bs-widget .bs-widget-tags a:hover, .bs-sidebar .bs-widget .tagcloud a:hover, .bs-sidebar .bs-widget .bs-widget-tags a:focus, .bs-sidebar .bs-widget .tagcloud a:focus {
	color: #fff;
	background: var(--pri-color);
	border-color: #000;
}
.bs-sidebar .bs-widget.widget_search .btn {
	background: var(--pri-color);
	color: #fff; 
	border-color: #e5e7eb;
}
.bs-sidebar .bs-widget.widget_search .btn:hover, .bs-sidebar .bs-widget.widget_search .btn:focus  {
	color: #fff;
	background: var(--secondary-color);
	border-color: var(--secondary-color);
}
.bs-widget .calendar_wrap table thead th, .bs-widget .calendar_wrap  table, .bs-widget .calendar_wrap td {
	border-color: rgba(51, 51, 51, 0.1);
	color: var(--text-color);
}
.bs-widget .calendar_wrap table caption {
	background: var(--pri-color);
	border-color: var(--pri-color);
	color: #fff;
}
.widget_block .wp-block-search__label,
.wp-block-search__label {
    background: var(--pri-color);
     border-color: #000;
     color: var(--head-color);
}
.widget_block h2  {
    background: var(--pri-color);
    border-color: #000;
}
.wp-block-latest-comments__comment-meta {
    color: var(--text-color);
}
.comment-form textarea:focus {
    color: var(--text-color);
}
.widget_search .wp-block-search__input:focus {
    color: var(--text-color);
}
/*==================== general ====================*/
h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6 {
	color: #212121;
}
a.btn, button.btn, .btn-theme, .more-link { 
	background-color: var(--pri-color);
	color: #fff;
	border-color: #000;
}
.btn-theme:hover, .btn-theme:focus, .more-link:hover, .more-link:focus, a.btn:hover, button.btn:hover {
	background: var(--secondary-color);
	color: #fff;
	border-color: var(--secondary-color);
}
.btn-blog:hover, .btn-blog:focus {
	background: var(--pri-color);
	color: #fff;
	border-color: var(--pri-color);
}
.modal-header .btn-close{
    background: var(--pri-color);
	color: #fff;
	border-color: var(--pri-color);
}
.modal-header .btn-close:hover{ 
	color: #fff;
}
button, [type=button], [type=reset], [type=submit] {
    background-color: var(--pri-color);
	color: #fff;
	border-color: var(--pri-color);
}
button:hover, [type=button]:hover, [type=reset]:hover, [type=submit]:hover
,button:focus, [type=button]:focus, [type=reset]:focus, [type=submit]:focus {
    background: var(--secondary-color);
    color: #fff;
    border-color: var(--secondary-color);
}
.bs-blog-post.three.md.back-img {
    background-color:#333;
}
/*==================== pagination color ====================*/
.pagination > li > a, .pagination > li > span {
	background: #fff;
	color: #999;
}
.pagination > .active > a, .pagination > .active > a:hover, .pagination > li > a:hover, .pagination > li > a:focus, .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
	border-color: var(--pri-color);
	background: var(--pri-color);
	color: #fff;
}
.page-item.active .page-link {
  border-color: var(--pri-color);
	background: var(--pri-color);
	color: #fff;
}
.navigation.pagination .nav-links .page-numbers, .navigation.pagination .nav-links a{ 
    background-color: var(--box-color);
    border-color: var(--head-color);
    color: var(--head-color);
}
.navigation.pagination .nav-links .page-numbers.current, .navigation.pagination .nav-links a:hover, a.error-btn { background-color: var(--pri-color); color:#fff; }
/*=== navbar drop down hover color ===*/
.navbar-base .navbar-nav > .open > a, .navbar-base .navbar-nav > .open > a:hover, .navbar-base .navbar-nav > .open > a:focus {
	color: #fff;
}

.navigation.pagination > .active > a, .navigation.pagination > .active > a:hover, .navigation.pagination > li > a:hover, .navigation.pagination > li > a:focus, .navigation.pagination > .active > a, .navigation.pagination > .active > span, .navigation.pagination > .active > a:hover, .navigation.pagination > .active > span:hover, .navigation.pagination > .active > a:focus, .navigation.pagination > .active > span:focus {
    border-color: var(--pri-color);
    background: var(--pri-color);
    color: #fff;
}
.navigation p a:hover{
	color: var(--head-color);
}
/*==================== typo ====================*/
.bs-breadcrumb-section .overlay {
	background: var(--box-color);
}
.bs-breadcrumb-section .breadcrumb a, .bs-breadcrumb-section .breadcrumb-item span  {
	color: var(--head-color);
}
.breadcrumb-item + .breadcrumb-item::before{
	color: var(--head-color);
}
.bs-breadcrumb-section .breadcrumb a:hover,
.bs-breadcrumb-section .breadcrumb a:focus,
.bs-breadcrumb-section .breadcrumb .active a {
	color: var(--pri-color);
}
.bs-breadcrumb-title h1 {
	color: var(--head-color);
}
.bs-page-breadcrumb > li a {
	color: var(--head-color);
}
.bs-page-breadcrumb > li a:hover, .bs-page-breadcrumb > li a:focus {
	color: var(--pri-color);
}
.bs-page-breadcrumb > li + li:before {
	color: var(--head-color);
}
.bs-contact .bs-widget-address {
	background: #fff;
}
.bs-contact .bs-widget-address li span.icon-addr i {
	color: var(--pri-color);
}
/*==================== footer background ====================*/
footer .overlay {
	background: #0F1012;
}
footer .widget_block h2 {
	color: #fff;
}
footer .site-title a , footer .site-description {
	color: #fff;
}
footer .bs-widget .title, footer .consultup_contact_widget .bs-widget .title {
	color: #000;
}
footer .bs-widget ul li {
	color: #bbb;
}
footer .text-input button.sub-link  a{
	color: var(--bg-color);
}
footer .bs-widget ul li a {
	color: #bbb;
}
footer .bs-recent-blog-post .small-post .title a {
	color: #fff;
}
footer .bs-recent-blog-post .small-post .title a:hover, footer .bs-recent-blog-post .small-post .title a:focus {
	color: var(--pri-color);
}
footer .bs-recent-blog-post .bs-blog-meta span:before, footer .bs-recent-blog-post .bs-blog-meta a{
	color: #fff;
}
footer .checkbox a {
    color: var(--secondary-color);
}
footer .bs-widget ul li a:hover, footer .bs-widget ul li a:focus {
	color: var(--pri-color);
}
footer .bs-widget .calendar_wrap table thead th, footer .bs-widget .calendar_wrap table tbody td,footer .bs-widget #calendar_wrap td, footer .bs-widget #calendar_wrap th, footer .bs-widget .calendar_wrap table caption {
    color: #f2f7fd;
	border-color: #eee;
}
footer .bs-footer-copyright {
	background: #000;
}
footer .bs-footer-copyright, footer .bs-footer-copyright p, footer .bs-footer-copyright a {
	color: #bbb;
}
footer .bs-footer-copyright a:hover, footer .bs-footer-copyright a:focus {
	color: var(--pri-color);
}
footer .bs-widget p {
	color: #bbb;
}
footer .bs-widget.widget_search .btn {
	color: #fff;
	background: var(--pri-color);
	border-color: var(--pri-color);
}
footer .bs-widget.widget_search .btn:hover, footer .bs-widget.widget_search .btn:focus {
	background: var(--secondary-color);
	border-color: var(--secondary-color);
}
.bs_upscr {
	background: var(--pri-color);
	border-color: var(--secondary-color);
	color: #fff !important;
}
.bs_upscr:hover, .bs_upscr:focus {
	/* background: var(--secondary-color);
	border-color: var(--secondary-color); */
	color: #fff;
}
.site-title-footer a, .site-description-footer, p.site-title-footer a, p.site-description-footer{
	color:#fff;
}
footer .bs-widget-title .title {
	color: #000;
}
/*form-control*/
.form-control {
	border-color: #eef3fb;
}
.form-control:focus {
	border-color: var(--pri-color);
}
.form-group label::before {
    background-color: #dddddd;
}
.form-group label::after {
	background-color: var(--pri-color);
}
.woocommerce ul.products li.product .woocommerce-loop-product__title {
	color: var(--secondary-color);
}
.woocommerce-page .products h3 {
	color: #333;
}
.woocommerce div.product .woocommerce-tabs .panel h2 {
	color: #333;
}
.related.products h2 {
	color: #333;
}
.woocommerce nav.woocommerce-pagination ul li a {
	color: #333;
}
.woocommerce nav .woocommerce-pagination ul li span {
	color: #333;
}
.woocommerce nav.woocommerce-pagination ul li a {
	border-color: #ddd;
}
.woocommerce nav .woocommerce-pagination ul li span {
	border-color: #ddd;
}
/*----woocommerce----*/ 
.woocommerce-cart table.cart td.actions .coupon .input-text {
	border-color: #ebebeb;
}
/*-theme-background-*/ 
.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce #respond input#submit, .woocommerce input.button.alt, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce a.button, .woocommerce button.button, .woocommerce-page .products a.button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt.disabled, .woocommerce #respond input#submit.alt.disabled:hover, .woocommerce #respond input#submit.alt:disabled, .woocommerce #respond input#submit.alt:disabled:hover, .woocommerce #respond input#submit.alt[disabled]:disabled, .woocommerce #respond input#submit.alt[disabled]:disabled:hover, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt[disabled]:disabled, .woocommerce a.button.alt[disabled]:disabled:hover, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt[disabled]:disabled, .woocommerce button.button.alt[disabled]:disabled:hover, .woocommerce input.button.alt.disabled, .woocommerce input.button.alt.disabled:hover, .woocommerce input.button.alt:disabled, .woocommerce input.button.alt:disabled:hover, .woocommerce input.button.alt[disabled]:disabled, .woocommerce input.button.alt[disabled]:disabled:hover {
	background: var(--pri-color);
}
.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt {
	background-color: var(--pri-color) !important; 
}
.woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span {
	background: #ebe9eb;
	color: #999;
}
/*-theme-color-*/ 
.woocommerce #respond input#submit, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce-page .products .added_to_cart, .woocommerce div.product .woocommerce-tabs ul.tabs li.active, .woocommerce div.product .woocommerce-tabs ul.tabs li.active {
	color: var(--pri-color);
}
/*-theme-border-color-*/ 
.woocommerce-cart table.cart td.actions .coupon .input-text:hover, .woocommerce-cart table.cart td.actions .coupon .input-text:focus, .woocommerce div.product .woocommerce-tabs ul.tabs li.active, .woocommerce nav .woocommerce-pagination ul li a:focus, .woocommerce nav .woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current {
	border-color: var(--pri-color);
}

/*-theme-secondary-background-*/ 
.woocommerce #review_form #respond .form-submit input:hover, .woocommerce-page .products a.button:hover, .woocommerce .cart .button:hover, .woocommerce .cart input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit:hover, .woocommerce #respond input#submit:focus, .woocommerce a.button:hover, .woocommerce a.button:focus, .woocommerce button.button:hover, .woocommerce button.button:focus, .woocommerce input.button:hover, .woocommerce input.button:focus {
	background: var(--secondary-color);
	color: #fff;
}
/*-theme-secondary-color-*/ 
.woocommerce div.product .woocommerce-tabs ul.tabs li a {
	color: #161c28;
}
/*-theme-color-white-*/ 
.woocommerce-page .woocommerce .woocommerce-info a, .woocommerce-page .woocommerce .woocommerce-info:before, .woocommerce-page .woocommerce-message, .woocommerce-page .woocommerce-message a, .woocommerce-page .woocommerce-message a:hover, .woocommerce-page .woocommerce-message a:focus, .woocommerce .woocommerce-message::before, .woocommerce-page .woocommerce-error, .woocommerce-page .woocommerce-error a, .woocommerce-page .woocommerce .woocommerce-error:before, .woocommerce-page .woocommerce-info, .woocommerce-page .woocommerce-info a, .woocommerce-page .woocommerce-info:before, .woocommerce-page .woocommerce .woocommerce-info, .woocommerce-cart .wc-proceed-to-checkout a .checkout-button, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce a.button, .woocommerce button.button, .woocommerce #respond input#submit, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce nav .woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce-page .products a.button, .woocommerce #respond input#submit:hover, .woocommerce #respond input#submit:focus, .woocommerce a.button:hover, .woocommerce a.button:focus, .woocommerce button.button:hover, .woocommerce button.button:focus, .woocommerce input.button:hover, .woocommerce input.button:focus {
	color: #fff;
}
.woocommerce .products span.onsale, .woocommerce span.onsale {
	background: var(--pri-color);
}
.woocommerce-page .products a .price, .woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price {
	color: #000;
}
.woocommerce-page .products a .price ins {
	color: #e96656;
}
.woocommerce-page .products .star-rating, .woocommerce-page .star-rating span, .woocommerce-page .stars span a {
	color: #ffc107;
}
/*woocommerce-messages*/
.woocommerce-page .woocommerce-message {
	background: #2ac56c;
}
.woocommerce-page .woocommerce-message a {
	background-color: var(--pri-color);
}
.woocommerce-page .woocommerce-message a:hover, .woocommerce-page .woocommerce-message a:focus {
	background-color: #388e3c;
}
.woocommerce-page .woocommerce-error {
	background: #ff5252;
}
.woocommerce-page .woocommerce-error a {
	background-color: #F47565;
}
.woocommerce-page .woocommerce-info {
	background: #4593e3;
}
.woocommerce-page .woocommerce-info a {
	background-color: #5fb8dd;
}
.woocommerce-page .woocommerce .woocommerce-info {
	background: rgb(58, 176, 226);
}
/*woocommerce-Price-Slider*/ 
.woocommerce .widget_price_filter .ui-slider .ui-slider-range {
	background: var(--pri-color);
}
.woocommerce .widget_price_filter .ui-slider .ui-slider-handle {
	background: var(--pri-color);
}
.woocommerce-page .woocommerce-ordering select {
	color: #A0A0A0;
}
/*woocommerce-price-filter*/
.woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content {
	background: #1a2128;
}
/*woocommerce-form*/
.woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea {
	border-color: #ccc;
	color: #999;
}
.woocommerce form .form-row label { 
	color: #222;
}
/* --------------------------------------
=========================================
	subscibe-area
=========================================
-----------------------------------------*/
.subscibe-area { 
	background:  var(--box-color);
}
@media (max-width: 991.98px) {
    .navbar-wp .navbar-nav {
        background: var(--pri-color);
    }
    .bs-default .navbar-wp .navbar-nav > li > a,
    .bs-headtwo .navbar-wp .navbar-nav > li > a, 
    .bs-headthree .navbar-wp .navbar-nav > li > a,
	.bs-headfour .navbar-wp .navbar-nav > li > a { 
    	color: #fff;
    }
}

  </style>
  <link rel='stylesheet' id='ProjectYai-fonts-css'
    href='http://fonts.googleapis.com/css?family=Outfit%3A400%2C500%2C700%7CRubik%3A400%2C500%2C700%26display%3Dswap&amp;subset=latin%2Clatin-ext'
    type='text/css' media='all' />
  <!-- <link rel='stylesheet' id='ProjectYai-google-fonts-css' href='//fonts.googleapis.com/css?family=ABeeZee%7CAbel%7CAbril+Fatface%7CAclonica%7CAcme%7CActor%7CAdamina%7CAdvent+Pro%7CAguafina+Script%7CAkronim%7CAladin%7CAldrich%7CAlef%7CAlegreya%7CAlegreya+SC%7CAlegreya+Sans%7CAlegreya+Sans+SC%7CAlex+Brush%7CAlfa+Slab+One%7CAlice%7CAlike%7CAlike+Angular%7CAllan%7CAllerta%7CAllerta+Stencil%7CAllura%7CAlmendra%7CAlmendra+Display%7CAlmendra+SC%7CAmarante%7CAmaranth%7CAmatic+SC%7CAmatica+SC%7CAmethysta%7CAmiko%7CAmiri%7CAmita%7CAnaheim%7CAndada%7CAndika%7CAngkor%7CAnnie+Use+Your+Telescope%7CAnonymous+Pro%7CAntic%7CAntic+Didone%7CAntic+Slab%7CAnton%7CArapey%7CArbutus%7CArbutus+Slab%7CArchitects+Daughter%7CArchivo+Black%7CArchivo+Narrow%7CAref+Ruqaa%7CArima+Madurai%7CArimo%7CArizonia%7CArmata%7CArtifika%7CArvo%7CArya%7CAsap%7CAsar%7CAsset%7CAssistant%7CAstloch%7CAsul%7CAthiti%7CAtma%7CAtomic+Age%7CAubrey%7CAudiowide%7CAutour+One%7CAverage%7CAverage+Sans%7CAveria+Gruesa+Libre%7CAveria+Libre%7CAveria+Sans+Libre%7CAveria+Serif+Libre%7CBad+Script%7CBaloo%7CBaloo+Bhai%7CBaloo+Da%7CBaloo+Thambi%7CBalthazar%7CBangers%7CBasic%7CBattambang%7CBaumans%7CBayon%7CBelgrano%7CBelleza%7CBenchNine%7CBentham%7CBerkshire+Swash%7CBevan%7CBigelow+Rules%7CBigshot+One%7CBilbo%7CBilbo+Swash+Caps%7CBioRhyme%7CBioRhyme+Expanded%7CBiryani%7CBitter%7CBlack+Ops+One%7CBokor%7CBonbon%7CBoogaloo%7CBowlby+One%7CBowlby+One+SC%7CBrawler%7CBree+Serif%7CBubblegum+Sans%7CBubbler+One%7CBuda%7CBuenard%7CBungee%7CBungee+Hairline%7CBungee+Inline%7CBungee+Outline%7CBungee+Shade%7CButcherman%7CButterfly+Kids%7CCabin%7CCabin+Condensed%7CCabin+Sketch%7CCaesar+Dressing%7CCagliostro%7CCairo%7CCalligraffitti%7CCambay%7CCambo%7CCandal%7CCantarell%7CCantata+One%7CCantora+One%7CCapriola%7CCardo%7CCarme%7CCarrois+Gothic%7CCarrois+Gothic+SC%7CCarter+One%7CCatamaran%7CCaudex%7CCaveat%7CCaveat+Brush%7CCedarville+Cursive%7CCeviche+One%7CChanga%7CChanga+One%7CChango%7CChathura%7CChau+Philomene+One%7CChela+One%7CChelsea+Market%7CChenla%7CCherry+Cream+Soda%7CCherry+Swash%7CChewy%7CChicle%7CChivo%7CChonburi%7CCinzel%7CCinzel+Decorative%7CClicker+Script%7CCoda%7CCoda+Caption%7CCodystar%7CCoiny%7CCombo%7CComfortaa%7CComing+Soon%7CConcert+One%7CCondiment%7CContent%7CContrail+One%7CConvergence%7CCookie%7CCopse%7CCorben%7CCormorant%7CCormorant+Garamond%7CCormorant+Infant%7CCormorant+SC%7CCormorant+Unicase%7CCormorant+Upright%7CCourgette%7CCousine%7CCoustard%7CCovered+By+Your+Grace%7CCrafty+Girls%7CCreepster%7CCrete+Round%7CCrimson+Text%7CCroissant+One%7CCrushed%7CCuprum%7CCutive%7CCutive+Mono%7CDamion%7CDancing+Script%7CDangrek%7CDavid+Libre%7CDawning+of+a+New+Day%7CDays+One%7CDekko%7CDelius%7CDelius+Swash+Caps%7CDelius+Unicase%7CDella+Respira%7CDenk+One%7CDevonshire%7CDhurjati%7CDidact+Gothic%7CDiplomata%7CDiplomata+SC%7CDomine%7CDonegal+One%7CDoppio+One%7CDorsa%7CDosis%7CDr+Sugiyama%7CDroid+Sans%7CDroid+Sans+Mono%7CDroid+Serif%7CDuru+Sans%7CDynalight%7CEB+Garamond%7CEagle+Lake%7CEater%7CEconomica%7CEczar%7CEk+Mukta%7CEl+Messiri%7CElectrolize%7CElsie%7CElsie+Swash+Caps%7CEmblema+One%7CEmilys+Candy%7CEngagement%7CEnglebert%7CEnriqueta%7CErica+One%7CEsteban%7CEuphoria+Script%7CEwert%7CExo%7CExo+2%7CExpletus+Sans%7CFanwood+Text%7CFarsan%7CFascinate%7CFascinate+Inline%7CFaster+One%7CFasthand%7CFauna+One%7CFederant%7CFedero%7CFelipa%7CFenix%7CFinger+Paint%7CFira+Mono%7CFira+Sans%7CFjalla+One%7CFjord+One%7CFlamenco%7CFlavors%7CFondamento%7CFontdiner+Swanky%7CForum%7CFrancois+One%7CFrank+Ruhl+Libre%7CFreckle+Face%7CFredericka+the+Great%7CFredoka+One%7CFreehand%7CFresca%7CFrijole%7CFruktur%7CFugaz+One%7CGFS+Didot%7CGFS+Neohellenic%7CGabriela%7CGafata%7CGalada%7CGaldeano%7CGalindo%7CGentium+Basic%7CGentium+Book+Basic%7CGeo%7CGeostar%7CGeostar+Fill%7CGermania+One%7CGidugu%7CGilda+Display%7CGive+You+Glory%7CGlass+Antiqua%7CGlegoo%7CGloria+Hallelujah%7CGoblin+One%7CGochi+Hand%7CGorditas%7CGoudy+Bookletter+1911%7CGraduate%7CGrand+Hotel%7CGravitas+One%7CGreat+Vibes%7CGriffy%7CGruppo%7CGudea%7CGurajada%7CHabibi%7CHalant%7CHammersmith+One%7CHanalei%7CHanalei+Fill%7CHandlee%7CHanuman%7CHappy+Monkey%7CHarmattan%7CHeadland+One%7CHeebo%7CHenny+Penny%7CHerr+Von+Muellerhoff%7CHind%7CHind+Guntur%7CHind+Madurai%7CHind+Siliguri%7CHind+Vadodara%7CHoltwood+One+SC%7CHomemade+Apple%7CHomenaje%7CIM+Fell+DW+Pica%7CIM+Fell+DW+Pica+SC%7CIM+Fell+Double+Pica%7CIM+Fell+Double+Pica+SC%7CIM+Fell+English%7CIM+Fell+English+SC%7CIM+Fell+French+Canon%7CIM+Fell+French+Canon+SC%7CIM+Fell+Great+Primer%7CIM+Fell+Great+Primer+SC%7CIceberg%7CIceland%7CImprima%7CInconsolata%7CInder%7CIndie+Flower%7CInika%7CInknut+Antiqua%7CIrish+Grover%7CIstok+Web%7CItaliana%7CItalianno%7CItim%7CJacques+Francois%7CJacques+Francois+Shadow%7CJaldi%7CJim+Nightshade%7CJockey+One%7CJolly+Lodger%7CJomhuria%7CJosefin+Sans%7CJosefin+Slab%7CJoti+One%7CJudson%7CJulee%7CJulius+Sans+One%7CJunge%7CJura%7CJust+Another+Hand%7CJust+Me+Again+Down+Here%7CKadwa%7CKalam%7CKameron%7CKanit%7CKantumruy%7CKarla%7CKarma%7CKatibeh%7CKaushan+Script%7CKavivanar%7CKavoon%7CKdam+Thmor%7CKeania+One%7CKelly+Slab%7CKenia%7CKhand%7CKhmer%7CKhula%7CKite+One%7CKnewave%7CKotta+One%7CKoulen%7CKranky%7CKreon%7CKristi%7CKrona+One%7CKumar+One%7CKumar+One+Outline%7CKurale%7CLa+Belle+Aurore%7CLaila%7CLakki+Reddy%7CLalezar%7CLancelot%7CLateef%7CLato%7CLeague+Script%7CLeckerli+One%7CLedger%7CLekton%7CLemon%7CLemonada%7CLibre+Baskerville%7CLibre+Franklin%7CLife+Savers%7CLilita+One%7CLily+Script+One%7CLimelight%7CLinden+Hill%7CLobster%7CLobster+Two%7CLondrina+Outline%7CLondrina+Shadow%7CLondrina+Sketch%7CLondrina+Solid%7CLora%7CLove+Ya+Like+A+Sister%7CLoved+by+the+King%7CLovers+Quarrel%7CLuckiest+Guy%7CLusitana%7CLustria%7CMacondo%7CMacondo+Swash+Caps%7CMada%7CMagra%7CMaiden+Orange%7CMaitree%7CMako%7CMallanna%7CMandali%7CMarcellus%7CMarcellus+SC%7CMarck+Script%7CMargarine%7CMarko+One%7CMarmelad%7CMartel%7CMartel+Sans%7CMarvel%7CMate%7CMate+SC%7CMaven+Pro%7CMcLaren%7CMeddon%7CMedievalSharp%7CMedula+One%7CMeera+Inimai%7CMegrim%7CMeie+Script%7CMerienda%7CMerienda+One%7CMerriweather%7CMerriweather+Sans%7CMetal%7CMetal+Mania%7CMetamorphous%7CMetrophobic%7CMichroma%7CMilonga%7CMiltonian%7CMiltonian+Tattoo%7CMiniver%7CMiriam+Libre%7CMirza%7CMiss+Fajardose%7CMitr%7CModak%7CModern+Antiqua%7CMogra%7CMolengo%7CMolle%7CMonda%7CMonofett%7CMonoton%7CMonsieur+La+Doulaise%7CMontaga%7CMontez%7CMontserrat%7CMontserrat+Alternates%7CMontserrat+Subrayada%7CMoul%7CMoulpali%7CMountains+of+Christmas%7CMouse+Memoirs%7CMr+Bedfort%7CMr+Dafoe%7CMr+De+Haviland%7CMrs+Saint+Delafield%7CMrs+Sheppards%7CMukta+Vaani%7CMuli%7CMystery+Quest%7CNTR%7CNeucha%7CNeuton%7CNew+Rocker%7CNews+Cycle%7CNiconne%7CNixie+One%7CNobile%7CNokora%7CNorican%7CNosifer%7CNothing+You+Could+Do%7CNoticia+Text%7CNoto+Sans%7CNoto+Serif%7CNova+Cut%7CNova+Flat%7CNova+Mono%7CNova+Oval%7CNova+Round%7CNova+Script%7CNova+Slim%7CNova+Square%7CNumans%7CNunito%7COdor+Mean+Chey%7COffside%7COld+Standard+TT%7COldenburg%7COleo+Script%7COleo+Script+Swash+Caps%7COpen+Sans%7COpen+Sans+Condensed%7COranienbaum%7COrbitron%7COregano%7COrienta%7COriginal+Surfer%7COswald%7COver+the+Rainbow%7COverlock%7COverlock+SC%7COvo%7COxygen%7COxygen+Mono%7CPT+Mono%7CPT+Sans%7CPT+Sans+Caption%7CPT+Sans+Narrow%7CPT+Serif%7CPT+Serif+Caption%7CPacifico%7CPalanquin%7CPalanquin+Dark%7CPaprika%7CParisienne%7CPassero+One%7CPassion+One%7CPathway+Gothic+One%7CPatrick+Hand%7CPatrick+Hand+SC%7CPattaya%7CPatua+One%7CPavanam%7CPaytone+One%7CPeddana%7CPeralta%7CPermanent+Marker%7CPetit+Formal+Script%7CPetrona%7CPhilosopher%7CPiedra%7CPinyon+Script%7CPirata+One%7CPlaster%7CPlay%7CPlayball%7CPlayfair+Display%7CPlayfair+Display+SC%7CPodkova%7CPoiret+One%7CPoller+One%7CPoly%7CPompiere%7CPontano+Sans%7CPoppins%7CPort+Lligat+Sans%7CPort+Lligat+Slab%7CPragati+Narrow%7CPrata%7CPreahvihear%7CPress+Start+2P%7CPridi%7CPrincess+Sofia%7CProciono%7CPrompt%7CProsto+One%7CProza+Libre%7CPuritan%7CPurple+Purse%7CQuando%7CQuantico%7CQuattrocento%7CQuattrocento+Sans%7CQuestrial%7CQuicksand%7CQuintessential%7CQwigley%7CRacing+Sans+One%7CRadley%7CRajdhani%7CRakkas%7CRaleway%7CRaleway+Dots%7CRamabhadra%7CRamaraja%7CRambla%7CRammetto+One%7CRanchers%7CRancho%7CRanga%7CRasa%7CRationale%7CRavi+Prakash%7CRedressed%7CReem+Kufi%7CReenie+Beanie%7CRevalia%7CRhodium+Libre%7CRibeye%7CRibeye+Marrow%7CRighteous%7CRisque%7CRoboto%7CRoboto+Condensed%7CRoboto+Mono%7CRoboto+Slab%7CRochester%7CRock+Salt%7CRokkitt%7CRomanesco%7CRopa+Sans%7CRosario%7CRosarivo%7CRouge+Script%7CRozha+One%7CRubik%7CRubik+Mono+One%7CRubik+One%7CRuda%7CRufina%7CRuge+Boogie%7CRuluko%7CRum+Raisin%7CRuslan+Display%7CRusso+One%7CRuthie%7CRye%7CSacramento%7CSahitya%7CSail%7CSalsa%7CSanchez%7CSancreek%7CSansita+One%7CSarala%7CSarina%7CSarpanch%7CSatisfy%7CScada%7CScheherazade%7CSchoolbell%7CScope+One%7CSeaweed+Script%7CSecular+One%7CSevillana%7CSeymour+One%7CShadows+Into+Light%7CShadows+Into+Light+Two%7CShanti%7CShare%7CShare+Tech%7CShare+Tech+Mono%7CShojumaru%7CShort+Stack%7CShrikhand%7CSiemreap%7CSigmar+One%7CSignika%7CSignika+Negative%7CSimonetta%7CSintony%7CSirin+Stencil%7CSix+Caps%7CSkranji%7CSlabo+13px%7CSlabo+27px%7CSlackey%7CSmokum%7CSmythe%7CSniglet%7CSnippet%7CSnowburst+One%7CSofadi+One%7CSofia%7CSonsie+One%7CSorts+Mill+Goudy%7CSource+Code+Pro%7CSource+Sans+Pro%7CSource+Serif+Pro%7CSpace+Mono%7CSpecial+Elite%7CSpicy+Rice%7CSpinnaker%7CSpirax%7CSquada+One%7CSree+Krushnadevaraya%7CSriracha%7CStalemate%7CStalinist+One%7CStardos+Stencil%7CStint+Ultra+Condensed%7CStint+Ultra+Expanded%7CStoke%7CStrait%7CSue+Ellen+Francisco%7CSuez+One%7CSumana%7CSunshiney%7CSupermercado+One%7CSura%7CSuranna%7CSuravaram%7CSuwannaphum%7CSwanky+and+Moo+Moo%7CSyncopate%7CTangerine%7CTaprom%7CTauri%7CTaviraj%7CTeko%7CTelex%7CTenali+Ramakrishna%7CTenor+Sans%7CText+Me+One%7CThe+Girl+Next+Door%7CTienne%7CTillana%7CTimmana%7CTinos%7CTitan+One%7CTitillium+Web%7CTrade+Winds%7CTrirong%7CTrocchi%7CTrochut%7CTrykker%7CTulpen+One%7CUbuntu%7CUbuntu+Condensed%7CUbuntu+Mono%7CUltra%7CUncial+Antiqua%7CUnderdog%7CUnica+One%7CUnifrakturCook%7CUnifrakturMaguntia%7CUnkempt%7CUnlock%7CUnna%7CVT323%7CVampiro+One%7CVarela%7CVarela+Round%7CVast+Shadow%7CVesper+Libre%7CVibur%7CVidaloka%7CViga%7CVoces%7CVolkhov%7CVollkorn%7CVoltaire%7CWaiting+for+the+Sunrise%7CWallpoet%7CWalter+Turncoat%7CWarnes%7CWellfleet%7CWendy+One%7CWire+One%7CWork+Sans%7CYanone+Kaffeesatz%7CYantramanav%7CYatra+One%7CYellowtail%7CYeseva+One%7CYesteryear%7CYrsa%7CZeyada&#038;subset=latin%2Clatin-ext' type='text/css' media='all' /> -->
  <link rel='stylesheet' id='all-css-css' href='assets/css/pro_css_all.css' type='text/css' media='all' />
  <link rel='stylesheet' id='bootstrap-css' href='assets/css/pro_css_bootstrap.css' type='text/css' media='all' />
  <link rel='stylesheet' id='ProjectYai-style-css' href='assets/css/pro_style.css' type='text/css' media='all' />
  <link rel='stylesheet' id='dark-css' href='assets/css/pro_css_colors_dark.css' type='text/css' media='all' />
  <link rel='stylesheet' id='swiper-bundle-css-css' href='assets/css/swiper-bundle.css' type='text/css' media='all' />
  <link rel='stylesheet' id='smartmenus-css' href='assets/css/pro_css_jquery.smartmenus.bootstrap.css' type='text/css'
    media='all' />
  <link rel='stylesheet' id='animate-css' href='assets/css/pro_css_animate.css' type='text/css' media='all' />
  <script type='text/javascript' src='assets/js/jquery.min.js' id='jquery-core-js'></script>
  <script type='text/javascript' src='assets/js/jquery-migrate.min.js' id='jquery-migrate-js'></script>
  <script type='text/javascript' src='assets/js/navigation.js' id='ProjectYai-navigation-js'></script>
  <script type='text/javascript' src='assets/js/bootstrap.js' id='ProjectYai_bootstrap_script-js'></script>
  <script type='text/javascript' src='assets/js/swiper-bundle.js' id='swiper-bundle-js'></script>
  <script type='text/javascript' id='ProjectYai_main-js-js-extra'>
    /* <![CDATA[ */
    var load_more_ajax_obj = { "ajax_url": "https:\/\/demos.projectyai.com\/ProjectYai\/standard\/wp-admin\/admin-ajax.php" };
/* ]]> */
  </script>
  <script type='text/javascript' src='assets/js/main.js' id='ProjectYai_main-js-js'></script>
  <script type='text/javascript' src='assets/js/sticksy.min.js' id='sticksy-js-js'></script>
  <script type='text/javascript' src='assets/js/lozad.min.js' id='lozad-min-js'></script>
  <script type='text/javascript' src='assets/js/jquery.smartmenus.js' id='smartmenus-js-js'></script>
  <script type='text/javascript' src='assets/js/jquery.smartmenus.bootstrap.js'
    id='bootstrap-smartmenus-js-js'></script>
  <script type='text/javascript' src='assets/js/jquery.marquee.min.js' id='ProjectYai-marquee-js-js'></script>
  <script type='text/javascript'
    src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js.map'></script>
  <link rel="https://api.w.org/" href="https://demos.projectyai.com/ProjectYai/standard/wp-json/" />
  <link rel="EditURI" type="application/rsd+xml" title="RSD"
    href="https://demos.projectyai.com/ProjectYai/standard/xmlrpc.php?rsd" />
  <link rel="wlwmanifest" type="application/wlwmanifest+xml"
    href="https://demos.projectyai.com/ProjectYai/standard/wp-includes/wlwmanifest.xml" />
  <meta name="generator" content="WordPress 6.2.2" />
  <style type="text/css" id="custom-background-css">
    .wrapper {
      background-color: #cbdceb;
    }
  </style>
  <style>
    .bs-blog-post p:nth-of-type(1)::first-letter {
      display: none;
    }
  </style>
  <style>
    .bs-headthree .bs-header-main .inner {
      height: 200px !important;
    }
  </style>
  <style type="text/css">
    .site-title a,
    .site-description {
      color: #000;
    }

    .site-branding-text .site-title a {
      font-size: px;
    }

    @media only screen and (max-width: 640px) {
      .site-branding-text .site-title a {
        font-size: 26px;

      }
    }

    @media only screen and (max-width: 375px) {
      .site-branding-text .site-title a {
        font-size: 26px;

      }
    }
  </style>
  <style type="text/css" id="custom-background-css">
    body.custom-background {
      background-color: #cbdceb;
    }
  </style>
</head>

<body class="home blog custom-background wide hfeed  ta-hide-date-author-in-list">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-dark-grayscale">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0 0.49803921568627" />
          <feFuncG type="table" tableValues="0 0.49803921568627" />
          <feFuncB type="table" tableValues="0 0.49803921568627" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-grayscale">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0 1" />
          <feFuncG type="table" tableValues="0 1" />
          <feFuncB type="table" tableValues="0 1" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-purple-yellow">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
          <feFuncG type="table" tableValues="0 1" />
          <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-blue-red">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0 1" />
          <feFuncG type="table" tableValues="0 0.27843137254902" />
          <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-midnight">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0 0" />
          <feFuncG type="table" tableValues="0 0.64705882352941" />
          <feFuncB type="table" tableValues="0 1" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-magenta-yellow">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0.78039215686275 1" />
          <feFuncG type="table" tableValues="0 0.94901960784314" />
          <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-purple-green">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
          <feFuncG type="table" tableValues="0 1" />
          <feFuncB type="table" tableValues="0.44705882352941 0.4" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-blue-orange">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0.098039215686275 1" />
          <feFuncG type="table" tableValues="0 0.66274509803922" />
          <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">
      Skip to content</a>
    <!--wrapper-->
    <div class="wrapper" id="custom-background-css">
      <!--==================== TOP BAR ====================-->
      <div class="sidenav offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel"> </h5>
          <span class="btn_close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fas fa-times"></i></span>
        </div>
        <div class="offcanvas-body">
          <ul class="nav navbar-nav sm sm-vertical">
            <li class="nav-item menu-item active"><a class="nav-link "
                href="https://demos.projectyai.com/ProjectYai/standard/" title="Home">Home</a></li>
            <li class="nav-item menu-item page_item dropdown page-item-138"><a class="nav-link"
                href="https://demos.projectyai.com/ProjectYai/standard/about/">About</a></li>
            <li class="nav-item menu-item page_item dropdown page-item-292"><a class="nav-link"
                href="https://demos.projectyai.com/ProjectYai/standard/blog-left-sidebar/">Blog Left Sidebar</a></li>
            <li class="nav-item menu-item page_item dropdown page-item-296"><a class="nav-link"
                href="https://demos.projectyai.com/ProjectYai/standard/blog-list/">Blog List</a></li>
            <li class="nav-item menu-item page_item dropdown page-item-301"><a class="nav-link"
                href="https://demos.projectyai.com/ProjectYai/standard/blog-masonry/">Blog Masonry</a></li>
            <li class="nav-item menu-item page_item dropdown page-item-294"><a class="nav-link"
                href="https://demos.projectyai.com/ProjectYai/standard/blog-right-sidebar/">Blog Right Sidebar</a></li>
            <li class="nav-item menu-item page_item dropdown page-item-140"><a class="nav-link"
                href="https://demos.projectyai.com/ProjectYai/standard/contact/">Contact</a></li>
            <li class="nav-item menu-item page_item dropdown page-item-57"><a class="nav-link"
                href="https://demos.projectyai.com/ProjectYai/standard/home/">Home</a></li>
          </ul>

        </div>
      </div>

      <div class="sidenav offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel"> </h5>
          <span class="btn_close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fas fa-times"></i></span>
        </div>
        <div class="offcanvas-body">
          <ul class="nav navbar-nav sm sm-vertical">
            <li class="nav-item menu-item active"><a class="nav-link "
                href="https://demos.projectyai.com/ProjectYai/standard/" title="Home">Home</a></li>
            <li class="nav-item menu-item page_item dropdown page-item-138"><a class="nav-link"
                href="https://demos.projectyai.com/ProjectYai/standard/about/">About</a></li>
            <li class="nav-item menu-item page_item dropdown page-item-292"><a class="nav-link"
                href="https://demos.projectyai.com/ProjectYai/standard/blog-left-sidebar/">Blog Left Sidebar</a></li>
            <li class="nav-item menu-item page_item dropdown page-item-296"><a class="nav-link"
                href="https://demos.projectyai.com/ProjectYai/standard/blog-list/">Blog List</a></li>
            <li class="nav-item menu-item page_item dropdown page-item-301"><a class="nav-link"
                href="https://demos.projectyai.com/ProjectYai/standard/blog-masonry/">Blog Masonry</a></li>
            <li class="nav-item menu-item page_item dropdown page-item-294"><a class="nav-link"
                href="https://demos.projectyai.com/ProjectYai/standard/blog-right-sidebar/">Blog Right Sidebar</a></li>
            <li class="nav-item menu-item page_item dropdown page-item-140"><a class="nav-link"
                href="https://demos.projectyai.com/ProjectYai/standard/contact/">Contact</a></li>
            <li class="nav-item menu-item page_item dropdown page-item-57"><a class="nav-link"
                href="https://demos.projectyai.com/ProjectYai/standard/home/">Home</a></li>
          </ul>

        </div>
      </div>

      <!--header-->
      <header class="bs-headtwo">
        <!--top-bar-->
        <!--top-bar-->
        <?php 
        $this->beginContent('@frontend/views/layouts/header.php');
        $this->endContent();
        ?>
        <!--/top-bar-->
        <!--/top-bar-->
        <div class="clearfix"></div>
        <!-- Main Menu Area-->
        <div class="bs-menu-full">
          <nav class="navbar navbar-expand-lg navbar-wp">
            <div class="container">
              <!-- Mobile Header -->
              <div class="m-header align-items-center">
                <!-- navbar-toggle -->
                <button class="navbar-toggler x collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbar-wp" aria-controls="navbar-wp" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <div class="navbar-header">
                  <div class="site-branding-text">
                    <h1 class="site-title"><a href="index.php"
                        rel="home">ProjectYai</a></h1>
                    <p class="site-description"></p>
                  </div>
                </div>
                <div class="right-nav">
                  <a class="msearch ml-auto bs_model" data-bs-target="#exampleModal" href="#" data-bs-toggle="modal"> <i
                      class="fa fa-search"></i> </a>
                </div>
              </div>
              <!-- /Mobile Header -->
              <!-- Right nav -->
              <div class="navbar-header d-none d-lg-block">
                <div class="site-branding-text">
                  <h1 class="site-title"><a href="index.php"
                      rel="home">ProjectYai</a></h1>
                  <p class="site-description"></p>
                </div>
              </div>
              <!-- Navigation -->
             <?php
             $this->beginContent('@frontend/views/layouts/menu.php');
             $this->endContent();
             ?>
              <!-- Right nav -->
              <div class="desk-header right-nav position-relative align-items-center">
                <a class="msearch ml-auto bs_model" data-bs-target="#exampleModal" href="#" data-bs-toggle="modal">
                  <i class="fa fa-search"></i>
                </a>
                <a class="subscribe-btn" href="#" target="_blank"><i class="fas fa-bell"></i></a>
                <label class="switch" for="switch">
                  <input type="checkbox" name="theme" id="switch">
                  <span class="slider"></span>
                </label>

              </div>
            </div>
          </nav>
        </div>
        <!--/main Menu Area-->
      </header>
      <style>
        .mainfeatured {
          background-image: url("");
        }

        .mainfeatured:before {
          background: ;
        }
      </style>
      <!--mainfeatured start-->
     
                  <!--col-md-12-->
                  <?= $content ?>
                  <!-- <div class="col-md-12 text-center d-md-flex justify-content-between flex-row">

                    <nav class="navigation pagination" aria-label="Posts">
                      <h2 class="screen-reader-text">Posts navigation</h2>
                      <div class="nav-links"><span aria-current="page" class="page-numbers current">1</span>
                        <a class="page-numbers" href="https://demos.projectyai.com/ProjectYai/standard/page/2/">2</a>
                        <a class="next page-numbers" href="https://demos.projectyai.com/ProjectYai/standard/page/2/"><i
                            class="fa fa-angle-right"></i></a>
                      </div>
                    </nav>
                    <div class="navigation">
                      <p><a href="https://demos.projectyai.com/ProjectYai/standard/page/2/">Next Page &raquo;</a></p>
                    </div>
                  </div> -->
              
            <!--/col-lg-8-->
            <!--col-lg-4 side-->
           
            <!--/col-lg-4-->
          </div><!--/row-->
        </div><!--/container-->
      </main>
      <!--==================== Missed ====================-->
      <div class="missed">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="wd-back">
                <div class="bs-widget-title one">
                  <h2 class="title">You Missed</h2>
                </div>
                <div class="row">
                  <div class="col-md-6 col-lg-3">
                    <div class="bs-blog-post three md back-img bshre mb-lg-0  lozad"
                      data-background-image="https://demos.projectyai.com/ProjectYai/standard/wp-content/uploads/2022/10/blog3.webp">
                      <a class="link-div"
                        href="https://demos.projectyai.com/ProjectYai/standard/where-to-chill-with-an-integrated-trainer-on-running/"></a>
                      <div class="inner">
                        <div class="bs-blog-category">
                          <a href="https://demos.projectyai.com/ProjectYai/standard/category/lifestyle/"
                            style="background-color:#49dfd4">
                            Lifestyle </a>
                          <a href="https://demos.projectyai.com/ProjectYai/standard/category/travel/"
                            style="background-color:#7171e2">
                            Travel </a>
                        </div>
                        <h4 class="title sm mb-0"> <a
                            href="https://demos.projectyai.com/ProjectYai/standard/where-to-chill-with-an-integrated-trainer-on-running/"
                            title="Permalink to: Where to chill with an integrated trainer on running"> Where to chill
                            with an integrated trainer on running</a> </h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="bs-blog-post three md back-img bshre mb-lg-0  lozad"
                      data-background-image="https://demos.projectyai.com/ProjectYai/standard/wp-content/uploads/2022/10/blog2.webp">
                      <a class="link-div"
                        href="https://demos.projectyai.com/ProjectYai/standard/harbor-amid-a-slowed-down-in-singer/"></a>
                      <div class="inner">
                        <div class="bs-blog-category">
                          <a href="https://demos.projectyai.com/ProjectYai/standard/category/fashion/"
                            style="background-color:#f9b439">
                            Fashion </a>
                          <a href="https://demos.projectyai.com/ProjectYai/standard/category/lifestyle/"
                            style="background-color:#49dfd4">
                            Lifestyle </a>
                          <a href="https://demos.projectyai.com/ProjectYai/standard/category/travel/"
                            style="background-color:#7171e2">
                            Travel </a>
                        </div>
                        <h4 class="title sm mb-0"> <a
                            href="https://demos.projectyai.com/ProjectYai/standard/harbor-amid-a-slowed-down-in-singer/"
                            title="Permalink to: Harbor amid a Slowed down in singer"> Harbor amid a Slowed down in
                            singer</a> </h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="bs-blog-post three md back-img bshre mb-lg-0  lozad"
                      data-background-image="https://demos.projectyai.com/ProjectYai/standard/wp-content/uploads/2022/10/blog1.webp">
                      <a class="link-div"
                        href="https://demos.projectyai.com/ProjectYai/standard/blessed-fowl-greater-kind-fill-him-bring/"></a>
                      <div class="inner">
                        <div class="bs-blog-category">
                          <a href="https://demos.projectyai.com/ProjectYai/standard/category/travel/"
                            style="background-color:#7171e2">
                            Travel </a>
                        </div>
                        <h4 class="title sm mb-0"> <a
                            href="https://demos.projectyai.com/ProjectYai/standard/blessed-fowl-greater-kind-fill-him-bring/"
                            title="Permalink to: blessed fowl greater kind fill him bring"> blessed fowl greater kind
                            fill him bring</a> </h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="bs-blog-post three md back-img bshre mb-lg-0  lozad"
                      data-background-image="https://demos.projectyai.com/ProjectYai/standard/wp-content/uploads/2022/10/blog4.webp">
                      <a class="link-div"
                        href="https://demos.projectyai.com/ProjectYai/standard/sea-bearing-from-in-thing-fruit-spirit/"></a>
                      <div class="inner">
                        <div class="bs-blog-category">
                          <a href="https://demos.projectyai.com/ProjectYai/standard/category/lifestyle/"
                            style="background-color:#49dfd4">
                            Lifestyle </a>
                          <a href="https://demos.projectyai.com/ProjectYai/standard/category/travel/"
                            style="background-color:#7171e2">
                            Travel </a>
                        </div>
                        <h4 class="title sm mb-0"> <a
                            href="https://demos.projectyai.com/ProjectYai/standard/sea-bearing-from-in-thing-fruit-spirit/"
                            title="Permalink to: Sea Bearing From In Thing Fruit Spirit"> Sea Bearing From In Thing
                            Fruit Spirit</a> </h4>
                      </div>
                    </div>
                  </div>
                </div><!-- end inner row -->
              </div><!-- end wd-back -->
            </div><!-- end col12 -->
          </div><!-- end row -->
        </div><!-- end container -->
      </div>
      <!-- end missed -->
      <!--==================== FOOTER AREA ====================-->
      <footer>
        <div class="overlay" style="background-color: ;">
          <!--Start bs-footer-widget-area-->
          <div class="bs-footer-bottom-area">
            <div class="container">
              <div class="divide-line"></div>
              <div class="row align-items-center">
                <div class="col-md-6">
                  <div class="footer-logo">

                    <div class="site-branding-text">
                      <p class="site-title-footer"> <a href="https://demos.projectyai.com/ProjectYai/standard/"
                          rel="home">ProjectYai</a></p>
                      <p class="site-description-footer mb-3"></p>
                    </div>
                  </div>
                </div>
                <!--col-md-3-->
                <div class="col-md-6">
                  <ul class="bs-social justify-content-center justify-content-md-end">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fab fa-telegram"></i></a></li>
                  </ul>
                </div>
                <!--/col-md-3-->
              </div>
              <!--/row-->
            </div>
            <!--/container-->
          </div>
          <!--End bs-footer-widget-area-->
          <div class="bs-footer-copyright">
            <div class="container">
              <div class="row align-items-center">

                <div class="col-md-12 text-center">
                  <p>&copy; Copyright 2022 ProjectYai. All Rights Reserved. by <a
                      href="https://projectyai.com/">projectyai</a></p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/overlay-->
      </footer>
      <!--/footer-->
    </div>
    <!--/wrapper-->
    <!--Scroll To Top-->
    <a href="#" class="bs_upscr bounceInup animated"><i class="fa fa-angle-up"></i></a>
    <!--/Scroll To Top-->
    <!-- Modal -->
    <div class="modal fade bs_model" id="exampleModal" data-bs-keyboard="true" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog  modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                class="fa fa-times"></i></button>
          </div>
          <div class="modal-body">
            <form role="search" method="get" id="searchform" action="https://demos.projectyai.com/ProjectYai/standard/">
              <div class="input-group">
                <input type="search" class="form-control" placeholder="Search" value="" name="s" />
                <span class="input-group-btn btn-default">
                  <button type="submit" class="btn btn-theme"> <i class="fa fa-search"></i> </button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /Modal -->
    <!-- /Scroll To Top -->
    <style>
      footer .footer-logo a img {
        width: 210px;
        height: 70px;
      }

      < !--
    </style>
    <style type="text/css">
      /*==================== Top Bar color ====================*/
      .bs-head-detail {
        background: ;
      }

      .bs-head-detail .top-date,
      .bs-head-detail,
      .bs-head-detail .top-date .time {
        color: ;
      }

      .bs-head-detail .top-date,
      .bs-head-detail .top-date .time {
        background: ;
      }

      /*==================== Menu color ====================*/
      .navbar-toggler.x .icon-bar {
        background: ;
      }

      .bs-default .navbar-collapse ul,
      .bs-headtwo .navbar-wp,
      .bs-headthree.navbar-wp,
      .bs-headfour .navbar-wp,
      .navbar-wp {
        background: ;
      }

      .bs-default .navbar-wp .navbar-nav>li>a,
      .bs-headtwo .navbar-wp .navbar-nav>li>a,
      .bs-headthree .navbar-wp .navbar-nav>li>a,
      .bs-headfour .navbar-wp .navbar-nav>li>a {
        background: ;
        color: ;
      }

      .bs-default .navbar-wp .navbar-nav>li>a:hover,
      .bs-default .navbar-wp .navbar-nav>li>a:focus,
      .navbar-wp .navbar-nav>li>a:hover,
      .navbar-wp .navbar-nav>li.active>a,
      .navbar-wp .navbar-nav>li>a:focus {
        background: ;
        color: ;
      }

      .navbar-wp .dropdown-menu>li>a {
        background: #fff;
        color: ;
      }

      .navbar-wp .dropdown-menu>li>a:hover,
      .navbar-wp .dropdown-menu>li>a:focus {
        background: ;
        color: ;
      }

      /*=================== Subscribe Button Color ===================*/
      .right-nav a,
      .switch .slider::before {
        background: ;
        color: ;
      }

      .right-nav a:hover,
      .right-nav a:focus {
        color: ;
      }

      .right-nav a:after {
        background: ;
      }

      /*=================== Breadeking News Color ===================*/
      .bs-latest-news {
        background: ;
      }

      .bs-latest-news .bs-latest-news-slider a {
        color: ;
      }

      /*=================== Slider Color ===================*/
      .bs-slide.overlay:before {
        background-color: ;
      }

      .bs-slide.two .inner.overlay::after,
      .bs-slide.three .inner.overlay::after {
        background-color: ;
      }

      .homemain .bs-slide .bs-blog-meta a {
        color: ;
      }

      .bs-slide .inner .title a {
        color: ;
      }

      @media (min-width: 768px) {
        .bs-slide .inner .title {
          font-size: 45px;
        }
      }

      /*=================== Blog Post Color ===================*/
      .bs-blog-post,
      .bs-blog-post.two .small,
      .bs-blog-post.four .small {
        background-color: ;
      }

      .bs-blog-post .title,
      .bs-blog-post .title a {
        color: ;
      }

      .bs-blog-meta,
      .bs-blog-meta a {
        color: ;
      }

      .bs-blog-post .small {
        color: ;
      }

      /*=================== Sidebar Title Design ===================*/
      .bs-sidebar .bs-widget-title .title,
      .bs-sidebar .bs-widget.widget_block h2,
      .bs-widget .wp-block-search__label {
        padding: ;
        border-radius: ;
        border-style: ;
        border-width: px;
        border-color: ;
        color: #ffffff;
        background-color: ;
      }

      /*=================== You Missed Title Design ===================*/
      .missed .bs-widget-title .title {
        padding: ;
        border-radius: ;
        border-style: ;
        border-width: px;
        border-color: ;
        color: ;
        background-color: ;
      }
    </style> -->
    <script type="text/javascript">
      (function ($) {
        "use strict";
        /* =================================
        ===        home -slider        ====
        =================================== */
        function homemain() {
          var homemain = new Swiper('.homemain', {
            direction: 'horizontal',
            loop: true,
            autoplay: true,
            autoplay: {
              delay: 2000,
            },
            slidesPerView: 1,
            spaceBetween: 30,
            // Navigation arrows
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev'
            },
            breakpoints: {
              640: {
                slidesPerView: 1,
              },
              768: {
                slidesPerView: 1,
              },
              1024: {
                slidesPerView: 3,
              },
            }
          });
        }
        homemain();
      })(jQuery);


    </script>

    <script type="text/javascript">
      (function ($) {
        "use strict";

        document.documentElement.setAttribute("data-theme", " ")
        //document.getElementById("switch").checked = false;
        localStorage.setItem("data-theme", '')

      })(jQuery); 
    </script>

    <script type="text/javascript">
      let theme = localStorage.getItem('data-theme');
      const checkbox = document.getElementById("switch");
      const changeThemeToDark = () => {
        document.documentElement.setAttribute("data-theme", "dark")
        document.getElementById("switch").checked = true;
        localStorage.setItem("data-theme", "dark")
        console.log("I give you dark")
        document.querySelector(".site-title a").style.color = '#fff';
        document.querySelector(".site-description").style.color = '#fff';

        // For Responsive
        document.querySelector(".m-header .site-title a").style.color = '#fff';
        document.querySelector(".m-header .site-description").style.color = '#fff';

      }

      const changeThemeToLight = () => {
        document.documentElement.setAttribute("data-theme", "")
        localStorage.setItem("data-theme", '')
        console.log("I give you light")
        document.querySelector(".site-title a").style.color = '#000';
        document.querySelector(".site-description").style.color = '#000';

        // For Responsive
        document.querySelector(".m-header .site-title a").style.color = '#000';
        document.querySelector(".m-header .site-description").style.color = '#000';
      }

      if (theme === 'dark') {
        changeThemeToDark()
      } else {
        changeThemeToLight()
      }

      checkbox.addEventListener('change', () => {
        let theme = localStorage.getItem('data-theme');
        if (theme === 'dark') {
          changeThemeToLight()
        } else {
          changeThemeToDark()
        }

      });

    </script>
    <script type="text/javascript" id="lazyy-script">
      const observer = lozad('.lozad', {
        threshold: 0.1, // ratio of element convergence
        enableAutoReload: true // it will reload the new image when validating attributes changes
      });
      observer.observe();
    </script>
    <style>
      .site-description,
      .site-title a {
        color: ;
      }
    </style>
    <!-- <script type='text/javascript' src='https://demos.projectyai.com/ProjectYai/standard/wp-content/themes/ProjectYai-pro/js/custom-time.js?ver=6.2.2' id='ProjectYai-custom-time-js'></script>
<script type='text/javascript' src='https://demos.projectyai.com/ProjectYai/standard/wp-content/themes/ProjectYai-pro/js/custom.js?ver=6.2.2' id='ProjectYai_custom-js-js'></script> -->
    <script>
      /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function () { var t, e = location.hash.substring(1); /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus()) }, !1);
    </script>
</body>


</html>