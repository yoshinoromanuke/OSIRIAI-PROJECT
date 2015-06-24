<main id="app_c" class="page-right-side">
    <div id="profile_c"> 

        <!-- メイン画面におけるヘッダー -->
        <div class="js-profile-header">
            <header id="profile-header" class="section-header section-header--medium">
            <div class="game-title">
                <div class="game-title__txt">
                    <div>                 
                        <h1 class="inline">
                            <span class="game-title__name"><?php echo $myFbData['name']; ?></span><span>, 23</span>
                            <a href="/01332365577" class="b-link app" rel="big-photo-view"></a>
                        </h1>
                        

                        
                        
                    </div>

                    <div class="common-info-wrap">
                        <div class="inline"> 
                        <!--
                    -->
                            <div class="common-info">
                        
                                <div class="common-info__count ">
                                    <div class="loader loader--sm">
                                        <div class="loader_"></div>
                                    </div>
                                </div>
                                
                            
                                <a href="/01332365577" class="b-link app" rel="big-photo-view"></a>
                            </div>
                
                        </div>
                    </div>
                </div>

                <div class="profile-menu js-wrap">
                
                    <div class="btn btn--white btn--ico tooltip-wrap">
                        <!-- <i class="icon ico--cog"></i> -->
                        
                        <a href="/OSIRIAI_PROJECT/users/config"><i class="glyphicon glyphicon-cog"></i></a>
                        <div class="tooltip bc"><span class="tooltip-txt">設定</span></div>
                        <!-- <a href="/settings" class="b-link app" rel="settings"></a> -->
                    </div>


<!--                     <div class="btn btn--white btn--ico active tooltip-wrap">
                        <i class="icon ico--profile"></i>
                        <div class="tooltip bc"><span class="tooltip-txt">プロフィール</span></div>
                        
                            <a href="/01332365577" class="b-link app" rel="big-photo-view"></a>
                        
                    </div>
 -->
                </div>
            </div>
            <span class="middle">
            </span>
            </header>
        </div> 

        <!-- プロフィール写真のリスト -->
        <div class="js-profile-photo_list">
            <section class="profile-section__photo-list"> 
                <figure id="photo_list" class="photo-list js-wrap gallery_has_arrows">  
                    
                    <!-- 写真を追加 -->
                    <div class="photo-list__action-bar js-upload-wrap"> 
                        <!-- Default photo -->
                        <div class="photo-list__item photo-list__item--add-photos"> 
                            <div class="photo-list__action"> 
                                <span class="inline"> 
                                    <i class="ico ico--lg ico--photo-up">
                                        <span class="b-link" data-control-type="upload-overlay" tabindex="-1" data-type="photos_of_me"></span>
                                    </i> 
                                    <b class="photo-list__action-title">写真を追加</b> 
                                </span>
                                <span class="middle"></span> 
                            </div> 
                        </div>                        
                    </div>  
<!-- 個別写真を並べていく -->
                    <div class="photo-list__photo-bar js-gallery-photos-wrap"> 
                        <div class="photo-list__slide js-gallery-photos" style="transform: translate(0px, 0px);">
                            
							
                           <!--  <ul>
                                <?php //foreach(): ?>
                                <li> -->
<!-- １枚目 -->              
                            <div class="photo-list__item js-photo js-wrap" data-id="1311341939">
                                <img src="//pcache-pv-us1.honcdn.com/p525/784/5/4/3/1332365577/d1311341/t1432875608/c_D4tgJNbUjsVC7k.oluZ.sqvLFeOR-owfSok7QF8DaJs/1311341939_192.jpg?t=24.0.0.0&amp;id=1311341939" alt="" width="160" height="160" class="photo-list__img">
                            </div>
<!-- ２枚目 -->
                            <div class="photo-list__item js-photo js-wrap" data-id="1311341915">
                                <img src="//pcache-pv-us1.honcdn.com/p525/784/5/4/3/1332365577/d1311341/t1432875628/c_16HrA08U0y-I1zAQTddMumuwy3XsGURivRYQV9tK2E8/1311341915_192.jpg?t=24.0.0.0&amp;id=1311341915" alt="" width="160" height="160" class="photo-list__img">          
                            </div>
<!-- ３枚目 -->

                            <div class="photo-list__item js-photo js-wrap" data-id="1311341917">
                                <img src="//pcache-pv-us1.honcdn.com/p525/784/5/4/3/1332365577/d1311341/t1432875628/c_K24WM6Egj-HLFKNH9PFMSujquTif6e7.9OPSsWfclmo/1311341917_192.jpg?t=24.0.0.0&amp;id=1311341917" alt="" width="160" height="160" class="photo-list__img">
                            </div>
                    
                        </div>
                    </div>


