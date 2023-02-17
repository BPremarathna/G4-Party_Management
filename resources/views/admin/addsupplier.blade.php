<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/constyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/b3fcdde4bf.js" crossorigin="anonymous"></script>
    <title>DREAM | PARTY PLANNING</title>
</head>

<body>
    <div class="hero">
        <form action="store" method="post">
            @csrf

            <div class="row">
                <div class="input-group">
                    <input type="text" id="firstname" name="firstName" required>
                    <label for="firstname">First Name</label>
                </div>
                <div class="input-group">
                    <input type="text" id="lastname" name="lastName" required>
                    <label for="lastname">Last Name</label>
                </div>
            </div>

            <div class="row">
                <div class="input-group">
                    <input type="text" id="mobile" name="mobile" required>
                    <label for="mobile">Mobile No.</label>
                </div>

                <div class="input-group">
                    <input type="text" id="email" name="email" required>
                    <label for="email">Email</label>
                </div>
            </div>

            <div class="row">
                <div class="input-group">
                    <input type="text" id="address" name="address" required>
                    <label for="addresee">Address</label>
                </div>

                <div class="input-group">
                    <input type="text" id="companyname" name="companyName" required>
                    <label for="companyname">Company Name</label>
                </div>

            </div>
            <br>
            <button type="submit"><i class="fa-sharp fa-solid fa-paper-plane"></i>Submit</button>

           

        </form>
    </div>

</body>
</html>
