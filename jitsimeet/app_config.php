<?php
	//application details
		$apps[$x]['name'] = 'JitsiMeet';
		$apps[$x]['uuid'] = '0e436409-1f0c-4e03-9af8-b8dcc4d1a0c0';
		$apps[$x]['category'] = 'JitsiMeet';
		$apps[$x]['subcategory'] = 'JitsiMeet';
		$apps[$x]['version'] = '1.0';
		$apps[$x]['license'] = 'Mozilla Public License 1.1';
		$apps[$x]['url'] = 'http://www.fusionpbx.com';
		$apps[$x]['description']['en-us'] = 'Create a room on your Jitsi-Meet server and set the room name here.';

	//permission details
		$y = 0;
		$apps[$x]['permissions'][$y]['name'] = 'jitsimeet_view';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		//$apps[$x]['permissions'][$y]['groups'][] = 'user';
		//$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$y++;

	//schema details
		$y = 0; //table array index
		$z = 0; //field array index
		$apps[$x]['db'][$y]['table'] = 'v_jitsimeet';
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'domain_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = 'v_domains';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = 'domain_uuid';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'jitsimeet_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'primary';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'jitsimeet_name';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the room name.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'jitsimeet_domain';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the domain name of the Jitsi-meet server.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'jitsimeet_description';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'An easy way to embed Jitsi-meet on a FusionPBX installation.';
		$z++;

		$y = 1; //table array index
		$z = 0; //field array index
		$apps[$x]['db'][$y]['table'] = 'v_jitsimeet';
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'domain_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = 'v_domains';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = 'domain_uuid';
		$z++;
?>
