<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort Numbers</title>
</head>
<body>
    <h3 align="center">Sort Three Numbers</h3>
    <script>
        var x= 10;
        var y=-11;
        var z= -13;
        if (x>y && x>z)
        {
            if (y>z)
            {
                alert(x + ", " + y + ", " +z);
            }
            else
            {
                alert(x + ", " + z + ", " +y);
            }
        }
        else if (y>x && y >z)
        {
            if (x>z)
            {
                alert(y + ", " + x + ", " +z);
            }
            else
            {
                alert(y + ", " + z + ", " +x);
            }
        }
        else if (z>x && z>y)
        {
            if (x>y)
            {
                alert(z + ", " + x + ", " +y);
            }
            else
            {
                alert(z + ", " + y + ", " +x);
            }
        }           

    </script>
</body>
</html>