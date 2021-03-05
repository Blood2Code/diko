# diko
PHP library DIKO <br/>
GUID (Get, Update, Insert, Delete)

// $get = $GUID -> get( 'table', 'condition' );
// $update = $GUID -> update( 'table', 'columns', 'values', 'condition' );
// $insert = $GUID -> insert( 'table', 'columns', 'values' ); 
// $delete = $GUID -> delete( 'table', 'condition' );

AUTH
// include auth.php;
// $auth = new auth;
// $signin = $auth -> signin( 'table name', 'login', 'password', 'cookie life' );
// $signup = $auth -> signup( 'table name', 'columns', 'values', 'login', 'password', 'permitted protection', 'cookie life' );
