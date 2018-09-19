<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
</head>
<body>
    <div>
        <form action="save.php" method="post">

            <label for="theinputname">Write your name:</label>
            <input type='text' name='name' id='theinputname'>
            <br/>
            
            <label for="theinputlastname">Write your lastname:</label>
            <input type='text' name='lastname' id='theinputlastname'>
            <br/>
            
            <label for="theinputemail">Write your email address:</label>
            <input type='email' name='e-mail' id='theinputemail'>
            <br/>

            <input type="submit" value="Send Information">

        </form>

    </div>
</body>
</html>