<?php

$cfg = require __DIR__ . '/../vendor/mediawiki/mediawiki-phan-config/src/config.php';

$cfg['directory_list'] = array_merge(
	$cfg['directory_list'],
	[
		'../../extensions/VisualEditor',
		'../../extensions/Wikibase/client',
		'../../extensions/Wikibase/repo',
		'../../extensions/Wikibase/lib',
	]
);

$cfg['exclude_analysis_directory_list'] = array_merge(
	$cfg['exclude_analysis_directory_list'],
	[
		'../../extensions/VisualEditor',
		'../../extensions/Wikibase/client',
		'../../extensions/Wikibase/repo',
		'../../extensions/Wikibase/lib',
		'./src/TexVC/Parser.php',
	]
);

return $cfg;
