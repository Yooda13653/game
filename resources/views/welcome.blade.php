<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>佐曽Rich</title>
    </head>
    
    <body>
        <h1>佐曽Rich</h1>
        <img src="rich.JP"></img>
        <form method='POST'>
        <input type="text" name="food">
        <input type="submit" value="feed">
     </form>
     
     <a href="food.blade.php">与えてきたエサ</a>
    </body>
</html>
