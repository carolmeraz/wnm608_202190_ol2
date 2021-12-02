<?php

function MYSQLIAuth() {
	return [
		"localhost",  // mysql host
		"cmeraz",  // mysql user name
		"Carolina$89", // mysql user password
		"cmeraz"  // mysql database name
	];
}


function PDOAuth() {
	return [
		"mysql:host=localhost;dbname=cmeraz",  // host and database name
		"cmeraz",  // mysql user name
		"Carolina$89", // mysql user password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}