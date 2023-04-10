<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Table</title>
</head>
<body>
<?php

require_once('Users.php');

if(isset($_POST['submit'])) {
    $new_user = array(
        'id' => count($users) + 1,
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'email' => $_POST['email']
    );
    $users[] = $new_user;
    $updated_users = "<?php \$users = " . var_export($users, true) . ";";
    file_put_contents('Users.php', $updated_users);
    header('Location: index.php');
}
?>
<?php include ('add_user.php') ?>
<form action="add_user.php" method="post">
  <label>First name:</label>
  <input type="text" name="firstname"><br>

  <label>Last name:</label>
  <input type="text" name="lastname"><br>

  <label>Email:</label>
  <input type="email" name="email"><br>

  <button type="submit" novalidate>Add user</button>
</form>


<table id="user-table">
  <thead>
    <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody id="user-table-body">
    <!-- Populate table with PHP -->
    <?php
      require_once 'Users.php';
      foreach ($users as $user) {
        echo "<tr>";
        echo "<td>{$user['id']}</td>";
        echo "<td>{$user['firstname']}</td>";
        echo "<td>{$user['lastname']}</td>";
        echo "<td>{$user['email']}</td>";
        echo "<td><button onclick='deleteUser({$user['id']})'>Delete</button></td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>

  <script>
  // Get the users data from the PHP file
  const users = <?php echo json_encode($users); ?>;

  // Function to create the table row for a user
  function createTableRow(user) {
    const row = document.createElement('tr');

    const idCol = document.createElement('td');
    idCol.textContent = user.id;
    row.appendChild(idCol);

    const firstNameCol = document.createElement('td');
    firstNameCol.textContent = user.firstname;
    row.appendChild(firstNameCol);

    const lastNameCol = document.createElement('td');
    lastNameCol.textContent = user.lastname;
    row.appendChild(lastNameCol);

    const emailCol = document.createElement('td');
    emailCol.textContent = user.email;
    row.appendChild(emailCol);

    const deleteCol = document.createElement('td');
    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Delete';
    deleteButton.addEventListener('click', function() {
      if (confirm('Are you sure you want to delete this user?')) {
        const index = users.findIndex(u => u.id === user.id);
        if (index !== -1) {
          users.splice(index, 1);
          createTable();
        }
      }
    });
    deleteCol.appendChild(deleteButton);
    row.appendChild(deleteCol);

    return row;
  }

  // Function to create the table with all the users
  function createTable() {
    const tableBody = document.getElementById('user-table-body');
    tableBody.innerHTML = '';

    for (const user of users) {
      const row = createTableRow(user);
      tableBody.appendChild(row);
    }
  }

  // Initial table creation
  createTable();
  </script>
</body>
</html>