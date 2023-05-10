<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('/css/style1.css') }}">
    <title>Document</title>
    <style>
        .container {
            /* width:50%; */
            border-style: solid;
            border-color: #002147;
            margin: 50px 250px 150px 350px;
        }

        .header {
            background-color: #002147;
            margin: 15px 15px 15px 15px;
            border-style: 1px solid;
            border-color: white;
        }

        .text {
            color: white;
            padding: 15px 15px 15px 15px;
        }

        .data {
            background-color: #002147;
        }

        .text1 {
            display: inline;
            color: white;
            border: 1px solid;
            border-color: #002147;
            padding: 15px 15px 15px 15px;
        }
    </style>
</head>

<body>
    {{-- <table class="container">
        <thead>
            <tr class="header">

            </tr>
        </thead>

        @foreach ($record as $rec)
            <tr class="data">

                <th class="text1">
                    <a href=""><img src="{{ $rec->path }}" height="200px" width="200px"
                            style=" border-style:solid;"></a>
                </th>
            </tr>
        @endforeach
</body>

</html>
