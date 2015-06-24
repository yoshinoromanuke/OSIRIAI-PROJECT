<?php echo $this->Element('userconfighead'); ?>


<main id="app_c" class="page-right-side">
	<section class="settings"> 
		<div class="section section--settings js-editable-section">  
			<div class="settings__title"> 
				<h2>あなたの基本データ</h2>  
				<div class="btn btn--sm btn--white btn--ico btn-edit js-editable-section-btn"> 
					<i class="glyphicon glyphicon-cog"></i>
          <!-- <i class="icon ico--pencil"></i>  -->
					<span id="es_basic" class="b-link js-editable-section-toggle" data-section-type="basic"></span> 
				</div>  
			</div>  


			<form action="" id="edit_basic_form" method="post" class="section-editable" autocomplete="off">  
				<div class="form-row section-editable__edit"> 
					<div class="form-label"> 
						<span class="inline b form-label__value">Facebookから情報を取得 </span> 
					</div>  
					<div class="section-editable__edit form-field"> 
						<div class="btn btn--sm btn--white btn--social">
							<i class="ico ico--color ico--facebook-sm">
								<span data-href="/settings/update" class="b-link js-settings-confirm"></span>
							</i>
							<span class="btn-txt">情報をアップデート</span>
							<div class="loader">
								<div class="loader_"></div>
							</div>
						</div> 
					</div>   
				</div>  
				<div class="form-row"> 
					<div class="form-label"> 
						<span class="inline b form-label__value">名前 </span> 
					</div>  
					<div class="section-editable__view form-field" id="label_name">Yoshiro</div> 
					<div class="section-editable__edit form-field js-error-wrap"> 
						<input name="name" type="" id="name" value="Yoshiro" size="25" maxlength="40" class="input input--sm" disabled="">
						<div class="input-error js-input-error"></div> 
					</div>   
				</div>  
				<div class="form-row"> 
					<div class="form-label"> 
						<span class="inline b form-label__value">生年月日  
							<i class="icon ico--grey ico--question tooltip-no-js-wrap settings__hint">
								<span class="tooltip">
									<span class="tooltip-txt">   
										生年月日と性別の編集は出来ません。間違えがあった場合は<a href="/feedback/">お問い合わせ</a>ください。
	      							</span>
	      						</span>
      						</i> 
      					</span> 
      				</div>  
      				<div class="section-editable__view form-field">7 11月 1991</div> 
      				<div class="section-editable__edit form-field js-error-wrap"> 
      					<div class="form-field-justify"> 
      						<div class="form-cell"> 
      							<div class="select select--sm select--day js-signup-day disabled " data-drop-direction="down" data-control-type="select"> 
      								<input type="hidden" name="day" value="07" data-show-error="" class="select-value"> 
      								<div tabindex="0" class="select-label">07</div> 
      								<div class="select-options"> 
      									<ul class="options">  </ul> 
      								</div> 
      							</div> 
      						</div> 
      						<div class="form-cell"> 
      							<div class="select select--sm select--month js-signup-month disabled " data-drop-direction="down" data-control-type="select"> 
      								<input type="hidden" name="month" value="11" class="select-value"> 
      								<div tabindex="0" class="select-label">11月</div> 
      								<div class="select-options"> 
      									<ul class="options">  </ul> 
      								</div> 
      							</div> 
      						</div> 
      						<div class="form-cell"> 
      							<div class="select select--sm select--year js-signup-year disabled " data-drop-direction="down" data-control-type="select"> 
      								<input type="hidden" name="year" value="1991" class="select-value"> 
      								<div tabindex="0" class="select-label">1991</div> 
      								<div class="select-options"> 
      									<ul class="options">  </ul> 
      								</div> 
      							</div> 
      						</div> 
      					</div> 
      					<div class="input-error js-input-error"></div> 
      				</div>   
      			</div>  

      			<div class="form-row"> 
      				<div class="form-label"> 
      					<span class="inline b form-label__value">性別 </span> 
      				</div>  
      				<div class="section-editable__view form-field">男性</div> 
      				<div class="section-editable__edit form-field"> 
      					<span class="radio radio--male"> 
      						<input type="radio" name="gender" id="male" disabled="disabled" value="M" checked=""> 
      						<label for="male">男性</label> 
      					</span> 
      					<span class="radio radio--female"> 
      						<input type="radio" name="gender" id="female" disabled="disabled" value="F"> 
      						<label for="female">女性</label> 
      					</span> 
      				</div>   
      			</div>    
      		</form> 
      	</div>


      	<div class="section section--settings js-editable-section">  
      		<div class="settings__title"> 
      			<h2>あなたのアカウント</h2>  
      			<div class="btn btn--sm btn--white btn--ico btn-edit js-editable-section-btn"> 
      				<i class="icon ico--pencil"></i> 
      				<span id="es_account" class="b-link js-editable-section-toggle" data-section-type="account"></span> 
      			</div>  
      		</div>  

      		<form action="" id="edit_account_form" method="post" class="section-editable" autocomplete="off">  
      			<div class="form-row"> 
      				<div class="form-label"> 
      					<span class="inline b form-label__value">メールアドレス  
      						<i class="icon ico--grey ico--question tooltip-no-js-wrap settings__hint">
      							<span class="tooltip">
      								<span class="tooltip-txt">    
      									メールアドレスまたはパスワードを変更するには、ご使用中のパスワードの入力が必要です。
     								</span>
     							</span>
     						</i> 
     					</span> 
     				</div>  
     				<div class="section-editable__view form-field" id="label_email">y*****@gmail.com</div> 
     				<div class="section-editable__edit form-field js-error-wrap"> 
     					<input name="email" type="" id="email" value="y*****@gmail.com" size="25" maxlength="40" class="input input--sm"> 
     					<div class="input-error js-input-error"></div> 
     				</div>   
     			</div>  
     			<div class="form-row"> 
     				<div class="form-label"> 
     					<span class="inline b form-label__value">パスワード  
     						<div class="section-editable__edit form-hint">
     							<!-- -->
     							<div class="inline"> 
     								<div id="js_pw_tooltip" class="grey js_pw_info"> 
     									<span class="password-hint password--info">パスワードは５文字以上で設定して下さい</span> 
     									<span class="password-hint password--toshort">パスワード：
     										<span class="red">短すぎ</span>
     									</span> 
     									<span class="password-hint password--weak">パスワードの安全性：
     										<span class="orange">低い</span>
     									</span> 
     									<span class="password-hint password--medium">パスワードの安全性：
     										<span class="lime">平均</span>
     									</span> 
     									<span class="password-hint password--strong">パスワードの安全性：
     										<span class="green">高い</span>
     									</span> 
     								</div> 
     							</div>
     							<!-- -->
     						</div> 
     					</span> 
     				</div>  

     				<div class="section-editable__view form-field" id="label_password1">********</div> 
     				<div class="section-editable__edit form-field js-error-wrap"> 
     					<input name="password1" type="password" id="password1" value="" size="25" maxlength="40" class="input input--sm"> 
     					<div class="input-error js-input-error"></div> 
     				</div>   
     			</div>  
     			<div class="form-row section-editable__edit"> 
     				<div class="form-label"> 
     					<span class="inline b form-label__value">パスワードの確定 </span> 
     				</div>  
     				<div class="section-editable__view form-field" id="label_password2"></div> 
     				<div class="section-editable__edit form-field js-error-wrap"> 
     					<input name="password2" type="password" id="password2" value="" size="25" maxlength="40" class="input input--sm"> 
     					<div class="input-error js-input-error"></div> 
     				</div>   
     			</div>



     			<div class="form-row"> 
     				<div class="form-label"> 
     					<span class="inline b form-label__value">あなたのソーシャルアカウント </span> 
     				</div>    
     				<div class="form-row-account js-account-link">
     					<div class="form-field"> 
     						<div class="form-block"> 
     							<div class="btn btn--sm btn--white f-right">
     								<span class="btn-txt">リンク解除</span>
     								<a href="#" data-href="/settings/unlink/facebook" class="b-link js-settings-unlink"></a>
     								<div class="loader loader--white">
     									<div class="loader_"></div>
     								</div>
     							</div>  
     							<div class="account"> 
     								<div class="brick"> 
     									<div class="brick-img"> 
     										<img src="https://pcache-us1.badoocdn.com/p562/hidden?euri=RfqbUAmUsVRdPtSO2JKyOZKh4TTI3QyRtrVA4NhpqHVMpBoQFYEpOECuhbkqhyt1YIbiKJAjzs-Ssk3Lr0g8kfii7qgp88826feJlKfrBmnEBD8rNq3J7i6unGFphBwhVJVuJ4lL2aM">  
     									</div> 
     									<mark class="brick brick--xsm brick--facebook">
     										<i class="ico ico--white ico--facebook-sm"></i>
     									</mark> 
     								</div> 

     								<div class="inline account__txt facebook"> 
     									<div>
     										<b>Yoshiro Shibata</b>
     									</div> 
     									<em class="lgrey account__title">Facebook</em> 
     								</div> 
     							</div> 
     						</div>
     					</div> 
     				</div>  
     			</div>
			</form>     			

