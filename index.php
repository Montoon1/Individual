<?php
$members=[
	[
		'firstname'=>'Donna',
		'lastname'=>'Carpenter',
		'bio'=>'Placeholder',
		'picture'=>'https://education.uky.edu/kydbp/wp-content/uploads/sites/32/2016/11/Donna-Snyder-123x150.jpg'
	],
	[
		'firstname'=>'Kim',
		'lastname'=>'Zeiglar',
		'bio'=>'Placeholder',
		'picture'=>'https://education.uky.edu/kydbp/wp-content/uploads/sites/32/2019/08/file-1-150x150.jpeg'
	],
	[
		'firstname'=>'Peggy',
		'lastname'=>'Sinclair',
		'bio'=>'Placeholder',
		'picture'=>'https://education.uky.edu/kydbp/wp-content/uploads/sites/32/2018/11/psm.website-150x150.jpg'
	],
	[
		'firstname'=>'Jennifer',
		'lastname'=>'Grisham-Brown',
		'bio'=>'Placeholder',
		'picture'=>'https://education.uky.edu/kydbp/wp-content/uploads/sites/32/2016/11/Jennifer-Grisham-Brown-150x150.png'
	],
	[
		'firstname'=>'Brenda',
		'lastname'=>'Mullins',
		'bio'=>'Placeholder',
		'picture'=>'https://education.uky.edu/kydbp/wp-content/uploads/sites/32/2019/09/dee-and-me35423284_10215633990541328_7277947796764753920_n-2-119x150.jpg'
	],
];

$website = 'https://education.uky.edu/kydbp/';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>UK Deaf Blind Project</title>
  </head>
  <body>
  <div class="container">
    <h1>UK Deaf Blind Project</h1>
	<?php
	for($i=0;$i<count($members);$i++){
		echo '<div class="media">
  <img src="'.$members[$i]['picture'].'" class="mr-3" alt="'.$members[$i]['firstname'].' '. $members[$i]['lastname'].'" width="96">
  <div class="media-body">
    <h5 class="mt-0">'.$members[$i]['firstname'].' '. $members[$i]['lastname'].'</h5>
    <a href="detail.php?id='.$i.'">Visit profile</a>
  </div>
</div>';
		echo '<hr>';
	}

	?>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>

</html>