<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .container{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 3em;
        }
        .form__container{
            width: 100%;
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
   
   include './config/config.php';

   $sql = "SELECT * FROM departments";
   $query = mysqli_query($conn, $sql);


   ?>

    <div class="container">
        <div class="form__container">
            <form action="./controller/controller.php" method="POST">
                <div class="form__div">
                    <label for="">Department Name</label>
                    <input type="text" name="department_name" id="">
                </div>
                <div class="form__div">
                    <label for="">Manager ID</label>
                    <input type="text" name="manager_id" id="">
                </div>
                <div class="form__div">
                    <label for="">Location ID</label>
                    <input type="text" name="location_id" id="">
                </div>
                <button type="submit" name="new_record">submit</button>
            </form>
        </div>
        <div class="table__container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Department Name</th>
                        <th>Manager ID</th>
                        <th>Location ID</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $query->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row['department_id'] ?></td>
                            <td><?php echo $row['department_name'] ?></td>
                            <td><?php echo $row['manager_id'] ?></td>
                            <td><?php echo $row['location_id'] ?></td>
                            <td>
                                <a href="./page/updatePage.php?ID=<?php echo $row['department_id'] ?>" .;>Update</a>
                                <a href="./controller/controller.php?ID=<?php echo $row['department_id'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>