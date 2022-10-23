<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload - parsos.ir</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <!-- label -->
        <label for="upload">
            Upload File
        </label>
        <!-- label -->

        <!-- input -->
        <input type="file" id="upload" name="file">
        <!-- input -->

        <!-- button -->
        <button>upload</button>
        <!-- button -->

        <!-- design by -->
        <div class="footer">
            <!-- right -->
            <p>
                max 9 MB
            </p>
            <!-- right -->

            <!-- left -->
            <div class="text">
                <a href="https://parsos.ir">parsos.ir</a>
            </div>
            <!-- left -->
        </div>
        <!-- design by -->
    </form>
</body>
</html>