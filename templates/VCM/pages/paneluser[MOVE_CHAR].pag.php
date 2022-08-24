<h6 class="red">&raquo; Mover Personagem</h6>
	   <blockquote>
	  <p class="colr">Selecione o mapa na qual queria se mover, independente do seu Level:</p><br />
	  <form name="Move_Char" id="Move_Char">
	  <select name="Map" id="Map">
      {Map_List}
      </select><br />
	  <input type="button" value="Mover Personagem" onclick="CTM_Load('?pag=paneluser&str=MOVE_CHAR&cmd=true','Command','POST',BuscaElementosForm('Move_Char'));" />
	  </form>
	</blockquote>
	<div id="Command"></div>