<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/constyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/b3fcdde4bf.js" crossorigin="anonymous"></script>
    <title>DREAM | PARTY PLANNING</title>
</head>
<body>
    <div class="hero">
        <form action="" method="get">
            @csrf
            <div class="row">
                <div class="input-group">
                    <input type="text" id="category" name="category" required>
                    <label for="category">Category</label>
                </div>
            </div>
            <div class="row">
                <div class="input-group">
                    <label>Choose an Image: </label><br><br>
                    <input type="file" name="galleryImage" id="image" required><br>
                </div>
                <br>
                <button type="submit"><i class="fa-sharp fa-solid fa-paper-plane"></i>Submit</button>
            </div>
        </form>
    </div>

</body>
</html>
