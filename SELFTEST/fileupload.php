<?php
print_r($_FILES);
if (isset($_POST['s'])) {
    if(move_uploaded_file($_FILES['image']['tmp_name'],
    "C:\Users\LENOVO\Pictures\Saved Pictures" . $_FILES['image']['name']))
    {
        echo "uploaded successfully";
    }
}
?>
<html>
    <title>PHP Form
    </title>
    <head>
            <b>Working with PHP</b>
    </head>
    <body>
        <form action="" method="POST"  enctype="multipart/form-data">
            <br>
            <label for="Name">Name:<input type="text" name="Name"></lable>
            <span id="name"></span>
            <label for="Age">Age:<input type="number" name="Age"></label><br>
            <label for="image">Image:<input type="file" name="image"></label>
            <button type="submit" value="Submit" name="s">Submit</button>
        </form>
    </body>    
</html>
