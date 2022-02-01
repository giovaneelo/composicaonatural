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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bancodados' );

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
define( 'AUTH_KEY',         '/.bB?T)wYt vjV+Fo+,t+NGj^#*,:`^@s@U>G#{Na&nw#_h]4k7D[rJ.#9~s%G/m' );
define( 'SECURE_AUTH_KEY',  'G$,2P*-P9p@0R&d/j!Y)s^c?r~Hv,Jz~PuFTgNy`}~2>j7@},{>>8~n&(^pt+V((' );
define( 'LOGGED_IN_KEY',    '0)F4{w#q;{d2;F>Yd?sn<j/jvSxpPF!60,*A%g^Pn=h?LjV;MbilTWMS,/iX9RYz' );
define( 'NONCE_KEY',        ' ZUmTxPCO]*L7Plx0ZImqhK,v=WkONq_U*`wTO.N>j0GAwWFAI7O5: CFa$D{]f@' );
define( 'AUTH_SALT',        '8_[,QQd;CN1R69[pTh-lYg8|v~cfMu:1 k|#%qIO?:3S>=.[r1:^aJ8pEg[>o?X<' );
define( 'SECURE_AUTH_SALT', 'ke^/{nB|]!u{lZ^V+2C3Jo?L4N9/2iH 9r/_tJ^.@2(L[GZKY:h~UpBgKW~*q,-0' );
define( 'LOGGED_IN_SALT',   'N=npfsmRVn;gyV#.E+lb1B5::nuHB]CDgdg:|EkIL}SaM6vB$C(+19+$SdL4VI^z' );
define( 'NONCE_SALT',       'i_:a6bf}-M4<F3@K$yj(UWS,{Te5KGO1 H65dNiu|+<i6,5M3=+6}~7^!6T,:7]z' );

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
