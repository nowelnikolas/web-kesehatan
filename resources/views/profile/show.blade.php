<!DOCTYPE html>
<html>
<head>
    <title>View Profile</title>
</head>
<body>
    <h1>View Profile</h1>
    <p>Name: {{ $user->name }}</p>
    <p>Username: {{ $user->username }}</p>
    <p>Email: {{ $user->email }}</p>

    <a href="{{ route('profile.edit') }}">Edit Profile</a>
</body>
</html>
