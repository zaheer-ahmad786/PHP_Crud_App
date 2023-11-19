<?php
session_start();
if(isset($_SESSION['user']))
{
    header('location:record.php');
}
?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <title>Registration Form</title>
    <style>
    .container {
        background-color: skyblue;
        max-width: 500px;
        font-weight: bold;
        color: blue;
    }
    </style>
</head>

<body>
    <div class="container m-5 p-5 m-auto mt-5 ">
        <form action="function.php" method="POST">
            <div class="h3">Login Form</div>
            <label for="">Email</label>
            <input type="text" class="form-control" name="email">
            <label for="">Password</label>
            <input type="text" class="form-control" name="password">
            <button type="submit" class="btn btn-primary mt-3 form-control" name="loginform">submit</button>
            <?php
              
             if(isset ($_GET['msg'])){
                if($_GET['msg'] == '0'){
                    echo'  <div class="alert alert-danger mt-2">Password Incorrect</div>';
                }
             }
              ?>

        </form>

    </div>
</body>

</html>