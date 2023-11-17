<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs Page</title>
</head>
<body>
    <h1>Welcome to the Songs Page!</h1>

    <h2>Single Song</h2>
    <table>
        <tr>
            <th>Title</th>
            <th>Artist</th>
        </tr>
        <tr>
            <td>{{ $song->getTitle() }}</td>
            <td>{{ $song->getArtist() }}</td>
        </tr>
    </table>

    <h2>List of Songs</h2>
    <table>
        <tr>
            <th>Title</th>
            <th>Artist</th>
        </tr>
        @foreach ($songs as $song)
            <tr>
                <td>{{ $song->getTitle() }}</td>
                <td>{{ $song->getArtist() }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>

