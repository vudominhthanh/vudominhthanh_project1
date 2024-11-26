<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Account-list</h1>
    <hr>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Password</th>
                <th>Fullname</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item['id']}}</td>
                    <td>{{$item['username']}}</td>
                    <td>{{$item['password']}}</td>
                    <td>{{$item['fullname']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>