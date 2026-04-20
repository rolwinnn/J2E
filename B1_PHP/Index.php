<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
</head>
<body>
    <form method="post" action="process_form.php">
        <label for="firstname">First Name: </label>
        <input type="text" id="firstname" name="firstname" required><br><br>

        <label for="lastname">Last Name: </label>
        <input type="text" id="lastname" name="lastname" required><br><br>

        <label for="address">Address: </label>
        <textarea id="address" name="address" required></textarea><br><br>

        <label for="email">EMAIL: </label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="mobile">Mobile: </label>
        <input type="tel" id="mobile" name="mobile" required><br><br>

        <label for="city">CITY: </label>
        <input type="text" id="city" name="city" required><br><br>

        <label for="state">STATE: </label>
        <input type="text" id="state" name="state" required><br><br>

        <label>Gender: </label>
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="male">MALE</label>
        
        <input type="radio" id="female" name="gender" value="Female" required>
        <label for="female">FEMALE</label><br><br>

        <label>HOBBIES: </label>
        <input type="checkbox" id="hobby1" name="hobbies[]" value="Reading">
        <label for="hobby1">Reading</label><br>
        <input type="checkbox" id="hobby2" name="hobbies[]" value="Writing">
        <label for="hobby2">Writing</label><br>
        <input type="checkbox" id="hobby3" name="hobbies[]" value="Drawing">
        <label for="hobby3">Drawing</label><br><br>

        <label for="bloodgroup">Blood Group: </label>
        <select id="bloodgroup" name="bloodgroup" required>
            <option value="">Select</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>