<?php 


$app = [];

$app['config'] = require 'config.php';
require 'app/helper.php';
require 'app/database/Connection.php';
require 'app/database/QueryBuilder.php';

return new QueryBuilder(
	Connection::make($app['config'])
);