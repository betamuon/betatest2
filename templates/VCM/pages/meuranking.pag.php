<?php
    if($_GET['cmd'] == TRUE)
        {
             if($_POST['Top_Rank'] == NULL)
                {
                    echo "<div class=\"warning-box\">Selecione o Top Ranking</div>";    
                } 
              switch($_POST['Ranking'])
                {
                    case 10:
                        {
                             $coluna = "trofeu";
                             $xx = "Trofeu";
                             $ordem = "DESC";
                        }
                    break;
                    case 11:
                        {
                              $coluna = "medalha";
                              $xx = "Medalha";
                              $ordem = "DESC"; 
                        }
                    break;  
                    case 12:
                        {
                             $coluna = "mrdiario";
                             $xx = "Master Resets Diario";
                             $ordem = "DESC"; 
                        }
                    break;
                    case 13:
                        {
                             $coluna = "mrsemanal";
                             $xx = "Master Resets Semanal"; 
                             $ordem = "DESC"; 
                        }
                    break;
                    case 15:
                        {
                            $coluna = "pkdiario";
                            $xx = "Pk Diario";
                            $ordem = "DESC";
                        }
                    break;
                    case 16:
                        {
                            $coluna = "pksemanal";
                            $xx = "Pk Semanal";
                            $ordem = "DESC";
                        }
                    break;
                    case 18:
                        {
                            $coluna = "RankingHeroi_diario";
                            $xx = "Hero Diario";
                            $ordem = "ASC";
                        }
                    break;
                    case 19:
                        {
                            $coluna = "RankingHeroi_Semanal";
                            $xx = "Hero Semanal";
                            $ordem = "ASC";
                        }
    break;
                    case 20:
                        {
                            $coluna = "RankingHeroi";
                            $xx = "Hero Total";
                            $ordem = "ASC";
                        }
                    break; 
                    case 21:
                        {
                            $coluna = "horasdiario";
                            $xx = "Horas Diaria";
                            $ordem = "DESC";
                        }
                    break;
                    case 22:
                        {
                            $coluna = "horassemanal";
                            $xx = "Horas Semanal";
                            $ordem = "DESC";
                        }
                    break;
                   case 24:
                        {
                            $coluna = "horastotal";
                            $xx = "Horas Total";
                            $ordem = "DESC";
                        }
 
               
                }  
             $banchar = mssql_query("select top ".$_POST['Top_Rank']." Name,".$coluna." as Resets from MuOnline.dbo.Character ORDER BY ".$coluna." ".$ordem.", Name Asc");    
                (int)$p=1;
            echo '<div class="col2">
              <blockquote>    
            <h4>Ranking</h4>
            <table width="100%" border="0">'; 
             if(mssql_num_rows($banchar) < 1)
                {
                    echo "<div class=\"warning-box\">Nenhum Personagem Encontrado</div>";
                }

            for($x=0;$x<mssql_num_rows($banchar)/2;$x++)
                {
                  echo '<tr>';
                  for($i=0;$i<5;$i++) 
                    {
                      $reset = mssql_fetch_object($banchar);
                      $foto = mssql_fetch_row(mssql_query("select ".CHAR_IMAGE_COLUMN." from MuOnline.dbo.Character where name='".$reset->Name."'"));
                      if($reset->Name == '') 
                        {
                            echo '<td width="25%"></td>';
                        }
                      else
                        { 
                          echo "<td width=\"25%\"  align=\"left\">
                          <center><a style=\" font-weight:none; color:#999;\"href=\"javascript: void(EffectWeb)\" onclick=\"CTM_Load('?pag=search&char=".$reset->Name."','conteudo','GET');\"><span style=\"font-weight:none; color:#999; \">".$p."&ordm;  ".$reset->Name."</span></center>
                          <center><img class=\"image\" style=\"width:112px; height:112px;\" src=\"".Upload_Img.$foto[0]."\"/></center>
                          <center><span style=\"font-weight:none; color:#999; \">".$reset->Resets." (".$xx."(s))</span></a><br /><br /></center>
                          </td>
                          </div>";
                           $p++;
                                }
                      }     
                  }   
                        
            echo '
            </table>
            </blockquote></div>';
        }
?>