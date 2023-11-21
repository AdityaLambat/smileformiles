<?php
session_start();
include("header.php");
?>
<title>SFM | THANK YOU</title>
<style>
.welcome{
    font-family: 'Mochiy Pop P One', sans-serif;
    font-size: 1.7rem;
    letter-spacing: 4px;
    text-align: center;
    padding: 1%;
}  
p{
    margin-top: 8%;
}
.go{
    margin-left: 45%;
    width: 20%;
}
.go button{
    font-family: 'Poppins', sans-serif;
    font-size: 1.5rem;
    font-weight: 200;
    border: none;
    background-color: rgb(170, 168, 168);
    width: fit-content;
    margin-bottom: 60%;
    padding: 5px 20px 5px 20px;
    border-radius: 30px;
    cursor: pointer;
}
.go button:hover{
    color: white;
    background-color: #24262b;
}
.go button a{
    text-decoration: none;
    color: white;
    margin-bottom: 4%;
}
</style>
<!--- Login Message --->
<?php
if(isset($_SESSION['hiuser'])){
    ?>
<p></p>    
<h1 class="welcome">Welcome To Smiles F<i style="color: rgb(233, 128, 128);" class="fas fa-smile-beam"></i>r Miles</h1>
<h1 class="welcome" style="margin-bottom: 1%;font-family: 'Poppins', sans-serif;"><?php echo $_SESSION['user_name']; ?></h1> 
<div class="go">
<button><a href="home.php">Let's Go</a></button>
</div>
<?php    
}
?>
<?php
include("footer.php");
?>