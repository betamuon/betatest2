<script type="text/javascript">
function Delete_Acc()
{
	var Check = confirm('Atencao\r\nO Comando a seguir irar deletar TOTALMENTE esta conta.\r\nTem certeza que deseja continuar?');
	if (Check == true)
	{
		CTM_Load('?pag=paneladmin&str=DELETE_ACC&cmd=true','Command','POST',BuscaElementosForm('Delete_Account'));
		return true;
	}
}
</script>
<h6 class="red">&raquo; Deletar Conta</h6>
	   <blockquote>
	   <form name="Delete_Account" id="Delete_Account">
<table width="340" border="0">
  <tr>
    <td width="125">Referencia:</td>
    <td width="205"><input type="text" name="Account" id="Account" /></td>
  </tr>
  <tr>
    <td width="125">Buscar Por:</td>
    <td width="205"><select name="Search" id="Search">
    <option value="1">Login</option>
    <option value="2">E-Mail</option>
    <option value="3">IP Recente</option>
    <option value="4">Personagem</option>
    </select>
    </td>
  </tr>
</table>
<input type="button" value="Deletar Conta" onclick="Delete_Acc();" />
</form>
	</blockquote>
	<div id="Command"></div>