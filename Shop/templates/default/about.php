<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="Description" content="dddddm" />
<meta name="Keywords" content="MuDKT, MuOnline, Private Servers, Mu, MuServer, MuGlobal, MuChina, MuKorea, Mu Servers, Top Servers, Mu Online, Itens, Shop, MuShop, MuOnline Shop" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Distribution" content="Global" />
<meta name="Author" content="Leandro Daldegam" />
<meta name="Robots" content="index,follow" />
<link rel="stylesheet" href="templates/default/images/Refresh.css" type="text/css" />
<script type="text/javascript" src="modules/ajax.js"></script>
<title>Beta Shop Auto</title>
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
			    <h1>Sobre o Shopping</h1>
				<p align="justify" class="quadros">
                O servidor <em>{#TITLE}</em> disponibiliza o shop como um meio f�cil para o usu�rio adquirir itens e servi�os dentro do jogo. Este meio � fundamental para a arrecada��o de dinheiro para ajudar a manter o servidor sempre online. Comprando no shop, voc� declara estar ciente de que o servidor n�o se responsabiliza por itens e/ou contas que foram roubadas dentro do servidor, pois quem faz a seguran�a da conta � o pr�prio dono, sendo assim, o servidor se compromete somente a prestar suporte caso haja alguma falha no sistema.
                </p>
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