<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <title>Document</title>
    <style>
        body {
            background: #002147;
        }

        form {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -100px;
            margin-left: -250px;
            width: 500px;
            height: 200px;
            border: 4px dashed #fff;
        }

        form p {
            width: 100%;
            height: 100%;
            text-align: center;
            line-height: 170px;
            color: #ffffff;
            font-family: Arial;
        }

        form input {
            position: absolute;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            outline: none;
            opacity: 0;
        }

        form button {
            margin: 0;
            color: #fff;
            background: #16a085;
            border: none;
            width: 508px;
            height: 35px;
            margin-top: -20px;
            margin-left: -4px;
            border-radius: 4px;
            border-bottom: 4px solid #117A60;
            transition: all .2s ease;
            outline: none;
        }

        form button:hover {
            background: #149174;
            color: #0C5645;
        }

        form button:active {
            border: 0;
        }

        .error p {
            margin-top: 15%;
            padding-bottom: 10px;
            padding-top: 10px;
            padding-left: 225px;
            padding-right: 225px;
            color: rgb(255, 255, 255);
        }
        .spn p{
            background-color: red;

        }
        .spn1 p{
            background-color: rgba(85, 255, 119, 0.786);
            margin-top: 25%;
            color: white;
            padding-bottom: 10px;
            padding-top: 10px;
            padding-left: 225px;
            padding-right: 225px;
        }
        p{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <div class="S">
        <span class="spn1">
            @if (Session::has('message'))
                <p>{{ Session::get('message') }}</p>
            @endif
            @if (Session::has('msg'))
                <p>{{ Session::has('msg') }}</p>
            @endif
        </span>
    </div>
    <div class="error">
        <span class="spn">
            @error('image')
                <p>{{ $message }}</p>
            @enderror
        </span>

    </div>

    <form action="{{ url('images') }}" method="POST" enctype="multipart/form-data">

        @csrf
        <input type="file" multiple id="image" name="image">
        <p>Drag your files here or click in this area.</p>

        <button type="submit">Upload</button>
    </form>

    <script>
        $(document).ready(function() {
            $('form input').change(function() {
                $('form p').text(this.files.length + " file(s) selected");
            });
        });
    </script>
</body>


</html>
