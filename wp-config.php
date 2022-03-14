<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp20220305omi2_db' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ks$,^~d$aqpN^U,DuPl(hcefM4|y(1HllIf`PgVWE~NWIvdOP#-Dkja%9N5#S<oU' );
define( 'SECURE_AUTH_KEY',  'Z[!$vT&[{Q<Km~&)PT)+r2oqjX)F-d%ZtdUrIy;VR+M(4!f]f-^gg:|hqP~!%Tq%' );
define( 'LOGGED_IN_KEY',    '}$<zB2pWphPG&l9cPTx=sF5-5)7K_mEl_H(nH>vG1,/&( `qh =X9e8X*m$T3+d6' );
define( 'NONCE_KEY',        '4aC*#y,aC%Td$S%c@&^s^TxO%L{)pBqX|#fkSH4?qWnDY86b^``G.vZ_3,z7Q_/h' );
define( 'AUTH_SALT',        'V,.+L0T1yPs(L1cCBN{7mD~ov`R@4H+A=c15B&$SOQBs#Di8CpDbc![Q2VjeFVP9' );
define( 'SECURE_AUTH_SALT', '9,@m22eP}FJ{mH~[uN;,&b0Gl7(`zeX(KQx=H`sr>]c4tdHE>tZ5>dA2N;v7^(&|' );
define( 'LOGGED_IN_SALT',   '[ZvPm]3@TJw0x?8K%q?f<M@n?s7VNbt,$d_1.jN<Sr#LqOkUQ4DD70F[E%@/kM,D' );
define( 'NONCE_SALT',       'KliE}mWGWc ~BoHC1&}uyBy<hYaXkiu(s`6?T^}gk>DLlRM(;X(@LYmQFjn8C^vb' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
