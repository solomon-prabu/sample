<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .container{
            display: flex;
            justify-content: center;
           min-height: 85vh;
            
        }
        .form__container{
            width: 30%;
        }
        .form__div{
            display: flex;
            flex-direction: column;
            margin-bottom: 1rem;
        }

    </style>
</head>
<body>

   <?php
   
    include '../config/config.php';

    if(isset($_GET['ID'])){

        $d_id = $_GET['ID'];

        $sql = "SELECT * FROM departments WHERE department_id = $d_id";
        $query = mysqli_query($conn, $sql);
        $check = mysqli_num_rows($query);


        if ($check > 0){

            while($row = $query->fetch_assoc()){


    ?>

        <div class="container">
            <div class="form__container">
                <h2>Update Records</h2>
                <form action="../controller/controller.php" method="POST">
                    <div class="form__div">
                        <input type="text" name="department_id" value="<?php echo $row['department_id'] ?>" id="">
                    </div>
                    <div class="form__div">
                        <label for="">Department Name</label>
                        <input type="text" name="department_name" value="<?php echo $row['department_name'] ?>" id="">
                    </div>
                    <div class="form__div">
                        <label for="">Manager ID</label>
                        <input type="text" name="manager_id" value="<?php echo $row['manager_id'] ?>" id="">
                    </div>
                    <div class="form__div">
                        <label for="">Location ID</label>
                        <input type="text" name="location_id" value="<?php echo $row['location_id'] ?>" id="">
                    </div>
                    <button type="submit" name="update_record">Update</button>
                </form>
            </div>
        </div>


    <?php
            }
        }
    }


   ?>

    

</body>
</html>