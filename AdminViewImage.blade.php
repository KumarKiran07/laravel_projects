<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .button-89 {
  --b: 3px;   /* border thickness */
  --s: .45em; /* size of the corner */
  --color: #373B44;

  padding: calc(.5em + var(--s)) calc(.9em + var(--s));
  color: var(--color);
  --_p: var(--s);
  background:
    conic-gradient(from 90deg at var(--b) var(--b),#0000 90deg,var(--color) 0)
    var(--_p) var(--_p)/calc(100% - var(--b) - 2*var(--_p)) calc(100% - var(--b) - 2*var(--_p));
  transition: .3s linear, color 0s, background-color 0s;
  outline: var(--b) solid #0000;
  outline-offset: .6em;
  font-size: 16px;

  border: 0;

  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-89:hover,
.button-89:focus-visible{
  --_p: 0px;
  outline-color: var(--color);
  outline-offset: .05em;
}

.button-89:active {
  background: var(--color);
  color: #fff;
}
    </style>
</head>
<body>
    <table class="container">
        <thead>
            <tr class="header" >
                {{-- <th class="text">ID</th>
                <th class="text">NAME</th>
                <th class="text">IMAGE</th> --}}
            </tr>
        </thead>

    @foreach ($record as $rec )
        <tr class="data">
            {{-- <th class="text1">{{$rec->id}}</th>
            <th class="text1">{{$rec->name}}</th> --}}
            <th class="text1">
                <a href=""><img src="{{$rec->path}}" height="200px" width="200px" style=" border-style:solid;"></a>
            </th>
            <td>
                &nbsp;&nbsp;
                <a href="{{url('/DeleteUserImage')."/".$rec->id}}">
                    <button class="button-89">Delete</button>
                </a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
