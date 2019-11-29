<!-- <?php
// /* caminho absoluto para a pasta do sistema */
// if ( !defined('ABSPATH') )
// 	define('ABSPATH', dirname(__FILE__) . '/');
// 	//print_r(ABSPATH);

// /* caminho no server para o sistema */
// if ( !defined('BASEURL') )
//     define('BASEURL', 'http://localhost/projetomvc2/');
// // print_r(BASEURL);

// #Diretórios Específicos
// define('DIRIMG',BASEURL."img/");
// define('DIRCSS',BASEURL."css/");
// define('DIRFAW',BASEURL."css/fontawesome/css/");
// define('DIRJS',BASEURL."js/"); -->


// global $config;
// //global $db;

// $config = array();

// define("BASE_URL", "http://localhost/");
// $config['dbname'] = 'loja';
// $config['host'] = 'localhost';
// $config['dbuser'] = 'root';
// $config['dbpass'] = '';

// $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// /* O nome do banco de dados*/
// define('DB_NAME', 'loja');

// /* Usuário do banco de dados MySQL */
// define('DB_USER', 'root');

// /* Senha do banco de dados MySQL */
// define('DB_PASSWORD', '');

// /* nome do host do MySQL */
// define('DB_HOST', 'localhost');




// /* caminhos dos templates de header e footer */
// define('HEADER_TEMPLATE', ABSPATH . 'view/header.php');	
// define('FOOTER_TEMPLATE', ABSPATH . 'view/footer.php');	
// /* caminho do arquivo de banco de dados */
// if ( !defined('DBAPI') )
//     define('DBAPI', ABSPATH . 'includes/database.php');


/**Este arquivo de configurações é baseado no wp-config do WordPress. 
 * O  ABSPATH, na linha 17, define o caminho absoluto da pasta deste webapp no sistema de arquivos.
 * 
 * E o BASEURL, na linha 21, define o caminho deste webapp no servidor web.
 * Esse valor deve ser igual ao nome da pasta que você criou no começo do projeto. 
 * Ela será usada para montar os links da aplicação, já que ela guarda a URL inicial.
 * 
*/

/* 
Para se referenciar a uma variável dentro do escopo se usa “ $this-> ”.
Para se referenciar a uma constante dentro do escopo se usa “ self::  ”.
Para se referenciar a uma constante da class estendida se usa “ parent::  “. 
*/