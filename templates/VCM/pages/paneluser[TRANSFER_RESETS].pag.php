<h6 class="red">&raquo; Transferir Resets</h6>
<blockquote>
<p>Resets Atuais de seu Personagem: <span class="colr">{%CHAR_RESETS%}</span><br />
Numero mimino de Resets quereridos: <span class="colr">{%RESETS_MIN%}</span><br />
Numero mimino de Resets a enviar: <span class="colr">{%RESETS_SEND%}</span><br /></p>
<br />
<form name="Transfer_Resets" id="Transfer_Resets">
<table width="340" border="0">
  <tr>
    <td width="138"><strong>Personagem a Receber:</strong></td>
    <td width="192"><select name="Character_Get" id="Character_Get">
    {%CHARACTER_LIST%}
    </select></td>
  </tr>
  <tr>
    <td width="138"><strong>Quantidade:</strong></td>
    <td width="192"><input type="text" name="Resets" id="Resets" onkeypress="return NumbersOnly(event);" size="6" /></td>
  </tr>
</table>
<input type="button" value="Transferir" onClick="CTM_Load('?pag=paneluser&str=TRANSFER_RESETS&cmd=true', 'Command', 'POST',BuscaElementosForm('Transfer_Resets'));">
</form>
</blockquote>
<div id="Command"></div>