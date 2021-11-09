<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col">

        </div>
        <div class="col">

            <form action="{{route('api')}}" method="post">
                @csrf
                <div class="form-group">
                    Secret Key: <input type="text" name="secret" class="form-control">
                </div>
                <div  class="form-group">
                    IV: <input type="text" name="iv"  class="form-control">
                </div>
                <div  class="form-group">
                    Encoded Text: <input type="text" name="encode"  class="form-control">
                </div>
                <button type="submit" class="form-control">Send</button>
            </form>

        </div>
        <div class="col">

        </div>
    </div>
</div>


</body>
</html>
