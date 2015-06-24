<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>

<!-- headelementsを呼び出し -->
<?php echo $this->Element('defaulthead'); ?>

<body>

<body class="page-profile" tabindex="-1">
<div id="lingualy-logged-in" style="display:none;"></div>
<div id="lingualy-installed" style="display:none;"></div>
<div id="lingualypopup" class="lingualy_popup" style="display: none; height: 20px; width: 46px; margin-left: -23px;"></div>
<div id="page" class="page js-tooltip-ignore with-side-footer"> 
	
		
<!-- sidebarelementsを呼び出し -->
	<?php echo $this->Element('defaultside'); ?>

<!-- ここにmainタグの中身を指定し、viewにて入れる -->
	<div id="content">
		<?php echo $this->fetch('content'); ?>
	</div>


<!-- footerelementsを呼び出し -->
	<?php echo $this->Element('defaultfooter'); ?>


		<div id="app_t"></div>   

		<div id="Baloon"><audio preload="auto" autoplay="" src="https://honcdn.com/aco/hotornot.com/v2/-/-/flash/notify-ovl.6.mp3"></audio></div>

	</div>     
    <div id="plain" class="page-plain">  </div> 

</div>

<script type="text/javascript"> $vars={"im-link":{"uid":1332365577,"sid":"5Rdax.C8APkx4d3Zo5W2pQjtt6Ham.Cq5","msg_count":1,"accept_only_from_matches":true},"comet":{"allow_silence":false,"session_id":"5Rdax.C8APkx4d3Zo5W2pQjtt6Ham.Cq5","user_id":1332365577,"seq":"06157631261507584000","url":"\/comet\/2\/17\/","pause_url":"https:\/\/hotornot.com\/ws\/pause-ws.phtml?language_id=41","silence_stat_url":"\/ws\/comet-silence-stat"},"im-sound":{"sound":1},"Session":{"$gpb":"WebApp.SessionVars","login":"01332365577","user_id":"1332365577","user_gender":1,"session_name":"s2","session_id":"5Rdax.C8APkx4d3Zo5W2pQjtt6Ham.Cq5"},"Startup":{"features":{"1":{"feature":1,"enabled":true},"2":{"feature":2,"enabled":true},"3":{"feature":3,"enabled":true},"4":{"feature":4,"enabled":false,"display_message":"他のユーザーの情報をもっと見るには、あなたの基本データを少なくとも60％は入力して下さい。","display_title":"基本データを追加","display_action":"情報を追加","required_action":3},"6":{"feature":6,"enabled":true},"7":{"feature":7,"enabled":false,"required_action":0},"16":{"feature":16,"enabled":true},"12":{"feature":12,"enabled":false,"required_action":0},"14":{"feature":14,"enabled":true},"11":{"feature":11,"enabled":true},"15":{"feature":15,"enabled":true},"17":{"feature":17,"enabled":true},"18":{"feature":18,"enabled":true},"19":{"feature":19,"enabled":false,"required_action":0},"20":{"feature":20,"enabled":true},"21":{"feature":21,"enabled":true},"22":{"feature":22,"enabled":false,"required_action":0},"13":{"feature":13,"enabled":true},"23":{"feature":23,"enabled":true},"24":{"feature":24,"enabled":false,"required_action":0},"25":{"feature":25,"enabled":false,"required_action":0},"26":{"feature":26,"enabled":true},"27":{"feature":27,"enabled":false,"required_action":0},"29":{"feature":29,"enabled":true},"30":{"feature":30,"enabled":false,"required_action":0},"31":{"feature":31,"enabled":false,"required_action":0},"32":{"feature":32,"enabled":false,"required_action":0},"33":{"feature":33,"enabled":true},"34":{"feature":34,"enabled":true},"35":{"feature":35,"enabled":true},"36":{"feature":36,"enabled":false,"required_action":0},"39":{"feature":39,"enabled":true},"42":{"feature":42,"enabled":true},"47":{"feature":47,"enabled":false,"required_action":0},"44":{"feature":44,"enabled":false,"required_action":10},"62":{"feature":62,"enabled":true},"64":{"feature":64,"enabled":true},"70":{"feature":70,"enabled":true},"73":{"feature":73,"enabled":true},"74":{"feature":74,"enabled":true},"75":{"feature":75,"enabled":false,"display_message":"他の人を評価して、あなたも評価されよう！","display_title":"あなたの新しい写真は、今評価されています。","display_action":"タップして続ける","required_action":10},"77":{"feature":77,"enabled":true},"78":{"feature":78,"enabled":true},"79":{"feature":79,"enabled":true},"86":{"feature":86,"enabled":true},"80":{"feature":80,"enabled":false,"required_action":12},"87":{"feature":87,"enabled":false,"required_action":0},"88":{"feature":88,"enabled":false,"required_action":0},"89":{"feature":89,"enabled":true},"90":{"feature":90,"enabled":true},"83":{"feature":83,"enabled":false,"required_action":0},"85":{"feature":85,"enabled":true},"92":{"feature":92,"enabled":true},"96":{"feature":96,"enabled":true},"97":{"feature":97,"enabled":true},"10003":{"feature":10003,"enabled":true},"99":{"feature":99,"enabled":false,"required_action":0},"100":{"feature":100,"enabled":false,"required_action":0},"105":{"feature":105,"enabled":false,"goal_progress":{"goal":30,"progress":0},"required_action":12},"107":{"feature":107,"enabled":false,"goal_progress":{"goal":10,"progress":8},"required_action":39},"104":{"feature":104,"enabled":false,"required_action":0},"106":{"feature":106,"enabled":false,"required_action":0}}},"Localization":{"$gpb":"WebApp.LocalizationVars","partner_title":"Hot or Not","lang":"ja","decimal_mark":"."},"Partner":{"$gpb":"WebApp.PartnerVars","partner_id":52787,"partner_path":"hotornot_v2\/"},"rt":"6f1883","App":{"$gpb":"WebApp.AppSectionVars","ver":"1531","pages":{"index":{"$gpb":"WebApp.AppStateVars","name":"index","cls":"HonPageApp","page_cls":"","css_ltr":["\/v2\/-\/-\/css\/hotornot_v2\/page.homepage-ltr.40.css"]},"update":{"$gpb":"WebApp.AppStateVars","name":"update","cls":"HonPageApp","page_cls":"","css_ltr":["\/v2\/-\/-\/css\/hotornot_v2\/page.homepage-ltr.40.css"],"js":"\/v2\/ja\/-\/js\/hon_v3\/page.update.1.js"},"visitors":{"$gpb":"WebApp.AppStateVars","name":"visitors","cls":"HonPageApp","page_cls":"page-visitors","css_ltr":["\/v2\/-\/-\/css\/hotornot_v2\/page.fans-ltr.36.css"],"js":"\/v2\/ja\/-\/js\/hon_v3\/new-version\/page.visitors.13.js","client_side":true},"mm":{"$gpb":"WebApp.AppStateVars","name":"mm","cls":"HonPageApp","page_cls":"page-mm","css_ltr":["\/v2\/-\/-\/css\/hotornot_v2\/page.profile-ltr.215.css"],"js":"\/v2\/ja\/-\/js\/hon_v3\/encounters2\/page.encounters.250.js","client_side":true},"messenger":{"$gpb":"WebApp.AppStateVars","name":"messenger","cls":"HonPageApp","page_cls":"page-messenger","css_ltr":["\/v2\/-\/-\/css\/hotornot_v2\/page.connections-ltr.175.css"],"js":"\/v2\/ja\/-\/js\/hon_v3\/page.messenger.225.js"},"fans":{"$gpb":"WebApp.AppStateVars","name":"fans","cls":"HonPageApp","page_cls":"page-fans","css_ltr":["\/v2\/-\/-\/css\/hotornot_v2\/page.fans-ltr.36.css"],"js":"\/v2\/ja\/-\/js\/hon_v3\/new-version\/page.fans.16.js","client_side":true},"favorites":{"$gpb":"WebApp.AppStateVars","name":"favorites","cls":"HonPageApp","page_cls":"page-favorites","css_ltr":["\/v2\/-\/-\/css\/hotornot_v2\/page.fans-ltr.36.css"],"js":"\/v2\/ja\/-\/js\/hon_v3\/new-version\/page.favorites.14.js","client_side":true},"popularity":{"$gpb":"WebApp.AppStateVars","name":"popularity","cls":"HonPageApp","page_cls":"page-popularity","css_ltr":["\/v2\/-\/-\/css\/hotornot_v2\/page.popularity-ltr.36.css"],"js":"\/v2\/ja\/-\/js\/hon_v3\/page.popularity.6.js"},"profile-view":{"$gpb":"WebApp.AppStateVars","name":"profile-view","cls":"HonPageApp","page_cls":"page-profile","css_ltr":["\/v2\/-\/-\/css\/hotornot_v2\/page.profile-ltr.215.css"],"js":"\/v2\/ja\/-\/js\/hon_v3\/new-version\/profile\/page.profile-view.153.js","client_side":true},"profile-edit":{"$gpb":"WebApp.AppStateVars","name":"profile-edit","cls":"HonPageApp","page_cls":"page-profile","css_ltr":["\/v2\/-\/-\/css\/hotornot_v2\/page.profile-ltr.215.css"],"js":"\/v2\/ja\/-\/js\/hon_v3\/new-version\/profile\/page.profile-edit.153.js","client_side":true},"fb-photo-import-on-signup":{"$gpb":"WebApp.AppStateVars","name":"fb-photo-import-on-signup","cls":"HonPageApp","page_cls":"","css_ltr":["\/v2\/-\/-\/css\/hotornot_v2\/page.search-friends.2.css"],"js":"\/v2\/ja\/-\/js\/hon_v3\/page.fb-photo-import-on-signup.2.js"},"moderated":{"$gpb":"WebApp.AppStateVars","name":"moderated","cls":"HonPageApp","page_cls":"","css_ltr":["\/v2\/-\/-\/css\/hotornot_v2\/page.moderated-photos.2.css"],"js":"\/v2\/ja\/-\/js\/hon_v3\/new-version\/page.moderated.30.js","client_side":true},"big-photo-view":{"$gpb":"WebApp.AppStateVars","name":"big-photo-view","cls":"HonPageApp","page_cls":"","css_ltr":["\/v2\/-\/-\/css\/hotornot_v2\/page.profile-ltr.215.css"],"js":"\/v2\/ja\/-\/js\/hon_v3\/new-version\/big-photo\/page.big-photo.111.js","client_side":true},"settings":{"$gpb":"WebApp.AppStateVars","name":"settings","cls":"HonPageApp","page_cls":"page-settings","css_ltr":["\/v2\/-\/-\/css\/hotornot_v2\/page.settings-ltr.48.css"],"js":"\/v2\/ja\/-\/js\/hon_v3\/new-version\/page.settings.122.js","client_side":true},"not_found":{"$gpb":"WebApp.AppStateVars","name":"not_found","cls":"HonPageApp","page_cls":"","css_ltr":["\/v2\/-\/-\/css\/hotornot_v2\/page.errors-ltr.6.css"],"js":"\/v2\/ja\/-\/js\/hon_v3\/new-version\/page.not-found.10.js","client_side":true},"error":{"$gpb":"WebApp.AppStateVars","name":"error","cls":"HonPageApp","page_cls":"","css_ltr":["\/v2\/-\/-\/css\/hotornot_v2\/page.errors-ltr.6.css"]},"hotlist":{"$gpb":"WebApp.AppStateVars","name":"hotlist","cls":"HonPageApp","page_cls":"page-hotlist","css_ltr":["\/v2\/-\/-\/css\/hotornot_v2\/page.hot-list-ltr.29.css"],"js":"\/v2\/ja\/-\/js\/hon_v3\/new-version\/page.hotlists.16.js","client_side":true},"hot_help":{"$gpb":"WebApp.AppStateVars","name":"hot_help","cls":"HonPageApp","page_cls":"page-help","css_ltr":["\/v2\/-\/-\/css\/hotornot_v2\/page.help-ltr.13.css"],"js":"\/v2\/ja\/-\/js\/hon_v3\/page.help.11.js"},"credits":{"$gpb":"WebApp.AppStateVars","name":"credits","cls":"HonPageApp","page_cls":"page-credits","css_ltr":["\/v2\/-\/-\/css\/hotornot_v2\/page.payment-promo-ltr.35.css"]},"search":{"$gpb":"WebApp.AppStateVars","name":"search","cls":"HoNPageApp_Reinit","page_cls":"page_search","css_ltr":["\/v2\/-\/-\/css\/hotornot_v2\/page.people-nearby-ltr.38.css"],"js":"\/v2\/ja\/-\/js\/hon_v3\/new-version\/page.search.1.js","client_side":true},"spp-promo":{"$gpb":"WebApp.AppStateVars","name":"spp-promo","cls":"HonPageApp","page_cls":"page-spp","css_ltr":["\/v2\/-\/-\/css\/hotornot_v2\/page.payment-promo-ltr.35.css"],"js":"\/v2\/ja\/-\/js\/hon_v3\/page.spp-promo.12.js"}},"wa_frame":{"$gpb":"WebApp.FrameConfig","enabled":true,"css":"\/v2\/-\/-\/css\/hotornot_v2\/base-ltr.653.css"},"state":"mm","url":"https:\/\/hotornot.com\/game"},"background":{"reload":true},"FB":{"$gpb":"FB.AppConfig","app_id":"187616458022324","sdk_version":"v2.2","channel_url":"https:\/\/hotornot.com\/static\/channel.html","sdk_url":"\/\/connect.facebook.net\/ja_JP\/sdk.js"},"GeoLocation":{"enabled":0,"url":"https:\/\/hotornot.com\/ws\/geo.phtml","err_msg":"<div class=\"ovl-body ovl-body--narrow\"> <div class=\"flex flex--middle ovl-content ovl-content--cloud\"> <div class=\"flex__item flex__item--fixed\"> <i class=\"ico ico--lg ico--warning\"><\/i> <\/div> <div class=\"flex__item flex__item--expand\"> <p class=\"large\">続けるには、ブラウザ設定を変更して、おおよそのロケーションを示してください。<\/p> <\/div> <\/div> <div class=\"ovl-buttons\"> <div class=\"btn btn--lg btn--green\"> <span class=\"btn-txt\">方法を見る<\/span> <span class=\"b-link js-ovl-open\" data-ovl-type=\"distance\" data-ovl-url=\"https:\/\/hotornot.com\/ws\/bda-ws.phtml?from=profile\"><\/span> <\/div> <div class=\"btn btn--lg btn--grey\"> <span class=\"btn-txt\">戻る<\/span> <span class=\"b-link js-ovl-close\"><\/span> <\/div> <\/div> <\/div> "},"GAPI":{"cfg":{"lang_code":"ja"}}}; 
</script>

