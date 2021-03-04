<?php 
// Include ERRORS
require_once 'libraries/errors.php';

// Include CONNECT to Data Base
require_once 'libraries/connect.php';

// Include main library GUID
require_once 'libraries/guid.php';

//Include basics function
require_once 'libraries/basic.php';

// $insert = $GUID->insert(table, columns, values);
// $delete = $GUID->delete(table, condition);

// $get = $GUID->get('test', 'id = 1');
// $basics->print_a($get);

$get = $GUID->get('test', 'id = 1003');
?>