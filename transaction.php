<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "yazhii_test";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);


/*
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully <br />";
*/


/*
  // Create database
  $sql = "CREATE DATABASE yazhii_test";
  if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
  } else {
    echo "Error creating database: " . $conn->error;
  }
*/



/*
  // sql to create table
  $sql = "CREATE TABLE transaction (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  user_mobile VARCHAR(10) NOT NULL,
  amount FLOAT(2) NOT NULL,
  description VARCHAR(100),
  timestamp_ TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

  if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
*/


/*
  $sql = "INSERT INTO transaction (id, user_mobile, amount, description)
  VALUES (11, '0771479562', 1900.25, 'Creadit successfully')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
*/


  $sql = "SELECT * FROM transaction";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      table {
        border-collapse: collapse;
        width: 100%;
      }

      th, td {
        text-align: left;
        padding: 8px;
      }

      tr:nth-child(even){background-color: #f2f2f2}

      th {
        background-color: #000000;
        color: white;
      }
    </style>
  </head>
  <body>
    <table>
      <tr>
        <th>ID</th>
        <th>User Mobile</th>
        <th>Amount</th>
        <th>Description</th>
        <th>Timestamp</th>
      </tr>

        <?php
          while($row = $result->fetch_assoc()) {
          echo "<tr>".
          "<td>" . $row["id"]. "</td>".
          "<td>" . $row["user_mobile"] . "</td>".
          "<td>". $row["amount"]. "</td>".
          "<td>". $row["description"]. "</td>".
          "<td>". $row["timestamp_"]. "</td>".
          "</tr>";
          }
          echo "</table>";
          } else { echo "0 results"; }
        ?>

    </table>
  </body>
</html>
