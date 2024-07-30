 <?php
 
 

// $con = mysqli_connect('localhost', 'root', '');
// if (!$con) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// $db_selected = mysqli_select_db($con, 'youtubeuserdata');
// if (!$db_selected) {
//     die("Database selection failed: " . mysqli_error($con));
// }

// if (!empty($_POST)) {
//     $user = mysqli_real_escape_string($con, $_POST['user']);
//     $email = mysqli_real_escape_string($con, $_POST['email']);
//     $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
//     $comment = mysqli_real_escape_string($con, $_POST['commnet']);

//     $query = "INSERT INTO userinfodata (user, email, mobile, commnet) VALUES ('$user', '$email', '$mobile', '$comment')";
//     if (mysqli_query($con, $query)) {
//         header('location:index.php');
//         exit;
//     } else {
//         echo "Error: " . mysqli_error($con);
//     }
// } else {
//     echo "No form data received";
// }




$con = mysqli_connect('localhost','root');

if($con){
    echo"connection sucess full";
} else 
{
    echo "no Connection";
}

mysqli_select_db($con,'youtubeuserdata');

// $user = $_POST['user'];
// $email = $_POST['email'];
// $mobile = $_POST['mobile'];
// $commnet = $_POST['commnet'];

if (!empty($_POST)) {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $commnet = $_POST['commnet'];

//     insert into database here
} else {
    echo "No form data received";
}



$query = "insert into userinfodata (user,email,mobile,commnet)
values('$user','$email','$mobile','$commnet')";
echo "$query";
mysqli_query($con,$query);
 header('location:index.php');

?>