<div id="disable_ovl"></div>

<style type="text/css">.lingualy-translate-close {background: url("chrome-extension://iilcekgoelpgecpjnnoikhbleipnjdhf/lookup/assets/translate/x_normal.png") no-repeat;}.lingualy-translate-close:hover {background: url("chrome-extension://iilcekgoelpgecpjnnoikhbleipnjdhf/lookup/assets/translate/x_over.png");}.lingualy_popup .lingualy_close {background: url("chrome-extension://iilcekgoelpgecpjnnoikhbleipnjdhf/lookup/assets/andy-sprite.png") no-repeat 0 -50px;}


/*logo change*/
.logo {
  background-image: $this->img(icon.jpeg);
  background-size: 164px 54px;
}

</style>

<!-- ここからは不正確 -->

<iframe src="about:blank" name="ImagePreloadQueue0" style="display: none;"></iframe>
<iframe src="about:blank" name="ImagePreloadQueue1" style="display: none;"></iframe>
<div id="fb-root" class=" fb_reset">
	<div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div>
	</div>
</div>
<div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
	<div>
		<iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://s-static.ak.facebook.com/connect/xd_arbiter/1ldYU13brY_.js?version=41#channel=f37cf3bb8&amp;origin=https%3A%2F%2Fhotornot.com" style="border: none;">
		</iframe>
	</div>
</div>
</div>

<input class="uploader_input" type="file" multiple="" accept="image/jpg,image/jpeg,image/jpe,image/jfif,image/jfi,image/gif,image/jp2,image/jpc,image/wdp,image/hdp,image/png,image/bmp,image/tiff,image/tif">
<input class="uploader_input" type="file" multiple="" accept="image/jpg,image/jpeg,image/jpe,image/jfif,image/jfi,image/gif,image/jp2,image/jpc,image/wdp,image/hdp,image/png,image/bmp,image/tiff,image/tif">
<input class="uploader_input" type="file" accept="image/jpg,image/jpeg,image/jpe,image/jfif,image/jfi,image/gif,image/jp2,image/jpc,image/wdp,image/hdp,image/png,image/bmp,image/tiff,image/tif">
<div class="js-tooltip" style="top: 904px; left: 537.484375px; width: 16px; height: 0px;"></div>

	




	
</body>
</html>