<!-- 消去する写真のナンバー表示機能を削除した -->
                </figure>   
            </section>
        </div> 


<!-- プロフィール項目を表示（仕事＆学歴、）  -->
<section class="section-left-side"> 

<!-- １ボックス目　 -->
	<div class="js-profile-education">
		<div class="section section--profile js-editable-section">  
			<h2>    仕事＆学歴</h2>  
			<!-- <div class="inline btn btn--sm btn--white btn--ico btn-edit js-editable-section-btn">
				<a href="/OSHIRIAI/users/config">
                <i class="glyphicon glyphicon-cog"></i>
                </a>

				<span class="b-link js-editable-section-toggle" data-section-type="work-education"></span>
			</div>  -->
			<div class="section-editable"> 
				<div class="section-editable__view">   
					<div><?php echo $myFbData['education']['0']['school']['name']; echo $myFbData['education']['0']['year']['name'];?></div>      
				</div>  
<!-- 鉛筆アイコン押した時の挙動。まずはこの機能を削除しておく。アップデート予定 -->
<!-- 
				<div class="section-editable__edit"> 
					<form method="post" action="" class="form">  
						
						<div class="table"> 
							<div class="table-cell">
								<b>Facebookから情報をゲット</b>
							</div> 
							<div class="table-cell"> 
								<div class="btn btn--sm btn--white btn--social js-wrap"> 
									<i class="ico ico--color ico--facebook-sm">
										<span class="b-link js-education-import js-toggle" data-jst-class="loading">
										</span>
									</i> 
									<span class="btn-txt">基本データをアップデート</span> 
									<div class="loader loader--white">
										<div class="loader_"></div>
									</div> 
								</div> 
							</div> 
						</div>   
						
						<div class="table"> 
							<div class="table-cell">
								<b>大学</b>
							</div> 
							<div class="table-cell"> 
								<div class="select select--sm" data-control-type="select"> 
									<input type="hidden" name="university_id" value="1311341956" class="select-value"> 
									<div tabindex="0" class="select-label"><?php //echo $myFbData['education']['0']['school']['name']; echo $myFbData['education']['0']['year']['name'];?></div> 
									<div class="select-options"> 
                                         プルダウンメニューから簡単に学歴を変更可能 
										<ul class="options"> 
											<li class="option" data-value="1311341958"><?php //echo $myFbData['education']['1']['school']['name']; echo $myFbData['education']['1']['year']['name'];?></li>
											<li class="option" data-value="1311341957"><?php //echo $myFbData['education']['2']['school']['name']; echo $myFbData['education']['2']['year']['name'];?></li>
											
											<li class="option" data-value="None">なし － 表示しない</li> 
										</ul> 
									</div> 
								</div> 
							</div> 
						</div>   

						<div class="profile-edit__btn-right"> 
							<button type="submit" class="btn btn--sm btn--blue js-editable-section-save" disabled="">
								<span class="btn-txt">保存</span>
							</button> 
							<div class="btn btn--sm btn--white">
								<span class="btn-txt">キャンセル</span>
								<span class="b-link js-editable-section-cancel"></span>
							</div> 
						</div> 
					</form> 
				</div>
                 -->
			</div> 
		</div> 
	</div> 
<!-- 1ボックス目終わり -->

<!-- ２ボックス目 現在地から居住地に変えるからformとか必要ないよね？facebookから得られた情報を表示させるだけ-->
	<div class="js-profile-location">
		<div class="section section--profile js-editable-section"> 
			<h2>出身地</h2> 
			<div class="inline btn btn--sm btn--white btn--ico btn-edit js-editable-section-btn">
				<i class="icon ico--pencil"></i>
				<span class="b-link js-editable-section-toggle" data-section-type="location"></span>
			</div> 
			<div class="section-editable"> 
				<div class="section-editable__view"> 
					<span class="js-location-label"> <?php echo $myFbData['hometown']['name']; ?>   
					</span> 
				</div>  

