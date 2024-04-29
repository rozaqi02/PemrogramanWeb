<html>
<head>
</head>
<body>
    <!--form yang nantinya akan mengirim ke sessionLoginProses.php-->
    <form action="sessionLoginProses.php" method="POST">
        <table> <!--Pembuatan tabel-->
            <tr> 
                <td>Username</td>
                <td><input type="text" name="username" size="20" ></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" size="20"></td>
            </tr>
            <tr>
                <td>&nbsp</td>
                <td><input type="submit" name="login" size="Log in"></td>
            </tr>
        </table>
    </form>
</body>
</html>