<?php header("Content-type:text/css;charset:UTF-8");header("Expires:Mon, 31 Dec 2015 05:00:00 GMT");?>
<?php $nothing = false;if($nothing){ ?><style type="text/css"><?php } ?>
/*
@group reset styles
@group print styles
@group general styles
@group helper styles
@group page structure
@group page components
@group overrides
*/

/* @group reset styles */
/* http://meyerweb.com/eric/tools/css/reset/|v2.0 | 20110126|License:none (public domain)*/
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video{margin:0;padding:0;border:0;font-size:100%;vertical-align:baseline;background:transparent;}

/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section{display:block;}
ul{list-style:none;list-style-type:none;list-style-image:none;}
blockquote, q{quotes:none;}
blockquote:before, blockquote:after, q:before, q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
.cf:before,.cf:after {content:"";display:table;}/* For modern browsers */
.cf:after {clear:both;}
.cf {*zoom:1;}/* For IE 6/7 (trigger hasLayout) */

<?php if ($_GET["page"] == "/gallery/default.php" || $_GET["page"] == "/default.php"){ ?>
@media screen{
div.pp_default .pp_top,div.pp_default .pp_top .pp_middle,div.pp_default .pp_top .pp_left,div.pp_default .pp_top .pp_right,div.pp_default .pp_bottom,div.pp_default .pp_bottom .pp_left,div.pp_default .pp_bottom .pp_middle,div.pp_default .pp_bottom .pp_right{height:13px}div.pp_default .pp_top .pp_left{background:url(/images/prettyPhoto/default/sprite.png) -78px -93px no-repeat}div.pp_default .pp_top .pp_middle{background:url(/images/prettyPhoto/default/sprite_x.png) top left repeat-x}div.pp_default .pp_top .pp_right{background:url(/images/prettyPhoto/default/sprite.png) -112px -93px no-repeat}div.pp_default .pp_content .ppt{color:#f8f8f8}div.pp_default .pp_content_container .pp_left{background:url(/images/prettyPhoto/default/sprite_y.png) -7px 0 repeat-y;padding-left:13px}div.pp_default .pp_content_container .pp_right{background:url(/images/prettyPhoto/default/sprite_y.png) top right repeat-y;padding-right:13px}div.pp_default .pp_next:hover{background:url(/images/prettyPhoto/default/sprite_next.png) center right no-repeat;cursor:pointer}div.pp_default .pp_previous:hover{background:url(/images/prettyPhoto/default/sprite_prev.png) center left no-repeat;cursor:pointer}div.pp_default .pp_expand{background:url(/images/prettyPhoto/default/sprite.png) 0 -29px no-repeat;cursor:pointer;width:28px;height:28px}div.pp_default .pp_expand:hover{background:url(/images/prettyPhoto/default/sprite.png) 0 -56px no-repeat;cursor:pointer}div.pp_default .pp_contract{background:url(/images/prettyPhoto/default/sprite.png) 0 -84px no-repeat;cursor:pointer;width:28px;height:28px}div.pp_default .pp_contract:hover{background:url(/images/prettyPhoto/default/sprite.png) 0 -113px no-repeat;cursor:pointer}div.pp_default .pp_close{width:30px;height:30px;background:url(/images/prettyPhoto/default/sprite.png) 2px 1px no-repeat;cursor:pointer}div.pp_default .pp_gallery ul li a{background:url(/images/prettyPhoto/default/default_thumb.png) center center #f8f8f8;border:1px solid #aaa}div.pp_default .pp_social{margin-top:7px}div.pp_default .pp_gallery a.pp_arrow_previous,div.pp_default .pp_gallery a.pp_arrow_next{position:static;left:auto}div.pp_default .pp_nav .pp_play,div.pp_default .pp_nav .pp_pause{background:url(/images/prettyPhoto/default/sprite.png) -51px 1px no-repeat;height:30px;width:30px}div.pp_default .pp_nav .pp_pause{background-position:-51px -29px}div.pp_default a.pp_arrow_previous,div.pp_default a.pp_arrow_next{background:url(/images/prettyPhoto/default/sprite.png) -31px -3px no-repeat;height:20px;width:20px;margin:4px 0 0}div.pp_default a.pp_arrow_next{left:52px;background-position:-82px -3px}div.pp_default .pp_content_container .pp_details{margin-top:5px}div.pp_default .pp_nav{clear:none;height:30px;width:110px;position:relative}div.pp_default .pp_nav .currentTextHolder{font-family:Georgia;font-style:italic;color:#999;font-size:11px;left:75px;line-height:25px;position:absolute;top:2px;margin:0;padding:0 0 0 10px}div.pp_default .pp_close:hover,div.pp_default .pp_nav .pp_play:hover,div.pp_default .pp_nav .pp_pause:hover,div.pp_default .pp_arrow_next:hover,div.pp_default .pp_arrow_previous:hover{opacity:0.7}div.pp_default .pp_description{font-size:11px;font-weight:700;line-height:14px;margin:5px 50px 5px 0}div.pp_default .pp_bottom .pp_left{background:url(/images/prettyPhoto/default/sprite.png) -78px -127px no-repeat}div.pp_default .pp_bottom .pp_middle{background:url(/images/prettyPhoto/default/sprite_x.png) bottom left repeat-x}div.pp_default .pp_bottom .pp_right{background:url(/images/prettyPhoto/default/sprite.png) -112px -127px no-repeat}div.pp_default .pp_loaderIcon{background:url(/images/prettyPhoto/default/loader.gif) center center no-repeat}div.light_rounded .pp_top .pp_left{background:url(/images/prettyPhoto/light_rounded/sprite.png) -88px -53px no-repeat}div.light_rounded .pp_top .pp_right{background:url(/images/prettyPhoto/light_rounded/sprite.png) -110px -53px no-repeat}div.light_rounded .pp_next:hover{background:url(/images/prettyPhoto/light_rounded/btnNext.png) center right no-repeat;cursor:pointer}div.light_rounded .pp_previous:hover{background:url(/images/prettyPhoto/light_rounded/btnPrevious.png) center left no-repeat;cursor:pointer}div.light_rounded .pp_expand{background:url(/images/prettyPhoto/light_rounded/sprite.png) -31px -26px no-repeat;cursor:pointer}div.light_rounded .pp_expand:hover{background:url(/images/prettyPhoto/light_rounded/sprite.png) -31px -47px no-repeat;cursor:pointer}div.light_rounded .pp_contract{background:url(/images/prettyPhoto/light_rounded/sprite.png) 0 -26px no-repeat;cursor:pointer}div.light_rounded .pp_contract:hover{background:url(/images/prettyPhoto/light_rounded/sprite.png) 0 -47px no-repeat;cursor:pointer}div.light_rounded .pp_close{width:75px;height:22px;background:url(/images/prettyPhoto/light_rounded/sprite.png) -1px -1px no-repeat;cursor:pointer}div.light_rounded .pp_nav .pp_play{background:url(/images/prettyPhoto/light_rounded/sprite.png) -1px -100px no-repeat;height:15px;width:14px}div.light_rounded .pp_nav .pp_pause{background:url(/images/prettyPhoto/light_rounded/sprite.png) -24px -100px no-repeat;height:15px;width:14px}div.light_rounded .pp_arrow_previous{background:url(/images/prettyPhoto/light_rounded/sprite.png) 0 -71px no-repeat}div.light_rounded .pp_arrow_next{background:url(/images/prettyPhoto/light_rounded/sprite.png) -22px -71px no-repeat}div.light_rounded .pp_bottom .pp_left{background:url(/images/prettyPhoto/light_rounded/sprite.png) -88px -80px no-repeat}div.light_rounded .pp_bottom .pp_right{background:url(/images/prettyPhoto/light_rounded/sprite.png) -110px -80px no-repeat}div.dark_rounded .pp_top .pp_left{background:url(/images/prettyPhoto/dark_rounded/sprite.png) -88px -53px no-repeat}div.dark_rounded .pp_top .pp_right{background:url(/images/prettyPhoto/dark_rounded/sprite.png) -110px -53px no-repeat}div.dark_rounded .pp_content_container .pp_left{background:url(/images/prettyPhoto/dark_rounded/contentPattern.png) top left repeat-y}div.dark_rounded .pp_content_container .pp_right{background:url(/images/prettyPhoto/dark_rounded/contentPattern.png) top right repeat-y}div.dark_rounded .pp_next:hover{background:url(/images/prettyPhoto/dark_rounded/btnNext.png) center right no-repeat;cursor:pointer}div.dark_rounded .pp_previous:hover{background:url(/images/prettyPhoto/dark_rounded/btnPrevious.png) center left no-repeat;cursor:pointer}div.dark_rounded .pp_expand{background:url(/images/prettyPhoto/dark_rounded/sprite.png) -31px -26px no-repeat;cursor:pointer}div.dark_rounded .pp_expand:hover{background:url(/images/prettyPhoto/dark_rounded/sprite.png) -31px -47px no-repeat;cursor:pointer}div.dark_rounded .pp_contract{background:url(/images/prettyPhoto/dark_rounded/sprite.png) 0 -26px no-repeat;cursor:pointer}div.dark_rounded .pp_contract:hover{background:url(/images/prettyPhoto/dark_rounded/sprite.png) 0 -47px no-repeat;cursor:pointer}div.dark_rounded .pp_close{width:75px;height:22px;background:url(/images/prettyPhoto/dark_rounded/sprite.png) -1px -1px no-repeat;cursor:pointer}div.dark_rounded .pp_description{margin-right:85px;color:#fff}div.dark_rounded .pp_nav .pp_play{background:url(/images/prettyPhoto/dark_rounded/sprite.png) -1px -100px no-repeat;height:15px;width:14px}div.dark_rounded .pp_nav .pp_pause{background:url(/images/prettyPhoto/dark_rounded/sprite.png) -24px -100px no-repeat;height:15px;width:14px}div.dark_rounded .pp_arrow_previous{background:url(/images/prettyPhoto/dark_rounded/sprite.png) 0 -71px no-repeat}div.dark_rounded .pp_arrow_next{background:url(/images/prettyPhoto/dark_rounded/sprite.png) -22px -71px no-repeat}div.dark_rounded .pp_bottom .pp_left{background:url(/images/prettyPhoto/dark_rounded/sprite.png) -88px -80px no-repeat}div.dark_rounded .pp_bottom .pp_right{background:url(/images/prettyPhoto/dark_rounded/sprite.png) -110px -80px no-repeat}div.dark_rounded .pp_loaderIcon{background:url(/images/prettyPhoto/dark_rounded/loader.gif) center center no-repeat}div.dark_square .pp_left,div.dark_square .pp_middle,div.dark_square .pp_right,div.dark_square .pp_content{background:#000}div.dark_square .pp_description{color:#fff;margin:0 85px 0 0}div.dark_square .pp_loaderIcon{background:url(/images/prettyPhoto/dark_square/loader.gif) center center no-repeat}div.dark_square .pp_expand{background:url(/images/prettyPhoto/dark_square/sprite.png) -31px -26px no-repeat;cursor:pointer}div.dark_square .pp_expand:hover{background:url(/images/prettyPhoto/dark_square/sprite.png) -31px -47px no-repeat;cursor:pointer}div.dark_square .pp_contract{background:url(/images/prettyPhoto/dark_square/sprite.png) 0 -26px no-repeat;cursor:pointer}div.dark_square .pp_contract:hover{background:url(/images/prettyPhoto/dark_square/sprite.png) 0 -47px no-repeat;cursor:pointer}div.dark_square .pp_close{width:75px;height:22px;background:url(/images/prettyPhoto/dark_square/sprite.png) -1px -1px no-repeat;cursor:pointer}div.dark_square .pp_nav{clear:none}div.dark_square .pp_nav .pp_play{background:url(/images/prettyPhoto/dark_square/sprite.png) -1px -100px no-repeat;height:15px;width:14px}div.dark_square .pp_nav .pp_pause{background:url(/images/prettyPhoto/dark_square/sprite.png) -24px -100px no-repeat;height:15px;width:14px}div.dark_square .pp_arrow_previous{background:url(/images/prettyPhoto/dark_square/sprite.png) 0 -71px no-repeat}div.dark_square .pp_arrow_next{background:url(/images/prettyPhoto/dark_square/sprite.png) -22px -71px no-repeat}div.dark_square .pp_next:hover{background:url(/images/prettyPhoto/dark_square/btnNext.png) center right no-repeat;cursor:pointer}div.dark_square .pp_previous:hover{background:url(/images/prettyPhoto/dark_square/btnPrevious.png) center left no-repeat;cursor:pointer}div.light_square .pp_expand{background:url(/images/prettyPhoto/light_square/sprite.png) -31px -26px no-repeat;cursor:pointer}div.light_square .pp_expand:hover{background:url(/images/prettyPhoto/light_square/sprite.png) -31px -47px no-repeat;cursor:pointer}div.light_square .pp_contract{background:url(/images/prettyPhoto/light_square/sprite.png) 0 -26px no-repeat;cursor:pointer}div.light_square .pp_contract:hover{background:url(/images/prettyPhoto/light_square/sprite.png) 0 -47px no-repeat;cursor:pointer}div.light_square .pp_close{width:75px;height:22px;background:url(/images/prettyPhoto/light_square/sprite.png) -1px -1px no-repeat;cursor:pointer}div.light_square .pp_nav .pp_play{background:url(/images/prettyPhoto/light_square/sprite.png) -1px -100px no-repeat;height:15px;width:14px}div.light_square .pp_nav .pp_pause{background:url(/images/prettyPhoto/light_square/sprite.png) -24px -100px no-repeat;height:15px;width:14px}div.light_square .pp_arrow_previous{background:url(/images/prettyPhoto/light_square/sprite.png) 0 -71px no-repeat}div.light_square .pp_arrow_next{background:url(/images/prettyPhoto/light_square/sprite.png) -22px -71px no-repeat}div.light_square .pp_next:hover{background:url(/images/prettyPhoto/light_square/btnNext.png) center right no-repeat;cursor:pointer}div.light_square .pp_previous:hover{background:url(/images/prettyPhoto/light_square/btnPrevious.png) center left no-repeat;cursor:pointer}div.facebook .pp_top .pp_left{background:url(/images/prettyPhoto/facebook/sprite.png) -88px -53px no-repeat}div.facebook .pp_top .pp_middle{background:url(/images/prettyPhoto/facebook/contentPatternTop.png) top left repeat-x}div.facebook .pp_top .pp_right{background:url(/images/prettyPhoto/facebook/sprite.png) -110px -53px no-repeat}div.facebook .pp_content_container .pp_left{background:url(/images/prettyPhoto/facebook/contentPatternLeft.png) top left repeat-y}div.facebook .pp_content_container .pp_right{background:url(/images/prettyPhoto/facebook/contentPatternRight.png) top right repeat-y}div.facebook .pp_expand{background:url(/images/prettyPhoto/facebook/sprite.png) -31px -26px no-repeat;cursor:pointer}div.facebook .pp_expand:hover{background:url(/images/prettyPhoto/facebook/sprite.png) -31px -47px no-repeat;cursor:pointer}div.facebook .pp_contract{background:url(/images/prettyPhoto/facebook/sprite.png) 0 -26px no-repeat;cursor:pointer}div.facebook .pp_contract:hover{background:url(/images/prettyPhoto/facebook/sprite.png) 0 -47px no-repeat;cursor:pointer}div.facebook .pp_close{width:22px;height:22px;background:url(/images/prettyPhoto/facebook/sprite.png) -1px -1px no-repeat;cursor:pointer}div.facebook .pp_description{margin:0 37px 0 0}div.facebook .pp_loaderIcon{background:url(/images/prettyPhoto/facebook/loader.gif) center center no-repeat}div.facebook .pp_arrow_previous{background:url(/images/prettyPhoto/facebook/sprite.png) 0 -71px no-repeat;height:22px;margin-top:0;width:22px}div.facebook .pp_arrow_previous.disabled{background-position:0 -96px;cursor:default}div.facebook .pp_arrow_next{background:url(/images/prettyPhoto/facebook/sprite.png) -32px -71px no-repeat;height:22px;margin-top:0;width:22px}div.facebook .pp_arrow_next.disabled{background-position:-32px -96px;cursor:default}div.facebook .pp_nav{margin-top:0}div.facebook .pp_nav p{font-size:15px;padding:0 3px 0 4px}div.facebook .pp_nav .pp_play{background:url(/images/prettyPhoto/facebook/sprite.png) -1px -123px no-repeat;height:22px;width:22px}div.facebook .pp_nav .pp_pause{background:url(/images/prettyPhoto/facebook/sprite.png) -32px -123px no-repeat;height:22px;width:22px}div.facebook .pp_next:hover{background:url(/images/prettyPhoto/facebook/btnNext.png) center right no-repeat;cursor:pointer}div.facebook .pp_previous:hover{background:url(/images/prettyPhoto/facebook/btnPrevious.png) center left no-repeat;cursor:pointer}div.facebook .pp_bottom .pp_left{background:url(/images/prettyPhoto/facebook/sprite.png) -88px -80px no-repeat}div.facebook .pp_bottom .pp_middle{background:url(/images/prettyPhoto/facebook/contentPatternBottom.png) top left repeat-x}div.facebook .pp_bottom .pp_right{background:url(/images/prettyPhoto/facebook/sprite.png) -110px -80px no-repeat}div.pp_pic_holder a:focus{outline:none}div.pp_overlay{background:#000;display:none;left:0;position:absolute;top:0;width:100%;z-index:9500}div.pp_pic_holder{display:none;position:absolute;width:100px;z-index:10000}.pp_content{height:40px;min-width:40px}* html .pp_content{width:40px}.pp_content_container{position:relative;text-align:left;width:100%}.pp_content_container .pp_left{padding-left:20px}.pp_content_container .pp_right{padding-right:20px}.pp_content_container .pp_details{float:left;margin:10px 0 2px}.pp_description{display:none;margin:0}.pp_social{float:left;margin:0}.pp_social .facebook{float:left;margin-left:5px;width:55px;overflow:hidden}.pp_social .twitter{float:left}.pp_nav{clear:right;float:left;margin:3px 10px 0 0}.pp_nav p{float:left;white-space:nowrap;margin:2px 4px}.pp_nav .pp_play,.pp_nav .pp_pause{float:left;margin-right:4px;text-indent:-10000px}a.pp_arrow_previous,a.pp_arrow_next{display:block;float:left;height:15px;margin-top:3px;overflow:hidden;text-indent:-10000px;width:14px}.pp_hoverContainer{position:absolute;top:0;width:100%;z-index:2000}.pp_gallery{display:none;left:50%;margin-top:-50px;position:absolute;z-index:10000}.pp_gallery div{float:left;overflow:hidden;position:relative}.pp_gallery ul{float:left;height:35px;position:relative;white-space:nowrap;margin:0 0 0 5px;padding:0}.pp_gallery ul a{border:1px rgba(0,0,0,0.5) solid;display:block;float:left;height:33px;overflow:hidden}.pp_gallery ul a img{border:0}.pp_gallery li{display:block;float:left;margin:0 5px 0 0;padding:0}.pp_gallery li.default a{background:url(/images/prettyPhoto/facebook/default_thumbnail.gif) 0 0 no-repeat;display:block;height:33px;width:50px}.pp_gallery .pp_arrow_previous,.pp_gallery .pp_arrow_next{margin-top:7px!important}a.pp_next{background:url(/images/prettyPhoto/light_rounded/btnNext.png) 10000px 10000px no-repeat;display:block;float:right;height:100%;text-indent:-10000px;width:49%}a.pp_previous{background:url(/images/prettyPhoto/light_rounded/btnNext.png) 10000px 10000px no-repeat;display:block;float:left;height:100%;text-indent:-10000px;width:49%}a.pp_expand,a.pp_contract{cursor:pointer;display:none;height:20px;position:absolute;right:30px;text-indent:-10000px;top:10px;width:20px;z-index:20000}a.pp_close{position:absolute;right:0;top:0;display:block;line-height:22px;text-indent:-10000px}.pp_loaderIcon{display:block;height:24px;left:50%;position:absolute;top:50%;width:24px;margin:-12px 0 0 -12px}#pp_full_res{line-height:1!important}#pp_full_res .pp_inline{text-align:left}#pp_full_res .pp_inline p{margin:0 0 15px}div.ppt{color:#fff;display:none;font-size:17px;z-index:9999;margin:0 0 5px 15px}div.pp_default .pp_content,div.light_rounded .pp_content{background-color:#fff}div.pp_default #pp_full_res .pp_inline,div.light_rounded .pp_content .ppt,div.light_rounded #pp_full_res .pp_inline,div.light_square .pp_content .ppt,div.light_square #pp_full_res .pp_inline,div.facebook .pp_content .ppt,div.facebook #pp_full_res .pp_inline{color:#000}div.pp_default .pp_gallery ul li a:hover,div.pp_default .pp_gallery ul li.selected a,.pp_gallery ul a:hover,.pp_gallery li.selected a{border-color:#fff}div.pp_default .pp_details,div.light_rounded .pp_details,div.dark_rounded .pp_details,div.dark_square .pp_details,div.light_square .pp_details,div.facebook .pp_details{position:relative}div.light_rounded .pp_top .pp_middle,div.light_rounded .pp_content_container .pp_left,div.light_rounded .pp_content_container .pp_right,div.light_rounded .pp_bottom .pp_middle,div.light_square .pp_left,div.light_square .pp_middle,div.light_square .pp_right,div.light_square .pp_content,div.facebook .pp_content{background:#fff}div.light_rounded .pp_description,div.light_square .pp_description{margin-right:85px}div.light_rounded .pp_gallery a.pp_arrow_previous,div.light_rounded .pp_gallery a.pp_arrow_next,div.dark_rounded .pp_gallery a.pp_arrow_previous,div.dark_rounded .pp_gallery a.pp_arrow_next,div.dark_square .pp_gallery a.pp_arrow_previous,div.dark_square .pp_gallery a.pp_arrow_next,div.light_square .pp_gallery a.pp_arrow_previous,div.light_square .pp_gallery a.pp_arrow_next{margin-top:12px!important}div.light_rounded .pp_arrow_previous.disabled,div.dark_rounded .pp_arrow_previous.disabled,div.dark_square .pp_arrow_previous.disabled,div.light_square .pp_arrow_previous.disabled{background-position:0 -87px;cursor:default}div.light_rounded .pp_arrow_next.disabled,div.dark_rounded .pp_arrow_next.disabled,div.dark_square .pp_arrow_next.disabled,div.light_square .pp_arrow_next.disabled{background-position:-22px -87px;cursor:default}div.light_rounded .pp_loaderIcon,div.light_square .pp_loaderIcon{background:url(/images/prettyPhoto/light_rounded/loader.gif) center center no-repeat}div.dark_rounded .pp_top .pp_middle,div.dark_rounded .pp_content,div.dark_rounded .pp_bottom .pp_middle{background:url(/images/prettyPhoto/dark_rounded/contentPattern.png) top left repeat}div.dark_rounded .currentTextHolder,div.dark_square .currentTextHolder{color:#c4c4c4}div.dark_rounded #pp_full_res .pp_inline,div.dark_square #pp_full_res .pp_inline{color:#fff}.pp_top,.pp_bottom{height:20px;position:relative}* html .pp_top,* html .pp_bottom{padding:0 20px}.pp_top .pp_left,.pp_bottom .pp_left{height:20px;left:0;position:absolute;width:20px}.pp_top .pp_middle,.pp_bottom .pp_middle{height:20px;left:20px;position:absolute;right:20px}* html .pp_top .pp_middle,* html .pp_bottom .pp_middle{left:0;position:static}.pp_top .pp_right,.pp_bottom .pp_right{height:20px;left:auto;position:absolute;right:0;top:0;width:20px}.pp_fade,.pp_gallery li.default a img{display:none}
}
<?php } ?>

/* @group general styles */
/* body styles, links, headings, other elements */
<?php if ($_GET["ws_theme"] == "megaman"){ ?>
html{height:101%;font-family:"Lucida Console", Monaco, monospace;font-size:68.8%;line-height:1.3em;color:#EEE;overflow:hidden;}
body{height:100%;background:url('megaman/background.gif') fixed;overflow:hidden;}
a:link, a:visited, a:active{color:#86d5ff;text-decoration:underline;}
a:hover{color:#FFF;text-decoration:none;}
nav a:link, nav a:visited, nav a:active{color:#FFF;text-decoration:none;}
nav a:hover{color:#FFF;text-decoration:none;}
aside a:link, aside a:visited, aside a:active{color:#86d5ff;font-weight:bold;text-decoration:underline;}
aside a:hover{color:#FFF;text-decoration:none;}
ul li{list-style-image:url('megaman/bullet.gif');margin-left:20px;}
ol li{margin-left:20px;}
h2{padding-bottom:6px;font-size:1.818em;font-weight:bold;color:#86d5ff;line-height:1.3em;}
h2.pagetitle{text-align:center;}
section.content h2 a:link, section.content h2 a:visited, section.content h2 a:active, section.content h2 a:hover{text-decoration:none;color:#86d5ff;}
h3{font-size:1.4em;font-weight:bold;color:#86d5ff;}
section.content h2 a:link, section.content h3 a:visited, section.content h3 a:active, section.content h3 a:hover{text-decoration:none;color:#86d5ff;}
h4{font-size:1.273em;font-weight:bold;padding:0 0 10px;}
small{color:#ccc;}
blockquote{background-color:#222;border-left:5px solid #ddd;color:#eee;margin:0 20px;padding:10px 20px;}
<?php } else if ($_GET["ws_theme"] == "naruto"){ ?>
html{font-family:Verdana,Geneva,sans-serif;font-size:68.8%;line-height:1.3em;color:#eee;overflow-y:scroll;}
body{background:url('naruto/background.jpg') fixed;overflow:hidden;}
a:link, a:hover, a:visited, a:active{color:#666;text-decoration:none;}
a:hover{color:#333;}
section.content a:link, section.content a:visited, section.content a:active{color:#666;text-decoration:underline;}
section.content a:hover{color:#333;text-decoration:none;}
aside a:link, aside a:visited, aside a:active{color:#41280f;font-weight:bold;text-decoration:underline;}
aside a:hover{color:#231a11;text-decoration:none;}
ul li{margin-left:20px;list-style:disc;}
ol li{margin-left:20px;}
h2{padding-top:15px;font-size:1.818em;font-weight:bold;color:#531d1d;line-height:1.3em;}
h2.pagetitle{text-align:center;}
section.content h2 a:link, section.content h2 a:visited, section.content h2 a:active, section.content h2 a:hover {font-weight:bold;color:#531d1d;text-decoration:none;}
h3{font-size:1.4em;font-weight:bold;color:#531d1d;margin:5px 0 10px;}
section.content h3 a:link, section.content h3 a:visited, section.content h3 a:active, section.content h3 a:hover {font-weight:bold;color:#531d1d;text-decoration:none;}
h4{font-size:1.1em;color:#303030;padding-top:10px;}
small{margin-top:7px;color:#531d1d;display:block;}
blockquote{background-color:#DDD;border-left:5px solid #888;color:#444;margin:0 20px;padding:10px 20px;}
<?php } else if ($_GET["ws_theme"] == "gmail"){ ?>
html{font-family:arial, sans-serif;font-size:81.3%;line-height:1.3em;color:#000;}
a:link, a:hover, a:visited, a:active{color:#6694e3;text-decoration:underline;}
a:hover{text-decoration:none;}
section.content a:link, section.content a:visited, section.content a:active, .navigation a:link, .navigation a:visited .navigation a:active{color:#036;text-decoration:underline;}
section.content a:hover{text-decoration:none;}
aside a:link, aside a:visited, aside a:active{color:#3d81ee;font-weight:bold;text-decoration:underline;}
aside a:hover{color:#5b739c;text-decoration:none;}
ul li{margin-left:20px;list-style:disc;} 
ol li{margin-left:20px;}
aside li{margin:0;list-style:none;} 
h2{background-color:#FFF;font-size:1.438em;font-weight:bold;color:#666;border:3px #6694e3 solid;margin:5px 45px 10px;padding:10px 5px;display:block;line-height:1.3em;} 
h2.pagetitle{text-align:center;}
section.content h2 a:link, section.content h2 a:visited, section.content h2 a:active, section.content h2 a:hover {color:#666;text-decoration:none;}
section.content h3{margin:5px 0 10px;font-size:1.25em;font-weight:bold;color:#666;line-height:normal;} 
section.content .post h3{margin:5px 45px 10px;} 
section.content h3#comments{margin:5px 45px 10px;font-size:1.25em;font-weight:bold;color:#666;line-height:normal;} 
section.content h3 a:link, section.content h3 a:visited, section.content h3 a:active, section.content h3 a:hover {color:#666;text-decoration:none;}
h4{color:#FFF;margin:-29px auto 20px;height:15px;}
small{background-color:#FFF;color:#666;font-size:0.938em;border:1px #CCC solid;margin:0 45px 10px;padding:5px;clear:both;display:block;} 
blockquote{background-color:#EEE;border-left:5px solid #AAA;color:#444;margin:0 20px;padding:10px 20px;}
<?php } else if ($_GET["ws_theme"] == "googleplus"){ ?>
html{font-family:arial, sans-serif;font-size:81.3%;line-height:1.3em;color:#000;}
a:link, a:hover, a:visited, a:active{color:#666;text-decoration:underline;}
a:hover{text-decoration:none;}
section.content a:link, section.content a:visited, section.content a:active, .navigation a:link, .navigation a:visited .navigation a:active{color:#666;text-decoration:underline;}
section.content a:hover{text-decoration:none;}
aside a:link, aside a:visited, aside a:active{color:#666;font-weight:bold;text-decoration:underline;}
aside a:hover{color:#5b739c;text-decoration:none;}
ul li{margin-left:20px;list-style:disc;} 
ol li{margin-left:20px;}
aside li{margin:0;list-style:none;} 
h2{font-size:1.25em;color:#666;border-bottom:1px #eee solid;line-height:1.3em;padding-left:30px;margin-top:20px;}
h2.pagetitle{text-align:center;}
section.content h2 a:link, section.content h2 a:visited, section.content h2 a:active, section.content h2 a:hover {color:#666;text-decoration:none;}
section.content h3{margin:5px 0 10px;font-size:1.25em;font-weight:bold;color:#666;line-height:normal;} 
section.content .post h3{margin:5px 30px 10px;} 
section.content h3#comments{margin:5px 45px 10px;font-size:1.25em;font-weight:bold;color:#666;line-height:normal;} 
section.content h3 a:link, section.content h3 a:visited, section.content h3 a:active, section.content h3 a:hover {color:#666;text-decoration:none;}
h4{color:#666;border-bottom:1px solid #eee;padding-bottom:2px;margin-bottom:5px;}
small{background-color:#FFF;color:#666;font-size:0.95em;clear:both;padding-left:30px;} 
blockquote{background-color:#EEE;border-left:5px solid #AAA;color:#444;margin:0 20px;padding:10px 20px;}
<?php } ?>
#searchform #s {width:145px;}
#searchform #searchsubmit {width:55px;}
#konami .close a{float:right;margin:10px 10px 0 0;color:#FFF;text-decoration:none;}
#loading{display:block;width:100%;height:50px;background:url('/images/loader.gif') no-repeat 50% 50%;}
.center{text-align:center;}
.alignleft{text-align:left;float:left;}
.alignright{text-align:right;float:right;}
.block{display:block;}
    
/* @group helper styles */
/* forms, notifications and errors, consistent items */

/* @group page structure */
/* headers, footers, navigation, layout */
<?php if ($_GET["ws_theme"] == "megaman"){ ?>
header{position:relative;height:164px;background:url('megaman/navigation_background.gif') repeat-x bottom;}
#title{width:680px;height:46px;margin:auto;padding:10px 0 24px;}
<?php } else if ($_GET["ws_theme"] == "naruto"){ ?>
body .container{min-height:100%;width:1060px;margin:auto;padding-left:145px;}
header{margin:auto;background:url('naruto/scroll_background.png') repeat-y left;position:realative;}
#title{width:549px;height:156px;float:left;text-align:center;margin-left:114px;padding-top:170px;}
<?php } else if ($_GET["ws_theme"] == "gmail"){ ?>
body .container{display:none;}
#title{clear:both;padding:20px 0 22px 20px;width:384px;height:40px;}
<?php } else if ($_GET["ws_theme"] == "googleplus"){ ?>
body .container{margin:auto;width:950px;}
header{background-color: #f1f1f1;border-bottom:1px solid #e4e4e4;position:absolute;width:100%;left:0;top:0;height:93px;}
#title{clear:both;width:950px;padding-top:12px;height:49px;margin:auto;}
<?php } ?>

<?php if ($_GET["ws_theme"] == "megaman"){ ?>
section.theme{float:right;margin:auto;vertical-align:middle;padding-top:2px;margin-right:10px;font-size:1.091em;}
section.theme .text{color:#FFF;text-align:right;font-weight:bold;display:block;}
section.theme .navigation{clear:both;}
section.theme .item{float:left;width:46px;height:46px;background:url('megaman/sprite.gif') no-repeat -210px -79px;}
section.theme .item:hover{background:url('megaman/navigation_item_hover.gif') no-repeat center top;}
section.theme .item .icon a{display:block;width:100%;height:100%;}
section.theme .item .icon{width:32px;height:32px;margin:7px 0 7px 7px;float:left;background:url('megaman/sprite.gif') no-repeat;}
section.theme .item .megaman{background-position:0 -32px;}
section.theme .item .blogger{background-position:-32px -32px;}
section.theme .item .naruto{background-position:-64px -32px;}
section.theme .item .gmail{background-position:-96px -32px;}
section.theme .item .googleplus{background-position:-128px -32px;}
<?php } else if ($_GET["ws_theme"] == "naruto"){ ?>
section.theme{color:#000;position:fixed;margin:219px 0 0 -120px;text-align:right;top:90px;z-index:106;}
section.theme .text{color:#000;text-align:right;font-weight:bold;margin-bottom:2px;}
section.theme ul{vertical-align:middle;}
section.theme li{list-style:none;vertical-align:middle;text-align:right;margin-bottom:2px;}
section.theme li a:link, section.theme li a:hover, section.theme li a:visited, section.theme a:active{font-weight:bold;color:#531d1d;text-decoration:underline;}
section.theme li a:hover{text-decoration:none;}
<?php } else if ($_GET["ws_theme"] == "gmail"){ ?>
section.theme{height:31px;background:url('gmail/sprite.gif') repeat-x;width:100%;text-align:left;display:block;}
section.theme .text{padding:8px 8px 0;text-align:left;float:left;font-weight:bold;}
section.theme ul{display:inline;}
section.theme li{float:left;margin-left:0;list-style:none;}
section.theme li a{text-decoration:none;display:block;height:19px;padding:8px 8px 3px;outline:none;}
section.theme li a:hover{height:17px;padding:6px 8px 5px 8px;border-top:2px solid #1a54e1;background-color:#eff3fb;outline:none;}
<?php } else if ($_GET["ws_theme"] == "googleplus"){ ?>
section.theme{height:30px;background-color:#2d2d2d;width:100%;text-align:left;display:block;border-bottom:1px solid #d2d2d2;}
section.theme .text{padding:7px 8px 6px 8px;text-align:left;float:left;font-weight:bold;color:#fff;}
section.theme ul{display:inline;}
section.theme li{float:left;margin-left:0;list-style:none;}
section.theme li a{text-decoration:none;display:block;height:19px;padding:7px 8px 3px 8px;outline:none;color:#ccc;}
section.theme li .active{height:17px;padding:5px 8px 6px 8px;border-top:2px solid #dd4b39;outline:none;}
section.theme li a:hover{height:17px;padding:5px 8px 6px 8px;border-top:2px solid #4c4c4c;background-color:#4c4c4c;outline:none;}
<?php } ?>

<?php if ($_GET["ws_theme"] == "megaman"){ ?>
nav{width:920px;margin:auto;text-align:center;line-height:1.2em;}
nav .item{float:left;width:98px;background:url('megaman/sprite.gif') no-repeat -184px -79px;}
nav .item:hover{background:url('megaman/navigation_item_hover.gif') no-repeat center top;}
nav .item a{display:block;width:100%;height:100%;}
nav .item div{width:32px;height:32px;margin:7px auto;display:block;background:url('megaman/sprite.gif') no-repeat;}
nav .item .about{background-position:-32px 0;}
nav .item .hobbies{background-position:-64px 0;}
nav .item .projects{background-position:-96px -0;}
nav .item .portfolio{background-position:-128px 0;}
nav .item .gallery{background-position:-160px 0;}
nav .item .code{background-position:-192px 0;}
nav .item .resume{background-position:-224px 0;}
nav .select_your_level{margin-top:17px;*+margin-top:18px;float:left;width:136px;font-weight:bold;color:#FFF;}
nav select{display:none;}
@media screen and (-webkit-min-device-pixel-ratio:0){nav_item_select_your_level{margin-top:18px;}} /*chrome*/
<?php } else if ($_GET["ws_theme"] == "naruto"){ ?>
nav{position:fixed;margin:5px 0 0 -123px;text-align:right;top:142px;z-index:106;}
nav .text{color:#000;text-align:right;font-weight:bold;margin-bottom:2px;}
nav ul{float:right;}
nav li{list-style:none;margin-bottom:2px;color:#000;}    
nav a:link, nav a:visited, nav a:active{font-weight:bold;color:#531d1d;text-decoration:underline;}
nav a:hover{text-decoration:none;}
nav select{display:none;}
<?php } else if ($_GET["ws_theme"] == "gmail"){ ?>
nav{position:absolute;top:145px;left:0;width:172px;}
nav ul li{margin:0;white-space:nowrap;}
nav li{display:block;padding:2px 0 2px 25px;}
nav li:hover{background-color:#b2c9f1;color:#FFF;}
nav li a:link, nav li a:visited, nav li a:active{color:#000;text-decoration:none;height:100%:width:100%;display:block;}
nav li a:hover{color:#000;text-decoration:none;}
nav li.active{display:block;padding:2px 0 2px 25px;background-color:#6694e3;font-weight:bold;}
nav li.active a:link, nav li.active a:visited, nav li.active a:active{color:#FFF;font-weight:bold;text-decoration:none;height:100%;width:100%;display:block;white-space:nowrap;}
nav select{display:none;}
<?php } else if ($_GET["ws_theme"] == "googleplus"){ ?>
nav{position:absolute;top:110px;width:120px;left:50%;margin-left:-475px;}
nav li{margin:0;white-space:nowrap;list-style:none;}
nav li{display:block;padding:2px 0;}
nav ul li:hover{background-color:#f1f1f1;color:#FFF;}
nav ul a:link, nav ul a:visited, nav ul a:active{color:#333;text-decoration:none;height:100%:width:100%;display:block;}
nav ul li a:hover{color:#000;text-decoration:none;}
nav .active{display:block;padding:2px 0;font-weight:bold;}
nav .active a:link, nav .active a:visited, .active a:active{color:#d14836;font-weight:bold;text-decoration:none;height:100%;width:100%;display:block;white-space:nowrap;}
nav select{display:none;}
<?php } ?>

<?php if ($_GET["ws_theme"] == "megaman"){ ?>
#body{width:100%;margin-top:2px;padding:0;position:relative;overflow-y:scroll;}
<?php } else if ($_GET["ws_theme"] == "naruto"){ ?>
#body{margin:auto;height:100%;background:url('naruto/scroll_background.png') repeat-y;}
<?php } else if ($_GET["ws_theme"] == "gmail"){ ?>
<?php } else if ($_GET["ws_theme"] == "googleplus"){ ?>
#body{margin-top:93px;}
<?php } ?>

<?php if ($_GET["ws_theme"] == "megaman"){ ?>
section.content{padding:20px 295px 150px 30px;}
.album_thumb_container{float:left;height:107px;width:107px;padding:7px 0 0 7px;margin:0 10px 10px 0;background:url('megaman/sprite.gif') no-repeat 0 -79px;}
.album_thumb_container_large{width:200px;height:100px;background-image:none;border:1px solid #00bdff;padding:0;margin:0;}
section.content .item{clear:both;padding-top:15px;margin-bottom:10px;}
.item_left{float:left;width:115px;}
.item_right{padding:0 10px 0 125px;}
.item_right_large{padding-left:225px;}
.item_left_video{float:left;width:360px;}
.item_right_video{float:right;width:300px;padding:0 10px;}
.code_block{font-family:Courier New;font-size:11px;border:1px solid #FFF;background-color:#222;padding:10px;}
<?php } else if ($_GET["ws_theme"] == "naruto"){ ?>
section.content{float:left;margin:20px 0 0 130px;width:520px;color:#666;padding-bottom:20px;}
.album_thumb_container{float:left;height:119px;width:119px;padding:11px 0 0 11px;text-align:left;background:url('naruto/album_thumb_container.gif') no-repeat;}
.album_thumb_container_large{width:200px;height:100px;background-image:none;border:2px solid #5f1717;padding:0;}
section.content .item{clear:both;width:490px;padding-top:15px;margin-bottom:10px;}
.item_left{float:left;width:122px;}
.item_right{float:right;width:338px;padding:0 10px;}
.item_right_large{width:260px;}
.item_left_video{float:left;width:360px;}
.item_right_video{float:right;width:300px;padding:0 10px;}
.code_block{font-family:Courier New;font-size:11px;border:1px solid #666;background-color:#DDD;padding:10px;}
<?php } else if ($_GET["ws_theme"] == "gmail"){ ?>
section.content{margin:0 255px 0 172px;border:5px solid #6694e3;border-top:20px solid #6694e3;border-bottom:20px solid #6694e3;background-color:#b2c9f1;padding:0 0 30px;}
.album_thumb_container{float:left;height:100px;width:100px;text-align:left;border:1px solid #6694e3;margin:0 0 10px 10px;}
.album_thumb_container_large{width:200px;}    
section.content .item{clear:both;display:block;padding-top:20px;margin-bottom:10px;}
.item_left{float:left;width:115px;}
.item_right{padding-left:125px;padding-right:10px;}
.item_right_large{padding-left:225px;}
.item_left_video{float:left;width:360px;}
.item_right_video{float:right;width:300px;padding:0 10px;}
.code_block{font-family:Courier New;font-size:11px;border:1px solid #666;background-color:#EEE;padding:10px;}
<?php } else if ($_GET["ws_theme"] == "googleplus"){ ?>
section.content{width:620px;float:left;border-right:1px solid #eee;border-left:1px solid #eee;font-size:0.9em;margin-left:120px;color:#444;}
.album_thumb_container{float:left;height:100px;width:100px;text-align:left;border:1px solid #6694e3;margin:0 0 10px 10px;}
.album_thumb_container_large{width:200px;}    
section.content .item{clear:both;display:block;padding-top:20px;margin-bottom:10px;}
.item_left{float:left;width:115px;}
.item_right{padding-left:125px;padding-right:10px;}
.item_right_large{padding-left:225px;}
.item_left_video{float:left;width:360px;}
.item_right_video{float:right;width:300px;padding:0 10px;}
.code_block{font-family:Courier New;font-size:11px;border:1px solid #666;background-color:#EEE;padding:10px;}
<?php } ?>

<?php if ($_GET["ws_theme"] == "megaman"){ ?>
aside{margin-top:20px;padding-bottom:150px;width:255px;position:absolute;top:0;right:20px;overflow:hidden;}
#social_media{height:40px;margin-left:5px;}
#social_media .icons{margin:0 5px;}
.box{margin-bottom:25px;}
.box .box_top{background:url('megaman/sprite.gif') no-repeat 0 -64px;width:255px;clear:both;padding-top:7px;}
.box .box_middle{background:url('megaman/middle_bg.gif') repeat-y;width:235px;padding:5px 10px 10px;text-align:left;}
.box .box_middle li{list-style-image:url('megaman/bullet.gif');}
.box .box_middle li.rss_icon{list-style:none;list-style-image:url('/wp-includes/images/rss.png');margin-left:28px;}
.box .box_bottom{background:url('megaman/sprite.gif') no-repeat 0 -71px;width:255px;height:8px;clear:both;}
<?php } else if ($_GET["ws_theme"] == "naruto"){ ?>
aside{float:right;padding-top:125px;position:fixed;width:250px;margin-left:760px;}
#social_media{width:129px;position:absolute;left:-888px;top:48px;}
#social_media .icons{margin:4px;}
.box{margin-bottom:5px;display:none;}
.box .box_top{clear:both;}
.box .box_middle{padding-left:10px;color:#333;text-align:left;}
.box .box_middle li{margin-left:18px;}
.box .box_middle li.rss_icon{list-style:none;list-style-image:url('/wp-includes/images/rss.png');margin-left:24px;}
.box .box_bottom{height:1px;clear:both;}
#box_search{text-align:left;}
<?php } else if ($_GET["ws_theme"] == "gmail"){ ?>
aside{width:235px;margin:6px 11px 0 0;position:absolute;top:0;right:0;font-size:0.938em;overflow:hidden;}
aside .children {margin-left: 15px;}
#social_media{padding-bottom:107px;}
#social_media .icons{float:left;width:24px;height:24px;margin:auto 4px;}
.box{border:1px solid #6694e3;margin-bottom:10px;}
.box .box_top{clear:both;}
.box .box_middle{color:#666;text-align:left;border-top:20px #6694e3 solid;padding:10px;}
aside .box .box_middle li.rss_icon{list-style:none;list-style-image:url('/wp-includes/images/rss.png');margin-left:24px;}
.box .box_bottom{margin-bottom:10px;clear:both;}
#twitter_update_list li{list-style:disc outside none;margin-left:15px;}
#facebook_update_list li{list-style:disc outside none;margin-left:15px;}
#comments_active li{list-style:disc outside none;margin-left:15px;}
#box_friends li{list-style:disc outside none;margin-left:15px;}
<?php } else if ($_GET["ws_theme"] == "googleplus"){ ?>
aside{width:185px;font-size:0.85em;overflow:hidden;padding:20px 0 0 20px;}
aside .children {margin-left: 15px;}
#social_media{position:absolute;right:0;top:5px;}
#social_media .icons{float:left;width:24px;height:24px;margin:auto 5px;}
.box .box_top{clear:both;}
.box .box_middle{color:#666;text-align:left;}
aside .box .box_middle li.rss_icon{list-style:none;list-style-image:url('/wp-includes/images/rss.png');margin-left:24px;}
.box .box_bottom{margin-bottom:20px;clear:both;}
#box_twitter .box_middle .center {text-align:left;margin-left:15px;}
#box_facebook .box_middle .center {text-align:left;margin-left:15px;}
#box_comments .box_middle .center {text-align:left;margin-left:15px;}
#twitter_update_list li{list-style:disc outside none;margin-left:15px;}
#facebook_update_list li{list-style:disc outside none;margin-left:15px;}
#comments_active li{list-style:disc outside none;margin-left:15px;}
#box_friends li{list-style:disc outside none;margin-left:15px;}
<?php } ?>
#social_media a{display:block;width:100%;height:100%;}
#social_media .icons{background:url('/images/social_media_20x20.png') no-repeat;float:left;width:20px;height:20px;}
#social_media .twitter{background-position:-20px 0;}
#social_media .linkedin{background-position:-40px 0;}
#social_media .rss{background-position:-60px 0;}
#social_media .foursquare{background-position:-80px 0;}
#social_media .youtube{background-position:-100px 0;}
#social_media .deviantart{background-position:-120px 0;}
#social_media .flickr{background-position:-140px 0;}
#box_twitter,#box_facebook,#box_comments,#comments_active,#box_blogs_daily,#box_blogs_misc,#box_blogs_food{display:none;}

<?php if ($_GET["ws_theme"] == "megaman"){ ?>
footer{width:100%;height:76px;position:fixed;bottom:0;background:url('megaman/footer_background.gif') repeat-x;clear:both;}
body:nth-of-type(1) footer{margin-top:0;}
footer{margin-top:-212px\0/;}
#konami{width:546px;height:331px;margin:auto;z-index:100;background-color:#000;position:absolute;top:40px;left:214px;opacity:.99;filter:progid:DXImageTransform.Microsoft.BasicImage(opacity=.99);display:none;background-image:url('/images/konami_bg.gif');}
<?php } else if ($_GET["ws_theme"] == "naruto"){ ?>
footer{margin:auto;height:49px;position:relative;clear:both;width:1060px;padding:0 0 950px 145px;}
footer .content{clear:both;height:37px;background:url('naruto/scroll_footer.png') no-repeat;padding-bottom:1000px;width:769px;}
#konami{width:546px;height:331px;margin-left:126px;z-index:100;background-color:#000;position:absolute;top:170px;opacity:.99;filter:progid:DXImageTransform.Microsoft.BasicImage(opacity=.99);display:none;background-image:url('/images/konami_bg.gif');}
<?php } else if ($_GET["ws_theme"] == "gmail"){ ?>
#konami{width:546px;height:331px;margin:auto;z-index:100;background-color:#000;position:absolute;top:40px;left:187px;opacity:.99;filter:progid:DXImageTransform.Microsoft.BasicImage(opacity=.99);display:none;background-image:url('/images/konami_bg.gif');}
<?php } else if ($_GET["ws_theme"] == "googleplus"){ ?>
#konami{width:546px;height:331px;margin:auto;z-index:100;background-color:#000;position:absolute;top:40px;left:187px;opacity:.99;filter:progid:DXImageTransform.Microsoft.BasicImage(opacity=.99);display:none;background-image:url('/images/konami_bg.gif');}
<?php } ?>
/* 1-5 header,6-10 body, 11-15 page container, 16-20 footer, 21-25 primary content, 26-30 secondary content*/
<?php if ($_GET["ws_theme"] == "megaman"){ ?>
#extraDiv6{background:url('megaman/sprite.gif') no-repeat -114px -95px;height:67px;width:10px;position:fixed;left:10px;top:195px;}
#extraDiv16{background:url('megaman/ani_beat_rush_megaman.gif') no-repeat right;width:86px;height:57px;position:absolute;top:-50px;left:60px;}
#extraDiv3{background:url('megaman/sprite.gif') no-repeat 0 -193px;margin-left:5%;width:64px;height:35px;position:absolute;top:32px;}
#extraDiv4{background:url('megaman/ani_protoman_minor.gif') no-repeat right;width:20%;height:35px;position:absolute;top:32px;}
<?php } else if ($_GET["ws_theme"] == "naruto"){ ?>
#extraDiv1{width:797px;height:153px;z-index:101;position:fixed;top:0;background:url('naruto/scroll_top.png') no-repeat;}
#extraDiv21{width:306px;height:343px;position:fixed;margin-left:130px;top:180px;z-index:-1;}/*choji*/
#extraDiv22{display:none;width:345px;height:411px;position:fixed;z-index:102;margin-left:-265px;top:32px;}/*kunai*/
#extraDiv23{width:233px;height:267px;position:fixed;z-index:-1;top:440px;margin-left:-301px;}/*photo_bottom_left*/
#extraDiv24{width:247px;height:254px;position:fixed;z-index:102;top:450px;margin-left:-295px;}/*shuriken 3*/
#extraDiv26{width:216px;height:218px;z-index:103;position:absolute;top:400px;left:-20px;}/*shuriken*/
#extraDiv27{width:237px;height:241px;z-index:104;position:absolute;top:440px;left:180px;}/*shuriken 2*/
#extraDiv28{width:314px;height:329px;z-index:-1;position:absolute;top:444px;left:3px;}/*photo_right*/
#extraDiv29{width:233px;height:267px;z-index:-2;position:absolute;top:435px;left:15px;}/*photo_right_2*/
#extraDiv30{width:247px;height:254px;z-index:102;position:absolute;top:50px;left:-20px;}/*shuriken_right_bottom*/
<?php } ?>

/* @group page components */
#specificalbum, #toysandmodels, #artgallery, #reallife, #commissions{display:none;}
section.content .gallery_nav_active, section.content .portfolio_nav_active{font-weight:bold;}
section.content .gallery_nav_inactive, section.content .portfolio_nav_inactive{font-weight:normal;}
section.content #resume_title{float:left;color:#AAA;}
section.content #resume_title_print{float:left;display:none;}
section.content #resume_nav{float:right;text-align:right;}
section.content #resume_nav_print{display:none;float:right;text-align:right;}
section.content #resume_experience{float:right;text-align:right;display:inline;}
section.content .resume_header{clear:both;padding:4px;}
section.content .resume_content{clear:both;margin-bottom:15px;padding-left:15px;padding-right:5px;text-align:justify;}
section.content .resume_content li{list-style:disc;}
section.content #resume_chart td{padding-left:2px;padding-right:2px;}
section.content .resume_exp_content{clear:both;border:1px solid #AAA;border-top:0;padding:6px;height:110px;}
section.content .resume_exp_company_and_team{float:left;text-align:left;width:475px;display:inline;font-weight:bold;}
section.content .resume_exp_date{float:right;text-align:right;width:150px;font-weight:bold;}
section.content .resume_exp_role{clear:both;font-weight:bold;}
section.content .greyText{color:#999;}

<?php if ($_GET["ws_theme"] == "megaman"){ ?>
section.content .resume_exp_header{clear:both;border:1px solid #AAA;background-color:#222;padding:6px;margin-top:5px;cursor:pointer;}
section.content .resume_chart_bg_odd{background-color:#222;}
<?php } else if ($_GET["ws_theme"] == "naruto"){ ?>
section.content .resume_exp_header{clear:both;border:1px solid #AAA;background-color:#DDD;padding:6px;margin-top:5px;cursor:pointer;}
section.content .resume_exp_content{clear:both;border:1px solid #AAA;border-top:0;padding:6px;height:140px;}
section.content .resume_exp_company_and_team{float:left;text-align:left;display:inline;font-weight:bold;width:260px;}
section.content .resume_exp_date{float:right;text-align:right;font-weight:bold;}
section.content .resume_chart_bg_odd{background-color:#DDD;}
<?php } else if ($_GET["ws_theme"] == "gmail"){ ?>
section.content .resume_exp_header{clear:both;border:1px solid #AAA;background-color:#DDD;padding:6px;margin-top:5px;cursor:pointer;}
section.content .resume_exp_content{clear:both;border:1px solid #AAA;border-top:0px;padding:6px;height:140px;}
section.content .resume_exp_company_and_team{float:left;text-align:left;display:inline;font-weight:bold;}
section.content .resume_exp_date{float:right;text-align:right;font-weight:bold;}
<?php } else if ($_GET["ws_theme"] == "googleplus"){ ?>
section.content #resume_title h2 {padding-left:0;}
section.content .resume_exp_header{clear:both;border:1px solid #AAA;background-color:#DDD;padding:6px;margin-top:5px;cursor:pointer;}
section.content .resume_exp_content{clear:both;border:1px solid #AAA;border-top:0px;padding:6px;height:140px;}
section.content .resume_exp_company_and_team{float:left;text-align:left;display:inline;font-weight:bold;}
section.content .resume_exp_date{float:right;text-align:right;font-weight:bold;}
<?php } ?> 
      
section.content .navigation{clear:both;display:block;margin:10px 0 40px;text-align:center;}
.screen-reader-text{left:-9999em;position:absolute;}
section.content .postmetadata{padding-bottom:16px;}
section.content .commentlist li{margin-top:15px;padding:5px 5px 10px 10px;}
section.content .commentlist cite, section.content .commentlist cite a{font-weight:bold;font-style:normal;}
section.content .commentlist comment-body{font-size:.6em;}
section.content #commentform #submit{float:right;margin-bottom:5px;}
section.content #commentform input{padding:2px;margin:5px 10px 5px 0;width:170px;}
section.content #commentform textarea{padding:2px;margin:5px 0;width:99%;}
<?php if ($_GET["ws_theme"] == "megaman"){ ?>
section.content .post{border-bottom:1px solid #FFF;margin-bottom:20px;text-align:justify;}
section.content .thread-even{background-color:#131313;}
section.content .thread-odd{background-color:#222;}
section.content .depth-1{border:1px solid #86D5FF;}
<?php } else if ($_GET["ws_theme"] == "naruto"){ ?>
section.content .post{border-bottom:1px solid #254529;margin-bottom:20px;text-align:justify;}
section.content .thread-even{background-color:#F3F3F3;}
section.content .thread-odd{background-color:#E9E9E9;}
section.content .depth-1{border:1px solid #999;}
<?php } else if ($_GET["ws_theme"] == "gmail"){ ?>
section.content .custom-content{padding:0 45px;}
section.content .navigation{clear:both;display:block;margin:10px 45px 35px;text-align:center;}
section.content .post{border-bottom:1px solid #666;clear:both;margin:20px auto 10px;text-align:justify;}
section.content .commentlist li{margin-top:0;}
section.content .thread-even{background-color:#F3F3F3;}
section.content .thread-odd{background-color:#E9E9E9;}
section.content .depth-1{border:1px solid #999;}
section.content .entry{background-color:#FFF;padding:0 45px 15px;}
section.content .comment-body{padding:0;}
section.content .commentlist{margin:0 45px 0 25px;text-align:justify;}
section.content .postmetadata{padding:10px 45px 15px;}
#respond{padding:0 45px 15px;}
#respond h3{margin:0 45px 15px 0;} 
#respond small{display:inline;margin:0;}
#respond .cancel-comment-reply{display:none;}
<?php } else if ($_GET["ws_theme"] == "googleplus"){ ?>
section.content .custom-content{padding:0 30px;}
section.content .navigation{clear:both;display:block;margin:10px 30px 35px;text-align:center;}
section.content .post{clear:both;margin:20px auto 10px;text-align:justify;}
section.content .commentlist li{margin-top:0;}
section.content .thread-even{background-color:#F3F3F3;}
section.content .thread-odd{background-color:#E9E9E9;}
section.content .depth-1{border:1px solid #999;}
section.content .entry{padding:0 30px;}
section.content .entry h2{padding:0;}
section.content .comment-body{padding:0;}
section.content .commentlist{margin:0 45px 0 25px;text-align:justify;}
section.content .postmetadata{padding:10px 30px 15px}
#respond{padding:0 30px 15px;}
#respond h3{margin:0 45px 15px 0;} 
#respond small{display:inline;margin:0;}
#respond .cancel-comment-reply{display:none;}
#searchform #s {width:120px;}
<?php } ?>

<?php if ($_GET["ws_theme"] == "googleplus"){ ?>
@media screen and (max-width: 1000px){
section.theme{display:none;}
html{font-family:arial, sans-serif;font-size:81.3%;line-height:1.3em;color:#000;}
a:link, a:hover, a:visited, a:active{color:#666;text-decoration:underline;}
a:hover{text-decoration:none;}
section.content a:link, section.content a:visited, section.content a:active, .navigation a:link, .navigation a:visited .navigation a:active{color:#666;text-decoration:underline;}
section.content a:hover{text-decoration:none;}
aside a:link, aside a:visited, aside a:active{color:#666;font-weight:bold;text-decoration:underline;}
aside a:hover{color:#5b739c;text-decoration:none;}
ul li{margin-left:20px;list-style:disc;} 
ol li{margin-left:20px;}
aside li{margin:0;list-style:none;} 
h2{font-size:1.25em;color:#666;border-bottom:1px #eee solid;line-height:1.3em;padding-left:30px;margin-top:20px;}
h2.pagetitle{text-align:center;}
section.content h2 a:link, section.content h2 a:visited, section.content h2 a:active, section.content h2 a:hover {color:#666;text-decoration:none;}
section.content h3{margin:5px 0 10px;font-size:1.25em;font-weight:bold;color:#666;line-height:normal;} 
section.content .post h3{margin:5px 30px 10px;} 
section.content h3#comments{margin:5px 45px 10px;font-size:1.25em;font-weight:bold;color:#666;line-height:normal;} 
section.content h3 a:link, section.content h3 a:visited, section.content h3 a:active, section.content h3 a:hover {color:#666;text-decoration:none;}
h4{color:#666;border-bottom:1px solid #eee;padding-bottom:2px;margin-bottom:5px;}
small{background-color:#FFF;color:#666;font-size:0.95em;clear:both;padding-left:30px;} 
blockquote{background-color:#EEE;border-left:5px solid #AAA;color:#444;margin:0 20px;padding:10px 20px;}
body .container{margin:auto;width:950px;}
header{background-color: #f1f1f1;border-bottom:1px solid #e4e4e4;position:absolute;width:100%;left:0;top:0;height:93px;}
#title{clear:both;width:950px;padding-top:12px;height:49px;margin:auto;}
section.theme{height:30px;background-color:#2d2d2d;width:100%;text-align:left;display:block;border-bottom:1px solid #d2d2d2;}
section.theme .text{padding:7px 8px 6px 8px;text-align:left;float:left;font-weight:bold;color:#fff;}
section.theme ul{display:inline;}
section.theme li{float:left;margin-left:0;list-style:none;}
section.theme li a{text-decoration:none;display:block;height:19px;padding:7px 8px 3px 8px;outline:none;color:#ccc;}
section.theme li .active{height:17px;padding:5px 8px 6px 8px;border-top:2px solid #dd4b39;outline:none;}
section.theme li a:hover{height:17px;padding:5px 8px 6px 8px;border-top:2px solid #4c4c4c;background-color:#4c4c4c;outline:none;}
nav{position:absolute;top:110px;width:120px;left:50%;margin-left:-475px;}
nav li{margin:0;white-space:nowrap;list-style:none;}
nav li{display:block;padding:2px 0;}
nav ul li:hover{background-color:#f1f1f1;color:#FFF;}
nav ul a:link, nav ul a:visited, nav ul a:active{color:#333;text-decoration:none;height:100%:width:100%;display:block;}
nav ul li a:hover{color:#000;text-decoration:none;}
nav .active{display:block;padding:2px 0;font-weight:bold;}
nav .active a:link, nav .active a:visited, .active a:active{color:#d14836;font-weight:bold;text-decoration:none;height:100%;width:100%;display:block;white-space:nowrap;}
nav select{display:none;}
#body{margin-top:93px;}
section.content{width:620px;float:left;border-right:1px solid #eee;border-left:1px solid #eee;font-size:0.9em;margin-left:120px;color:#444;}
.album_thumb_container{float:left;height:100px;width:100px;text-align:left;border:1px solid #6694e3;margin:0 0 10px 10px;}
.album_thumb_container_large{width:200px;}    
section.content .item{clear:both;display:block;padding-top:20px;margin-bottom:10px;}
.item_left{float:left;width:115px;}
.item_right{padding-left:125px;padding-right:10px;}
.item_right_large{padding-left:225px;}
.item_left_video{float:left;width:360px;}
.item_right_video{float:right;width:300px;padding:0 10px;}
.code_block{font-family:Courier New;font-size:11px;border:1px solid #666;background-color:#EEE;padding:10px;}
aside{width:185px;font-size:0.85em;overflow:hidden;padding:20px 0 0 20px;}
aside .children {margin-left: 15px;}
#social_media{position:absolute;right:0;top:5px;}
#social_media .icons{float:left;width:20px;height:20px;margin:auto 5px;}
.box .box_top{clear:both;}
.box .box_middle{color:#666;text-align:left;}
aside .box .box_middle li.rss_icon{list-style:none;list-style-image:url('/wp-includes/images/rss.png');margin-left:24px;}
.box .box_bottom{margin-bottom:20px;clear:both;}
#box_twitter .box_middle .center {text-align:left;margin-left:15px;}
#box_facebook .box_middle .center {text-align:left;margin-left:15px;}
#box_comments .box_middle .center {text-align:left;margin-left:15px;}
#twitter_update_list li{list-style:disc outside none;margin-left:15px;}
#facebook_update_list li{list-style:disc outside none;margin-left:15px;}
#comments_active li{list-style:disc outside none;margin-left:15px;}
#box_friends li{list-style:disc outside none;margin-left:15px;}
#konami{width:546px;height:331px;margin:auto;z-index:100;background-color:#000;position:absolute;top:40px;left:187px;opacity:.99;filter:progid:DXImageTransform.Microsoft.BasicImage(opacity=.99);display:none;background-image:url('/images/konami_bg.gif');}
section.content #resume_title h2 {padding-left:0;}
section.content .resume_exp_header{clear:both;border:1px solid #AAA;background-color:#DDD;padding:6px;margin-top:5px;cursor:pointer;}
section.content .resume_exp_content{clear:both;border:1px solid #AAA;border-top:0px;padding:6px;height:140px;}
section.content .resume_exp_company_and_team{float:left;text-align:left;display:inline;font-weight:bold;}
section.content .resume_exp_date{float:right;text-align:right;font-weight:bold;}
section.content .custom-content{padding:0 30px;}
section.content .navigation{clear:both;display:block;margin:10px 30px 35px;text-align:center;}
section.content .post{clear:both;margin:20px auto 10px;text-align:justify;}
section.content .commentlist li{margin-top:0;}
section.content .thread-even{background-color:#F3F3F3;}
section.content .thread-odd{background-color:#E9E9E9;}
section.content .depth-1{border:1px solid #999;}
section.content .entry{padding:0 30px;}
section.content .entry h2{padding:0;}
section.content .comment-body{padding:0;}
section.content .commentlist{margin:0 45px 0 25px;text-align:justify;}
section.content .postmetadata{padding:10px 30px 15px}
#respond{padding:0 30px 15px;}
#respond h3{margin:0 45px 15px 0;} 
#respond small{display:inline;margin:0;}
#respond .cancel-comment-reply{display:none;}
#searchform #s {width:120px;}
#box_search p {display:none;}
	body .container{width:100%;}
	#title{width:100%;}
	#title img{margin-left:30px;}
	nav {width:100%;margin:0;position:inherit;top:90px;left:0;background:#E6E6E6;}
	nav li{float:left;width:14%;text-align:center;margin:10px 0;}
	section.content{margin:0;padding:25px 0 0;width:73%;}
  aside{padding:44px 0 0 20px;width:23%;}
}


@media screen and (max-width: 768px){
	section.theme{display:none;}
	body .container{width:100%;}
	#title{width:100%;}
	nav {width:100%;margin:0;position:inherit;top:90px;left:0;background:#E6E6E6;}
	nav li{float:left;width:14%;text-align:center;margin:10px 0;}
	section.content{margin:0;padding:25px 0 0;width:70%;}
  aside{padding:44px 0 0 20px;width:23%;}
	#social_media{display:none;}
}

@media screen and (max-width: 480px){
	nav {width:80%;padding:0 10%;top:60px;background:none;}
	nav ul{display:none;}
	nav select{width:100%;display:block;background:#FFF;border:1px solid #666;}
	#title{text-align:center;padding:15px 0 0;}
	#title img{width:80%;margin:0;}
	img{width:100%;}
	section.content{margin:0;padding:70px 0 0;width:99%;}
  aside{float:right;width:80%;background:#E6E6E6;padding:20px 10%;}
	h4{font-size:1.4em;}
	#box_search{position:absolute;top:110px;width:90%;}
	#box_search #s{width:60%;}
}
<?php } ?>