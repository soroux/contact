<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact US</title>
</head>
<body>
<h1>contact us ant time</h1>

<form action="{{route('contact')}}" method="post">
    @csrf
    <label>
        <input name="name" placeholder="enter your name" type="text">
    </label>
    <label>
        <input name="email" placeholder="enter your email" type="email">
    </label>
    <label>
        <textarea name="message"></textarea>
    </label>
    <label>
        <input type="submit" value="submit" name="message">
    </label>

</form>
<hr/>
<ul>
    @foreach($contacts as $contact)
        <li>{{$contact->name}} -- {{$contact->email}}</li>
    @endforeach
</ul>
</body>
</html>
