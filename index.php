<!DOCTYPE html>
<html>
    <head>
        <title>Hoyolab</title>
    </head>
    <body>
        <h2>Content Creators</h2>
        <table border="1">
            <tr><th>No</th><th>Account ID</th><th>Username</th><th>Gender</th><th>Creator Field</th><th>Action</th></tr>
            <?php
            include 'koneksi.php';
            $creators = mysqli_query($connection, "SELECT * from creators");
            $no = 1;
            foreach ($creators as $row){
                $gender = $row['gender'] == 'F'?'Female':'Male';
                echo "<tr>
                    <td>$no</td>
                    <td>" . $row['account_id'] . "</td>
                    <td>" . $row['username'] . "</td>
                    <td>" . $gender . "</td>
                    <td>" . $row['creator_field'] . "</td>
                    <td><a href='form-edit.php?account_id=$row[account_id]'>Edit</a>
                        <a href='delete.php?account_id=$row[account_id]'>Delete</a>
                    </td>
                        </tr>";
                            $no++;
                    }
                    ?>
                </table>
    
    </body>
</html>