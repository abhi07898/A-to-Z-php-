<html>
    <head>
        <title>home page </title>
        <link rel="stylesheet" href="form.css">
    </head>
    <body>
        <form action="insert.php" method='post'>
            <table>
                <tr> 
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr> 
                    <td>Class</td>
                    <td><input type="text" name="class"></td>
                </tr>
                <tr> 
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr> 
                    <td>Fees</td>
                    <td><input type="text" name="fees"></td>
                </tr>
            </table>
            <input type="submit" value="SUBMIT" name='submitbtn' class='btn'>
            <input type="submit" value="fatch the data from database " name='fatched' class='btn'>
            
        </form>
    </body>
</html>