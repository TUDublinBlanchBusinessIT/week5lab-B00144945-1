<?php
include("dbcon.php");


$query = "SELECT memberID, memberName FROM members";
$result = mysqli_query($conn, $query);

// Checking if the query was successful
if ($result) {
    echo '<form action="processForm.php" method="GET">';
    echo 'Select a member: <select name="memberID">';
    
 
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row['memberID'] . '">' . $row['memberName'] . '</option>';
    }

    echo '</select>';
    echo '<input type="submit" value="Submit">';
    echo '</form>';
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
