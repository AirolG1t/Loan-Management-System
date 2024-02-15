<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div>
    <table border="1">
      <tr>
        <th>id</th>
        <th>role</th>
        <th>first name</th>
        <th>middle name</th>
        <th>last name</th>
        <th>email</th>
        <th>password</th>
        <th>status</th>
      </tr>
      <tbody>
        @foreach ($users as $user)
            <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->role_id}}</td>
              <td>{{$user->first_name}}</td>
              <td>{{$user->middle_name}}</td>
              <td>{{$user->last_name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->password}}</td>
              <td>{{$user->status}}</td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>