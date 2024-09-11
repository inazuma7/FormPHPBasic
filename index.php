<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href = "css/style.css">
    <title>Form</title>
</head>
<body>
     <div class="wrapper">
         <form action="includes/formhandler.php" method="post">
            <h1>Form</h1>
            <br>
           <label for="firstname">Firstname</label>
            <br>
            <input type="text" id="firstname" name="firstname" placeholder="firstname">
            <br>
            <label for="lastname">Lastname</label>
            <br>
            <input type="text" id="lastname" name="lastname" placeholder="lastname">
            <br>
            <label for="favoritepet">What pets do you like?</label>
            <br>
            <select id="favoritepet" name="favoritepet">
                <option value ="none">None</option>
                <option value ="dog">Dog</option>
                <option value ="cat">Cat</option>
                <option value ="bird">Bird</option>
            </select>
            <br><br>
            <button type="submit" value="submit">Send Data</button>
         </form>
     </div>

</body>
</html>