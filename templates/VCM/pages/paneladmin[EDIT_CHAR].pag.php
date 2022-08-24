	   <blockquote>
	   <form name="Manage_Character" id="Manage_Character">
<table width="340" border="0">
  <tr>
    <td width="133">Conta:</td>
    <td width="197"><input type="text" disabled="disabled" value="{Char_AccountID}" /></td>
  </tr>
  <tr>
    <td width="133">Nome:</td>
    <td width="197"><input type="text" disabled="disabled" value="{Char_Name}" /></td>
  </tr>
  <tr>
    <td width="133">Level:</td>
    <td width="197"><input type="text" name="Level" id="Level" onKeyPress="return NumbersOnly(event)" value="{Char_cLevel}" /></td>
  </tr>
  <tr>
    <td width="133">Classe:</td>
    <td width="197"><select name="Class" id="Class">
		{Class_List}
	</select></td>
  </tr>
  <tr>
    <td width="133">Pontos:</td>
    <td width="197"><input type="text" name="Points" id="Points" onKeyPress="return NumbersOnly(event)" value="{Char_LevelUpPoint}" /></td>
  </tr>
  <tr>
    <td width="133">Experiencia:</td>
    <td width="197"><input type="text" name="Experience" id="Experience" onKeyPress="return NumbersOnly(event)" value="{Char_Experience}" /></td>
  </tr>
  <tr>
    <td width="133">For&ccedil;a:</td>
    <td width="197"><input type="text" name="Strength" id="Strength" onKeyPress="return NumbersOnly(event)" value="{Char_Strength}" /></td>
  </tr>
  <tr>
    <td width="133">Agilidade:</td>
    <td width="197"><input type="text" name="Dexterity" id="Dexterity" onKeyPress="return NumbersOnly(event)" value="{Char_Dexterity}" /></td>
  </tr>
  <tr>
    <td width="133">Vitalidade:</td>
    <td width="197"><input type="text" name="Vitality" id="Vitality" onKeyPress="return NumbersOnly(event)" value="{Char_Vitality}" /></td>
  </tr>
  <tr>
    <td width="133">Energia:</td>
    <td width="197"><input type="text" name="Energy" id="Energy" onKeyPress="return NumbersOnly(event)" value="{Char_Energy}" /></td>
  </tr>
  {%Input_Cmd%}
  <tr>
    <td width="133">Zen:</td>
    <td width="197"><input type="text" name="Money" id="Money" onKeyPress="return NumbersOnly(event)" value="{Char_Money}" /></td>
  </tr>
  <tr>
    <td width="133">Mapa:</td>
    <td width="197"><select name="MapNumber" id="MapNumber">
		{Map_List}
	</select></td>
  </tr>
  <tr>
    <td width="133">Coordenada X:</td>
    <td width="197"><input type="text" name="MapPosX" id="MapPosX" onKeyPress="return NumbersOnly(event)" value="{Char_MapPosX}" /></td>
  </tr>
  <tr>
    <td width="133">Coordenada Y:</td>
    <td width="197"><input type="text" name="MapPosY" id="MapPosY" onKeyPress="return NumbersOnly(event)" value="{Char_MapPosY}" /></td>
  </tr>
  <tr>
    <td width="133">PK Kills:</td>
    <td width="197"><input type="text" name="PkCount" id="PkCount" onKeyPress="return NumbersOnly(event)" value="{Char_PkCount}" /></td>
  </tr>
  <tr>
    <td width="133">PK Time:</td>
    <td width="197"><input type="text" name="PkTime" id="PkTime" onKeyPress="return NumbersOnly(event)" value="{Char_PkCount}" /></td>
  </tr>
  <tr>
    <td width="133">Posi&ccedil;&atilde;o:</td>
    <td width="197"><select name="CtlCode" id="CtlCode">
    <option value="0" {Check_Code#1}>Normal</option>
    <option value="1" {Check_Code#2}>Banido</option>
    <option value="{Staff_Code}" {Check_Code#3}>Staff</option>
    </select></td>
  </tr>
  <tr>
    <td width="133">Resets:</td>
    <td width="197"><input type="text" name="Resets" id="Resets" onKeyPress="return NumbersOnly(event)" value="{Char_Resets}" /></td>
  </tr>
  <tr>
    <td width="133">Resets Diarios:</td>
    <td width="197"><input type="text" name="ResetsDay" id="ResetsDay" onKeyPress="return NumbersOnly(event)" value="{Char_ResetsDay}" /></td>
  </tr>
  <tr>
    <td width="133">Resets Semanais:</td>
    <td width="197"><input type="text" name="ResetsWeek" id="ResetsWeek" onKeyPress="return NumbersOnly(event)" value="{Char_ResetsWeek}" /></td>
  </tr>
  <tr>
    <td width="133">Resets Mensais:</td>
    <td width="197"><input type="text" name="ResetsMonth" id="ResetsMonth" onKeyPress="return NumbersOnly(event)" value="{Char_ResetsMonth}" /></td>
  </tr>
  <tr>
    <td width="133">Master Resets:</td>
    <td width="197"><input type="text" name="MResets" id="MResets" onKeyPress="return NumbersOnly(event)" value="{Char_MResets}" /></td>
  </tr>
</table>
<input type="button" value="Editar Personagem" onclick="CTM_Load('?pag=paneladmin&str=EDIT_CHAR&cmd=true&name={Char_ID}','Command','POST',BuscaElementosForm('Manage_Character'));" />
</form>
	</blockquote>
	<div id="Command"></div>