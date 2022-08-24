<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="Description" content="MuOnline Shop, powered by Leandro Daldegam" />
<meta name="Keywords" content="MuDKT, MuOnline, Private Servers, Mu, MuServer, MuGlobal, MuChina, MuKorea, Mu Servers, Top Servers, Mu Online, Itens, Shop, MuShop, MuOnline Shop" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Distribution" content="Global" />
<meta name="Author" content="Leandro Daldegam" />
<meta name="Robots" content="index,follow" />
<link rel="stylesheet" href="templates/default/images/Refresh.css" type="text/css" />
<script type="text/javascript" src="modules/ajax.js"></script>
<title>{#TITLE}</title>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
<!-- wrap starts here -->
<div id="wrap">
		
		<!--header -->
		<div id="header"></div>
        
		<!-- menu -->	
		<div id="menu">
			<ul>
                <li><a href="?cmd=Default">Inicio</a></li>
              	<li><a href="?cmd=CatalogSystem">Produtos</a></li>
              	<li><a href="?cmd=HistorySystem">Hist�rico</a></li>
              	<li><a href="?cmd=LogoutSystem">Logout</a></li>
              	<li><a href="../">Voltar para o site</a></li>
			   
			</ul>
		</div>					
			
		<!-- content-wrap starts here -->
		<div id="content-wrap">
				
			  <div id="sidebar">
						<h1>Bem-Vindo {#memb_name}</h1>
							<div class="left-box">
								<ul class="sidemenu">
									<li>Saldo de <strong>{#Golds_Amount}</strong> <?= GOLDNAME; ?></li>
									<li><a href="?cmd=Default">Inicio</a></li>
									<li><a href="?cmd=CatalogSystem">Ver Produtos</a></li>
									<li><a href="?cmd=HistorySystem">Hist�rico de compras</a></li>
									<li><a href="?cmd=ConfirmSystem">Confirmar dep�sitos</a></li>
									<li><a href="?cmd=RecoverLostItemSystem">Recuperar item perdido</a></li>
									<li><a href="?cmd=RecoverBrokenItemSystem">Consertar item quebrado</a></li>
									<li><a href="?cmd=AboutSystem">Sobre o shopping</a></li>	
								</ul>	
							</div>
					  </div>
				
			<div id="main">
			    <h1>Confirmar dep�sitos</h1>
				<script type="text/javascript">
                    function show_hide_blocks(name) 
                    {			
                        if(name == "Opt_Bradesco") 
                        {
                            document.getElementById('Opt_Bradesco').style.display = 'block'; 
                            document.getElementById('Opt_Bradesco_nterminal').disabled = ''; 
                            document.getElementById('Opt_Bradesco_ntransferencia').disabled = ''; 
                            document.getElementById('Opt_Bradesco_agencia_acolhedora').disabled = ''; 
                            document.getElementById('Opt_Bradesco_nsequencia').disabled = ''; 
                        } 
                        else 
                        {
                            document.getElementById('Opt_Bradesco').style.display = 'none';
                            document.getElementById('Opt_Bradesco_nterminal').disabled = 'disabled'; 
                            document.getElementById('Opt_Bradesco_ntransferencia').disabled = 'disabled'; 
                            document.getElementById('Opt_Bradesco_agencia_acolhedora').disabled = 'disabled'; 
                            document.getElementById('Opt_Bradesco_nsequencia').disabled = 'disabled';
                        }
                        if(name == "Opt_Itau") 
                        {
                            document.getElementById('Opt_Itau').style.display = 'block'; 
                            document.getElementById('Opt_Itau_ctr').disabled = ''; 
                            document.getElementById('Opt_Itau_caixa_eletronico').disabled = ''; 
                        } 
                        else 
                        {
                            document.getElementById('Opt_Itau').style.display = 'none';
                            document.getElementById('Opt_Itau_ctr').disabled = 'disabled'; 
                            document.getElementById('Opt_Itau_caixa_eletronico').disabled = 'disabled';
                        }
                        if(name == "Opt_BBrasil") 
                        {
                            document.getElementById('Opt_BBrasil').style.display = 'block'; 
                            document.getElementById('Opt_BBrasil_nenvelope').disabled = ''; 
                            document.getElementById('Opt_BBrasil_ndocumento').disabled = ''; 
                        } 
                        else 
                        {
                            document.getElementById('Opt_BBrasil').style.display = 'none';
                            document.getElementById('Opt_BBrasil_nenvelope').disabled = 'disabled'; 
                            document.getElementById('Opt_BBrasil_ndocumento').disabled = 'disabled';
                        }
                        if(name == "Opt_CXEcon") 
                        {
                            document.getElementById('Opt_CXEcon').style.display = 'block'; 
                            document.getElementById('Opt_CXEcon_nterminal').disabled = ''; 
                        } 
                        else 
                        {
                            document.getElementById('Opt_CXEcon').style.display = 'none';
                            document.getElementById('Opt_CXEcon_nterminal').disabled = 'disabled'; 
                        }
                        if(name == "Opt_Loterica") 
                        {
                            document.getElementById('Opt_Loterica').style.display = 'block'; 
                            document.getElementById('Opt_Loterica_ncontrole').disabled = ''; 
                            document.getElementById('Opt_Loterica_nterminal').disabled = ''; 
                        } 
                        else 
                        {
                            document.getElementById('Opt_Loterica').style.display = 'none';
                            document.getElementById('Opt_Loterica_ncontrole').disabled = 'disabled'; 
                            document.getElementById('Opt_Loterica_nterminal').disabled = 'disabled'; 
                        }
                        if(name == "Opt_CXAqui") 
                        {
                            document.getElementById('Opt_CXAqui').style.display = 'block'; 
                            document.getElementById('Opt_CXAqui_noperador').disabled = '';  
                        }
                        else 
                        {
                            document.getElementById('Opt_CXAqui').style.display = 'none';
                            document.getElementById('Opt_CXAqui_noperador').disabled = 'disabled'; 
                        } 
                        if(name == "Opt_PGSeg")
                        {                                                                 
                            document.getElementById('comment').value = 'Digite aqui o nome e email de cadastro no pagseguro.';                             
                        }
                        else
                        {                                                                      
                            document.getElementById('comment').value = 'M�ximo 200 caracters.';                           
                        }                          
                        return true;
                    }
                </script>
                <div class="quadros">
                   <strong>Aten��o:</strong> <em>A m� utiliza��o deste servi�o pode causar o bloqueio permanente de sua conta.</em>
                </div>
                <br />
                <form method="post" enctype="multipart/form-data" action="?cmd=ConfirmSystem&Write=true" id="FormConfirm">   
                <table cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td style="width:65%" valign="top">
                            Quantia de <?= GOLDNAME; ?><br /><input type="text" name="golds" value="0"  maxlength="10" /> <a href="javascript:void(0);" onclick="javascript:alert('Coloque a quantidade de <?= GOLDNAME; ?> aqui.');">[?]</a><br />
                            Qual banco voc� usou<br />
                                <input name="bank" type="radio" value="Banco Bradesco ou Banco Postal" onclick="javascript:show_hide_blocks('Opt_Bradesco');" /> Banco Bradesco ou Banco Postal<br />
                                <input name="bank" type="radio" value="Banco Itau" onclick="javascript:show_hide_blocks('Opt_Itau');" /> Banco Ita�<br />
                                <input name="bank" type="radio" value="Banco do Brasil" onclick="javascript:show_hide_blocks('Opt_BBrasil');" /> Banco do Brasil<br />
                                <input name="bank" type="radio" value="Caixa Economica Federal" onclick="javascript:show_hide_blocks('Opt_CXEcon');" /> Caixa Econ�mica Federal<br />
                                <input name="bank" type="radio" value="Loterica" onclick="javascript:show_hide_blocks('Opt_Loterica');" /> Lot�rica<br />
                                <input name="bank" type="radio" value="Caixa Aqui" onclick="javascript:show_hide_blocks('Opt_CXAqui');" /> Caixa Aqui<br />
                                <input name="bank" type="radio" value="PagSeguro" onclick="javascript:show_hide_blocks('Opt_PGSeg');" /> PagSeguro<br />
                            Digite o codigo abaixo<br /><img src="modules/captcha.php?temp=<?=mktime();?>" /><br /><input name="captcha" type="text" maxlength="8" />
                        </td>
                        <td style="width:35%">
                            <div id="Opt_Bradesco" style="display:none;">
                                N�mero terminal<br /><input name="nterminal" id="Opt_Bradesco_nterminal" type="text" maxlength="15" /><br />
                                N�mero transfer�ncia<br /><input name="ntransferencia" id="Opt_Bradesco_ntransferencia" type="text" maxlength="15" /><br />
                                Ag�ncia acolhedora<br /><input name="agencia_acolhedora" id="Opt_Bradesco_agencia_acolhedora" type="text" maxlength="15" /><br />
                                N�mero Sequ�ncia<br /><input name="nsequencia" id="Opt_Bradesco_nsequencia" type="text" maxlength="15" /><br />
                            </div>
                            <div id="Opt_Itau" style="display:none;">
                                CTR<br /><input name="ctr" id="Opt_Itau_ctr" type="text" maxlength="15" /><br />
                                Caixa Eletr�nico<br /><input name="caixa_eletronico" id="Opt_Itau_caixa_eletronico" type="text" maxlength="15" value="Ex: 123456/1234" /><br />
                            </div>
                            <div id="Opt_BBrasil" style="display:none;">
                                N�mero Envelope<br /><input name="nenvelope" id="Opt_BBrasil_nenvelope" type="text" maxlength="15" /><br />
                                N�mero Documento<br /><input name="ndocumento" id="Opt_BBrasil_ndocumento" type="text" maxlength="15" /><br />
                            </div>
                            <div id="Opt_CXEcon" style="display:none;">
                                N�mero do terminal<br /><input name="nterminal" id="Opt_CXEcon_nterminal" type="text" maxlength="15" /><br />
                            </div>
                            <div id="Opt_Loterica" style="display:none;">
                                N�mero de controle<br /><input name="ncontrole" id="Opt_Loterica_ncontrole" type="text" maxlength="15" /><br />
                                N�mero do terminal<br /><input name="nterminal" id="Opt_Loterica_nterminal" type="text" maxlength="15" /><br />
                            </div> 
                            <div id="Opt_CXAqui" style="display:none;">
                                N�mero do operador<br /><input name="noperador" id="Opt_CXAqui_noperador" type="text" maxlength="15" /><br />
                            </div> 
                            
                            Data<br /><input name="data" type="text" maxlength="10" value="Ex: 01/01/2000" /><br />
                            Hora<br /><input name="hora" type="text" maxlength="8" value="Ex: 00:00:00" /><br />
                            Valor pago<br /><input name="valor" type="text" maxlength="10" value="R$ 0.00" /><br />
                            Pago em<br /><select name="pago_em" /><option></option><option value="Atendente">Atendente</option><option value="Auto Atendimento">Auto Atendimento</option><option value="Trans. Eletr�nica">Trans. Eletr�nica</option></select><br />
                            Anexo Comprovante<br /><input type="file" name="image" id="image" size="10" /> <a href="javascript:void(0);" onclick="javascript: document.getElementById('image').value = '';">[x]</a>&nbsp;<a href="javascript:void(0);" onclick="javascript:alert('Somente fotos com a extenss�o JPG.');">[?]</a><br />   
                            Coment�rio<br /><textarea rows="5" style="width:200px" name="comment">M�ximo 200 caracters.</textarea>
                        </td>  
                    </tr>
                </table>
                <input type="submit" value="Enviar Confirma��o" class="button" /> 
                </form>
                {#ResponseTpl}
            </div>
		<!-- content-wrap ends here -->	
		</div>
					
		<!--footer starts here-->
		<div id="footer">
        	<p>&copy; <? echo date("Y"); ?> <strong>{#TITLE}</strong> | Powered by Leandro Daldegam | P�gina gerada em: {#Time} secs. | <a href="admin/">[AdminSystem]</a></p>
        </div>	

<!-- wrap ends here -->
</div>


</body>
</html>