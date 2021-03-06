<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory-domän',
    'ad_domain_help'			=> 'Detta är ibland samma som din e-post domän, men inte alltid.',
    'is_ad'				        => 'Detta är en Active Directory-server',
	'alert_email'				=> 'Skicka larm till',
	'alerts_enabled'			=> 'Larm aktivt',
	'alert_interval'			=> 'Utgående varningströskel (i dagar)',
	'alert_inv_threshold'		=> 'Inventar Alert tröskel',
	'asset_ids'					=> 'Inventarienummer',
	'audit_interval'            => 'Revisionsintervall',
    'audit_interval_help'       => 'Om du är skyldig att regelbundet fysiskt granska dina tillgångar anger du intervallet i månader.',
	'audit_warning_days'        => 'Gränsvärde för revision varning',
    'audit_warning_days_help'   => 'Hur många dagar i förväg bör vi varna dig när tillgångar beror på revision?',
	'auto_increment_assets'		=> 'Generera automatiskt stigande inventarienummer',
	'auto_increment_prefix'		=> 'Prefix (frivilligt)',
	'auto_incrementing_help'    => 'Aktivera automatisk inkrementering av tillgångs-ID först för att ställa in detta',
	'backups'					=> 'Säkerhetskopior',
	'barcode_settings'			=> 'Streckkodsinställningar',
    'confirm_purge'			    => 'Bekräfta tömning',
    'confirm_purge_help'		=> 'Skriv texten "DELETE" i fältet nedan för att tömma dina borttagna poster. Detta går ej att ångra.',
	'custom_css'				=> 'Anpassad CSS',
	'custom_css_help'			=> 'Fyll i eventuella anpassade CSS-överskridningar du vill använda. Inkludera inte &lt;style&gt;&lt;/style&gt; taggar.',
    'custom_forgot_pass_url'	=> 'Custom Password Reset URL',
    'custom_forgot_pass_url_help'	=> 'This replaces the built-in forgotten password URL on the login screen, useful to direct people to internal or hosted LDAP password reset functionality. It will effectively disable local user forgotten password functionality.',
    'dashboard_message'			=> 'Dashboard Message',
    'dashboard_message_help'	=> 'This text will appear on the dashboard for anyone with permission to view the dashboard.',
	'default_currency'  		=> 'Standardvaluta',
	'default_eula_text'			=> 'Standard EULA',
  'default_language'			=> 'Standardspråk',
	'default_eula_help_text'	=> 'Du kan också associera anpassade EULA till specifika tillgångskategorier.',
    'display_asset_name'        => 'Visa inventarienamn',
    'display_checkout_date'     => 'Visa utcheckningsdatum',
    'display_eol'               => 'Visa EOL i tabellvy',
    'display_qr'                => 'Visa QR-koder',
	'display_alt_barcode'		=> 'Visa 1D streckkod',
	'barcode_type'				=> '2D streckkodstyp',
	'alt_barcode_type'			=> '1D streckkodstyp',
    'eula_settings'				=> 'EULA-inställningar',
    'eula_markdown'				=> 'Detta EULA tillåter <a href="https://help.github.com/articles/github-flavored-markdown/">Github smaksatt markdown</a>.',
    'general_settings'			=> 'Allmänna inställningar',
	'generate_backup'			=> 'Skapa säkerhetskopia',
    'header_color'              => 'Sidhuvudets färg',
    'info'                      => 'Med dessa inställningar kan du anpassa vissa aspekter av din installation.',
    'laravel'                   => 'Laravel Version',
    'ldap_enabled'              => 'LDAP aktiverad',
    'ldap_integration'          => 'LDAP-integration',
    'ldap_settings'             => 'LDAP-inställningar',
    'ldap_login_test_help'      => 'Enter a valid LDAP username and password from the base DN you specified above to test whether your LDAP login is configured correctly. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_login_sync_help'      => 'This only tests that LDAP can sync correctly. If your LDAP Authentication query is not correct, users may still not be able to login. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_server'               => 'LDAP-server',
    'ldap_server_help'          => 'Detta bör börja med ldap: // (för okrypterad eller TLS) eller ldaps: // (för SSL)',
	'ldap_server_cert'			=> 'Validering av LDAP SSL-certifikat',
	'ldap_server_cert_ignore'	=> 'Tillåt ogiltigt SSL-certifikat',
	'ldap_server_cert_help'		=> 'Markera den här kryssrutan om du använder en självtecknad SSL-cert och vill acceptera ett ogiltigt SSL-certifikat.',
    'ldap_tls'                  => 'Använd TLS',
    'ldap_tls_help'             => 'Detta bör endast kontrolleras om du kör STARTTLS på din LDAP-server.',
    'ldap_uname'                => 'LDAP Bind användarnamn',
    'ldap_pword'                => 'LDAP-bindlösenord',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP-filter',
    'ldap_pw_sync'              => 'LDAP-lösenordssynkronisering',
    'ldap_pw_sync_help'         => 'Avmarkera den här rutan om du inte vill behålla LDAP-lösenord synkroniserade med lokala lösenord. Inaktivera detta innebär att dina användare kanske inte kan logga in om din LDAP-server inte är tillgänglig för någon anledning.',
    'ldap_username_field'       => 'Användarnamn fält',
    'ldap_lname_field'          => 'Efternamn',
    'ldap_fname_field'          => 'LDAP förnamn',
    'ldap_auth_filter_query'    => 'LDAP-autentiseringsfråga',
    'ldap_version'              => 'LDAP-version',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_emp_num'              => 'LDAP anställd nummer',
    'ldap_email'                => 'LDAP-e-post',
    'load_remote_text'          => 'Fjärrskript',
    'load_remote_help_text'		=> 'Denna Snipe-IT-installation kan ladda skript från omvärlden.',
    'login_note'                => 'Inloggning Obs',
    'login_note_help'           => 'Välj eventuellt några meningar på din inloggningsskärm, till exempel för att hjälpa personer som har hittat en förlorad eller stulen enhet. Detta fält accepterar <a href="https://help.github.com/articles/github-flavored-markdown/">Github smaksatt markdown</a>',
    'logo'                    	=> 'Logotyp',
    'full_multiple_companies_support_help_text' => 'Begränsa användare (inklusive administratörer) tilldelade företag till företagets tillgångar.',
    'full_multiple_companies_support_text' => 'Full Multiple Companies Support',
    'optional'					=> 'frivillig',
    'per_page'                  => 'Resultat per sida',
    'php'                       => 'PHP-versionen',
    'php_gd_info'               => 'Du måste installera php-gd för att visa QR-koder, se installationsanvisningarna.',
    'php_gd_warning'            => 'PHP Image Processing och GD plugin är INTE installerat.',
    'pwd_secure_complexity'     => 'Lösenordskomplexitet',
    'pwd_secure_complexity_help' => 'Välj vilket lösenordskomplexitetsregler du vill genomdriva.',
    'pwd_secure_min'            => 'Minsta tecken för lösenord',
    'pwd_secure_min_help'       => 'Lägsta tillåtna värde är 5',
    'pwd_secure_uncommon'       => 'Förhindra vanliga lösenord',
    'pwd_secure_uncommon_help'  => 'Detta kommer att tillåta användare att använda vanliga lösenord från de över 10 000 lösenorden som rapporterats vid överträdelser.',
    'qr_help'                   => 'Aktivera QR-koder först för att ställa in detta',
    'qr_text'                   => 'QR Kod Text',
    'setting'                   => 'Miljö',
    'settings'                  => 'inställningar',
    'show_alerts_in_menu'       => 'Show alerts in top menu',
    'show_archived_in_list'     => 'Archived Assets',
    'show_archived_in_list_text'     => 'Show archived assets in the "all assets" listing',
    'site_name'                 => 'Sidnamn',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Slack Settings',
    'slack_integration_help'    => 'Slak integration är valfri, men ändpunkten och kanalen krävs om du vill använda den. För att konfigurera Slack integration måste du först <a href=":slack_link" target="_new">skapa en inkommande webhook</a> på ditt Slack-konto.',
    'snipe_version'  			=> 'Snipe-IT-versionen',
    'system'                    => 'Systeminformation',
    'update'                    => 'Uppdatera inställningarna',
    'value'                     => 'Värde',
    'brand'                     => 'branding',
    'about_settings_title'      => 'Om inställningar',
    'about_settings_text'       => 'Med dessa inställningar kan du anpassa vissa aspekter av din installation.',
    'labels_per_page'           => 'Etiketter per sida',
    'label_dimensions'          => 'Märkdimensioner (tum)',
    'next_auto_tag_base'        => 'Nästa auto-inkrement',
    'page_padding'             => 'Sidmarginaler (tum)',
    'purge'                    => 'Rensa borttagna poster',
    'labels_display_bgutter'    => 'Etikett botten takrännan',
    'labels_display_sgutter'    => 'Etikett sidotång',
    'labels_fontsize'           => 'Etikettstorlek',
    'labels_pagewidth'          => 'Märkbladets bredd',
    'labels_pageheight'         => 'Märkbladshöjd',
    'label_gutters'        => 'Etikettavstånd (tum)',
    'page_dimensions'        => 'Siddimensioner (tum)',
    'label_fields'          => 'Etikett synliga fält',
    'inches'        => 'inches',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Länk till Snipe-IT i e-post',
    'show_url_in_emails_help_text'      => 'Avmarkera den här rutan om du inte vill länka tillbaka till din Snipe-IT-installation i dina e-postfoton. Användbart om de flesta av dina användare aldrig loggar in.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Max miniatyrhöjd',
    'thumbnail_max_h_help'   => 'Maximal höjd i pixlar som miniatyrer kan visas i listningsvyn. Min 25, max 500.',
    'two_factor'        => 'Tvåfaktorautentisering',
    'two_factor_secret'        => 'Tvåfaktorkod',
    'two_factor_enrollment'        => 'Tvåfaktorns inskrivning',
    'two_factor_enabled_text'        => 'Aktivera två faktorer',
    'two_factor_reset'        => 'Återställ tvåfaktorhemligheten',
    'two_factor_reset_help'        => 'Detta kommer att tvinga användaren att anmäla sin enhet med Google Authenticator igen. Detta kan vara användbart om den för närvarande inskrivna enheten är förlorad eller stulen.',
    'two_factor_reset_success'          => 'Tvåfaktorns enhet återställs framgångsrikt',
    'two_factor_reset_error'          => 'Återställningen av tvåfelsenhet misslyckades',
    'two_factor_enabled_warning'        => 'Aktivering av tvåfaktorn om den inte är aktiverad för tillfället tvingar dig omedelbart att verifiera med en Google Auth-registrerad enhet. Du kommer att ha möjlighet att registrera din enhet om du inte är inloggad för närvarande.',
    'two_factor_enabled_help'        => 'Detta aktiverar tvåfaktors autentisering med hjälp av Google Authenticator.',
    'two_factor_optional'        => 'Selective (Användare kan aktivera eller inaktivera om tillåtet)',
    'two_factor_required'        => 'Krävs för alla användare',
    'two_factor_disabled'        => 'Inaktiverad',
    'two_factor_enter_code'	=> 'Ange tvåfaktorkod',
    'two_factor_config_complete'	=> 'Skicka kod',
    'two_factor_enabled_edit_not_allowed' => 'Din administratör tillåter dig inte att redigera den här inställningen.',
    'two_factor_enrollment_text'	=> "Tvåfaktorsautentisering krävs, men din enhet har inte registrerats än. Öppna din Google Authenticator-app och skanna QR-koden nedan för att registrera din enhet. När du har skrivit in din enhet anger du koden nedan",
    'require_accept_signature'      => 'Kräver signatur',
    'require_accept_signature_help_text'      => 'Aktivering av denna funktion kräver att användarna fysiskt loggar av när de accepterar en tillgång.',
    'left'        => 'vänster',
    'right'        => 'höger',
    'top'        => 'topp',
    'bottom'        => 'botten',
    'vertical'        => 'vertikal',
    'horizontal'        => 'horisontell',
    'zerofill_count'        => 'Längd på tillgångstaggar, inklusive zerofill',
);
