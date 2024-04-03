<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <style>
        .calculator {
            width: 250px;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 10px;
        }
        input[type="text"] {
            width: 100%;
            margin-bottom: 10px;
        }
        input[type="button"] {
            width: 50px;
            height: 50px;
            margin: 5px;
        }
        input[type="submit"] {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>

<h2>Simple Calculator</h2>

<div class="calculator">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="text" name="display" value="<?php if(isset($_POST['display'])) echo $_POST['display']; ?>">
        <br>
        <input type="button" value="1" onclick="addToDisplay('1')">
        <input type="button" value="2" onclick="addToDisplay('2')">
        <input type="button" value="3" onclick="addToDisplay('3')">

        <input type="button" value="4" onclick="addToDisplay('4')">
        <input type="button" value="5" onclick="addToDisplay('5')">
        <input type="button" value="6" onclick="addToDisplay('6')">
        
        <input type="button" value="7" onclick="addToDisplay('7')">
        <input type="button" value="8" onclick="addToDisplay('8')">
        <input type="button" value="9" onclick="addToDisplay('9')">
        
        <br>
        <input type="button" value="0" onclick="addToDisplay('0')">
        <input type="button" value="." onclick="addToDisplay('.')">
        <input type="button" value="/" onclick="addToDisplay('/')">
        <input type="button" value="+" onclick="addToDisplay('+')">
        <input type="button" value="*" onclick="addToDisplay('*')">
        <input type="button" value="-" onclick="addToDisplay('-')">
        <input type="submit" value="Calculate">
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expression = $_POST['display'];

    $result = eval("return $expression;");

    echo "Result: $expression = $result";
}
?>

<script>
    function addToDisplay(value) {
        document.getElementsByName("display")[0].value += value;
    }
</script>

</body>
</html>