<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script> 
        document.getElementById('ics').innerHTML= "This is my first JS"
    </script>
    <button onclick="document.getElementById('MyImg')" src="images/BulbOn.jpg">Turn On</button>
    <img src="images/bulb_on.webp" id="MyImg" width="150px">
    <button onclick="document.getElementById('MyImg')" src="images/bulbOff.">Turn Off</button>
</body>
</html>