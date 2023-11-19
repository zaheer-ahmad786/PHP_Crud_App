<?php
 session_start();
 if(!isset($_SESSION['user']))
 {
     header("location:login.php");  
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
        background-color: gold;
        max-width: 1300px;
        font-weight: bold;
        color: blue;
    }
    </style>
</head>

<body>
    <div class="container m-5 p-5 m-auto mt-1 ">
        <a href="register.php" class="btn btn-primary">Register Form</a>
        <div class="h3">Record Table</div>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>fName</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $connection = mysqli_connect('localhost','root','','crud_php');
                    $query = "SELECT * FROM emp";
                    if($result=mysqli_query($connection,$query)){
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo'
                                <tr>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['fname'].'</td>
                                <td>'.$row['email'].'</td>
                                <td>'.$row['password'].'</td>
                                <td>'.$row['country'].'</td>
                                <td>
                                    <a href="?edit_id='.$row['id'].'" class="badge bg-warning">Edit</a>
                                    <a href="function.php?dlt_id='.$row['id'].'" class="badge bg-danger">Delete</a>
                                </td>
                            </tr>
                               ';
                            }
                        }else{
                            echo'<tr><td colspan="6">No Data found</td></tr>';
                        }
                    }else{
                        echo'<tr><td colspan="6">An error occured!</td></tr>';
                    }

                    ?>

            </tbody>
        </table>


    </div>
    <?php
           if(isset($_GET['edit_id'])){
            if($_GET['edit_id']==0 && empty($_GET['edit_id'])){
           die;
            }
           
        ?>
    <div class="container m-5 p-5 m-auto mt-1 w-50">
        <form action="function.php" method="POST">
            <div class="h3">Update Form</div>
            <?php
                   $query = "SELECT * FROM emp WHERE id='".$_GET['edit_id']."'";
                   if($result=mysqli_query($connection,$query)){
                       if(mysqli_num_rows($result)>0){
                           while($row = mysqli_fetch_assoc($result)){
                ?>
            <input type="hidden" name="id" value="<?=$row['id'];?>">
            <label for="">Name</label>
            <input type="text" value="<?=$row['name'];?>" class="form-control m-auto" name="name">
            <label for="">Father Name</label>
            <input type="text" value="<?=$row['fname'];?>" class="form-control" name="fname">
            <label for="">Email</label>
            <input type="text" value="<?=$row['email'];?>" class="form-control" name="email">
            <label for="">Country</label>
            <select name="country" id="country_dropdown" class="form-control">
                <option value="Pakistan">Pakistan</option>
                <option value="India">India</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Philpine">Philpine</option>
                <script>
                const changeselected = (e) => {
                    const $select = document.querySelector('#country_dropdown');
                    $select.value = '<?=$row['country'];?>'
                };
                changeselected();
                </script>
            </select>
            <button type="submit" class="btn btn-primary mt-3 form-control" name="updateform">submit</button>
        </form>
    </div>
    <?php
                   }
                }
            }

         }
        ?>
    <?php
             if(isset ($_GET['msg'])){
                if($_GET['msg'] == '0'){
                    echo'  <div class="alert alert-danger mt-2">Record Has not Inserted</div>';
                }
             }
              ?>
</body>

</html>