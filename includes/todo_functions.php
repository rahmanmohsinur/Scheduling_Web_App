
<?php

// Define meta tags for the about page
$page_title = 'About Us';
$page_description = 'Learn more about My Demo Site, our mission, and our team.';
$page_keywords = 'about us, company info, team';


require_once 'header_function.php';

// Establish a database connection
$conn = db_connect();


// Check to make sure there is data being sent, else this could cause errors and fill up our error logs with spam text
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

// Check to make sure the function variable is being sent
    if (isset($_GET['function'])) {

        switch ($_GET['function']) {
            case 'add_task':
                // Insert new task record to db
                addTask($conn, $_GET['newTaskText']);
                break;
            
            case 'remove_task':
                // Remove task record from db
                removeTask($conn, intval($_GET['taskID']));
                break;

            case 'toggle_complete':
                // Toggle the value of the completed column
                toggleCompleted($conn, intval($_GET['taskID']));
                break;
        }
    }
}

function addTask($connection, $newTaskText) {
    $sql = "INSERT INTO tasks (taskDesc) VALUES ('" .$newTaskText. "');";

    if ($connection->query($sql) === TRUE) {
        echo "Task added successfully";
    } else {
        echo "Error adding task: " . $connection->error;
    }
}

function removeTask($connection, $taskID) {
    $sql = "DELETE FROM tasks WHERE taskID='" .$taskID. "';";

    if ($connection->query($sql) === TRUE) {
        echo "Task removed successfully";
    } else {
        echo "Error removing task: " . $connection->error;
    }
}

function toggleCompleted($connection, $taskID) {
    // Directly update the task by flipping its completed status
    $sql = "UPDATE tasks SET completed = IF(completed = 1, 0, 1) WHERE taskID = ?";

    // Prepare statement to avoid SQL injection and handle execution safely
    $stmt = $connection->prepare($sql);
    $stmt->bind_param('i', $taskID);

    if ($stmt->execute()) {
        echo "Task completion status updated.";
    } else {
        echo "Error setting task completion status: " . $connection->error;
    }

    // Close the statement
    $stmt->close();
}


$conn->close();
?>

<br><br><a href="/test/todo">Return to To Do list</a><br>



<?php 
// get footer
require_once '../includes/footer.php';
?>