<?php
include 'koneksi.php';
$account_id = $_GET['account_id'];
$creators = mysqli_query($connection, "select * from creators where account_id='$account_id'");
$row = mysqli_fetch_array($creators);
// membuat data jurusan menjadi dinamis dalam bentuk array
$creator_field = array('Artist','Music Creator','Video Creator','Guide Creator','Fanfiction Writer', 'Cosplayer','Other');
// membuat function untuk set aktif radio button
function active_radio_button($value,$input){
    // apabila value dari radio sama dengan yang di input
    $result = $value==$input?'checked':'';
    return $result;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hoyolab</title>
    </head>
    <body>
        <form method="post" action="update.php">
            <input type="hidden" value="<?php echo $row['account_id'];?>" name="account_id">
            <table>
                <tr><td>Account ID</td><td><input type="text" value="<?php echo $row['account_id'];?>" name="account_id"></td><tr>
                <tr><td>Username</td><td><input type="text" value="<?php echo $row['username'];?>" name="username"></td><tr>
                <tr><td>Gender</td><td>
                        <input type="radio" name="gender" value="M" <?php echo active_radio_button("M", $row['gender'])?>>Male
                        <input type="radio" name="gender" value="F" <?php echo active_radio_button("F", $row['gender'])?>>Female
                    </td></tr>
                <tr><td>Creator Field <? echo $row['creator_field'];?></td><td>
                        <select name="creator_field">
                            <?php
                            foreach ($creator_field as $j){
                                echo "<option value='$j' ";
                                echo $row['creator_field']==$j?'selected="selected"':'';
                                echo ">$j</option>";
                            }
                            ?>
                        </select>
                    </td></tr>
                <tr><td colspan="2"><button type="submit" value="save">SAVE CHANGES</button>
                            <a href="index.php">Back</a></td></tr>
            </table>
        </form>
    </body>
</html>
