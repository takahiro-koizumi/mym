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
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

 // local
 $dbname = "mym";
 $dbuser = "root";
 $pwd = "CuLn6V/EKt";
 $dbhost = "localhost";

 // server
 // $dbname = "tkhrkizm_yokohamaupohs";
 // $dbuser = "tkhrkizm_yupohs";
 // $pwd = "i9TWSJrCnGzKX7";
 // $dbhost = "mysql2108.xserver.jp";


// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', $dbname);

/** MySQL データベースのユーザー名 */
define('DB_USER', $dbuser);

/** MySQL データベースのパスワード */
define('DB_PASSWORD', $pwd);

/** MySQL のホスト名 */
define('DB_HOST', $dbhost);

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
 // define('AUTH_KEY',         'put your unique phrase here');
 // define('SECURE_AUTH_KEY',  'put your unique phrase here');
 // define('LOGGED_IN_KEY',    'put your unique phrase here');
 // define('NONCE_KEY',        'put your unique phrase here');
 // define('AUTH_SALT',        'put your unique phrase here');
 // define('SECURE_AUTH_SALT', 'put your unique phrase here');
 // define('LOGGED_IN_SALT',   'put your unique phrase here');
 // define('NONCE_SALT',       'put your unique phrase here');

 // 変更
 define('AUTH_KEY',         'dMS%|+]BJr%<WlBECx(b4uc+-FytU5JF/7y)e-UB@$|N?6hvu_-(Jjcu-6 Y3/Ec');
 define('SECURE_AUTH_KEY',  '&GML8/y~[q)`}RT4&C2(1|& iQLRQBcI%bZ+zV+S;hpwg#T~WIB`wm*]wm;$nyy*');
 define('LOGGED_IN_KEY',    'oBrOWJDn6o40^2%`#|Q0(QSSDVKAl$]e>9Ehg:BT@(`Z_?P11}Bt19L#Hn;{(D1v');
 define('NONCE_KEY',        ')o#u5+Cv:KEV8P3cNI>VUbQmfoyRG,@[b:q~Gr]T-aJ^8U(<dD8mlNrwgA$vb@^Z');
 define('AUTH_SALT',        's19>;rp# a&Sn2A3-stYy4>|B6le7|d>m-},H^&5V|VJW}Q=-zI>2P#BGF`fLh`V');
 define('SECURE_AUTH_SALT', '2%(tOK-O|}-c3N&pvd)]N/82h8,++17zmzI|<-~SusTgk.)=-.D8LxMf@h^|JxhJ');
 define('LOGGED_IN_SALT',   'Ym-gXL)FYMg[PvuZX}>c +k5}pkzMrZi.(DkUA%XZ#DOxr3GDN imN/F>Rl-L0|O');
 define('NONCE_SALT',       '{$1?QUxupv:+mR+sZapo0<+p11_aXE.d]~~x160Z{=|zj`e<T[KQ-.&>w!>khq5*');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */


 define('WP_DEBUG', true);
 define('FS_METHOD','direct');

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
