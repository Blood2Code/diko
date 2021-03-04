<?php 
	class errors{

		public function error( $errorCode, $addition = false ){
			$errors = [
				100 => 'Database connection was not established!',
				101 => 'Table "<b>' . $addition . '</b>" not found!', 
				102 => 'Could not find a column in the selection condition',

				200 => 'The number of columns does not match the number of values!',
				201 => 'There is no condition!',
				202 => 'A string with the given condition was not found!',
				203 => 'Could not update the table "<b>' . $addition . '</b>" on the given row!',

				300 => 'The number of columns does not match the number of values!',
				301 => 'Failed to process SQL request!',

				501 => 'Password is very easy!',
				502 => 'Insufficient number of characters in the password!',
				503 => 'Password is not secure enough!',
				504 => 'A User with this login already exists!'

			];

			die( "<p><b>Error: $errorCode </b>" . $errors[ $errorCode ] . "</p>");
		}
	}

	$errors = new errors;
?>