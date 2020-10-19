<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Main CSS-->
    <link href="assets/css/style.css" rel="stylesheet" media="all">

    <title>Register Items</title>
</head>

<body>
    <form class="register">

        <h1>REGISTER ITEMS</h1>

        <fieldset>

            <label for="title">Title:</label>
            <input type="text" id="title" name="title">


            <label for="bio">Description:</label>
            <textarea id="bio" name="bio"></textarea>

            <label for="image">Image Link:</label>
            <input type="text" id="image" name="image" placeholder="Eg.: https://picsum.photos/id/1/200/300">



        </fieldset>

        <button type="submit" id="add" class="btn btn-success">Register</button>
        <button id="reset" class="btn btn-primary">Reset</button>

    </form>
    <a href="index.php" class="btn btn-info bottom">Home</a>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>


</body>

</html>