<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


   
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">

    <a  class="navbar-brand" href="#"> <img src="./images/v987-18a.jpg" alt="" height="50px"> Rodrigues Healthcare</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.html">contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">About</a>
        </li>

       
        
        
        
       
          
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button id="btn3" class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

</head>

  
  
<body>


<style>

body{
 
   background-color: #9DC08B;

} 

#btn3:hover{


background-color:transparent;
border-color: transparent;


}

h2{
  font-family:helvetica;

  margin-left:3%;
  margin-top:-5%;

}

.container{

    margin-top: 15%;
    margin-left: 25%;

    margin-bottom: 3%;
  
    
}

.form-control{
    
    width: 60%;
    
}

.box{


}



</style>



<div class="container">


<form action="Process.php" method="post">
<div class="form-group" >

<h2>DOCTOR'S REGISTRATION FORM</h2>

Firstname<input class="form-control" type="text" name="docFname" >

Lastname<input class="form-control" type="text" name="docLname" >

Email<input class="form-control" type="Email" name="docEmail" >

<label for="dropdown">Speciality</label>
<select  class="form-control"name="speciality" id="speciality">

  <option value="Dentist">Dentist</option>
  <option value="Surgeon">Surgeon</option>
  <option value="General">General</option>

</select>

<label for="dropdown">Location</label>
<select  class="form-control"name="location" id="location">

  <option value="Port-Mathurin">Port-Mathurin</option>
  <option value="Mont-Lubin">Mont-Lubin</option>
  <option value="La Ferme">La Ferme</option>

</select>

Gender

<br>

<input  type="radio" name="gender_opt" id="male" value="male">
<label for="male">Male</label>

<input type="radio" name="gender_opt" id="female" value="female">
<label for="female">Female</label>

<br>

Password<input class="form-control" type="password" name="docPass" required >

Comfirm password<input class="form-control" type="password" name="docCPass" required>

<br>

<input  type="submit" value="register" id="" class="btn btn-primary" class="btn btn info" >

</div>
</form>

</div>

<small>

<?php
if(isset($_GET['status'])){

if($_GET['status']==10){

  
  echo "You have not been successfully registered.";
    
}
}

?>


</small>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</body>
</html>