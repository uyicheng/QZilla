<div id="content" data-role="content">

	<form name="form_register" id="form_register" method="post" action="http://m.triviala.com/register">
		
		<div class="formRegisterLabel">用户名:</div></td>
		<input type="text" name="username" id="username" value="" class="formRegisterInput" maxlength="15" autocomplete="off" />						
		<div class="formRegisterLabel">密码:</div>
		<input type="password" name="password" id="" value="" class="formRegisterInput" maxlength="32" />
		<div class="formRegisterLabel">邮箱:</div>
		<input type="text" name="email" id="email" value="" class="formRegisterInput" maxlength="255" autocomplete="off" />			
		<div class="clearfix">
			<div class="formRegisterLabel" style="width:30%; float:left; padding:15px 0px;">我是:</div>

				<fieldset data-role="controlgroup" data-theme="d" data-type="horizontal">
					<input data-theme="d" name="gender" id="gender-m" type="radio" value="m"  />
					<label for="gender-m">GG</label>
					<input data-theme="d" name="gender" id="gender-f" type="radio" value="f"  />
					<label for="gender-f">MM</label>
				</fieldset>

		</div>
		
		<input name="btn_register" type="submit" value="注册" id="btn_register" data-type="button" />
		
		<input name="do" type="hidden" value="process" />
	</form>

	<p style="margin:20px 0px; color:#999999">
		I accept the <a href="http://m.triviala.com/pages/terms" class="formRegisterTerms" target="_blank">rules</a> of service and 
		<a href="http://m.triviala.com/pages/privacy" class="formRegisterTerms" target="_blank">privacy policy</a> and confirm  I am at least 16 years old
	</p>

</div>