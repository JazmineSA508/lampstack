<html>
  <head>
    <title>Fetching Data from MySQL Server</title>
  </head>
  <body>
    <style>
      td,th {
        border: solid black 1px;
        font-size: 30px;
        width: 200px;
      }
    </style>
    <table>
      <tr>
        <th>First Name</th>
	<th>Last Initial</th>
        <th>Birthday Month</th>
        <th>Birthday Day</th>
      </tr>
    <?php
      $dbhost = "mysql-server";
      $dbuser = "test";
      $dbpass = "testpass";
      $db = "testdb";
      $dbc = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

      if(! $dbconn ) {
        die('Could not connect: ' . mysqli_error($dbc));
      }
      $query = mysqli_query($dbc, "SELECT * FROM test")
        or die (mysqli_error($dbc));

      while ($row = mysqli_fetch_array($query)) {
        echo
	  "<tr>
            <td>{$row['fName']}</td>
	    <td>{$row['lName']}</td>
            <td>{$row['bdayMonth']}</td>
            <td>{$row['bdayDay']}</td?
	  </tr>";
      }

      mysqli_close($dbc);
    ?>
  </body>
</html>
