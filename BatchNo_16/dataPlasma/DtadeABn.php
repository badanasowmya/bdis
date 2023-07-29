<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/data.css">
    <link rel="stylesheet" href="../css/mobile.css">
    <link rel="stylesheet" href="images">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        h2{
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="main-div">
    <h2>TADEPALLIGUDEM(AB-)</h2>
        <div class="center-div">
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>FIRST NAME</th>
                            <th>LAST NAME</th>
                            <th>DATE OF BIRTH</th>
                            <th>BLOOD GROUP</th>
                            <th>EMAIL</th>
                            <th>PHONE NUMBER</th>
                            <th>CITY</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                include '../connect1.php';
                                $selectquery="select * from col where BG='AB-' and Address='eluru'";
                                $query=mysqli_query($conn,$selectquery);
                                while($res=mysqli_fetch_array($query))
                                {
                                    ?>
                        <tr>
                            <td>
                                <?php echo $res['Id'] ?>
                            </td>
                            <td>
                                <?php echo $res['firstName'] ?>
                            </td>
                            <td>
                                <?php echo $res['lastName'] ?>
                            </td>
                            <td>
                                <?php echo $res['date'] ?>
                            </td>
                            <td>
                                <?php echo $res['BG'] ?>
                            </td>
                            <td>
                                <?php echo $res['email'] ?>
                            </td>
                            <td>
                                <?php echo $res['PN'] ?>
                            </td>
                            <td>
                                <?php echo $res['Address'] ?>
                            </td>
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