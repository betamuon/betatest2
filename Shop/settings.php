<?php
/*
	@Conexуo com o sql [MuServer];
*/
define("HOST_SQL", "localhost");
define("DATABASE_SQL", "MuOnline");
define("USER_SQL", "sa");
define("PWD_SQL", "l1753ttt");

/*
	@Conexуo com o odbc;
*/
define("DNS_ODBC", "mutrendco");
define("USER_ODBC", "");
define("PWD_ODBC", "");

/*
	@Codificaчуo de items;
	@Para versѕes velhas use: OLD
	@Para versѕes novas use: NEW
*/
define("SYSTEM_ITEMS","NEW"); 

/*
	@Encriptaчуo senha;
*/
define("HASHMD5", false);

/*
	@Colunas e tabelas no SQL;
*/
define("GOLDNAME", "cash"); #Nome da moeda
define("GOLDTABLE", "MEMB_INFO"); #Tabela onde fica a coluna da moeda
define("GOLDCOLUMN", "cash"); #Nome da coluna da moeda
define("GOLDMEMBIDENT", "memb___id"); #Coluna identificadora da moeda            
                             
/*
    @Linguagem do sistema;
    @De acordo com o conteudo da pasta: languages
*/
define("LANGUAGE", "pt-br");

/*
    @Sistema de template;
    @Nome da pasta do template;
*/
define("TEMPLATE", "23920");

/*
    @Nome da sessуo;
*/
define("SESSION_NAME_SHOP", "ojfg0iejh6y4");

/*
    @ Sistema de socket item.
    @ Selecione o seu muserver abaixo
    
    LEGENDA:
       
       0 = Sistema da Webzen original (TNS Games, Diel, Eduardo (welcomevoce, phpnuke))  
       1 = Sistema da SCF / SCFMT (MuMaker)
*/
define("SOCKET_USE_LIB", 0);
?>