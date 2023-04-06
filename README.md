# BA Software Developer Challenge v1 Test

Congratulations on progressing to the technical challenge

## Instructions
#### Before you start the challenge:
* Clone this repository on your machine
* Create a new branch using the CLI or your IDE of choice
* The branch name should be your name, all lower case, with hyphens
#### To build the environment:
* Upgrade your WLS environment on your machine:
  * Open a Powershell or CLI window, with admin privileges
  * Run `wsl --update`
  * If the option isn't available because you don't have WSL, run `wsl --install`
  
* Download and Install Docker Desktop: https://www.docker.com/products/docker-desktop/
* Open a Powershell or CLI window and navigate to the repository folder and run the `docker-compose up` command inside of it - this will build your Docker containers to run your application
* You should have a local container running, and you should be able to access the local page on `http://localhost:8080/`

## Task

#### Instructions:

* Attempt as many of the tasks as you can / want (a desirable minimum would be 1 from front-end and 1 for back-end)
* You can alter the code in any way you want or find easier to deal with the tasks
* If you get stuck on a task, but you want to show the attempt, write pseudocode in comments, so we can go through them
* The initial code is bug free, so you can assume that if something breaks or errors after adding code, there is something wrong with the code
* To keep complexity to a minimum, you will not have any database work. For the tasks, you can hardcode the data models in a file and read it, or in a static array, in the backend
* For the back-end tasks, it would be desirable if you used OOP concepts, an initial class has been set up for you, but pure PHP is also accepted

### Frontend tasks (using Vue.js or Vanilla JS):

1. Create a simple form with input fields for a user's first name, last name, and email address. Add validation to ensure all fields are filled in and the email address is in the correct format. Display an error message when any validation fails.

2. Fetch a list of users from the `getUsers` endpoint and display it in a table. Each row should display the user's first name, last name, email, and a button to delete the user. When the delete button is clicked, remove the user from the table.

3. Add a search box above the users' table. As the user types into the search box, filter the table to only display rows that contain the search query in any of the columns (first name, last name, or email).

### Backend tasks (using PHP):

1. Create a simple endpoint in the backend to fetch a list of users. The users can be stored in an array or a simple file, with each user having a unique ID, first name, last name, and email.

2. Add an endpoint to your API to add a new user. The endpoint should accept a POST request with the user's first name, last name, and email. Validate the input data and return a success or error message accordingly.

3. Extend your API by adding an endpoint to delete a user based on their unique ID. The endpoint should accept a DELETE request with the user's ID as a parameter and return a success or error message accordingly.
