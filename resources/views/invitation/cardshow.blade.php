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
                <h2>Invitation Cards Management</h2>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('cardinput') }}"> Create New Invitation Card</a>
            </div>
            <br>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
          <th>Type</th>
          <th>Unit Price</th>
          <th>Invitation Card Image</th>
          <th>Supplier ID</th>
          <th width="300px">Action</th>
        </tr>
        @foreach ($data as $key => $invitation )
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $invitation->type }}</td>
            <td>{{ $invitation->unitPrice }}</td>
            <td><img src="/images/{{ $invitation->cardImage }}" width="100px"></td>
            <td>{{ $invitation->suppliers_id }}</td>

            <td>
                <form action="{{ route('destroy',$invitation->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('show6',$invitation->id) }}">Show</a>
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
