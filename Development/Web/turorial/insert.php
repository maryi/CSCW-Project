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
  try {
  if (array_key_exists('URL', $_POST)) {
    echo "Trying to add";
    $stmt = $db->prepare("INSERT INTO app(url, creator, purpose, pubpriv, hierarchy, servt, sync, physd, scale,
					 community, nascence, permanence, turnover, compatibility, awareness, learn, modality)
			  VALUES(:URL, :Creator, 'none', :Privacy, :Hierarchy, :Service, :concurrency, :communicate, :contribute,
				  :Areas, :Routine, :Length, 'none', :Compatible, :Awareness, :Curve, :Modality)");
    $res = $stmt->execute(array(
      ':URL' => htmlspecialchars($_POST['URL']),
      ':Creator' => htmlspecialchars($_POST['Creator']),
      ':Privacy' => htmlspecialchars($_POST['Privacy']),
      ':Hierarchy' => htmlspecialchars($_POST['Hierarchy']),
      ':Service' => htmlspecialchars($_POST['Service']),
      ':concurrency' => htmlspecialchars($_POST['concurrency']),
      ':communicate' => htmlspecialchars($_POST['communicate']),
      ':contribute' => htmlspecialchars($_POST['contribute']),
      ':Areas' => htmlspecialchars($_POST['Areas']),
      ':Routine' => htmlspecialchars($_POST['Routine']),
      ':Length' => htmlspecialchars($_POST['Length']),
      ':Compatible' => htmlspecialchars($_POST['Compatible']),
      ':Awareness' => htmlspecialchars($_POST['Awareness']),
      ':Curve' => htmlspecialchars($_POST['Curve']),
      ':Modality' => htmlspecialchars($_POST['Modality']),
    ));
    $affected_rows = $stmt->rowCount();
    // Log $affected_rows.
    echo "no exception on insert";
  }
} catch (PDOException $ex) {
  echo "Exception: " . $ex.getMessage();
}

?>
    <?php
      print_r ($_POST);
    ?>

    THINGS IN THE DATABASE:
    <?php
     // Show existing guestbook entries.
    foreach($db->query('SELECT * from app') as $row) {
            echo "<div><strong>" . $row['url'] . "</strong></div>";
     }
     $db = null; 
    ?>
 </body>
 </html>
