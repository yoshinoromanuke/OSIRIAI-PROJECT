<style >
.logo {
  background-image: $this->Html->img(icon.jpeg);
  background-size: 164px 54px;}
</style>

<div class="page_ js-tooltip-ignore"> 
		<div id="notifications" class="notification-wrap"></div> 

<aside id="app_s" class="page-left-side">
			<nav id="sidebar" class="sidebar">
				<div class="sidebar-header js-sidebar-header">
					<a href="/game" class="logo_anchor js-logo" rel="mm">
						<span class="logo"></span>
						<span class="logo-ico"></span>
					</a>
				</div>
				<div class="sidebar-content js-sidebar-wrapper js-search-people-wrapper" data-control-type="scrollable">
					<div class="scroll">
						<div class="scroll_" tabindex="-1">
							<div class="scroll__">
								<div class="table js-scroller">
	<!-- サイドバーメニューの項目をテーブルで列表示させるdivをつくる -->
									<div class="table-row">
										<div class="table-cell table-cell--top">
											<div class="sidebar-content_ js-nav js-search-people-nav" data-scroll-recalculate="">
												<div class="js-nav-cnt">
													<div class="js-sidebar-user">
														<div class="sidebar-nav">
															<div class="sidebar-nav__cnt"> 
																<div class="inline sidebar-nav__txt">
																	<!-- <a href="/profile/01332365577" class="sidebar-nav__txt-title app" rel="profile-edit"> -->
																		<b class="sidebar__el-hidden js-user-name">
																			<?php echo $this->Html->link($myFbData['name'],
																			array('controller'=>'users','action'=>'index')); ?>

																		</b>
																		<span class="brick brick--hover sidebar-nav__userpic js-sidebar-photo">
																			<span class="brick-img">
																				

																				<img id="header_ico" src="//pcache-pv-us1.honcdn.com/p525/784/5/4/3/1332365577/d1311341/t1432875608/c_qM6guwoHfCukAggmEx8VSo4WL5iLWylaIflyTxgAL0s/1311341939_180.jpg?t=24.0.0.0&amp;id=1311341939" alt="">
																			</span>
																		 </span>
																	 </a>
																	 
																</div>
															</div>
															<a href="/OSIRIAI_PROJECT/Fbconnect/logout" class="im_skip_url"> 
															<i class="glyphicon glyphicon-remove icon ico--grey ico--signout sidebar__el-hidden tooltip-wrap">
															</i> </a>
														</div>
													</div>
													<div class="js-sidebar-nav">
													<ul id="sidebar-menu" class="sidebar-menu">
														<li class='sidebar-menu__item  <?php echo $active1; ?>'>
<!-- フィルター編集javascriptまでまだいけておらず
															<i class="icon ico--grey ico--cog sidebar__el-hidden tooltip-wrap js-tiw-filter-toggle" data-fx-wrap="sidebar-filter">
																<span class="tooltip">
																	<span class="tooltip-txt">フィルター編集</span>
																</span>
															</i>
