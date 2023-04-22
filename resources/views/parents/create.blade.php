<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Parent</title>
</head>
<body>
    
    <h1>Create Parent</h1>

    <form action="{{  route('parents.store') }}" method="post">
        @csrf
        <label for="name">Name *</label>
        <input type="text" name="name">

        <br><br>
        <label for="gender">Gender</label><br>
        <select name="gender">
            <option value="Female">Female</option>
            <option value="Male">Male</option>
            <option value="NA">NA</option>
        </select>

        <br><br>
        <button type="submit">Create Parent</button>
    </form>

</body>
</html>