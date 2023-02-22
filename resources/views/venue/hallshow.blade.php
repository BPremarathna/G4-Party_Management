<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>DREAM | PARTY PLANNING</title>
</head>
<body>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Hall Management</h2>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('hallinput') }}"> Create New Cake</a>
            </div>
            <br>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
          <th>Hall Name</th>
          <th>Description</th>
          <th>Capacity</th>
          <th>Unit Price</th>
          <th>Hall Image</th>
          <th>Venue ID</th>
          <th width="300px">Action</th>
        </tr>
        @foreach ($data as $key => $hall )
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $hall->hallName }}</td>
            <td>{{ $hall->description }}</td>
            <td>{{ $hall->capacity }}</td>
            <td>{{ $hall->unitPrice }}</td>
            <td><img src="/images/{{ $hall->hallImage }}" width="100px"></td>
            <td>{{ $hall->venues_id }}</td>

            <td>
                <form action="{{ route('destroy',$hall->id) }}" method="POST">
                    <a class="btn btn-info" href="">Show</a>
                    <a class="btn btn-primary" href="">Edit</a>
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>

        @endforeach
    </table>
    {!! $data->links() !!}

</body>
</html>
