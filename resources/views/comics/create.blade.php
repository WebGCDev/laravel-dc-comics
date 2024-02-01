<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
 <h1>CREATE</h1>
 @csrf
 <form action="{{ route('comics.store')}}" method="POST">
    @csrf
    <label>PUOI SCRIVERE QUI IL TUO FUMETTO</label>
    <input type="text">
    <button>INVIA</button>
  </form>
</body>
</html>