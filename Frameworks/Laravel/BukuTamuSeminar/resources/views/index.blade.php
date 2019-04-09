<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
                align-items: center;
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
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Daftar Tamu
                </div>

                <div class="links">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Datang</th>
                        <th>Referal ID</th>
                    </tr>
                    @foreach ($tamus as $tamu)
                    <tr>
                        <td>{{$tamu->id}}</td>
                        <td>{{$tamu->name}}</td>
                        <td>{{$tamu->password}}</td>
                        <td>{{$tamu->email}}</td>
                        <td>{{$tamu->telp}}</td>
                        <td>{{$tamu->created_at}}</td>
                        <td>{{$tamu->referal_id}}</td>
                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
        <a href="{{route('show')}}">Klik untuk kembali ke halaman utama</a>
    </body>
</html>
