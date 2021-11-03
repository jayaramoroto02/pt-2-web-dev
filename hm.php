<?php
DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'it15_database');

$dbc = @mysqli_connect (DB_HOST, DB_USER,DB_PASSWORD, DB_NAME);

    
if(isset($_POST ['butt'])){
    if($dbc){
        echo 'You are connected <br>';
        $fna = $_REQUEST['fna'];
        $mna = $_REQUEST['mna'];
        $lna = $_REQUEST['lna'];
        $bday = $_REQUEST['bday'];
        $gen = $_REQUEST['gen'];
        $stadd = $_REQUEST['stadd'];
        $pass = $_REQUEST['pass'];
        $email = $_REQUEST['email'];
        
        $query = "INSERT INTO users_tbl(firstname, lastname, birthdate, email, address, password, regs_date) VALUES ('$fna','$lna','$bday','$email','$pass', '$stadd',NOW())";

   $result =  @mysqli_query($dbc, $query);

 
   if (!$result) {
    echo  "Fail to add user";
}
else {
    echo "Sucesss!";
} 
}
else {
exit(mysqli_connect_error());
}
mysqli_close($dbc);
}
?>
</body>