<!-- headを呼び出し -->
<?php echo $this->Element('favoriteindexhead'); ?>


<main id="app_c" class="page-right-side"> 
	<header class="section-header section-header--medium-v2"> 
		<b class="xxx-large">イケてるリスト</b>  
		
		<div class="tabs"> 
			<a href="/friends-hot-list" class="tabs__item active app" rel="hotlist">友達</a>
			<!-- --><!-- -->
			<a href="/hot-list" class="tabs__item app" rel="hotlist">エリア</a> 
			<a href="/hot-list" class="tabs__item app" rel="hotlist">日間</a>  
			<a href="/hot-list" class="tabs__item app" rel="hotlist">週間</a> 
			<a href="/hot-list" class="tabs__item app" rel="hotlist">月間</a> 
		</div> 

	</header>  

	<section class="section-content"> 
		<div class="users-card">  
			<div class="brick-wrap"> 
				<div class="brick brick--xxlg brick--blue brick--hover"> 
					<div class="brick-img">
						<img src="https://honcdn.com/aco/hotornot.com/v2/-/-/i/hotornot_v2/friends1.2.jpg" alt="">
					</div> 
					<i class="ico ico--white ico--plus-xlg"></i> 
				</div> 
				<div class="brick-txt">もっと友達を追加</div>
				 <!--control type: fb-apprequest-dialog-->
				 <span class="b-link js-hotlist-fb-dlg-plus" data-control-name="hotlist" tabindex="-1"></span> 
				</div>   
				<div class="brick-wrap"> 
					<div class="brick brick--xxlg brick--red brick--hover"> 
						<div class="brick-img">
							<img src="https://honcdn.com/aco/hotornot.com/v2/-/-/i/hotornot_v2/friends2.2.jpg" alt="">
						</div> 
						<i class="ico ico--white ico--heart-xlg"></i> 
					</div> 
					<div class="brick-txt">友達に夢中</div> 
					<span class="b-link js-ovl-open" data-ovl-type="hon-v3" data-ovl-url="/ws/crush/ovl"></span> 
				</div>   


<!-- <ul>
?php foreach(); ?>
	<li>
				<div class="brick-wrap"> 
					<div class="brick brick--xxlg"> 
						<div class="brick-img">
							<img src="//pcache-pv-us1.honcdn.com/p559/944/7/2/5/1286462357/d1414/t1402024612/c_zWPUJbWasTfEUNl6hHvZ-XmvKPDjjOpmg3nqzOD-CXQ/1414403_180.jpg?t=24.0.0.0&amp;id=1414403" width="140" height="140" alt="Daiki">
						</div> 
					</div> 					
					<div class="brick-txt"> 
						<span class="brick-txt_">1person</span> 
						<i class="online-status online-status--offline tooltip-wrap"> 
							<span class="tooltip">
								<span class="tooltip-txt">最終オンライン1週間以上前</span>
							</span> 
						</i>       
					</div> 
	</li>
?php endforeach; ?>
<ul> -->
					<a href="/profile/01286462357?from_friend_hotlist=1" class="b-link app" rel="profile-view"></a> 
				</div>


				<div class="brick-wrap"> 
					<div class="brick brick--xxlg"> 
						<div class="brick-img">
							<img src="//pcache-pv-us1.honcdn.com/p529/20298/8/3/9/1300191894/d1275892/t1408775258/c_nZ5rTa.yG5bxP37HqRAN7qgw-M1RgY8-lyJG1TrjeWk/1275892664_180.jpg?t=24.0.0.0&amp;id=1275892664" width="140" height="140" alt="Yusuke">
						</div> 
					</div> 
					<div class="brick-txt"> 
						<span class="brick-txt_">Yusuke</span> 
						<i class="online-status online-status--offline tooltip-wrap"> 
							<span class="tooltip">
								<span class="tooltip-txt">最終オンライン1 時間前</span>
							</span> 
						</i>       
					</div> 
					<a href="/profile/01300191894?from_friend_hotlist=1" class="b-link app" rel="profile-view"></a> 
				</div>  


				
			</div>  
		</div>  
		<div class="pagination"></div>   
	</section>  
</main>