<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./res/bootstrap.css">
    <link rel="stylesheet" href="./res/style.css">
</head>
<body>
    <div class="main rounded p-4">
        <form action="bSolv.php" method="get">
            <fieldset>
                <legend>Bhaskara</legend>
                <ul>
                    <li>
                        <label for="value_a">a:</label>
                        <input type="number" name="a" id="a" class="form form-control">
                    </li>
                    <li>
                        <label for="value_b">b:</label>
                        <input type="number" name="b" id="b" class="form form-control">
                    </li>
                    <li>
                        <label for="value_c">c:</label>
                        <input type="number" name="c" id="c" class="form form-control"><br>
                    </li>
                    <li>
                        <button class="btn btn-outline-success" onclick="bhaskara()">Solucionar</button>
                    </li>
                </ul>
            </fieldset>
        </form>
    </div>
    <script src="./res/jquery.js"></script>
    <script src="./res/popper.js"></script>
    <script src="./res/bootstrap.js"></script>
    <script src="./res/script.js"></script>
</body>
</html>