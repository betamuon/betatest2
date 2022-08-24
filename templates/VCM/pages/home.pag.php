<center><b><MARQUEE HEIGHT=20 WIDTH=400 DIRECTION=LEFT SCROLLAMOUNT=5>Servidor Online - Cadastre-se agora mesmo!!! </MARQUEE></center></b>
<?php if(constant("L_Slide") == true){ ?>
<div class="box">
	<script type="text/javascript" src="templates/{Template_Dir}/media/scripts/script.js"></script>
	<div id="slide">
		<div id="coin-slider">
			<a href="<?=L_LinkSlide?>" target="_blank"><img src="<?=L_ImgSlide?>" width="555" height="155" alt=""></a>
			<a href="<?=L_LinkSlide2?>" target="_blank"><img src="<?=L_ImgSlide2?>" width="555" height="155" alt=""></a>
			<a href="<?=L_LinkSlide3?>" target="_blank"><img src="<?=L_ImgSlide3?>" width="555" height="155" alt=""></a>
			<a href="<?=L_LinkSlide4?>" target="_blank"><img src="<?=L_ImgSlide4?>" width="555" height="155" alt=""></a>
			<a href="<?=L_LinkSlide5?>" target="_blank"><img src="<?=L_ImgSlide5?>" width="555" height="155" alt=""></a>
		</div>
	</div>
</div>
<?php
}if(constant("Show_News") == true)
{
?>
    	<div class="box">
            <div class="header">Not&iacute;cias do Servidor</div>
            	<blockquote>{Show_News}</blockquote>
        </div>
<?php
}
if(constant("Board_News") == true)
{
?>
    	<div class="box">
            <div class="header">Not&iacute;cias do F&oacute;rum</div>
            	<blockquote>{Board_News}</blockquote>
        </div><center><img style="visibility:hidden;width:0px;height:0px;" border=0 width=0 height=0 src="http://c.gigcount.com/wildfire/IMP/CXNID=2000002.0NXC/bT*xJmx*PTEzMzU3MDg1MjAwNDYmcHQ9MTMzNTcwODU*NDUzMSZwPTUzMTUxJmQ9Jmc9MSZvPWRjNTZjZjVhYzJlZTQ5MDhhYzJj/M2Y3MjQzYzhjNDEw.gif" /><embed src="http://www.xatech.com/web_gear/chat/chat.swf" quality="high" width="500" height="385" name="chat" FlashVars="id=173002101&rl=Portuguese" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://xat.com/update_flash.shtml" /><br><small><a target="_BLANK" href="http://xat.com/web_gear/?cb">Get your own Chat Box!</a> <a target="_BLANK" href="http://xat.com/web_gear/chat/go_large.php?id=173002101">Go Large!</a></small><br>

</center>
<?php
}
if(constant("Show_Warning") == true)
{
?>
	{%SHOW_WARNING%}
<?php
}
if(constant("Siege_Enable") == true)
{
?>        
        <div class="box">
        	<div class="header">&raquo; Castle Siege</div>
        	<div id="castle-siege">
			<?php
			global $CTM_MSSQL;
            $queryco = $CTM_MSSQL->query("SELECT OWNER_GUILD,CONVERT(varchar(5),SIEGE_END_DATE,3) FROM ".MuGen_DB.".dbo.MuCastle_DATA ORDER BY MAP_SVR_GROUP");			
            $guildocs = mssql_fetch_array($queryco);
            echo("<p id=\"castle\">Dona do Castelo: 
			<a href=\"javascript: void(EffectWeb);\" onclick=\"CTM_Load('?pag=search&guild=".urlencode($guildocs[0])."','conteudo','GET');\">".$guildocs[0]."</a></p>");
            $query = $CTM_MSSQL->query("SELECT G_Mark, G_Master FROM ".MuGen_DB.".dbo.Guild WHERE G_Name='".$guildocs[0]."'");
            $guildcs = mssql_fetch_array($query);
            echo ("<p id=\"nextbattle\">Pr&oacute;ximo confronto: <span class=\"red\">".L_DateCSiege." &agrave;s ".Siege_Hour."h.</span></p>");
            ?>                
            </div>
        </div>
<?php } ?>
        <div class="box">
        	<div class="header">&bull; Rankings</div>
				<div id="outer-div">

                <div id="all-tops">
                    <ul class="rank">
    					<li>
                            <span class="title-r">Top Resets</span>
						<?php
                            global $CTM_MSSQL;
                            $query = $CTM_MSSQL->query("SELECT TOP 1 Name,".Resets.",CTM_Image FROM ".MuGen_DB.".dbo.Character WHERE CtlCode < 8 ORDER BY ".Resets." DESC");
                            $cont = NULL;
							while($topresets = mssql_fetch_array($query)){
							$cont++;
							if($topresets[2] == NULL OR empty($topresets[2]) OR !file_exists(Upload_Img."".$topresets[2]."")){
								$photo = Upload_Img."nophoto.gif";
							}else{
								$photo = Upload_Img."".$topresets[2]."";
							}
							echo '<ul><a href="javascript: void(EffectWeb);" onclick="CTM_Load(\'?pag=search&amp;char='.$topresets[0].'\', \'conteudo\',\'GET\');">
							<li>'.$topresets[0].'</li>
							<li><img src="'.$photo.'" width="95" height="100" alt="'.$topresets[0].'"></li>
							<li>( '.$topresets[1].' Resets )</li>
							</a></ul>';
							}
                        ?>
                        </li>
                    </ul>
                <div id="all-tops">
                    <ul class="rank">
    					<li>
                            <span class="title-r">Top M.Reset</span>
						<?php
                            global $CTM_MSSQL;
                            $query = $CTM_MSSQL->query("SELECT TOP 1 Name,".mresets.",CTM_Image FROM ".MuGen_DB.".dbo.Character WHERE CtlCode < 8 ORDER BY ".mresets." DESC");
                            $cont = NULL;
							while($topresets = mssql_fetch_array($query)){
							$cont++;
							if($topresets[2] == NULL OR empty($topresets[2]) OR !file_exists(Upload_Img."".$topresets[2]."")){
								$photo = Upload_Img."nophoto.gif";
							}else{
								$photo = Upload_Img."".$topresets[2]."";
							}
							echo '<ul><a href="javascript: void(EffectWeb);" onclick="CTM_Load(\'?pag=search&amp;char='.$topresets[0].'\', \'conteudo\',\'GET\');">
							<li>'.$topresets[0].'</li>
							<li><img src="'.$photo.'" width="95" height="100" alt="'.$topresets[0].'"></li>
							<li>( '.$topresets[1].' M.Resets )</li>
							</a></ul>';
							}
                        ?>
                        </li>
                    </ul>
                    <ul class="rank">
    					<li>
                            <span class="title-r">Top Horas</span>
						<?php
                            global $CTM_MSSQL;
                            $query = $CTM_MSSQL->query("SELECT TOP 1 Name,".horastotal.",CTM_Image FROM ".MuGen_DB.".dbo.Character WHERE CtlCode < 8 ORDER BY ".horastotal." DESC");
                            $cont = NULL;
							while($topresets = mssql_fetch_array($query)){
							$cont++;
							if($topresets[2] == NULL OR empty($topresets[2]) OR !file_exists(Upload_Img."".$topresets[2]."")){
								$photo = Upload_Img."nophoto.gif";
							}else{
								$photo = Upload_Img."".$topresets[2]."";
							}
							echo '<ul><a href="javascript: void(EffectWeb);" onclick="CTM_Load(\'?pag=search&amp;char='.$topresets[0].'\', \'conteudo\',\'GET\');">
							<li>'.$topresets[0].'</li>
							<li><img src="'.$photo.'" width="95" height="100" alt="'.$topresets[0].'"></li>
							<li>( '.$topresets[1].' Horas )</li>
							</a></ul>';
							}
                        ?>
                        </li>
                    </ul>
        
        
                    <ul class="rank">
    					<li>
                            <span class="title-r">Top Pk</span>
								<?php
                                global $CTM_MSSQL;
                                $query = $CTM_MSSQL->query("SELECT TOP 1 Name,".PkRank.",CTM_Image FROM ".MuGen_DB.".dbo.Character WHERE CtlCode < 8 ORDER BY ".PkRank." DESC");
								$cont = NULL;
                                	while($topresets = mssql_fetch_array($query)){
                                	$cont++;
                                    if($topresets[2] == NULL OR empty($topresets[2]) OR !file_exists(Upload_Img."".$topresets[2]."")){
                                        $photo = Upload_Img."nophoto.gif";
                                    }else{
                                        $photo = Upload_Img."".$topresets[2]."";
                                    }
                                    echo '<ul><a href="javascript: void(EffectWeb);" onclick="CTM_Load(\'?pag=search&amp;char='.$topresets[0].'\', \'conteudo\',\'GET\');">
										<li>'.$topresets[0].'</li>
										<li><img src="'.$photo.'" width="95" height="100" alt="Imagem de '.$topresets[0].'"></li>
                                        <li>( '.$topresets[1].' Mortes )</li>
                                    </a></ul>';
                                    }
                                ?>
                        </li>
                    </ul>
        
        
                    <ul class="rank">
    					<li>
                            <span class="title-r">Top Her&oacute;i</span>
								<?php
                                global $CTM_MSSQL;
                                $query = $CTM_MSSQL->query("SELECT TOP 1 Name,".RankingHeroi.",CTM_Image FROM ".MuGen_DB.".dbo.Character WHERE CtlCode < 8 ORDER BY ".RankingHeroi." ASC");
								$cont = NULL;
                                	while($topweek = mssql_fetch_array($query)){
                                	$cont++;
                                    if($topweek[2] == NULL OR empty($topweek[2]) OR !file_exists(Upload_Img."".$topweek[2]."")){
                                        $photo = Upload_Img."nophoto.gif";
                                    }else{
                                        $photo = Upload_Img."".$topweek[2]."";
                                    }
                                    echo '<ul><a href="javascript: void(EffectWeb);" onclick="CTM_Load(\'?pag=search&amp;char='.$topweek[0].'\', \'conteudo\',\'GET\');">
										<li>'.$topweek[0].'</li>
										<li><img src="'.$photo.'" width="95" height="100" alt="Imagem de '.$topweek[0].'"></li>
                                        <li>( '.$topweek[1].' Mortes )</li>
                                    </a></ul>';
                                    }
                                ?>
                        </li>
                    </ul>
                </div>

                <div id="day-tops">
                    <ul class="rank">
    					<li>
                            <span class="title-r">Top Resets</span>
						<?php
                            global $CTM_MSSQL;
                            $query = $CTM_MSSQL->query("SELECT TOP 1 Name,".resetsDay.",CTM_Image FROM ".MuGen_DB.".dbo.Character WHERE CtlCode < 8 ORDER BY ".resetsDay." DESC");
                            $cont = NULL;
							while($topresets = mssql_fetch_array($query)){
							$cont++;
							if($topresets[2] == NULL OR empty($topresets[2]) OR !file_exists(Upload_Img."".$topresets[2]."")){
								$photo = Upload_Img."nophoto.gif";
							}else{
								$photo = Upload_Img."".$topresets[2]."";
							}
							echo '<ul><a href="javascript: void(EffectWeb);" onclick="CTM_Load(\'?pag=search&amp;char='.$topresets[0].'\', \'conteudo\',\'GET\');">
							<li>'.$topresets[0].'</li>
							<li><img src="'.$photo.'" width="95" height="100" alt="'.$topresets[0].'"></li>
							<li>( '.$topresets[1].' Resets )
			</li>


							</a></ul>';
							}
                        ?>
                        </li>
                    </ul>
                <div id="day-tops">
                    <ul class="rank">
    					<li>
                            <span class="title-r">Top M.Reset</span>
						<?php
                            global $CTM_MSSQL;
                            $query = $CTM_MSSQL->query("SELECT TOP 1 Name,".mrdiario.",CTM_Image FROM ".MuGen_DB.".dbo.Character WHERE CtlCode < 8 ORDER BY ".mrdiario." DESC");
                            $cont = NULL;
							while($topresets = mssql_fetch_array($query)){
							$cont++;
							if($topresets[2] == NULL OR empty($topresets[2]) OR !file_exists(Upload_Img."".$topresets[2]."")){
								$photo = Upload_Img."nophoto.gif";
							}else{
								$photo = Upload_Img."".$topresets[2]."";
							}
							echo '<ul><a href="javascript: void(EffectWeb);" onclick="CTM_Load(\'?pag=search&amp;char='.$topresets[0].'\', \'conteudo\',\'GET\');">
							<li>'.$topresets[0].'</li>
							<li><img src="'.$photo.'" width="95" height="100" alt="'.$topresets[0].'"></li>
							<li>( '.$topresets[1].' M.Resets )</li>
							</a></ul>';
							}
                        ?>
                        </li>
                    </ul>
                    <ul class="rank">
    					<li>
                            <span class="title-r">Top Horas</span>

						<?php
                            global $CTM_MSSQL;
                            $query = $CTM_MSSQL->query("SELECT TOP 1 Name,".horasdiario.",CTM_Image FROM ".MuGen_DB.".dbo.Character WHERE CtlCode < 8 ORDER BY ".horasdiario." DESC");
                            $cont = NULL;
							while($topresets = mssql_fetch_array($query)){
							$cont++;
							if($topresets[2] == NULL OR empty($topresets[2]) OR !file_exists(Upload_Img."".$topresets[2]."")){
								$photo = Upload_Img."nophoto.gif";
							}else{
								$photo = Upload_Img."".$topresets[2]."";
							}
							echo '<ul><a href="javascript: void(EffectWeb);" onclick="CTM_Load(\'?pag=search&amp;char='.$topresets[0].'\', \'conteudo\',\'GET\');">
							<li>'.$topresets[0].'</li>
							<li><img src="'.$photo.'" width="95" height="100" alt="'.$topresets[0].'"></li>
							<li>( '.$topresets[1].' Horas )</li>
							</a></ul>';
							}
                        ?>
                        </li>
                    </ul>
        
        
                    <ul class="rank">
    					<li>
                            <span class="title-r">Top Pk</span>
								<?php
                                global $CTM_MSSQL;
                                $query = $CTM_MSSQL->query("SELECT TOP 1 Name,".pkdiario.",CTM_Image FROM ".MuGen_DB.".dbo.Character WHERE CtlCode < 8 ORDER BY ".pkdiario." DESC");
								$cont = NULL;
                                	while($topresets = mssql_fetch_array($query)){
                                	$cont++;
                                    if($topresets[2] == NULL OR empty($topresets[2]) OR !file_exists(Upload_Img."".$topresets[2]."")){
                                        $photo = Upload_Img."nophoto.gif";
                                    }else{
                                        $photo = Upload_Img."".$topresets[2]."";
                                    }
                                    echo '<ul><a href="javascript: void(EffectWeb);" onclick="CTM_Load(\'?pag=search&amp;char='.$topresets[0].'\', \'conteudo\',\'GET\');">
										<li>'.$topresets[0].'</li>
										<li><img src="'.$photo.'" width="95" height="100" alt="Imagem de '.$topresets[0].'"></li>
                                        <li>( '.$topresets[1].' Mortes )</li>
                                    </a></ul>';
                                    }
                                ?>
                        </li>
                    </ul>
        
        
                    <ul class="rank">
    					<li>
                            <span class="title-r">Top Her&oacute;i</span>
								<?php
                                global $CTM_MSSQL;
                                $query = $CTM_MSSQL->query("SELECT TOP 1 Name,".RankingHeroi_Diario.",CTM_Image FROM ".MuGen_DB.".dbo.Character WHERE CtlCode < 8 ORDER BY ".RankingHeroi_Diario." ASC");
								$cont = NULL;
                                	while($topweek = mssql_fetch_array($query)){
                                	$cont++;
                                    if($topweek[2] == NULL OR empty($topweek[2]) OR !file_exists(Upload_Img."".$topweek[2]."")){
                                        $photo = Upload_Img."nophoto.gif";
                                    }else{
                                        $photo = Upload_Img."".$topweek[2]."";
                                    }
                                    echo '<ul><a href="javascript: void(EffectWeb);" onclick="CTM_Load(\'?pag=search&amp;char='.$topweek[0].'\', \'conteudo\',\'GET\');">
										<li>'.$topweek[0].'</li>
										<li><img src="'.$photo.'" width="95" height="100" alt="Imagem de '.$topweek[0].'"></li>
                                        <li>( '.$topweek[1].' Mortes )</li>
                                    </a></ul>';
                                    }
                                ?>
                        </li>
                    </ul>
                </div>

                <div id="week-tops">
					<ul class="rank">
    					<li>
                            <span class="title-r">Top Resets</span>
						<?php
                            global $CTM_MSSQL;
                            $query = $CTM_MSSQL->query("SELECT TOP 1 Name,".resetsWeek.",CTM_Image FROM ".MuGen_DB.".dbo.Character WHERE CtlCode < 8 ORDER BY ".resetsWeek." DESC");
                            $cont = NULL;
							while($topresets = mssql_fetch_array($query)){
							$cont++;
							if($topresets[2] == NULL OR empty($topresets[2]) OR !file_exists(Upload_Img."".$topresets[2]."")){
								$photo = Upload_Img."nophoto.gif";
							}else{
								$photo = Upload_Img."".$topresets[2]."";
							}
							echo '<ul><a href="javascript: void(EffectWeb);" onclick="CTM_Load(\'?pag=search&amp;char='.$topresets[0].'\', \'conteudo\',\'GET\');">
							<li>'.$topresets[0].'</li>
							<li><img src="'.$photo.'" width="95" height="100" alt="'.$topresets[0].'"></li>
							<li>( '.$topresets[1].' Resets )</li>
							</a></ul>';
							}
                        ?>
                        </li>
                    </ul>
                <div id="day-tops">
                    <ul class="rank">
    					<li>
                            <span class="title-r">Top M.Reset</span>
						<?php
                            global $CTM_MSSQL;
                            $query = $CTM_MSSQL->query("SELECT TOP 1 Name,".mrsemanal.",CTM_Image FROM ".MuGen_DB.".dbo.Character WHERE CtlCode < 8 ORDER BY ".mrsemanal." DESC");
                            $cont = NULL;
							while($topresets = mssql_fetch_array($query)){
							$cont++;
							if($topresets[2] == NULL OR empty($topresets[2]) OR !file_exists(Upload_Img."".$topresets[2]."")){
								$photo = Upload_Img."nophoto.gif";
							}else{
								$photo = Upload_Img."".$topresets[2]."";
							}
							echo '<ul><a href="javascript: void(EffectWeb);" onclick="CTM_Load(\'?pag=search&amp;char='.$topresets[0].'\', \'conteudo\',\'GET\');">
							<li>'.$topresets[0].'</li>
							<li><img src="'.$photo.'" width="95" height="100" alt="'.$topresets[0].'"></li>
							<li>( '.$topresets[1].' M.Resets )</li>
							</a></ul>';
							}
                        ?>
                        </li>
                    </ul>
                    <ul class="rank">
    					<li>
                            <span class="title-r">Top Horas</span>
						<?php
                            global $CTM_MSSQL;
                            $query = $CTM_MSSQL->query("SELECT TOP 1 Name,".horassemanal.",CTM_Image FROM ".MuGen_DB.".dbo.Character WHERE CtlCode < 8 ORDER BY ".horassemanal." DESC");
                            $cont = NULL;
							while($topresets = mssql_fetch_array($query)){
							$cont++;
							if($topresets[2] == NULL OR empty($topresets[2]) OR !file_exists(Upload_Img."".$topresets[2]."")){
								$photo = Upload_Img."nophoto.gif";
							}else{
								$photo = Upload_Img."".$topresets[2]."";
							}
							echo '<ul><a href="javascript: void(EffectWeb);" onclick="CTM_Load(\'?pag=search&amp;char='.$topresets[0].'\', \'conteudo\',\'GET\');">
							<li>'.$topresets[0].'</li>
							<li><img src="'.$photo.'" width="95" height="100" alt="'.$topresets[0].'"></li>
							<li>( '.$topresets[1].' Horas )</li>
							</a></ul>';
							}
                        ?>
                        </li>
                    </ul>
        
        
                    <ul class="rank">
    					<li>
                            <span class="title-r">Top Pk</span>
								<?php
                                global $CTM_MSSQL;
                                $query = $CTM_MSSQL->query("SELECT TOP 1 Name,".pksemanal.",CTM_Image FROM ".MuGen_DB.".dbo.Character WHERE CtlCode < 8 ORDER BY ".pksemanal." DESC");
								$cont = NULL;
                                	while($topresets = mssql_fetch_array($query)){
                                	$cont++;
                                    if($topresets[2] == NULL OR empty($topresets[2]) OR !file_exists(Upload_Img."".$topresets[2]."")){
                                        $photo = Upload_Img."nophoto.gif";
                                    }else{
                                        $photo = Upload_Img."".$topresets[2]."";
                                    }
                                    echo '<ul><a href="javascript: void(EffectWeb);" onclick="CTM_Load(\'?pag=search&amp;char='.$topresets[0].'\', \'conteudo\',\'GET\');">
										<li>'.$topresets[0].'</li>
										<li><img src="'.$photo.'" width="95" height="100" alt="Imagem de '.$topresets[0].'"></li>
                                        <li>( '.$topresets[1].' Mortes )</li>
                                    </a></ul>';
                                    }
                                ?>
                        </li>
                    </ul>
        
        
                    <ul class="rank">
    					<li>
                            <span class="title-r">Top Her&oacute;i</span>
								<?php
                                global $CTM_MSSQL;
                                $query = $CTM_MSSQL->query("SELECT TOP 1 Name,".RankingHeroi_Semanal.",CTM_Image FROM ".MuGen_DB.".dbo.Character WHERE CtlCode < 8 ORDER BY ".RankingHeroi_Semanal." ASC");
								$cont = NULL;
                                	while($topweek = mssql_fetch_array($query)){
                                	$cont++;
                                    if($topweek[2] == NULL OR empty($topweek[2]) OR !file_exists(Upload_Img."".$topweek[2]."")){
                                        $photo = Upload_Img."nophoto.gif";
                                    }else{
                                        $photo = Upload_Img."".$topweek[2]."";
                                    }
                                    echo '<ul><a href="javascript: void(EffectWeb);" onclick="CTM_Load(\'?pag=search&amp;char='.$topweek[0].'\', \'conteudo\',\'GET\');">
										<li>'.$topweek[0].'</li>
										<li><img src="'.$photo.'" width="95" height="100" alt="Imagem de '.$topweek[0].'"></li>
                                        <li>( '.$topweek[1].' Mortes )</li>
                                    </a></ul>';
                                    }
                                ?>
                        </li>
                    </ul>
                </div>
            </div>

				<div id="outer-div">

                
            </div>
                
            </div>

			<script type="text/javascript">
				var aba = new JTabControl("outer-div",570,300);
				aba.addTab("all-tops", "Geral");
				aba.addTab("day-tops", "Diario");
				aba.addTab("week-tops", " Semanal");
			</script>
            </div>

