<!DOCTYPE html>
<html>
<head>
    <title>About Me</title>
</head>
<body>
    <h1>About Me</h1>
    <p>Name: {{ $name }}</p>
    <p>Age: {{ $age }}</p>
    <p>Occupation: {{ $occupation }}</p>

    <a href="{{ route('skills') }}"><button>Skills</button></a>
    <a href="{{ route('hobbies') }}"><button>Hobbies</button></a>
</body>
</html>