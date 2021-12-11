<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <h1>MongoDB</h1>


  <br><br>
  <h2>Read</h2>

  <div class="container">
      <table class="">
          <tr>
              <th>Name</th>
              <th></th>
              <th>Password</th>
              
              
          </tr>
          <!-- <tr> -->
          <?php
            $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
                    $qry = new MongoDB\Driver\Query([]);
                    
                    $rows = $mng->executeQuery("k2oneiy.login", $qry);
      

                    foreach ($rows as $row) {
                        echo "<tr>";
                        echo nl2br("<th>$row->name<th>");
                        echo nl2br("<th>$row->password<th>");
                        
                        
                        echo "</tr>";
                    }
            ?>
            
      </table>
  </div>
      
  </body>
</html>