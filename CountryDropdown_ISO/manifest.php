<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$manifest = array (
  'acceptable_sugar_versions' => 
  array (
     '7.*.*',
     '8.*.*',
     '9.*.*',
     '10.*.*',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'PRO',
    1 => 'CORP',
    2 => 'ENT',
    3 => 'ULT',
  ),
  'readme' => '',
  'key' => '',
  'author' => 'kuske',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'CountryDropdown_ISO',
  'published_date' => '2020-04-20 00:00:00',
  'type' => 'module',
  'version' => 2020042000,
  'remove_tables' => 'false',
);

$installdefs = array (
  'id' => 'CountryDropdown_ISO',
  'copy' => 
  array (
    array (
      'from' => '<basepath>/SugarModules/custom/Extension/',
      'to' => 'custom/Extension/',
    ),
  ),
);