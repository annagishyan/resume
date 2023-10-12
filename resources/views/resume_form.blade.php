<!doctype HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resume</title>
</head>
<body>
<h1>WORK APPLICATION FORM</h1>
<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <div style="margin-bottom: 10px;">
        <label for="first_name">First name:</label>
        <input type="text" name="first_name" required>
    </div>
    <div style="margin-bottom: 10px;">
        <label for="last_name">Surname:</label>
        <input type="text" name="last_name" required>
    </div>
    <div style="margin-bottom: 10px;">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
    </div>
    <div style="margin-bottom: 10px;">
        <label for="position">Position:</label>
        <input type="text" name="position">
    </div>
    <div style="margin-bottom: 10px;">
        <label for="education">Education:</label>
        <input type="text" name="education">
    </div>
    <div style="margin-bottom: 10px;">
        <label for="image">Upload your image here:</label>
        <input type="file" name="image" alt="Image" accept="image/*">
    </div>
    <div>
        <button type="reset" name="reset" style="background-color: #ddd; padding: 5px 10px; border: none; cursor: pointer;">Reset</button>
        <button type="submit" name="Submit" style="background-color: #007bff; color: #fff; padding: 5px 10px; border: none; cursor: pointer;">Send</button>
    </div>
</form>


</body>
</html>
