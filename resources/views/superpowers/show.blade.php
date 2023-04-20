<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superpower's Name</title>
</head>
<body>

    <h1>{{ $superpowers->name }}</h1>
    <p>{{ $superpowers->description }}</p>

    <a href="{{ route('superpowers.edit', $superpowers->id) }}">Edit  superpower</a>
    
    <form action="{{ route('superpowers.destroy', $superpowers->id) }}" method="post">
        @method('delete')
        @csrf

        <!---- <input type="hidden" name=""> ---->
        <br><button type="submit" onclick="return confirm('Are you sure you want to delete this record?')">Delete superpower</button>
    </form>
    
</body>
</html>