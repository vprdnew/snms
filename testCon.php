<?php
error_reporting(E_ALL);
	$con=mysql_connect('localhost','user','pwd') or die('connection errors');
	mysql_select_db('db',$con) or die('database not selected');

