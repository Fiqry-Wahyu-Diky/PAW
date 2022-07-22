<?php
$alertName = "";
$alertEmail  = "";
$alertGender = "";
$alertComment="";
$alertWebsite = "";

$valName = "";
$valEmail = "";
$valGender = "";
$valComment="";
$valWebsite= "";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    //name
    if(empty($_POST['name'])){
        $alertName = 'Name is required';
    }else{
        $valName = hasil_input($_POST['name']);
        //check for the validations letters
        if(!preg_match("/^[a-zA-Z ]*$/",$valName)){
            $alertName = "Only letters and white space allowed";
        }
    }
    //EMAIL
    if (empty($_POST["email"])) {
        $alertEmail = "Email is required";
    } else {
        $valEmail = hasil_input($_POST["email"]);
        //check for the validations if email is well
        if (!filter_var($valEmail, FILTER_VALIDATE_EMAIL)){
            $alertEmail = "Invalid email format";
        }

    }

    //website
    if (empty($_POST["website"])) {
        $alertWebsite = "";
    } else {
        $valWebsite = hasil_input($_POST["website"]);
        //check for the validations if url is valid
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$valWebsite)) {
            $alertWebsite = "Invalid URL";
     }

    }

    //comment
    if (empty($_POST["comment"])) {
        $alertComment = "";
    } else {
        $valComment = hasil_input($_POST["comment"]);
    }
    
    //gender
    if (empty($_POST["gender"])) {
        $alertGender = "Gender is required";
    } else {
        $valGender=hasil_input($_POST["gender"]);
    }

    
}

function hasil_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);    

        return $data;
}


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
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
            <label for="name">Name : </label> 
            <input type="text" name="name" value="<?php echo $valName;?>" ><span style='color:red' class="error"> * <?php echo $alertName;?></span>
            <br><br>
            <label for="email">E-mail :</label>
            <input type="text" name='email' value="<?php echo $valEmail;?>"> <span style='color:red' class="error" > * <?php echo $alertEmail;?></span>
            <br><br>
            <label for="website"> Website :</label>
            <input type="text" name='website' value="<?php echo $valWebsite;?>"><span style="color:red;" class="error"> <?php echo $alertWebsite;?></span>
            <br><br>
            <label for="comment">Comment :</label>
            <textarea name="comment" id="" cols="30" rows="5"><?php echo $valComment;?> </textarea><span style="color:red;" class="error"> <?php echo $alertComment;?></span>
            <br>
            <label for="gender">Gender :</label>
            <input type='radio' name='gender' value='Female'>Female</input>
            <input type='radio' name='gender' value='male'>Male</input>
            <input type='radio' name='gender' value='other'>Other</input><span style='color:red' class="error"> * <?php echo $alertGender;?></span>
            <br>
            <br>
            <button type='submit' name='submit'>Submit</button>
            <br>
            <br>
            <h2>Your Input:</h2>
            <?php
            echo $valName ."<br>";
            echo $valEmail ."<br>";
            echo $valWebsite . "<br>";
            echo $valComment . "<br>";
            echo $valGender . "<br>";
            ?>

        </form>
    </div>
</body>
</html>