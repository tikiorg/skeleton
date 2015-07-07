<?php

// Warning: pref names have a limit of 40 characters
// Please prefix with ta_ (short for tikiaddon) and your package vendor and name

function prefs_ta_tikiorg_skeleton_list()
{
	return array(
		'ta_tikiorg_skeleton_on' => array( // This main _on pref is mandatory
			'name' => tra('Activate Tiki Skeleton Addon'),
			'description' => tra('Activate Tiki Skeleton Addon'),
			'type' => 'flag',
			'admin' => 'ta_tikiorg_skeleton',
			'tags' => array('basic'),
			'default' => 'y',
		),
	);
}