<?php
if(constant("Top_Guilds") == true)
{
?>
			<div class="box">
			<div class="header">&raquo; Top Guild</div>
					<?php
                    global $CTM_MSSQL;
                    $query = $CTM_MSSQL->query("SELECT TOP 5 G_Name,G_Mark,G_Score FROM ".MuGen_DB.".dbo.Guild ORDER BY G_Score DESC");
                    $cont = NULL;
                    while($topguilds = mssql_fetch_array($query)){
                    $cont++;
					echo "<ul class=\"rank\">
					<li>
						<ul>
							<a href=\"javascript: void(EffectWeb);\" onclick=\"CTM_Load('?pag=search&guild=".urlencode($topguilds[0])."','conteudo','GET');\">
							<li>".$cont."º - ".$topguilds[0]."</li>
							<li><img src=\"?public=logoGuild&amp;code=".urlencode(bin2hex($topguilds[1]))."\" width=\"90\" height=\"90\" alt=\"\"></li>
							<li>(".$topguilds[2]." Score)</li>
							</a>
						</ul>
					</li>
					</ul>";
				}
                ?>
                </div>
<?php
}
if(constant("Show_ScreenShots") == true)
{
?>
                <div class="box">
                    <div class="header">&raquo; Screenshots</div>
                        <?php
                        global $CTM_MSSQL;
                        $query = $CTM_MSSQL->query("SELECT TOP 5 * FROM ".MSSQL_DB.".dbo.CTM_WebScreenShots ORDER BY Votes DESC");
                        if(empty($query)){
                            echo "<div class=\"info-box\">N&atilde;o h&aacute; ScreenShots adicionadas no momento.</div>";
                        }else{
                            while($ss = mssql_fetch_array($query)){
                            echo '<ul class="rank">
                                <li>
                                <ul><a href="javascript: void(EffectWeb);" onclick="CTM_Load(\'?pag=screenshots&amp;view='.$ss[0].'\', \'conteudo\', \'GET\');">
                                    <li>Autor: '.$ss[2].'</li>
                                    <li><img src="'.Upload_SS.''.$ss[6].'" width="90" height="90" alt=""></li>
                                    <li>('.$ss[3].' Votos)</li>
                                    </a>
                                </ul>
                            </li>
                        </ul>';
                            }
                        }
                        ?>
                </div>
<? } ?>