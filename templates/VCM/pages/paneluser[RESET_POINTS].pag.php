<h6 class="red">&raquo; Resetar Pontos</h6>
	   <blockquote>
        <p class="red">Aten&ccedil;&atilde;o: Est&aacute; op&ccedil;&atilde;o, irar somar todos os pontos de cada categoria de seu char e junta-los aos pontos de destribui&ccedil;&atilde;o. Com isso resetando todos os seus pontos.</p><br />
		<b class="colr">Status do personagem antes do Comando:</b><br /><br />
		&raquo; Pontos para Distribuir: <b>{Char_Points}</b><br />
		&raquo; For&ccedil;a: <b>{Char_Strength}</b><br />
		&raquo; Agilidade: <b>{Char_Dexterity}</b><br />
		&raquo; Vitalidade: <b>{Char_Vitality}</b><br />
		&raquo; Energia: <b>{Char_Energy}</b><br />
		{Char_Command}<br />
		<b class="colr">Status do personagem apos o Comando:</b><Br /><br />
		&raquo; Pontos para Distribuir: <b>{New_Points}</b><br />
		&raquo; For&ccedil;a: <b>{New_Strength}</b><br />
		&raquo; Agilidade: <b>{New_Dexterity}</b><br />
		&raquo; Vitalidade: <b>{New_Vitality}</b><br />
		&raquo; Energia: <b>{New_Energy}</b><br />
		{New_Command}<br />
		<b class="colr">Deseja resetar seus pontos?</b><br />
		<input type="button" value="Resetar Pontos" onclick="CTM_Load('?pag=paneluser&str=RESET_POINTS&cmd=true','Command','GET');" />
	</blockquote>
	<div id="Command"></div>