<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <div>
        <h1>PHP Form Validation Example</h1>
        <span style="color:red">*required filed</span>
    </div>

    <div>
        <form action="" method="POST">
            <label for="name">Name : </label> 
            <input type="text" name="name" required ><span style='color:red'> *</span>
            <br><br>
            <label for="email">E-mail :</label>
            <input type="email"><span style='color:red'> *</span>
            <br><br>
            <label for="website">Website :</label>
            <input type="text">
            <br><br>
            <label for="comment">Comment :</label>
            <textarea name="" id="" cols="30" rows="5"></textarea>
            <br>
            <label for="gender">Gender :</label>
            <input type='radio'>Female</input>
            <input type='radio'>Male</input>
            <input type='radio'>Other</input><span style='color:red'> *</span>
            <br>
            <br>
            <button type='submit'>Submit</button>
            <br>
            <br>
            <h2>Your Input:</h2>
        </form>
    </div>
</body>
</html>