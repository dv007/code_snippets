<?php
if (empty($_POST['submit']) && $_POST['submit'] !=1) {
	die('Invalid request');
}
require_once('config.php');
$link = mysql_connect($config['db']['host'] . ':' . $config['db']['port'], $config['db']['user'], $config['db']['password']);
if (!$link) {
	die('Could not connect: ' . mysql_error());
}
$db_selected = mysql_select_db($config['db']['dbname'], $link);
if (!$db_selected) {
    die ('Could not select db: ' . mysql_error());
}
$sql = 'SELECT * FROM members WHERE status = 0 ORDER BY RAND() LIMIT ' . $config['num_result'];
$query_result = mysql_query($sql);
$result = array();
$no = 0;
while ($row = mysql_fetch_assoc($query_result)) {
	$no++;
	$result[] = array(
		'no' => $no,
		'name' => $row['name'],
		'img' => 'm' . rand(1, $config['num_img']) . '.png',
		'id' => $row['id'],
	);
	$sql = 'UPDATE members SET status = 1 WHERE id = ' . $row['id'] . ' LIMIT 1';
	mysql_query($sql);
}
mysql_close($link);
echo json_encode(array('result' => $result));
exit();