<?php
if (empty($_POST['submit']) || $_POST['submit'] !=1) {
	die('Invalid request');
}
require_once('config.php');
require_once('NotORM.php');
$dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['dbname'];
$options = array(
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
$pdo = new PDO($dsn, $config['db']['user'], $config['db']['password'], $options);
$db = new NotORM($pdo);
$members = $db->members()
	->select("*, FLOOR(1 + (RAND() * " . $config['num_img'] . ")) AS img")
	->where("status = ?", 0)
	->order("RAND()")
	->limit(1);
$no = 0;
$result = array();
foreach ($members as $id => $mb) {
	$no++;
	$result[] = array(
		'no' => $no,
		'name' => $mb['name'],
		'img' => 'm' . $mb['img'] . '.png',
		'id' => $mb['id'],
		'badge_id' => $mb['badge_id'],
	);
	if (!empty($mb['id'])) {
		$db->members()->where('id = ?', $mb['id'])->update(array('status' => 1));
	}
}
$pdo = null;
$db = null;
echo json_encode(array('result' => $result));
exit();