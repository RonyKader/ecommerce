<?php 
// FUNCTION FOR MAIN NAVE
function show_nav() {
	global $connection;
	$sql_view = "SELECT * FROM menus";
    $sql_query = mysqli_query( $connection, $sql_view );
    return $sql_query;
}

// FUNCTION FOR CATEGORY
function show_category( $menu_id ){
	global $connection;
	$sql_view = "SELECT * FROM `category` WHERE page_id = {$menu_id}";
    $sql_query = mysqli_query( $connection, $sql_view );
    return $sql_query;
}


// FUNCTION FOR MAIN NAVE
function showNavTitle() {
	global $connection;
	$sql_view = "SELECT * FROM menus";
    $sql_query = mysqli_query( $connection, $sql_view );
    return $sql_query;
}
// FUNCTION FOR CATEGORY
function show_category( $menu_id ){
	global $connection;
	$sql_view = "SELECT * FROM `category` WHERE page_id = {$menu_id}";
    $sql_query = mysqli_query( $connection, $sql_view );
    return $sql_query;
}


