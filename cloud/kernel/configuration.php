<?php
	
	
	/*
		Info:
		Configuraciones simples, redirecciones y otros.
	*/
	

	/*
		Heading Website
	*/
	define("HEADING", "Cloud Teamspeak 3 | Division Zero");
	
	
	/*
		Language from your Webinterface (default: english)
	*/
	define("LANGUAGE", "english");
	
	/*
		Info:
		Avanzado, estas configuraciones son 100% editables, pero te aconsejamos tener cuidado.
	*/

	
	/*
		SQL Login Information
	*/
	define("SQL_Hostname", "");
	define("SQL_Database", "");
	define("SQL_Username", "");
	define("SQL_Password", "");
	define("SQL_Port", "3306");
	define("SQL_Mode", "mysqli");
	define("SQL_SSL", "0");



	/*
		Configuración por defecto del TS3
	*/
	$ts3_server_default['servername']						=	'Teamspeak 3 Server - Division Zero';
	$ts3_server_default['slots']								=	'10';
	$ts3_server_default['welcome_message']					=	'Bienvenido a este nuevo teamspeak 3 - Ofrecido por Division Zero.';
	$ts3_server_default['reserved_slots']					=	'0';
	$ts3_server_default['password']							=	'';
	
	$ts3_server_default['host_message']						=	'';
	$ts3_server_default['host_message_show']					=	'0';				// Host message show 0=No message 1=Show message in Log 2=Show modal message 3=Modal message and exit
	$ts3_server_default['host_url']							=	'';
	$ts3_server_default['host_banner_url']					=	'';
	$ts3_server_default['host_banner_int']					=	'';
	$ts3_server_default['host_button_gfx']					=	'';
	$ts3_server_default['host_button_tip']					=	'';
	$ts3_server_default['host_button_url']					=	'';
	
	$ts3_server_default['auto_ban_count']					=	'';
	$ts3_server_default['auto_ban_time']						=	'';
	$ts3_server_default['remove_time']						=	'';
	
	$ts3_server_default['points_tick_reduce']				=	'';
	$ts3_server_default['points_needed_block_cmd']			=	'';
	$ts3_server_default['points_needed_block_ip']			=	'';
	
	$ts3_server_default['upload_bandwidth_limit']			=	'';
	$ts3_server_default['upload_quota']						=	'';
	$ts3_server_default['download_bandwidth_limit']			=	'';
	$ts3_server_default['download_quota']					=	'';
	
	$ts3_server_default['virtualserver_log_client']			=	'1';				// Log Clients no=0 yes=1
	$ts3_server_default['virtualserver_log_query']			=	'0';				// Log Query no=0 yes=1
	$ts3_server_default['virtualserver_log_channel']			=	'0';				// Log Channel no=0 yes=1
	$ts3_server_default['virtualserver_log_permissions']		=	'1';				// Log Permissions no=0 yes=1
	$ts3_server_default['virtualserver_log_server']			=	'1';				// Log Server no=0 yes=1
	$ts3_server_default['virtualserver_log_filetransfer']	=	'0';				// Log Filetransfer no=0 yes=1



?>