<?php
/**
  *
  *
  * @version 1.0
  * @author Saumyajit Pramanik <saumyajitp8@gmail.com>
  * @license GNU Lesser General Public License v3.0
  *
  * You can redistribute this library and/or modify it under the terms of
  * the GNU LGPL as published by the Free Software Foundation,
  * either version 3 of the License, or any later version.
  * However you must not change author and copyright information.  
  */

$widget = (new CHtmlPage())->setTitle(_('Create Host Groups'));

$form = (new CForm('post', (new CUrl('zabbix.php'))
		->setArgument('action', 'iahg.create')
		->getUrl())
	)
	->setName('hostgroupForm')
	->setAttribute('aria-labeledby', ZBX_STYLE_PAGE_TITLE_SUBMENU);

$type_select = (new CSelect('prefix'))
	->setValue($data['prefix'])
	->setFocusableElementId('label-type')
	->addOptions(CSelect::createOptionsFromArray($data['groups']));

$form_list = (new CFormList('hostgroupFormList'));
$form_list->addRow(
	(new CDiv(_('As a Zabbix Admin, you can use this form to create Host Groups for which you have read/write access to.')))
		->addClass('table-forms-separator')
);
$form_list->addRow(
	(new CLabel(_('Group name'), 'name'))->setAsteriskMark(),
	[
		$type_select,
		new CSpan(' / '),
		(new CTextBox('name', $data['name']))
			->setAttribute('autofocus', 'autofocus')
			->setWidth(ZBX_TEXTAREA_STANDARD_WIDTH)
			->setAriaRequired()
	]
);

$tab = (new CTabView())->addTab('hostgroupTab', _('Host group'), $form_list);
$tab->setFooter(makeFormFooter(
	new CSubmit('add', _('Add'))
));

$form->addItem($tab);

$widget->addItem($form);
$widget->show();


?>

