<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRUD</title>
  </head>
  <body>
    <h1>CRUD</h1>
    <?php
      $dsn = "mysql:dbname=YoobeeLibrary";
      $username = "root";
      $password = "root";

      try{
        $connect = new PDO($dsn, $username, $password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
      }
      $id = '23';
      $sql = "DELETE FROM books WHERE book_id=:id";
      // echo "<ul>";

      try{
        $st = $connect->prepare($sql);
        $st->bindValue(":id", "$id", PDO::PARAM_INT);
        $st->execute();
        // foreach ($rows as $row) {
        //   echo "<li>" . $row["book_id"] . " " .$row["book_name"] .  " " .$row["author"] . " </li>";
        // }
      } catch (PDOException $e) {
        echo "Query failed: " . $e->getMessage();
      }

      // echo "</ul>";

      $connection = null;
    ?>

  </body>
</html>
