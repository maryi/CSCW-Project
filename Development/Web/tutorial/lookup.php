<html>
 <body>
   <?php

  // Create a connection.
  $db = null;
  if (isset($_SERVER['SERVER_SOFTWARE']) &&
  strpos($_SERVER['SERVER_SOFTWARE'],'Google App Engine') !== false) {
    // Connect from App Engine.
    try{
       $db = new pdo('mysql:unix_socket=/cloudsql/sengdatabase:moon;dbname=seng', 'root', '');
    }catch(PDOException $ex){
        die(json_encode(
            array('outcome' => false, 'message' => 'Unable to connect.')
            )
        );
    }
  } 

?>


    THINGS IN THE DATABASE:
    <?php
     // Show existing guestbook entries.
    $matchs = array();
    foreach($db->query('SELECT * from app') as $row) {
            //echo "<div><strong>" . $row['url'] . "</strong></div>";
	//print_r($row);
	//print_r($_POST);
	$matchs[$row['url']] = 0;

	if ($row['scale'] == $_POST['scale']){
		$matchs[$row['url']]++;
	}
	if ($row['sync'] == $_POST['sync']){
		$matchs[$row['url']]++;
	}
	if ($row['domain'] == $_POST['domain']){
		$matchs[$row['url']]++;
	}
	if ($row['nascence'] == $_POST['nascence']){
		$matchs[$row['url']]++;
	}
	if ($row['privacy'] == $_POST['privacy']){
		$matchs[$row['url']]++;
	}
	//print_r($matchs[$row['url']]);
    }
    arsort($matchs);
    ?>

    <ul>
    <?php
        $count = 0;
	foreach ($matchs as $key => $value) {
		echo("<li> <a href = '$key'>$key</a> score: $value</li>");
		$count++;
		if ($count > 4) {
			break;
		}
	}
    ?>
    </ul>

    <?php
    $db = null; 
   ?>
 </body>
 </html>
