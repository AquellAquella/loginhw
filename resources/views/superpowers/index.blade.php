<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superpowers</title>
</head>
<body>
    <br><a href="{{ route('superpowers.create') }}">Create Superpower</a>
    <h1>SUPERPOWERS</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>

        <tbody>
            @forelse($superpowers as $superpower)
                <tr>
                    <td>{{$superpower->id}}</td>
                    <td>
                        <a href="{{ route('superpowers.show', $superpower->id) }}">{{$superpower->name}}</a>
                    </td>
                    <td>{{$superpower->description}}</td>
                </tr>
            @empty
                <p>There're no superpowers</p>
            @endforelse
        </tbody>
    </table>

</body>
</html>