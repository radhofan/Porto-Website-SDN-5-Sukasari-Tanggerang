<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('loginstudent.submit')}}" method="post">
        @csrf 
        @method('post')
        <div>
            <label for="nis">NIS:</label>
            <input type="text" id="nis" name="nis" required>
        </div>
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <input type="submit" value="Login"/>
        </div>
    </form>
</body>
</html>