<!-- ボタンを押した後の画面、アップデート予定-->
<!-- 
				<div class="section-editable__edit"> 
					 class=tableとして見た目をテーブルのように整えてる
					<form method="post" action="/profile/undefined/ws/location/change" class="table"> 
						<div class="table-cell">    
							<div class="search-field js-location-list" data-client-side="" data-url="" data-control-type="location-list"> 
								<div class="search-field_"> 
									<input type="hidden" name="location_id" value="1227468"> 
									<input type="text" id="location_field" class="input input--sm" value="Banilad Heights" autocomplete="off" placeholder="" tabindex="-1"> 
									<i class="icon ico--grey ico--search"></i> 
									<i class="icon ico--cross js-control-reset"></i> 
									<div class="datalist"> 
										<ul class="options">  
										</ul> 
										<div class="datalist-hint">  
											<span class="lgrey datalist-hint__text">都市名を入力。または、</span>
											<span class="lgrey datalist-hint__nothing">都市が見つかりません。もう一度試す、または</span>  
											<a href="" class="p-link js-ovl-open" data-ovl-url="" data-ovl-type="hon-v3-location-bma" tabindex="-1">リストから選ぶ</a>    
										</div> 
									</div> 
								</div>   
								
								<div class="input-error"></div>  
							</div>    
						</div> 
						<div class="table-cell"> 
							<button type="submit" class="btn btn--sm btn--blue js-datalist-save" disabled="">
								<span class="btn-txt">保存</span>
							</button> 
							<div class="btn btn--sm btn--white">
								<span class="btn-txt">キャンセル</span>
								<span class="b-link js-editable-section-cancel"></span>
							</div> 
						</div> 
					</form> 
				</div>  
 -->
			</div> 
		</div> 
	</div> 
<!-- ２ボックス目終わり -->

<!-- ３ボックス目、アップデートで追加予定 -->
    <!-- 
	<div class="js-profile-iht">
		<div class="section section--profile js-editable-section"> 
			<h2>私はここで</h2> 

			<div class="inline btn btn--sm btn--white btn--ico btn-edit js-editable-section-btn">
				<i class="icon ico--pencil"></i>
				<span class="b-link js-editable-section-toggle" data-section-type="iht">
				</span>
			</div> 

			<div class="section-editable"> 
				<div class="section-editable__view"> 私はここで、友達を作りたい 
					<span>（女の子と，18-23歳）</span> 
				</div>  
				
                ボタン押した時の画面 
				<div class="section-editable__edit"> 
					<form method="post" action="" class="table"> 
						
						<div class="table-cell">  
							<div class="radio"> 
								<input type="radio" name="iht" id="iht_id_10001" value="10001" checked=""> 
								<label for="iht_id_10001">新しい友達を作る</label> 
							</div>  
							<div class="radio"> 
								<input type="radio" name="iht" id="iht_id_10002" value="10002"> 
								<label for="iht_id_10002">チャット</label> 
							</div>  
							<div class="radio"> 
								<input type="radio" name="iht" id="iht_id_10003" value="10003"> 
								<label for="iht_id_10003">デート</label> 
							</div>  
						</div> 
						<div class="table-cell table-cell--bottom"> 
							<button type="submit" class="btn btn--sm btn--blue js-editable-section-save" disabled="">
								<span class="btn-txt">保存</span>
							</button> 
						</div> 
					</form> 
				</div>  
			</div> 
		</div> 
	</div> 
     -->

