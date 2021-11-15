<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        if(!isset($_POST['submit'])){
            echo "Choissez un style :";
        }

        elseif($_POST['style'] == 'style1'){
            echo '<link rel="stylesheet" href="style1.css">';
        }
        elseif($_POST['style'] == 'style2'){
            echo '<link rel="stylesheet" href="style2.css">';
        }
        elseif($_POST['style'] == 'style3'){
            echo '<link rel="stylesheet" href="style3.css">';
        }
    ?>
    <title>Job06</title>
</head>
<body>
    <form action="index.php" method="post" style="display: flex; justify-content: center; align-items: center; height: 100vh">
        <select name="style" id="select_style">
            <option value="none">--Please choose an option--</option>
            <option value="style1" class="option_style1">style1</option>
            <option value="style2" class="option_style2">style2</option>
            <option value="style3" class="option_style3">style3</option>
        </select>
        <label for="submit_btn"></label>
        <input type="submit" name="submit" id="submit_btn" value="submit">
    </form>
</body>
</html>
