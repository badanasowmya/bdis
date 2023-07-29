<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/data.css">
    <link rel="stylesheet" href="../css/mobile.css">
    <link rel="stylesheet" href="images">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
<h1 style="text-align: center; color: #666; margin-top: 20px; font-size: 30px; ">PLASMA DONORS</h1>

    <div class="main-div">
        <div class="center-div">

            <div>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>PHONE NUMBER</th>
                            <th>MESSAGE</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                                include 'connect1.php';
                                $selectquery="select * from cont";
                                $query=mysqli_query($conn,$selectquery);
                                while($res=mysqli_fetch_array($query))
                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $res['id'] ?></td>
                                        <td><?php echo $res['Name'] ?></td>
                                        <td><?php echo $res['email'] ?></td>
                                        <td><?php echo $res['PN'] ?></td>
                                        <td><?php echo $res['Addr'] ?></td>
                                    </tr>
                            <?php        
                                }   
                                ?>                       
                    </tbody>
                </table>
            </div>
        </div>
   </div>
</body>
</html>


