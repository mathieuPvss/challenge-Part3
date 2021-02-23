@extends('layout')

@section('contenu')
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
                Laravel File Upload
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                </div>
            @endif

            <div class="links">
                <form action="/ajouter" method="POST" enctype="multipart/form-data">
                <!-- <form method="POST" enctype="multipart/form-data"> -->
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="file" name="file[]" multiple class="form-control">
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success">télécharger</button>
                        </div>
                    </div>
                </form>
                <?php
                    if (isset($_FILES['file'])) {
                        $myFile = $_FILES['file'];
                        $fileCount = count($myFile["name"]);

                        for ($i = 0; $i < $fileCount; $i++) {
                            ?>
                            <p>File #<?= $i+1 ?>:</p>
                            <p>
                                Name: <?= $myFile["name"][$i] ?><br>
                                Temporary file: <?= $myFile["tmp_name"][$i] ?><br>
                                Type: <?= $myFile["type"][$i] ?><br>
                                Size: <?= $myFile["size"][$i] ?><br>
                                Error: <?= $myFile["error"][$i] ?><br>
                            </p>
                <?php   
                        }
                    }?>
            </div>
        </div>
    </div>
</body>
@endsection