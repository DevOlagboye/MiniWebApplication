<?php

class Database {
    protected $host = "localhost";
    protected $user = "root";
    protected $pwd = "";
    protected $dbName = "miniweb";
    protected $dbTbName = "mentors";

    public function connect(){
//Initialize connection property
$con = mysqli_connect($this->host, $this->user,$this->pwd,$this->dbName);
return $con;
    }
    public function insertReg($firstname,$secondname,$username,$email,$password){
        $conn = $this->connect();
        mysqli_query($conn, "INSERT INTO ".$this->dbTbName." (firstname,secondname,username,email,password) VALUES ('$firstname', '$secondname','$username','$email','$password')") or die(mysqli_error($conn));
        echo '<script>alert("You Have Successfully been Register");window.location.assign("mentor-login.php");</script>';
    }
    public function insertRegN($firstname,$secondname,$username,$email,$password){
        $conn = $this->connect();
        mysqli_query($conn, "INSERT INTO mentees (firstname,secondname,username,email,password) VALUES ('$firstname', '$secondname','$username','$email','$password')");
        echo '<script>alert("You Have Successfully been Registered");window.location.assign("mentee-login.php");</script>';
        
    }
    public function LoginMentee($username,$password){
        $conn = $this->connect();
        $sql =  "SELECT * FROM mentees WHERE username='$username'AND Password='$password'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0 && $row = mysqli_fetch_assoc($result)) {
            echo '<script>alert("Welcome Back Dear Mentee");window.location.assign("mentee-index.php");</script>';
        }else{
            echo '<script>alert("Login Error");window.location.assign("mentee-login.php");</script>';
        }
        
        
    }
    public function LoginMentor($username,$password){
        $conn = $this->connect();
        $sql =  "SELECT * FROM mentors WHERE username='$username'AND Password='$password'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0 && $row = mysqli_fetch_assoc($result)) {
            echo '<script>alert("Welcome Back Dear Mentor");window.location.assign("mentor-index.php");</script>';
        }else{
            echo '<script>alert("Login Error");window.location.assign("mentor-login.php");</script>';
        }
        
        
    }
    public function Fetch(){
        $conn = $this->connect();
         $query = mysqli_query($conn, "SELECT * FROM mentors");
         $resultCheck = mysqli_num_rows($query);
         while($row = mysqli_fetch_assoc($query)) {

             echo"<table class='table'>
             <thead>
             <tr>
             <th>id</th>
             <th>First Name</th>
             <th>Second Name</th>
             <th>E-mail</th>
             </tr>
             </thead>
             <tbody class='text-center'>
             <tr>
             <th>".$row['id']."</th>
             <td>".$row['firstname']."</td>
             <td>".$row['secondname']."</td>
             <td>".$row['email']."</td>
             </tr>
             </tbody>
             </table>";
         }
     }
}


