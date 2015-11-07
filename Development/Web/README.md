# Web

Here we will have all our web development

*You're welcome to contribute!*

<html>
 <body>
  <h2>Guestbook Entries</h2>
  <?php

  // Create a connection.
  $db = null;
  if (isset($_SERVER['SERVER_SOFTWARE']) &&
  strpos($_SERVER['SERVER_SOFTWARE'],'Google App Engine') !== false) {
    // Connect from App Engine.
    try{
       $db = new pdo('mysql:unix_socket=/cloudsql/<INSTANCE>:<NAME;dbname=<Name>', '<USER>', '<PW>');
    }catch(PDOException $ex){
        die(json_encode(
            array('outcome' => false, 'message' => 'Unable to connect.')
            )
        );
    }
  }
  try {
    // Show existing guestbook entries.
    foreach($db->query('SELECT * from app') as $row) {
            echo "<div><strong>" . $row['url'] . "</strong> wrote <br> " . $row['scale'] . "</div>";
     }
  } catch (PDOException $ex) {
    echo "An error occurred in reading or writing to guestbook.";
  }
  $db = null;
  ?>

  <h2>Sign the Guestbook</h2>
  <form action="/sign" method="post">
    <div><textarea name="content" rows="3" cols="60"></textarea></div>
    <div><input type="submit" value="Sign Guestbook"></div>
  </form>
  </body>
</html>
