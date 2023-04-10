// create a function to fetch the user data from the PHP file
async function fetchUsers() {
    const response = await fetch('backend/src/Users.php');
    const data = await response.json();
    return data;
  }
  
  // use the fetchUsers function to get the user data and display it in a table
  (async function() {
    const users = await fetchUsers();
  
    // get a reference to the table element
    const table = document.getElementById('user-table');
  
    // create a table row for each user
    users.forEach(user => {
      // create a new row element
      const row = table.insertRow();
  
      // add a cell for the first name
      const firstNameCell = row.insertCell();
      firstNameCell.textContent = user.firstName;
  
      // add a cell for the last name
      const lastNameCell = row.insertCell();
      lastNameCell.textContent = user.lastName;
  
      // add a cell for the email
      const emailCell = row.insertCell();
      emailCell.textContent = user.email;
  
      // add a cell for the delete button
      const deleteCell = row.insertCell();
      const deleteButton = document.createElement('button');
      deleteButton.textContent = 'Delete';
      deleteButton.addEventListener('click', () => {
        // remove the row from the table
        table.deleteRow(row.rowIndex);
  
        // send a DELETE request to the deleteUser endpoint with the user ID
        fetch(`/deleteUser/${user.id}`, { method: 'DELETE' });
      });
      deleteCell.appendChild(deleteButton);
    });
  })();