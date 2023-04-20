<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Superpowers</title>
</head>
<body>

    <h1>Edit Superpowers</h1>

    <form action="{{ route('superpowers.update', $superpower->id) }}" method="post">
        @method('put')
        @csrf
        <label for="name">Name *</label>
        <input type="text" name="name" value="{{ $superpower->name }}">

        <br><br>
        <label for="description">Description</label><br>
        <textarea name="description" cols="50" rows="5">{{ $superpower->description }}</textarea>
        
        <br><br>
        <button type="submit">Edit Superpower</button>
    </form>

</body>
</html>