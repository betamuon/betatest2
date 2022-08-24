<div class="col2">
            <h4>Ranking</h4>
            <blockquote>
            <form name="Gerate_Ranking" id="Gerate_Ranking">
          <table width="100%" border="0">
  <tr>
      <td width="190"><strong><label>Ranking:</label></strong> &nbsp;&nbsp;<select name="Ranking" id="Ranking">
    <option value="" disabled="disabled" selected="selected">Selecione</option>
 <option value="" disabled="disabled" style="font-weight: bold; font-style: italic;">Reset's</option>
    <option value="2">Diarios</option>
    <option value="3">Semanais</option>
    <option value="1">Total</option>  
    <option value="" disabled="disabled" style="font-weight: bold; font-style: italic;">Master Reset's</option>
    <option value="12">Diarios</option>
    <option value="13">Semanais</option>
    <option value="5">Total</option>
    <option value="" disabled="disabled" style="font-weight: bold; font-style: italic;">PK's</option>
    <option value="15">Diarios</option>  
    <option value="16">Semanais</option>
    <option value="7">Total</option>
    <option value="" disabled="disabled" style="font-weight: bold; font-style: italic;">Hero's</option> 
    <option value="18">Diarios</option>
    <option value="19">Semanais</option>
    <option value="20">Total</option> 
    <option value="" disabled="disabled" style="font-weight: bold; font-style: italic;">Guild's</option> 
    <option value="6">Total</option> 
    <option value="" disabled="disabled" style="font-weight: bold; font-style: italic;">Horas Online</option> 
    <option value="21">Diarios</option>
    <option value="22">Semanais</option>
    <option value="24">Total</option> 
    <?php
    global $_Ranking;
    if($_Ranking["Gens"]["Enable"] == true)
    {
    ?>
    <option value="9">Gens</option>
    <? } ?>
    <option value="" disabled="disabled" style="font-weight: bold; font-style: italic;">Trofeu</option>  
    <option value="10">Total</option> 
    <option value="" disabled="disabled" style="font-weight: bold; font-style: italic;">Medalha</option>  
    <option value="11">Total</option>
    </select></td>
    <td width="171"><strong><label>Top:</label></strong> &nbsp;&nbsp;<select name="Top_Rank" id="Top_Rank">
    <option value="" disabled="disabled" selected="selected">Selecione</option>
    {TopRank_List}
    </select></td>
    <td width="122"><input type="button" value="Gerar Ranking" onclick="CTM_Load('?pag=ranking&name=ixi','Ranking_Result','POST',BuscaElementosForm('Gerate_Ranking'));"></td>
  </tr>
</table>
</form>
            </blockquote>  
            <div id="Ranking_Result"><?php 
            if($_GET['name'] == "ixi"){
                    if($_POST['Ranking'] > 9)
                        {
                            echo "<script>CTM_Load('?pag=meuranking&cmd=true','Ranking_Result','POST',BuscaElementosForm('Gerate_Ranking'));</script>"; 
                        }
                   else 
                   {
                       echo "<script>CTM_Load('?pag=ranking&cmd=true','Ranking_Result','POST',BuscaElementosForm('Gerate_Ranking'));</script>";
                   }     
            }
            ?>
            {Ranking_Result}</div>
</div>