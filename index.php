<?php

  include_once 'include/debug.php';

  stampIt('Index - Begin');

  include_once 'include/globals.php';
  include_once 'eq2/constants.php';
  include_once 'eq2/functions.php';
  include_once 'api/objects/world.php';

  // This is where the display of the page begins.

  include_once 'include/header_start.php';

  // Add any custom header information here for this page.

  include 'include/header_finish.php';
  include 'include/body_start.php';

  // Add any custom header information here for this page.

  include (($_GET['page'] == '') ? DEFAULT_PAGE : $_GET['page']).".php";

  include 'include/body_finish.php';

  stampIt('Index - End');

?>
