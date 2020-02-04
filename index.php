<?php
//require_once('data.php');
//$beatles=file_get_contents('data.json');
//$members=json_decode($beatles,true);

include('functions.php');
$members=jsonToArray('data.json');

$title='All the Beatles';
require('header.php');
printHeader($title);
?>
    <h1>All the Beatles</h1>
	<?php
	for($i=0;$i<count($members);$i++){
		showItem($i,$members[$i]['firstname'].' '. $members[$i]['lastname'].'<span class="badge badge-secondary">'.$members[$i]['status'].'</span>',$members[$i]['picture']);
		echo '<hr>';
	}
require('footer.php');