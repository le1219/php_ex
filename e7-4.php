<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form name="myForm" action="./e7-4-1.php" method="POST" enctype="application/x-www-form-urlencoded">

        <h3>ANIMALS</h3>
        <label>CAT</label>
        <input type="checkbox" value="cat" name="myFAV[]">

        <label>DOG</label>
        <input type="checkbox" value="dog" name="myFAV[]">

        <label>FISH</label>
        <input type="checkbox" value="fish" name="myFAV[]">

        <label>RABBIT</label>
        <input type="checkbox" value="rabbit" name="myFAV[]">

        <input type="submit" name="smb" value="CLICK">

    </form>

</body>

</html>