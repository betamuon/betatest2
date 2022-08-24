<form name="login-form" id="login-form">
	<input type="text" name="Log_Account" id="Log_Account" value="Usu&aacute;rio" onFocus="if(this.value=='Usu&aacute;rio') this.value=''" onBlur="if(this.value=='') this.value='Usu&aacute;rio'" maxlength="12">
	<input type="password" name="Log_Password" id="Log_Password" value="**********" onFocus="if(this.value=='**********') this.value=''" onBlur="if(this.value=='') this.value='**********'" maxlength="12">
	<a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=recovery','conteudo','GET');" style="margin:5px 0 0 15px; display:block; float:left;">Recuperar Senha</a>
	<input type="button" name="btnlogin" id="btnlogin" class="btn" value="Logar" onClick="CTM_Load('?ajax=panel&cmd=login','Panel','POST',BuscaElementosForm('login-form'));">
</form>
<p>{Message}</p>