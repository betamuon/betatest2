<h6 class="red">&raquo; Gerenciar Conta</h6>
	   <blockquote>
	   <form name="Load_Account" id="Load_Account">
<table width="340" border="0">
  <tr>
    <td width="132">Referencia:</td>
    <td width="198"><input type="text" name="Account" id="Account" /></td>
  </tr>
  <tr>
    <td width="132">Buscar Por:</td>
    <td width="198"><select name="Search" id="Search">
    <option value="1">Login</option>
    <option value="2">E-Mail</option>
    <option value="3">IP Recente</option>
    <option value="4">Personagem</option>
    </select>
    </td>
  </tr>
</table>
<input type="button" value="Carregar Informa&ccedil;&otilde;es" onclick="CTM_Load('?pag=paneladmin&str=EDIT_ACC','Show_Options','POST',BuscaElementosForm('Load_Account'));" />
</form>
	</blockquote>
	<div id="Show_Options"></div>