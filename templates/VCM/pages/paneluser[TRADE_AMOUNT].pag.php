<h4>Trocar Moedas</h4>
			<blockquote>
Seu saldo de {Coin_1} <span class="colr">{Status_Coin#1}</span><br />
<?php
if(constant("Coin_Number") == 3)
{
?>
Seu saldo de {Coin_3} <span class="colr">{Status_Coin#3}</span><br />
<? } ?>
<br />
Trocar {Coin_2} por {Coin_1} - Pre&ccedil;o de cada {Coin_1} <span class="colr">{Price#1}</span><br />
<?php
if(constant("Coin_Number") == 3)
{
?>
Trocar {Coin_3} por {Coin_1} - Pre&ccedil;o de cada {Coin_1} <span class="colr">{Price#2}</span><br />
<? } ?>
<br />
<form name="Trade_Amount" id="Trade_Amount">
<table width="340" border="0">
  <tr>
    <td width="136"><strong>Tipo de Troca:</strong></td>
    <td width="194"><input type="radio" name="Trade_Option" id="Trade_Option" value="1"> {Coin_2} por {Coin_1}
    <?php
	if(constant("Coin_Number") == 3)
	{
	?>
    <br /><input type="radio" name="Trade_Option" id="Trade_Option" value="2">      
       {Coin_3} por {Coin_1}<br />
    <? } ?></td>
  </tr>
  <tr>
    <td width="110"><strong>Quantidade:</strong></td>
    <td width="100"><input type="text" name="Coin_Number" id="Coin_Number" onkeypress="return NumbersOnly(event);" size="6" /></td>
  </tr>
</table>
<input type="button" value="Trocar" onClick="CTM_Load('?pag=paneluser&str=TRADE_AMOUNT&cmd=true', 'Command', 'POST',BuscaElementosForm('Trade_Amount'));">
</form>
</blockquote>
<div id="Command"></div>
<blockquote>
- Coloque a quantidade de Cashs a Receber, Ou Seja voc&ecirc; tem 500 Golds, ent&acirc;o em <b>Quantidade</b> coloque : 5
<br>
<br>
<b>100 Golds Equivale a 1 Cashs</b> !
<br>
<b>100 Monster Point Equivale a 5 Cashs</b> !
</blockquote>