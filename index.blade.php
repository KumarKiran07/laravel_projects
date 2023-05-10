<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <!DOCTYPE html>
    <html>

    <head>
        <style>
            .h1{
                margin-top: 6%;
                display:flex;
                width: 95%;
            }
            .h2{
                display:flex;
                width: 95%;
            }
            .heading {
                display: flex;
                color: white;
                font-size: 61px;
            }
            .heading:hover{
                color: rgb(238,174,202);
            }

            .gallery {

                margin: 5px;
                border: 1px solid #ccc;
                float: left;
                width: 205px;
            }

            .gallery:hover {
                border: 1px solid #777;
            }

            .gallery img {
                width: 205px;
                height: 205px;
            }

            .desc {
                padding: 15px;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <br>
        <hr class="h1">
        <div class="heading">
            Welcome To Digital Art Collection
        </div>
        <hr class="h2">
<br>
        <div class="main">
            @foreach ($record as $rec)
                <div class="gallery">

                    <a href="">

                        <img src="{{ $rec->path }}" alt="">

                    </a>

                </div>
            @endforeach
        </div>



    </body>

    </html>
</body>

</html>
