<!DOCTYPE html>
<html>
<head>
  <title>Displaying Session Flash Variable</title>
</head>
<body>
  <p>Flash Variable: {{ $flashVariable }}</p>
@if (session('create_category_error'))
hola
@endif


</body>
</html>
