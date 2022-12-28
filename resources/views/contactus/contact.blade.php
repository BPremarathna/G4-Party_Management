<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DREAM PARTY PLANNER</title>
        <link rel="stylesheet" href="{{ asset('css/constyle.css') }}">
        <link rel="stylesheet" href="{{ asset('style.css') }}">
        <script src="https://kit.fontawesome.com/b3fcdde4bf.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="hero">


        <form action="" method="post">
            @csrf
            <h1> CONTACT WITH US </h1>  <br>
            <p> Drop Us A Message (24*7 Support) </p><br>
            <div class="row">
            <div class="input-group">
                <input type="text" id="name" required>
                <label for="name"><i class="fa-solid fa-user"></i>Your Name</label>
            </div>
            <div class="input-group">
                <input type="text" id="number" required>
                <label for="number"><i class="fa-solid fa-square-phone"></i>Phone No.</label>
            </div>
            </div>
            <div class="input-group">
                <input type="email" id="email" required>
                <label for="email"><i class="fa-solid fa-envelope"></i>Email Id</label>
            </div>
            <div class="input-group">
                <textarea  id="message" rows="8" required></textarea>
                <label for="message"><i class="fa-solid fa-message-text"></i>Your Message</label>
            </div>
            <button type="submit"><i class="fa-sharp fa-solid fa-paper-plane"></i>Submit</button>

            </form>
        </div>
    </body>
    </html>
