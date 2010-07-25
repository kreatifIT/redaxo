<?php

/**
 * Cronjob Addon
 *
 * @author gharlan[at]web[dot]de Gregor Harlan
 *
 * @package redaxo4
 * @version svn:$Id$
 */
 
require $REX['SRC_PATH'] .'/layout/top.php';

$page    = rex_request('page', 'string');
$subpage = rex_request('subpage', 'string');
$func    = rex_request('func', 'string');
$oid     = rex_request('oid', 'int');

rex_title($I18N->msg("cronjob_title"), $REX['ADDON']['pages']['cronjob']);

echo "\n  <div class=\"rex-addon-output-v2\">\n  ";

if (!in_array($subpage, array('log')))
  $subpage = 'cronjobs';

require $REX['SRC_PATH'] .'/addons/cronjob/pages/'. $subpage .'.inc.php';

echo "\n  </div>";

require $REX['SRC_PATH'] .'/layout/bottom.php';