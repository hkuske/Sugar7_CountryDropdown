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
    0 => '7.*.*',
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
  'name' => 'CountryDropdown',
  'published_date' => '2015-01-07 16:39:59',
  'type' => 'module',
  'version' => 1420648803,
  'remove_tables' => 'false',
);

$installdefs = array (
  'id' => 'CountryDropdown',
  'language' => 
  array (
/* no language files, only if necessary ... **
    0 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/bg_BG.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'bg_BG',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/ca_ES.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'ca_ES',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/cs_CZ.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'cs_CZ',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/da_DK.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'da_DK',
    ),
*/
    4 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/de_DE.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'de_DE',
    ),
/*
    5 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/el_EL.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'el_EL',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/en_UK.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'en_UK',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/en_us.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/es_ES.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'es_ES',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/es_LA.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'es_LA',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/et_EE.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'et_EE',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/fi_FI.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'fi_FI',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/fr_FR.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'fr_FR',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/ge_ge.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'ge_ge',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/he_IL.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'he_IL',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/hu_HU.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'hu_HU',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/it_it.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'it_it',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/ja_JP.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'ja_JP',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/ko_KR.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'ko_KR',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/lt_LT.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'lt_LT',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/lv_LV.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'lv_LV',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/nb_NO.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'nb_NO',
    ),
    22 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/nl_NL.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'nl_NL',
    ),
    23 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/pl_PL.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'pl_PL',
    ),
    24 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/pt_br.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'pt_br',
    ),
    25 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/pt_PT.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'pt_PT',
    ),
    26 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/ro_RO.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'ro_RO',
    ),
    27 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/ru_RU.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'ru_RU',
    ),
    28 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/sk_SK.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'sk_SK',
    ),
    29 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/sq_AL.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'sq_AL',
    ),
    30 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/sr_RS.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'sr_RS',
    ),
    31 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/sv_SE.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'sv_SE',
    ),
    32 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/tr_TR.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'tr_TR',
    ),
    33 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/zh_CN.CountryDropdown.php',
      'to_module' => 'application',
      'language' => 'zh_CN',
    ),
** end of language files */
  ),

  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/custom/',
      'to' => 'custom/',
    ),
  ),
);