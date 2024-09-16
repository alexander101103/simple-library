<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
table>
        <th>Name</th>
        <th>Message</th>

        @foreach ($books as $book)
            <tr>
                <td>{{$books->name}}</td>
                <td>{{$books->message}}</td>
            </tr>
        @endforeach
    </table>S
</body>
</html>