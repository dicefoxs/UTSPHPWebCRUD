<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="body">
    <header class="header">
        <h1 class="h1">
            Add Admin
        </h1>
    </header>

    <a class="h3" href="index.php">Dashboard</a>
    <br /><br />

    <form action="add.php" method="post" name="form1">
        <table border="5" class="table h4">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="text" name="Umur"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="Jenis_Kelamin" id="select">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nomer Telepon</td>
                <td><input type="phone" name="No_Telp"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="Email"></td>
            </tr>
        </table>
        <br>
        <Button class="button h5" type="submit" name="Submit" value="Submit">Submit</Button>
    </form>
</body>

</html>

<?php
include("connection.php");

// Check If form submitted, insert form data into users table.
if (isset($_POST['Submit'])) {
    $Nama = $_POST['Nama'];
    $Umur = $_POST['Umur'];
    $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
    $No_Telp = $_POST['No_Telp'];
    $Email = $_POST['Email'];

    // Insert user data into table
    $sql = "INSERT INTO admin(Nama, Umur, Jenis_Kelamin, No_Telp, Email) VALUES('$Nama','$Umur','$Jenis_Kelamin','$No_Telp', '$Email')";
    $query = mysqli_query($db, $sql);
    // Show message when user added

    if ($query) {
        header('Location: index.php?status=sukses');
    } else {
        die("Gagal menambah");
    }
}
?>