<h6 class="red">&raquo; Editar CronTab</h6>
	   <blockquote>
	   <form name="Edit_CronTab" id="Edit_CronTab">
						<table width="340" border="0">
                         <tr>
  						  <td width="269">Tarefa:</td>
   						  <td width="147"><select name="CronTab" id="CronTab" onchange="Check_CronTab();">
                          <option value="1" {Check_CronTab#1}>Sitronizar VIP</option>
                          <option value="2" {Check_CronTab#2}>Sitronizar Chars Banidos</option>
                          <option value="3" {Check_CronTab#3}>Sitronizar Contas Banidas</option>
                          <option value="4" {Check_CronTab#4}>Sortear Jogador Online</option>
                          </select></td>
  						</tr>
                         <tr>
  						  <td width="269">Quantidade a Receber:</td>
   						  <td width="147"><input type="text" name="Number" id="Number" onkeypress="return NumbersOnly(event);"  disabled="disabled" value="{CronTab_Number}" /></td>
  						</tr>
 						 <tr>
  						  <td>Dia para o termino do CronTab:</td>
   						  <td><select name="Cron_Day" id="Cron_Day">
							<option value="01" {Check_Day#01}>01</option>
							<option value="02" {Check_Day#02}>02</option>
							<option value="03" {Check_Day#03}>03</option>
							<option value="04" {Check_Day#04}>04</option>
							<option value="05" {Check_Day#05}>05</option>
							<option value="06" {Check_Day#06}>06</option>
							<option value="07" {Check_Day#07}>07</option>
							<option value="08" {Check_Day#08}>08</option>
							<option value="09" {Check_Day#09}>09</option>
							<option value="10" {Check_Day#10}>10</option>
							<option value="11" {Check_Day#11}>11</option>
							<option value="12" {Check_Day#12}>12</option>
							<option value="13" {Check_Day#13}>13</option>
							<option value="14" {Check_Day#14}>14</option>
							<option value="15" {Check_Day#15}>15</option>
							<option value="16" {Check_Day#16}>16</option>
							<option value="17" {Check_Day#17}>17</option>
							<option value="18" {Check_Day#18}>18</option>
							<option value="19" {Check_Day#19}>19</option>
							<option value="20" {Check_Day#20}>20</option>
							<option value="21" {Check_Day#21}>21</option>
							<option value="22" {Check_Day#22}>22</option>
							<option value="23" {Check_Day#23}>23</option>
							<option value="24" {Check_Day#24}>24</option>
							<option value="25" {Check_Day#25}>25</option>
							<option value="26" {Check_Day#26}>26</option>
							<option value="27" {Check_Day#27}>27</option>
							<option value="28" {Check_Day#28}>28</option>
							<option value="29" {Check_Day#29}>29</option>
							<option value="30" {Check_Day#30}>30</option>
							<option value="31" {Check_Day#31}>31</option>
							</select></td>
  						</tr>
  						<tr>
   						 <td>M&ecirc;s para o termino do CronTab:</td>
   						 <td><select name="Cron_Month" id="Cron_Month">
							<option value="January" {Check_Month#01}>Janeiro</option>
							<option value="February" {Check_Month#02}>Fevereiro</option>
							<option value="March" {Check_Month#03}>Mar&ccedil;o</option>
							<option value="April" {Check_Month#04}>Abril</option>
							<option value="May" {Check_Month#05}>Maio</option>
							<option value="June" {Check_Month#06}>Junho</option>
							<option value="July" {Check_Month#07}>Julho</option>
							<option value="August" {Check_Month#08}>Agosto</option>
							<option value="September" {Check_Month#09}>Setembro</option>
							<option value="October" {Check_Month#10}>Outubro</option>
							<option value="November" {Check_Month#11}>Novembro</option>
							<option value="December" {Check_Month#12}>Dezembro</option>
							</select></td>
  						</tr>
 						 <tr>
    						<td>Ano para o termino do CronTab:</td>
    						<td><input type="text" name="Cron_Year" id="Cron_Year" onkeypress="return NumbersOnly(event);" size="5" maxlength="4" value="{CronTab_Year}" /></td>
  						</tr>
  						<tr>
    						<td>Hora para Efetuar o CronTab:</td>
    						<td><input type="text" name="Hour" id="Hour" onkeypress="return NumbersOnly(event);"  value="{CronTab_Hour}"/>	</td>
 						 </tr>
 						 <tr>
   							 <td>Minuto para Efetuar o CronTab:</td>
    						<td><input type="text" name="Minute" id="Minute" onkeypress="return NumbersOnly(event);" value="{CronTab_Minute}" /></td>
  						</tr>
                        <tr>
    						<td>Ativar/Desativar CronTab:</td>
    						<td><label>
      						<input type="checkbox" name="CronTab_Enable" id="CronTab_Enable" {Check_Enable} />
    						</label></td>
 						</tr>
				</table>
				<input type="button" value="Editar CronTab" onClick="CTM_Load('?pag=paneladmin&str=EDIT_CRONTAB&cmd=true&id={CronTab_ID}','Command','POST',BuscaElementosForm('Edit_CronTab'));">
				</form>

	</blockquote>
	<div id="Command"></div>