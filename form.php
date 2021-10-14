<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <style>
        form div {
            margin-bottom: 18px;
        }

        textarea {
            margin-top: 12px;
            min-width: 50%;
        }
    </style>
</head>

<body>
    <h1>Please fill out the form below!</h1>
    <form action="parcer.php" method="POST">
        <div>
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname">
        </div>
        <div>
            <label for="lname"> Last Name</label>
            <input type="text" id="lname" name="lname">
        </div>
        <div>
            <label for="favourite_color">Favourite Color</label>
            <select type="text" id="favourite_color" name="favourite_color">
                <option value=""></option>
                <option value="red">Red</option>
                <option value="green">Green</option>
                <option value="blue">Blue</option>
                <option value="purple">Purple</option>
            </select>
        </div>
        <div>
            <label for="vehicle">What is your favourite car or vehicle?</label>
            <input type="text" id="vehicle" name="vehicle" />
        </div>
        <div>
            <label for="ideal">Describe your ideal life:</label> <br />
            <textarea name="ideal" id="ideal" rows="7"></textarea>
        </div>
        <div>
            <input type="submit" value="Save" />
        </div>
    </form>

</body>

</html>