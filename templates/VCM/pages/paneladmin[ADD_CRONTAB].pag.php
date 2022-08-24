<h4 class="heading colr">Adicionar CronTab</h4>
	   <blockquote>
	   <form name="Add_CronTab" id="Add_CronTab">
						<table width="426" border="0">
                         <tr>
  						  <td width="269">Tarefa:</td>
   						  <td width="147"><select name="CronTab" id="CronTab" onchange="Check_CronTab();">
                          <option value="1">Sitronizar VIP</option>
                          <option value="2">Sitronizar Chars Banidos</option>
                          <option value="3">Sitronizar Contas Banidas</option>
                          <option value="4">Sortear Jogador Online</option>
                          </select></td>
  						</tr>
                        <tr>
  						  <td width="269">Moeda a Receber:</td>
   						  <td width="147"><select name="Moeda" id="Moeda" disabled="disabled">
    					 <option value="" selected="selected" disabled="disabled">Selecione</option>
   						 <option value="1">{Coin_1}</option>
    					 <?php
						 if(constant("Coin_Number") >= 2) { echo("<option value=\"2\">{Coin_2}</option>"); }
   						 if(constant("Coin_Number") == 3) { echo("<option value=\"3\">{Coin_3}</option>"); }
						 ?>
    					 </select></td>
  						</tr>
                         <tr>
  						  <td width="269">Quantidade a Receber:</td>
   						  <td width="147"><input type="text" name="Number" id="Number" onkeypress="return NumbersOnly(event);"  disabled="disabled" /></td>
  						</tr>
 						 <tr>
  						  <td>Dia para o termino do CronTab:</td>
   						  <td><select name="Cron_Day" id="Cron_Day">
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							</select></td>
  						</tr>
  						<tr>
   						 <td>M&ecirc;s para o termino do CronTab:</td>
   						 <td><select name="Cron_Month" id="Cron_Month">
							<option value="January">Janeiro</option>
							<option value="February">Fevereiro</option>
							<option value="March">Mar&ccedil;o</option>
							<option value="April">Abril</option>
							<option value="May">Maio</option>
							<option value="June">Junho</option>
							<option value="July">Julho</option>
							<option value="August">Agosto</option>
							<option value="September">Setembro</option>
							<option value="October">Outubro</option>
							<option value="November">Novembro</option>
							<option value="December">Dezembro</option>
							</select></td>
  						</tr>
 						 <tr>
    						<td>Ano para o termino do CronTab:</td>
    						<td><input type="text" name="Cron_Year" id="Cron_Year" onkeypress="return NumbersOnly(event);" size="5" maxlength="4" /></td>
  						</tr>
  						<tr>
    						<td>Hora para Efetuar o CronTab:</td>
    						<td><input type="text" name="Hour" id="Hour" onkeypress="return NumbersOnly(event);" />	</td>
 						 </tr>
 						 <tr>
   							 <td>Minuto para Efetuar o CronTab:</td>
    						<td><input type="text" name="Minute" id="Minute" onkeypress="return NumbersOnly(event);" /></td>
  						</tr>
				</table>
				<input type="button" value="Adicionar CronTab" onClick="CTM_Load('?pag=paneladmin&str=ADD_CRONTAB&cmd=true','Command','POST',BuscaElementosForm('Add_CronTab'));">
				</form>

	</blockquote>
	<div id="Command"></div>