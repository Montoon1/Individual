<?php
//require_once('data.php');
//$beatles=file_get_contents('data.json');
//$members=json_decode($beatles,true);

include('functions.php');
$members=jsonToArray('data.json');

if(!isset($_GET['id'])){
	echo 'Please enter the id of a member or visit the <a href="index.php">index page</a>.';
	die();
}
if($_GET['id']<0 || $_GET['id']>count($members)-1){
	echo 'Please enter the id of a member or visit the <a href="index.php">index page</a>.';
	die();
}

$title=$members[$_GET['id']]['firstname'].' '.$members[$_GET['id']]['lastname'];
require('header.php');
?>
		<h1><?= $members[$_GET['id']]['firstname'].' '.$members[$_GET['id']]['lastname'] ?></h1>
		<p><?= $members[$_GET['id']]['date_of_birth'] ?></p>
		<img src="<?= $members[$_GET['id']]['picture'] ?>" width="500" />
		<p><?= $members[$_GET['id']]['bio'] ?></p>
<?php
require('footer.php');