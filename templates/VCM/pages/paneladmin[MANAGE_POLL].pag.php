<script language="javascript1.5">
function Delete_Poll()
{
	var Check = confirm('Atencao\r\nTem certeza que deseja deletar esta Enquete?');
	if (Check == true)
	{
		CTM_Load('?pag=paneladmin&str=EDIT_POLL&cmd=true', 'While', 'POST',BuscaElementosForm('Manage_Poll'));
		return true;
	}
}
</script>
<h6 class="red">&raquo; Gerenciar Enquetes</h6>
	   <blockquote>
       <form name="Manage_Poll" id="Manage_Poll">
		   <strong>Enquete:</strong> <select name="Id" id="Id">
			{%Poll_List%}
		</select>&nbsp;<br /><input type="button" value="Editar" onclick="CTM_Load('?pag=paneladmin&str=EDIT_POLL','While','POST',BuscaElementosForm('Manage_Poll'));" />&nbsp;<input type="button" value="Deletar Enquete" onclick="Delete_Poll()" />
		   </form>
	</blockquote>
	<div id="While"></div>