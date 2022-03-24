<html>
<head>
    <title>Form</title>
</head>
<body>
<h1>Myform</h1>
<form action="/submit-form" method="POST">
@csrf
Name: <input type="text" name="complete_name" />
<button type="submit">
    Submit
</button>
</form>
</body>
</html>