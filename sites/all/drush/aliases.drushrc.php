<?php

$aliases['dev'] = array(
	'uri'=> 'cameroncollision.com',
	'root' => '/home/staging/subdomains/cameroncollision/public_html',
	'remote-host'=> 'host.ccistudios.com',
	'remote-user'=> 'staging',
	'path-aliases'=> array(
		'%files'=> 'sites/default/files',
	),
	'ssh-options'=>'-p 37241'
);

$aliases['live'] = array(
	'uri'=> 'cameroncollision.com',
	'root' => '/home/cameron/subdomains/live/public_html',
	'remote-host'=> 'host.cciserver2.com',
	'remote-user'=> 'cameron',
	'path-aliases'=> array(
		'%files'=> 'sites/default/files',
	)
);
