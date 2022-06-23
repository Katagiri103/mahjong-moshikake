<html>
    <head>
        <title>home/index</title>
        <style>
            body {font-size:16pt; color:black; }
            h1 {font-size:50pt; text-align:right; color:gray; margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
        </style>
    </head>
    <body>
        <form method="POST" action="create">
            @csrf
            <input type="text" name="name" value="あなたの名前は？">
            <input type="submit" value="卓を作成する">
        </form>
    </body>
</html>