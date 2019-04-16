<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LOGIN</title>


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items:center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Welcome
                </div>
            </div>
            <div>

                <div class="links">
                <form action="{{route('create')}}" method="post">
                @csrf
                    <div class ="row form-group">
                        <div class="col-md-12">
                            <label for = ""> Nama: </label>
                            <input type = "text" maxlength="50" name = "name" class="form-control" required>
                        </div>
                    </div>
                    <div class ="row form-group">
                        <div class="col-md-12">
                            <label for = ""> Password: </label>
                            <input type = "password" maxlength="50" name = "password" class="form-control" required>
                        </div>
                    </div>
                    <div class ="row form-group">
                        <div class="col-md-12">
                            <label for = ""> Email: </label>
                            <input type = "email" maxlength="40" name = "email" class="form-control" required>
                        </div>
                    </div>
                    <div class ="row form-group">
                        <div class="col-md-12">
                            <label for = ""> Nomor Telepon: </label>
                            <input type = "tel" maxlength="20" name = "telp" class="form-control" required>
                        </div>
                    </div>
                    <div class ="row form-group">
                        <div class="col-md-12">
                            <label for = ""> Referal Id: </label>
                            <select name = "referal_id" class="form-control" value ="null" required>
                            <option value="0"></option>
                            @foreach ($tamus as $tamu)
                                <option value="{{$tamu->id}}">{{$tamu->id}}-{{$tamu->name}}  </option>
                            @endforeach
                            </select>
                        </div>
                    </div>

                <div class="row form-group">
                    <div class="col-md-12">
                    <button type="submit" class="btn btn-success w-50 float-right">Login  </button>
                    </div>
                </div>
                </form>
                </div>
            </div>
        </div>
    </body>
</html>