<div class="section section--settings js-editable-section">  
  <div class="settings__title"> 
    <h2>言語</h2>  
    <div class="btn btn--sm btn--white btn--ico btn-edit js-editable-section-btn"> 
      <i class="icon ico--pencil"></i> 
      <span id="es_language" class="b-link js-editable-section-toggle" data-section-type="language"></span> 
    </div>  
  </div>  
  <form action="" id="edit_language_form" method="post" class="section-editable" autocomplete="off">  
    <div class="form-row"> 
      <div class="form-label"> 
        <span class="inline b form-label__value">インターフェイス言語 </span> 
      </div>  
      <div class="section-editable__view form-field">日本語</div> 
      <div class="section-editable__edit form-field"> 
        <div class="select select--sm select--language " data-control-type="select"> 
          <input type="hidden" name="lang_id" value="日本語" class="select-value"> 
          <div tabindex="0" class="select-label">日本語</div> 
          <div class="select-options"> 
            <ul class="options"> 
              <li class="option" data-value="3">English</li>
              <li class="option" data-value="61">Português (Brasil)</li>
              <li class="option" data-value="41">日本語</li>
            </ul>  
          </div> 
        </div> 
      </div>   
    </div>   
    <div class="form-row section-editable__edit"> 
      <div class="form-field">  
        <button type="submit" class="btn btn--sm btn--blue js-editable-section-ok"> 
          <span class="btn-txt"> 保存   </span> 
        </button>  
        <div class="btn btn--sm btn--white"> 
          <span class="btn-txt">キャンセル</span> 
          <span class="b-link js-editable-section-cancel"></span> 
        </div> 
      </div> 
    </div>   
  </form> 
</div>






     				
     				<span class="settings__link js-settings-delete-account">アカウントを削除</span>    
				</div>  
     </section> 
</main>
