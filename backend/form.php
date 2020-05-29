<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Symptoms Checker </title>
</head>
<body>
    <h2>Symptoms Checker</h2>
    <p>Please fill in this form and send us.</p>
    <form action="query.php" method="post">
        <p>
            <label for="inputName">Symp1:<sup>*</sup></label>
            <input type="text" name="val1" id="inputName">
        </p>
        <p>
            <label for="inputEmail">Symp2:<sup>*</sup></label>
            <input type="text" name="val2" id="inputEmail">
        </p>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>