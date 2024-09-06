<?php
// Define meta tags for the to do page
$page_title = 'To Do';
$page_description = 'Get in touch with us for any queries or assistance.';
$page_keywords = 'contact, get in touch, support';

require_once 'includes/header.php';

// Establish a database connection
$conn = db_connect();
?>


<div class="container">

    <h1><?php echo $page_title; ?></h1>
    <p><?php echo $page_description; ?></p>
    <style> input, button {width: auto;background-color: transparent;padding: 0 0;}.complete { text-decoration: line-through; }</style>

    <ul>
        <?php
        $sql = "SELECT taskID, taskDesc, completed FROM tasks";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                // Set the completed symbol and class list names
                $completeSymbol = '&#128998;';
                $completeClass = '';
                if ($row["completed"] === '1') {
                    $completeSymbol = '&#9989;';
                    $completeClass = 'complete';
                }

                // Write the list item, including complete and remove buttons for each
                echo '<li id="' .$row["taskID"]. '">
                    <form action="templates/todo_functions.php" method="GET">
                        <input type="hidden" name="taskID" value="'. $row["taskID"] .'">
                        <button name="function" value="toggle_complete" type="submit">' . $completeSymbol . '</button>
                        <span class="' . $completeClass . '">' . $row["taskDesc"] . '</span>
                        <button name="function" value="remove_task" type="submit">&#10060;</button>
                    </form>
                </li>';
            }
        } else {
            echo "<li>0 results</li>";
        }
        ?>
    </ul>

    <h2>Add new:</h2>
    <ul>
        <li>
            <form action="templates/todo_functions.php" method="GET">
                <input type="text" id="newTaskText" name="newTaskText">
                <button type="submit" name="function" value="add_task">&#10133;</button>
            </form>
        </li>
    </ul>

    <?php
    // Close the database connection
    $conn->close();
    ?>
</div><!--/.container-->


<?php 
// get footer
require_once 'includes/footer.php';
?>



