<?php

if(isset($_POST["first"]) && isset($_POST["second"]))
{
    $first=$_POST["first"];
    $second=$_POST["second"];
    if(isset($_POST["add"]))
    {
        $res=$first+$second;
        
    }
    if(isset($_POST["sub"]))
    {
        $res=$first-$second;
        
    }
    if(isset($_POST["mult"]))
    {
        $res=$first*$second;
        
    }
    if(isset($_POST["div"]))
    {
        $res=$first/$second;
        
    }
   
    
}


?>
<html>
    <head>
        <title>Calculator</title>
   	<style>
            *{
                box-sizing: border-box;
            }
           
            .container{
                width: 60%;
                margin-top: 50px;
                border-style: solid;
                border-width: 5px;
                margin-left: 25%;
                border-radius: 10px;
                padding: 0;
                text-align: center;
            }
            .oper{
                margin-top: 50px;
                width: 20%;
                padding: 5px;
                display: inline-block;
            }
            .oper input{
                 background-color: black;
                color: white;
                height: 50px;
            }
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container text-center">
            <div >
                <h1>Calculator</h1>
            </div>
            <form   method="POST" class="form-group" id="formlogin">
                <div class="form-group">
                    <p>Enter first number: </p> 
                    <input type="number" value="<?php if(isset($first)) {echo $first;}?>" name="first" class="form-control">
                </div>
                <div class="form-group">
                    <p>Enter second number: </p>
                    <input type="number" value="<?php if(isset($second)) {echo $second;}?>" name="second" class="form-control">
                </div>
                <div class="form-group">
                        <p>Result: </p>
                        <input type="text" value="<?php if(isset($res)) {echo $res;}?>" id="result" name="result" class="form-control"  >
                    </div>
                <div class="oper">
                    <input type="submit" value="ADDITION" id="add" name="add" >
                </div>
                <div class="oper">
                    <input type="submit" value="SUBTRACTION" id="sub" name="sub" >
                </div>
                <div class="oper">
                    <input type="submit" value="MULTIPLICATION" id="mul" name="mult" >
                </div>
                <div class="oper">
                    <input type="submit" value="DIVISION" id="div" name="div" >
                </div>
            </form>
        </div>
    </body>
    <script>
     
    </script>
</html>
