<?php
/**
 * Translation file
 *
 * Note: don't change the return array to short notation because Transifex can handle those during `tx push -s`
 */

return array(
	// menu
	'admin:develop_tools' => 'ツール',
	'admin:develop_tools:sandbox' => 'テーマの見本',
	'admin:develop_tools:inspect' => '内部を見る',
	'admin:inspect' => '内部を見る',
	'admin:develop_tools:unit_tests' => 'ユニットテスト',
	'admin:develop_tools:entity_explorer' => 'Entity Explorer',
	'admin:developers' => '開発者',
	'admin:developers:settings' => 'セッティング',

	// settings
	'elgg_dev_tools:settings:explanation' => '開発とデバッグの設定をしてください。いくつかのセッティングは別のadminページででも行えます。',
	'developers:label:simple_cache' => 'Simple cacheを使用する',
	'developers:help:simple_cache' => '開発中はファイルキャシュをオフにしてください。せっかくview（cssも含む）を変更しても、それが反映されないことがあります。',
	'developers:label:system_cache' => 'システムキャッシュを使用する',
	'developers:help:system_cache' => '開発中は、これをオフにしてください。せっかくプラグインの変更を行なっても、登録されないでしょう。',
	'developers:label:debug_level' => "トレースレベル",
	'developers:help:debug_level' => "ログ情報の量を調節します。詳しくは、elgg_log()を参照してください。",
	'developers:label:display_errors' => '致命的なPHPエラーを表示します',
	'developers:help:display_errors' => "デフォルトでは、Elggの .htaccessファイルが致命的エラーの表示を抑制しています。",
	'developers:label:screen_log' => "画面にログを出力",
	'developers:help:screen_log' => "elgg_log()とelgg_dump()の出力と、DBクエリの数を表示します。",
	'developers:label:show_strings' => "翻訳を表示する代わりに翻訳キーを表示します",
	'developers:help:show_strings' => "elgg_echo()で使われる翻訳キー(\$message_key)を表示します。",
	'developers:label:show_modules' => "コンソールにロードされた AMD モジュールを表示する",
	'developers:help:show_modules' => "ロードされたモジュールや値をあなたの JavaScript コンソールに配信します。",
	'developers:label:wrap_views' => "Wrap views",
	'developers:help:wrap_views' => "This wraps almost every view with HTML comments. Useful for finding the view creating particular HTML.
									This can break non-HTML views in the default viewtype. See developers_wrap_views() for details.",
	'developers:label:log_events' => "イベントとプラグインhooksを記録する",
	'developers:help:log_events' => "イベントとプラグインhooksをログに記録します。【警告】１ページでも、たくさん吐き出しますので注意してください。",
	'developers:label:show_gear' => "adminエリアの外側で %s を使用する",
	'developers:help:show_gear' => "ビューポートの右下のアイコン。それを通してadminsが開発用設定とリンクにアクセスできるようになります。",
	'developers:label:block_email' => "Block all outgoing e-mails",
	'developers:help:block_email' => "You can block outgoing e-mail to regular users or to all users",
	'developers:label:forward_email' => "Forward all outgoing e-mails to one address",
	'developers:help:forward_email' => "All outgoing e-mails will be sent to the configured e-mail address",
	'developers:label:enable_error_log' => "Enable error log",
	'developers:help:enable_error_log' => "Maintain a separate log of errors and messages logged to the error_log() based on your trace level setting. The log is viewable via admin interface.",

	'developers:label:submit' => "キャッシュの保存と消去",

	'developers:block_email:forward' => 'Forward all e-mails',
	'developers:block_email:users' => 'Only regular users',
	'developers:block_email:all' => 'Admins and regular users',
	
	'developers:debug:off' => 'Off',
	'developers:debug:error' => 'Error',
	'developers:debug:warning' => 'Warning',
	'developers:debug:notice' => 'Notice',
	'developers:debug:info' => 'Info',
	
	// entity explorer
	'developers:entity_explorer:help' => 'View information about entities and perform some basic actions on them.',
	'developers:entity_explorer:guid:label' => 'Enter the guid of the entity to inspect',
	'developers:entity_explorer:info' => 'Entity Information',
	'developers:entity_explorer:info:attributes' => 'Attributes',
	'developers:entity_explorer:info:metadata' => 'メタデータ',
	'developers:entity_explorer:info:relationships' => '関連',
	'developers:entity_explorer:info:private_settings' => 'Private Settings',
	'developers:entity_explorer:info:owned_acls' => 'Owned Access Collections',
	'developers:entity_explorer:info:acl_memberships' => 'Access Collections Memberships',
	'developers:entity_explorer:delete_entity' => 'Remove this entity',
	'developers:entity_explorer:inspect_entity' => 'Inspect this entity',
	
	// inspection
	'developers:inspect:help' => 'Elggフレームワークの構築設定を覗いてみる',
	'developers:inspect:actions' => 'Actions（アクション）',
	'developers:inspect:events' => 'Events（イベント）',
	'developers:inspect:menus' => 'Menus（メニュー）',
	'developers:inspect:pluginhooks' => 'Plugin Hooks（プラグイン・フック）',
	'developers:inspect:priority' => '優先度',
	'developers:inspect:simplecache' => 'Simple Cache（シンプル・キャッシュ）',
	'developers:inspect:routes' => 'Routes',
	'developers:inspect:views' => 'Views（ビュー）',
	'developers:inspect:views:all_filtered' => "<b>Note!</b> All view input/output is filtered through these Plugin Hooks:",
	'developers:inspect:views:input_filtered' => "(input filtered by plugin hook: %s)",
	'developers:inspect:views:filtered' => "(plugin hook「 %s 」によってフィルタされています)",
	'developers:inspect:widgets' => 'Widgets（ウィジェット）',
	'developers:inspect:webservices' => 'ウェブサービス',
	'developers:inspect:widgets:context' => 'Context（コンテキスト）',
	'developers:inspect:functions' => 'Functions（関数）',
	'developers:inspect:file_location' => 'File path from Elgg root or controller',
	'developers:inspect:route' => 'Route Name',
	'developers:inspect:path' => 'Path Pattern',
	'developers:inspect:resource' => 'Resource View',
	'developers:inspect:handler' => 'Handler',
	'developers:inspect:controller' => 'Controller',
	'developers:inspect:file' => 'ファイル',
	'developers:inspect:middleware' => 'ファイル',
	'developers:inspect:handler_type' => 'Handled by',
	'developers:inspect:services' => 'Services',
	'developers:inspect:service:name' => 'Name',
	'developers:inspect:service:path' => 'Definition',
	'developers:inspect:service:class' => 'Class',

	// event logging
	'developers:request_stats' => "リクエストの統計(シャットダウンイベントは除きます)",
	'developers:event_log_msg' => "%s: '%s, %s' in %s",
	'developers:log_queries' => "DBクエリ:%s",
	'developers:boot_cache_rebuilt' => "ブートキャッシュはこのリクエストで再構築されます",
	'developers:elapsed_time' => "経過時間(s)",

	// theme sandbox
	'theme_sandbox:intro' => 'イントロダクション',
	'theme_sandbox:breakout' => 'iframe外で表示する',
	'theme_sandbox:buttons' => 'ボダン',
	'theme_sandbox:components' => 'コンポーネント',
	'theme_sandbox:forms' => 'フォーム',
	'theme_sandbox:grid' => 'グリッド',
	'theme_sandbox:icons' => 'アイコン',
	'theme_sandbox:javascript' => 'JavaScript',
	'theme_sandbox:layouts' => 'レイアウト',
	'theme_sandbox:modules' => 'モジュール',
	'theme_sandbox:navigation' => 'ナビゲーション',
	'theme_sandbox:typography' => '文字の体裁',

	'theme_sandbox:icons:blurb' => 'アイコンを表示させるには、 <em>elgg_view_icon($name)</em> または、 elgg-icon-$name クラスを使用してください。',

	// status messages
	'developers:settings:success' => '設定を保存しました',

	'developers:amd' => 'AMD',

	'admin:develop_tools:error_log' => 'Error Log',
	'developers:logs:empty' => 'Error log is empty',
);
