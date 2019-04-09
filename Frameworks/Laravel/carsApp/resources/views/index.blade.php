<!doctype html>
<html lang=en>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cars Application</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-6">
                <form action="{{route('create')}}" method="post">
                @csrf
                    <div class ="row form-group">
                        <div class="col-md-12">
                            <label for = ""> Make: </label>
                            <input type = "text" name = "make" class="form-control" required>
                        </div>
                    </div>
                    <div class ="row form-group">
                        <div class="col-md-12">
                            <label for = ""> Model: </label>
                            <input type = "text" name = "model" class="form-control" required>
                        </div>
                    </div>
                    <div class ="row form-group">
                        <div class="col-md-12">
                            <label for = ""> Produced On: </label>
                            <input type = "date" name = "produced_on" class="form-control" required>
                        </div>
                    </div>
                <div class="row form-group">
                    <div class="col-md-12">
                    <button type="submit" class="btn btn-success w-50 float-right">Create</button>
                    </div>
                </div>
                </form>
            </div>
            <div class="col-md-6">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Produced On</th>
                    </tr>
                    @foreach ($cars as $car)
                    <tr>
                        <td>{{$car->make}}</td>
                        <td>{{$car->model}}</td>
                        <td>{{$car->produced_on}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            </div>
        </div>
    </body>
</html>
