<?php
{namespace k=EBT\ExtensionBuilder\ViewHelpers}
/***************************************************************
 * Extension Manager/Repository config file for ext: "{extension.extensionKey}"
 *
 * Auto generated by Extension Builder <f:format.date format="Y-m-d">now</f:format.date>
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => '<k:format.quoteString>{extension.name}</k:format.quoteString>',
	'description' => '<k:format.quoteString>{extension.description}</k:format.quoteString>',
	'category' => '{extension.category}',
	'author' => '<f:for each="{extension.persons}" as="person"  iteration="counter"><f:if condition="{counter.index} > 0">, </f:if>{person.name}</f:for>',
	'author_email' => '<f:for each="{extension.persons}" as="person"  iteration="counter"><f:if condition="{person.email}"><f:if condition="{counter.index} > 0">, </f:if>{person.email}</f:if></f:for>',
	'author_company' => '<f:for each="{extension.persons}" as="person"  iteration="counter"><f:if condition="{person.company}"><f:if condition="{counter.index} > 0">, </f:if>{person.company}</f:if></f:for>',
	'shy' => '{extension.shy}',
	'priority' => '{extension.priority}',
	'module' => '',
	'state' => '{extension.readableState}',
	'internal' => '',
	'uploadfolder' => '{extension.needsUploadFolder}',
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '{extension.version}',
	'constraints' => array(
		'depends' => array(<f:for each="{extension.dependencies}" as="version" key="extensionKey">
			'{extensionKey}' => '{version}',</f:for>
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);

?>