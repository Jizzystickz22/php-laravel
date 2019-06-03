<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body{
            margin: 0% 0% 0% 28% ;
            background-color:gray;
        }
        .fr{
            width:500px;
            margin-left: 20px;
            height: 40px; 
            border-radius: 5px;
            border: 1px solid black;
            padding-left: 10px;
            
        }

        .se{
            width:513px;
            height: 45px; 
            border-radius: 5px;
            border: 1px solid black;
            padding-left: 10px;
            margin-left: 20px;
        }

        .div-form{
            background-color: #f0e9e9f5;
            width: 553px;
            position: fixed;
            height: 630px;
            margin-top: 20px;
            border-radius: 20px;
            
        }

        #dd{
            margin-top:-10px;
            color:white;
            background-color:steelblue;
            font-size:30px;
            text-align:center;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            border-top-right-radius:20px;
            border-top-left-radius:20px;
            height: 50px;
        }
    </style>
    
</head>
<body>


<div class="div-form">
        
    <form method="POST" action="validate_form.php" >
            <p id="dd"><b>Please fill in your details to register</b></p>
    <h3 style="margin-bottom:-0px;margin-top: -5px;margin-left: 20px;">Username</h3>
<input type="text" class="fr" name="username" required><br><br>

    <h3 style="margin-bottom:-0px;margin-top: -5px;margin-left: 20px;">Firstname</h3>
<input type="age"  class="fr" name="firstname" required><br><br>

    <h3 style="margin-bottom:-0px;margin-top: -5px;margin-left: 20px;">Lastname</h3>
<input type="text"  class="fr" name="lastname" required><br><br>

    <h3 style="margin-bottom:-0px;margin-top: -5px;margin-left: 20px;" >Password</h3>
<input type="password"  class="fr" name="password1" required><br><br>

    <h3 style="margin-bottom:-0px;margin-top: -5px;margin-left: 20px;" >Confirm password</h3>
<input type="password"  class="fr" name="confirmpassword" required><br><br>

    <h3 style="margin-bottom:-0px;margin-top: -5px;margin-left: 20px;" >Email</h3>
<input type="text"  class="fr" name="email" required><br><br>

<h3 style="margin-bottom:-0px;margin-top: -5px;margin-left: 20px;">Gender</h3>
<select class="se" name="gender">
        
        <option>Male</option>
        <option>Female</option>

</select>
<button type="submit"  onclick="()" style="background-color:rgb(39, 101, 151);color:white;margin-top: 30px;margin-left: 180px;margin-top:-10px" >SUBMIT</button> 

    </form>
 </div>   
</body>
</html>