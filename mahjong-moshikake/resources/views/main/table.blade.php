<html>
    <head>
        <title>home/index</title>
        <style>
            body {font-size:16pt; color:black; }
            h1 {font-size:50pt; text-align:right; color:gray; margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
        </style>
    </head>
    <body>
        <h1>{{$msg}}</h1>
        
        <form method="POST" action="finish">
            <p>半荘終了後、あなたの持ち点数を入力して下さい</p><br>
            <p>例）28200  例）-1800</p><br>
            
            <input type="number" value="25000"><br>
            <p>あなたの順位を入力してください</p><br>
            <input type="number" value="1">
            <input type="submit" value="送信">
        </form>
        
    </body>
</html>