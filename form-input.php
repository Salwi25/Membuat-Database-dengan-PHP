<!DOCTYPE html>
<html>
    <head>
        <title>Form Inputan Data</title>
    </head>
    <body>
        <form method="post" action="simpan.php">
            <table>
                <tr><td>Account ID</td><td><input type="text" onkeyup="isi_otomatis()" name="account_id"></td></tr>
                <tr><td>Username</td><td><input type="text" name="username"></td></tr>
                <tr><td>Gender</td><td>
                        <input type="radio" name="gender" value="M">Male
                        <input type="radio" name="gender" value="F">Female
                    </td></tr>
                <tr><td>Creator Field</td><td>
                        <select name="creator field">
                            <option value="Artist">Artist</option>
                            <option value="Music Creator">Music Creator</option>
                            <option value="Video Creator">Video Creator</option>
                            <option value="Guide Creator">Guide Creator</option>
                            <option value="Fanfiction Writer">Fanfiction Writer</option>
                            <option value="Cosplayer">Cosplayer</option>
                            <option value="Other">Other</option>
                        </select>
                    </td></tr>
                <tr><td colspan="2"><button type="submit" value="save">SAVE</button></td></tr>
            </table>
        </form>
    </body>
</html>