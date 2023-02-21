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
        <form action="/store6" method="post">
            @csrf
            <div class="row">
                <div class="input-group">
                    <input type="text" id="name" name="type" required>
                    <label for="name">Type</label>
                </div>
                <div class="input-group">
                    <input type="text" id="price" name="unitPrice" required>
                    <label for="price">Price</label>
                </div>
            </div>

            <div class="row">

                <div class="input-group">
                    <label for="suppliers_id">Company Name</label>
                    <br>
                    <br>
                    <select class="form-control" name="suppliers_id" id="suppliers_id">
                        @foreach($sup as $c)
                         <option value="{{ $c->id }}">{{ $c->companyName }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="input-group">
                    <label>Choose an Image: </label><br><br>
                    <input type="file" name="cardImage" id="image" required><br>
                </div>
            </div>
            <br>
            <button type="submit"><i class="fa-sharp fa-solid fa-paper-plane"></i>Submit</button>
        </form>
    </div>

</body>
</html>
