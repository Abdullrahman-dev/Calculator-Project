<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Calculator Project</title>
  <style>
    body { font-family: Tahoma, Arial; background:black; padding:40px; }
    .card { max-width:400px; margin:auto; background:#fff; padding:20px; border-radius:14px; box-shadow:0 6px 14px rgba(0,0,0,.1); }
    label { display:block; margin:10px 0 5px; font-weight:600; }
    input, select, button {
      width:95%; padding:10px; margin-bottom:15px;
      border:1px solid #ccc; border-radius:8px; font-size:16px;
    }
    button { background:green; color:#fff; cursor:pointer; font-weight:bold; }
    button:hover { background:#0b5ed7; }
  </style>
</head>
<body>


  <form class="card" action="handeler.php" method="post">
    <h2 style="text-align:center">Calculator Project Using PHP</h2>
    
    <label for="num1">Enter a number :</label>
    <input type="number" id="num1" name="num1" required>

    <label for="num2">Enter a number :</label>
    <input type="number" id="num2" name="num2" required>

    <label for="op">Choose the mathematical operation</label>
    <select id="op" name="op" required>
      <option value="add">Add</option>
      <option value="sub">Subtraction</option>
      <option value="mul">Multiplication</option>
      <option value="div">Division</option>
    </select>

    <button type="submit">Calculate</button>
  </form>

</body>
</html>
