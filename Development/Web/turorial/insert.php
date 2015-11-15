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
			  VALUES(:URL, :Creator, 'none', :pubpriv, :hierarchy, :servt, :sync, :physd, :scale,
				  :community, :nascence, :permanence, 'none', :Compatible, :awareness, :learn, :modality)");
    $res = $stmt->execute(array(
      ':URL' => htmlspecialchars($_POST['URL']),
      ':Creator' => htmlspecialchars($_POST['Creator']),
      ':pubpriv' => htmlspecialchars($_POST['pubpriv']),
      ':hierarchy' => htmlspecialchars($_POST['hierarchy']),
      ':servt' => htmlspecialchars($_POST['servt']),
      ':sync' => htmlspecialchars($_POST['sync']),
      ':physd' => htmlspecialchars($_POST['physd']),
      ':scale' => htmlspecialchars($_POST['scale']),
      ':community' => htmlspecialchars($_POST['community']),
      ':nascence' => htmlspecialchars($_POST['nascence']),
      ':permanence' => htmlspecialchars($_POST['permanence']),
      ':Compatible' => htmlspecialchars($_POST['Compatible']),
      ':awareness' => htmlspecialchars($_POST['awareness']),
      ':learn' => htmlspecialchars($_POST['learn']),
      ':modality' => htmlspecialchars($_POST['modality']),
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
