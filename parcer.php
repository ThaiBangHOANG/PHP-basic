<?php
function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "<pre>";
    die;
}

// dd($_POST);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$color = $_POST['favourite_color'];
$vehicle = $_POST['vehicle'];
$ideal = $_POST['ideal'];

$currentYear = date("Y", strtotime("now"));
$futureYear = date("Y", strtotime("+10 years"));

// dd($currentYear);
// dd($futureYear);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you!</title>
</head>

<body>
    <p>Dear <?php echo $fname; ?>,</p>
    <p>You began learning to code in <?php echo $currentYear; ?>. It is now <?php echo $futureYear; ?>. Do not freak out but this letter is from you, in the future. I am writing you to say thank you!</p>
    <p>Learning to develop was not an easy task, however, you stuck with it and now you are living the life of your dream!</p>
    <p>Let me tell you a little about your life. First off, you wake up in the morning and go to the best job you have ever had. You take your <?= $color ?> <?= $vehicle ?> M850i to work every day, and you can not believe this is your life!</p>
    <p>In the year <?= $currentYear ?>, you described your ideal life as the following.</p>
    <p><?= nl2br($ideal) ?></p>
    <p>I want to let you know that you are living your ideal life along with so much more!</p>
    <p>I am writing you this to encourage to not give up! You can do this! I believe you, because I am you!</p>
    <p>Sincerely,</p>
    <p><?= $fname ?> <?= $lname ?></p>
</body>

</html>