<?php
print_r($_GET);

$firstname= filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_STRING);
$lastname= filter_input(INPUT_GET, 'lastname', FILTER_SANITIZE_STRING);
$age= filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);

if(isset($_GET['firstname']) && isset ($_GET['lastname']) && isset ($_GET['age'])){
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $age = $_GET['age'];

    if(!empty($firstname) && !empty($lastname) && !empty($age)){
        echo "<br> Hello, my name is ",$firstname, " ", $lastname;
        echo "<br>";
        if($age >= 18){
            echo "I am old enough to vote in the United States.";
        }else{
            echo "I am not old enough to vote in the United States.";
            
        } echo "<br>", "There are: ", $age, " days.";
    }else{
        echo "Please fill all options!"; 
    }
}else{
    echo "Not set";
}

echo "<br>";
$date = date('l, d-m-Y');
echo "Today's date: ", $date;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Parameter Assignment</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1>GET Parameter</h1>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div class="row">
            <div class="col-25">
            <label for="firstname">First Name: </label>
            </div>

            <div class="col-75">
            <input type="text" id="firstname" name="firstname" autocomplete="off">
            </div>
        </div>
            
        <div class="row">
            <div class="col-25">
            <label for="lastname">Last Name: </label>
            </div>

            <div class="col-75">
            <input type="text" id="lastname" name="lastname" autocomplete="off">
            </div>
        </div>
    
        <div class="row">
            <div class="col-25">
            <label for="age">Age: </label>
            </div>

            <div class="col-75">
            <input type="number" id="age" name="age" maxlength="3">
            </div>
        </div>
            <div class="row">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>