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
  if (array_key_exists('url', $_POST)) {
    echo "Trying to add";
    $stmt = $db->prepare("INSERT INTO app(url, hierarchy, servt, sync, scale,
					 nascence, learn, modality, privacy, awareness)
			  VALUES(:url, :hierarchy, :servt, :sync, :scale,
					 :nascence, :learn, :modality, :privacy, :awareness)");
    $res = $stmt->execute(array(
      ':url' => htmlspecialchars($_POST['url']),
      ':hierarchy' => htmlspecialchars($_POST['hierarchy']),
      ':servt' => htmlspecialchars($_POST['servt']),
      ':sync' => htmlspecialchars($_POST['sync']),
      ':scale' => htmlspecialchars($_POST['scale']),
      ':nascence' => htmlspecialchars($_POST['nascence']),
      ':awareness' => htmlspecialchars($_POST['awareness']),
      ':learn' => htmlspecialchars($_POST['learn']),
      ':privacy' => htmlspecialchars($_POST['privacy']),
      ':modality' => htmlspecialchars($_POST['modality']),
    ));
    $affected_rows = $stmt->rowCount();
    // Log $affected_rows.
    $appid = $db->lastInsertId();
    echo "inserted app id = ", $db->lastInsertId();

    // Loop through purposes, inserting a purpose record for each one
    foreach ($_POST['purpose'] as $purpose) {
        $stmt = $db->prepare("INSERT INTO purpose(appid, purpose)
			  VALUES(:appid, :purpose)");
        $res = $stmt->execute(array(
          ':appid' => htmlspecialchars($appid ),
          ':purpose' => htmlspecialchars($purpose),
        ));
    }

    foreach ($_POST['domain'] as $domain) {
        $stmt = $db->prepare("INSERT INTO domain(appid, domain)
			  VALUES(:appid, :domain)");
        $res = $stmt->execute(array(
          ':appid' => htmlspecialchars($appid ),
          ':domain' => htmlspecialchars($domain),
        ));
    }

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
