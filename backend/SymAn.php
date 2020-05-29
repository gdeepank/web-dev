<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home - Heka</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <style>
.container-fluid {
  padding: 60px 50px;
}

#jrep {
    padding: 185px;
    background-image: url(images/gray-pattern.jpg);
}

#colmain {
    top: 80px;
}
</style>
    <div id="jrep" class="container-fluid text-center">
        <div id = "colmain" class = "col-sm-6">
        <img src="images/LogoMakr_4IfC65.png" alt="Project Heka" height="50%" width="50%" align="left">
        <p style="text-align: left; font-size: 40px; "><br><br> Responsible Service For<br>A Healthy Lifestyle</p>
    </div>
    <div class="col-sm-6">
        <form action="query.php" method = 'post'>
        <div class="login-box" style="width: 600px;height: 400px;">
            <div class="box-header">
                <h2>Basic Symptom Analyser</h2>
            </div>
            <label for="inputName">Symptom 1</label>
            <br/>
            <input type="text" name="val1" id="inputName">
            <br/>
            <label for="inputEmail">Symptom 2</label>
            <br/>
            <input type="text" name="val2" id="inputEmail">
            <br/>
            <input type="submit" value="Submit">
            <br/>
            <input type="reset" value="Reset">
            <br/>
        </div>
    </div>
</form>
</div>
  
    </div>
</body>
</html>



