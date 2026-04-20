<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Details</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<strong>FIRST NAME: </strong>" . $_POST["firstname"] . "<br>";
        echo "<strong>Last Name: </strong>" . $_POST["lastname"] . "<br>";
        echo "<strong>Address: </strong>" . $_POST["address"] . "<br>";
        echo "<strong>Email Address: </strong>" . $_POST["email"] . "<br>";
        echo "<strong>Mobile: </strong>" . $_POST["mobile"] . "<br>";
        echo "<strong>City: </strong>" . $_POST["city"] . "<br>";
        echo "<strong>State: </strong>" . $_POST["state"] . "<br>";
        echo "<strong>Gender: </strong>" . $_POST["gender"] . "<br>";

        echo "<strong>Hobbies: </strong>";
        if (isset($_POST['hobbies'])) {
            // The implode() function beautifully turns the array of checkboxes into a comma-separated string
            echo implode(", ", $_POST["hobbies"]) . "<br>";
        } else {
            echo "No hobbies selected.<br>";
        }

        echo "<strong>Blood Group: </strong>" . $_POST["bloodgroup"] . "<br>";
    }
    ?>
</body>
</html>