-->
															<span class="sidebar-menu__item-lnk">
																<i class="ico ico--game">
																</i>
																<b class="sidebar__el-hidden">   
																	<?php echo $this->Html->link('めぐりあい',
																	array('controller'=>'photos','action'=>'index')); ?>  
																</b>
															</span>
															<div id="sidebar_filter" class="sidebar-filter js-sidebar-filter js-fx-wrap">
	<!-- めぐりあいの横のサーチフィルターの設定をformタグで実装 -->
																<form id="search_form" action="/game" class="js-fx-content" data-fx-wrap="sidebar-filter">
																  <input type="hidden" name="filter_form" value="1">
																	<div class="sidebar-filter_ js-tiw-filter">
																	  	<div class="sidebar-filter__cnt">
																	  		<div>
																	  			<legend class="b grey">表示</legend> 
																  				<div class="checkbox">
																  					<input type="checkbox" name="gender[]" id="boy" value="M"> 
																  					<label for="boy">男子</label> 
																  				</div>
																  				<div class="checkbox"> 
																  					<input type="checkbox" name="gender[]" id="girl" value="F" checked="checked"> 
																  					<label for="girl">女子</label>
																  				</div>
																	  		</div>  
																	  		<!--control type: age-slider-->
																	  		<div class="js-age-slider" data-min="18" data-max="80" data-min-range="1">
																	  			<legend class="b grey">年齢</legend> 
																	  			<div class="slider-wrap">
																	  				<div class="slider"> 
																	  					<input type="hidden" name="age_f" value="18" class="js-slider-begin-field"> <input type="hidden" name="age_t" value="23" class="js-slider-end-field"> 
																  						<div class="slider-track js-slider-track" style="left: 0%; width: 8.06451612903226%;">
																  						</div>
																  						<div class="slider-mover js-slider-begin" tabindex="0" style="left: 0%;">
																  						</div>
																  						<div class="slider-mover js-slider-end" tabindex="0" style="left: 8.06451612903226%;">
																  						</div>
																  						<b class="slider-count js-age-begin">18</b>
																  						<b class="slider-count js-age-end">23</b> 
																	  				</div> 
																	  			</div>
																	  			<div class="grey sidebar-filter__slider-txt">近くにいるイケてるユーザーが最初に表示されます。
																	  			</div>
																	  		</div>
																	  		<div class="sidebar-filter__btn">
																	  			<button type="submit" class="btn btn--sm btn--blue">
																	  			<span class="btn-txt">遊ぶ</span>
																	  			</button>
																	  			<span class="btn btn--sm btn--white">
																	  				<span class="btn-txt">キャンセル</span>
																	  				<i class="b-link js-tiw-filter-toggle" data-fx-wrap="sidebar-filter"></i>
																	  			</span>
																	  		</div>
																	  	</div>
																	</div>
																</form>
															</div>
														</li>
<!-- 
														<li id="navigation_item_im" class='sidebar-menu__item messenger-open_ <?php echo $active2; ?>'> 
															<span class="sidebar-menu__item-lnk"><i class="ico ico--msg">
																<a href="/messenger/open" class="b-link navigation__item-link-chat im-open" rel="messenger-open"></a> 
																<span id="mb1" class="mark mark--sm mark--red invisible">0</span>
																</i>
																<b class="sidebar__el-hidden">  メッセージ </b> 
															</span>
															<span id="mb" class="mark mark--red invisible">0</span>
														</li> -->

														<li id="navigation_item_hot-list" class='sidebar-menu__item hotlist_ <?php echo $active3; ?>'>
															<span class="sidebar-menu__item-lnk"> <i class="ico ico--hotlist">
																
															</i>
																<b class="sidebar__el-hidden">
																	<?php echo $this->Html->link("ランキング",
																	array('controller'=>'favorites','action'=>'index')); ?>  
																</b> 
															</span>
														</li>
														<li id="navigation_item_fans" class='sidebar-menu__item fans_ <?php echo $active4; ?>'> 
															<span class="sidebar-menu__item-lnk"> <i class="ico ico--fans">
																<!-- <span class="mark mark--sm mark--red sidebar-menu__item--mark-sm">1</span> 
																 --></i> 
																<b class="sidebar__el-hidden">  
																	<?php echo $this->Html->link("ファン",
																	array('controller'=>'favorites','action'=>'fans')); ?>  
																	</b> 
															</span>
	<!-- あなたのファンの横の未チェックの新しいファンの数を吹き出しで実装 -->
															<!-- <span id="js-sidebar-fans" class="mark mark--red">1</span>
														 --></li> 
														
													</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
									
									

									
							<div class="scrollbar-track">
								<div class="scrollbar-thumb" style="height: 1.29656862745098px; top: 199.654411764706px;"></div>
							</div>
						</div>
					</div>
					<div class="scrollbar-track scrollbar-track--real">
						<div class="scrollbar-thumb scrollbar-thumb--real" style="height: 1.29656862745098px; top: 10.6544117647059px;"></div>
					</div>
				</div>
			</div>
			<div class="sidebar-footer js-sidebar-footer">
			</div>

		</nav>
	</aside>
