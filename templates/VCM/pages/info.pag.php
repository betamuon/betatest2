<div class="col2">
        	<h4 class="heading col">Informa&ccedil;&otilde;es</h4>
			 <blockquote>
			 <ul class="ul">
			   <li>&raquo; Nome: <b>{Server_Name}</b></li>
			   <li>&raquo; Vers&atilde;o: <b>{@_Info#Version}</b></li>
			   <li>&raquo; Experi&ecirc;ncia: <b>{@_Info#Xp}</b></li>
			   <li>&raquo; Drop: <b>{@_Info#Drop}</b></li>
			   <li>&raquo; Bug Bless: <b>{Bug_Bless}</b></li>
			   <li>&raquo; Tipo de Reset: <b>{Reset_Type}</b></li>
			   <li>&raquo; Pontos Por Level: <b>MG: 7 Pontos | BK/SM/ELFA 5 Pontos</b></li>
			   <li>&raquo; Reset Free: <b>600</b></li>
			   <li>&raquo; Reset {VIP_Name#1}: <b>450</b></li>
			   <li>&raquo; Reset {VIP_Name#2}: <b>350</b></li>
			   <li>&raquo; Horario: <b>{Server_Time}</b></li>
               <?php
			   if(constant("Status_Enable") > 0)
			   {
			   ?>
				   <li>&raquo; Status: <b>{Status}</b></li>
			   <? } ?>
			   <li>&raquo; Record Online: <b>{Record}</b></li>
			 </ul>
			 </blockquote>	   