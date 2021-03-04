<?php
class GUID {
	//Method for GET data in data base
	public function get( $table, $condition = false){
		global $connect;
		global $errors;

		$command = "SELECT * FROM `$table`";
		$datas = $connect->query( $command );

		if ( $datas === false ) $errors->error( 101, $table );

		if ( $condition ) {
			$command = "SELECT * FROM `$table` WHERE $condition";
			$datas = $connect->query( $command );
		}

		if ( $datas === false ) $errors->error( 102 );

		while ( $result = mysqli_fetch_assoc( $datas ) ) $results[] = $result; 

		if ( count( $results ) == 1 )	$results = $results[0];
		if ( count( $results ) == 0 ) return false;

		return $results;
	}
		
	//Method for UPDATE row in data base
	public function update( $table, $columns, $values, $condition = false ){
		global $connect;
		global $errors;

		if ( $condition === false ) $errors->error( 201 );

		$result = $this->get( $table, $condition );
		if ( $result === false) $errors->error( 202 );

		$columns = array_filter( explode( ",", $columns ) );
		$values = array_filter( explode( ",", $values ) );

		foreach ( $columns as $key => $column ) if ( $column == ' ' ) unset( $columns[ $key ] );
		foreach ( $values as $key => $value ) if ( $value == ' ' ) unset( $values[ $key ] );

		if ( count( $columns ) != count( $values ) ) $errors->error( 200 );

		foreach ( $columns as $key => $column ) {
			$column = trim( $column );
			$command = "UPDATE `$table` SET `$column` = '$values[$key]' WHERE $condition";
			
			$update = $connect->query( $command );
			if ( !$update ) $errors->error( 203, $column );
		}
		return $update;
	}

	//Method for INSERT data to data base
	public function insert( $table = false, $columns = false, $values = false ){
		global $connect;
		global $errors;

		if ( !$table ) $errors->error();
		if ( $columns === false || $values === false ) $errors->error();

		$columnsArr = array_filter( explode( ",", $columns ) );
		$valuesArr = array_filter( explode( ",", $values ) );

		foreach ( $columnsArr as $key => $columnA ) if ( $columnA == ' ' ) unset( $columnsArr[ $key ] );
		foreach ( $valuesArr as $key => $valueA ) if ( $valueA == ' ' ) unset( $valuesArr[ $key ] );

		if ( count( $columnsArr ) != count( $valuesArr ) ) $errors->error( 300 );

		$insert = $connect->query( " INSERT INTO `$table` ( $columns ) VALUES( $values ) " );
		if ( $insert === false ) $errors->error( 301 );
		else return $insert;
	}

	//Method for delete row  in data base
	public function delete( $table, $condition = false ){
		global $connect;
		global $errors;

		if ( $condition === false ) $errors->error( 201 );

		$result = $this->get( $table, $condition );
		if ( $result === false) $errors->error( 202 );

		$delete = $connect->query("DELETE FROM `$table` WHERE $condition");
		if ( $delete === false ) $errors->error( 301 );
		else return $delete;
	}
}

$GUID = new GUID;
?>