<!-- ４ボックス目、アップデート予定 -->
    <!-- 
	<div class="js-profile-about_me">
		<div class="section section--profile js-editable-section"> 
			<h2>私について</h2> 
			<div class="btn btn--sm btn--white btn--ico btn-edit js-editable-section-btn">
				<i class="icon ico--pencil"></i>
				<span class="b-link js-editable-section-toggle" data-section-type="aboutme"></span>
			</div> 
			<div class="section-editable"> 
				<div class="section-editable__view js-value">  
					<p class="profile-section__txt js-wrap">
		 			</p>   
		 			<span class="grey profile-section__txt">あなたの気性、性格、人や人生に対する姿勢などについて書いてみましょう。例えば、他の人と違うところは？ポジティブなところ、ネガティブなところは？
		 			</span>  
		 		</div>  
		 		<div class="section-editable__edit"> 
		 			<form method="post" action=""> 
		 				<textarea id="aboutme" name="aboutme_text" class="textarea js-editable-section-text" placeholder="あなたについて入力" rows="9">
		 				</textarea> 
		 				<div class="profile-edit__btn-right"> 
		 					<button type="submit" class="btn btn--sm btn--blue js-editable-section-save" disabled="">
		 						<span class="btn-txt">保存</span>
		 					</button> 
		 					<div class="btn btn--sm btn--white">
		 						<span class="btn-txt">キャンセル</span>
		 						<span class="b-link js-editable-section-cancel"></span>
		 					</div> 
		 				</div> 
		 			</form> 
		 		</div>  
		 	</div> 
		</div> 
	</div> 
 -->
	<div class="js-profile-languages">
		<div class="section section--profile js-editable-section"> 
			<h2>言語</h2> 
			<div class="inline btn btn--sm btn--white btn--ico btn-edit js-editable-section-btn">
				<i class="icon ico--pencil"></i>
				<span class="b-link js-editable-section-toggle" data-section-type="languages"></span>
			</div> 
			<div class="section-editable"> 
				<div class="section-editable__view">
					<span class="js-language-label">日本語</span>
				</div> 
				<div class="section-editable__edit">  
					<div class="js-languages-list-wrap"> 
						<span class="js-lng intr"> 
							<i class="intr-ico intr-ico--language"></i>
							<span class="intr-txt">日本語</span>
							<span class="intr-ico intr-ico--rm"><i data-code="41" class="b-link js-rm-lng"></i></span> 
						</span> 
					</div> 
					<form method="post" action=""> 
						<div class="search-field search-field--language js-data-list " data-url="" data-control-type="language-list" data-drop-direction="up"> 
							<div class="search-field_"> 
								<input type="hidden" name="code" value="0"> 
								<input id="languages" type="text" class="input input--sm" name="language" value="" autocomplete="off" placeholder="入力して新しい言語を追加"> 
								<i class="icon ico--grey ico--search"></i> 
								<i class="icon ico--cross js-control-reset"></i> 
							</div> 
							<div class="datalist"> 
								<ul class="options"></ul> 
								<div class="datalist-hint"> 
									<span class="lgrey datalist-hint__text">言語名を入力</span>
									<span class="lgrey datalist-hint__nothing">言語が見つかりません。もう一度お試しください。</span> 
								</div> 
							</div> 
						</div> 
						<div class="profile-edit__btn-right"> 
							<div class="btn btn--sm btn--blue">
								<span class="btn-txt">完了</span>
								<i class="b-link js-editable-section-toggle" data-section-type="languages"></i>
							</div> 
						</div> 
					</form>  
				</div> 
			</div> 
		</div>   
	</div> 
</section><!--右側コンテンツ（スコア、アワード） --><section class="section-right-side"> 
 	<!-- １ブロック目 -->
 	<div class="js-profile-score">
 		<div id="profile_score" class="profile-widget">
 			<!-- --> 
 			<h2>スコア</h2> 
 			<div class="score-user">   
 				<div class="inline">
 					<!-- 円形のグラフを作成 -->
 					<div class="scale scale--sm js-profile-score" data-control-type="score" data-score="0" data-delimiter="." data-digits-count="2" data-line-width="7" data-size="70" data-style="LIGHT" data-timing="0" data-background="https://honcdn.com/aco/hotornot.com/v2/-/-/i/hotornot_v2/ui/scale.5.png">
 						<canvas width="140" height="140" class="label-display " style="width: 70px; height: 70px;"></canvas>
 						<div class="scale-value">0.00</div>
 					</div>
 				</div>      
 				<div class="inline score-user__txt"> 
 					<span class="grey">他の人を評価して、あなたも評価されよう！</span> 
 				</div>   
 			</div> 
 			<!-- -->
 		</div> 
 	</div> 
 	<!-- ２ブロック目 -->
	<div class="js-profile-awards">
	 	<div class="profile-widget js-wrap">  
	 		<h2>3 アワード</h2>  
			 <div class="profile-widget__items awards-list awards-list--compact"> 
			 	<div class="profile-widget__item awards-item"> 
			 		<div class="inline award inactive tooltip-wrap"> 
			 			<img src="https://honcdn.com/big/awards/XHDPI/friendly_small.png?3" alt="" width="70" height="70"> 
			 			<span class="b-link js-award-show" data-award-id="1311341967:1332365577"></span>  
			 			<div class="tooltip">
			 				<span class="tooltip-txt">今週一番フレンドリーなユーザー</span>
			 			</div> 
			 		</div> 
			 		<div class="inline awards-item__txt"> <b>一番フレンドリーなユーザー！</b>  
			 			<div>
			 				<span class="grey">2015年5月29日</span>
			 			</div>  
			 		</div> 
			 	</div>

			 </div>  
	 		<div class="btn btn--sm btn--white btn--block">
				<span class="btn-txt">もっとアワードを受賞する</span>
				<span class="b-link js-ovl-open" data-ovl-type="hon-v3" data-ovl-url="/ws/awards/list.phtml?user_id=1332365577"></span>
			</div>     
		</div> 
	</div> 
</section> 
</main> 