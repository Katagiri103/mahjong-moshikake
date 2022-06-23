<html>
    <head>
        <title>home/index</title>
        <style>
            body {font-size:16pt; color:black; }
            h1 {font-size:50pt; text-align:right; color:gray; margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
        </style>
    </head>
    <body>
        <form method="POST" action="join">
            @csrf
            <input type="text" name="name" value="あなたの名前は？"><br>
            <input type="text" name="tableID" value="ホストが作成した卓IDを入力して下さい"><br>
            <input type="submit" value="卓へ参加する">
        </form>
    </body>
</html>