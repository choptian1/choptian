<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'choptian' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`G!=Cmim0C?ED.EYZ(=zJ,kh`F<yLp8}uQwUX}?</(cCnjXs/^R*%R7(^IrJT^8p' );
define( 'SECURE_AUTH_KEY',  '12Qw+?w5w<2eDFy1|OP~A7ONaGxIwYi&#y|0fbD$4;yOmp/@P)! 64EjOfQyGq  ' );
define( 'LOGGED_IN_KEY',    '#J73bhSO4-epvP`L~7{9MoPf+kw8x+4<FKQm6)$695ur{ kCpL]X*toX6zR4augd' );
define( 'NONCE_KEY',        'Da~zpjh_kBJ(NXy6_,zrR)Lu9,@Ayv`cfFQTYZDZ>HsAk*HF${Gk3WT>CIxUdd^[' );
define( 'AUTH_SALT',        'Jc1jP,%S:a/+z~3ua-w]F]_#?&wV,Wk.^:*)/?i~9eCbb<@@]$,9DZboDtH%hM=D' );
define( 'SECURE_AUTH_SALT', 'oxZm5E;lS~8?*k! ]#tniaa+U>LxA&t9 WcL7!U5V*rgjRyX%O9U;xe}7IN kpl3' );
define( 'LOGGED_IN_SALT',   ',{I:F[=.g|a?m@Aaf$!^Krs Ncjl951rd;Bt5K2Qw68B?f8eu(cB}0Ui9<TTKZsU' );
define( 'NONCE_SALT',       'sZR<tNl0V8K%XFrl:svNs`@o1NYjW,yLgQU,mUSa+(gjj/ DQpWR>)ogY 09cgX ' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
