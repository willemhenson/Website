<?php include('./top.php'); ?>

    <div class="add-form">
        <button onclick=addRow()>add row</button>
        <form id="form" action="add-driver.php" method="get"><input type="hidden" name="num" id="num-input"><label>enter key 1:</label><input type="text" name="key1" id="key1"><label>&nbspenter value 1:</label><input type="text" name="value1" id="value1"><br><input type="submit"></form>
    </div>

    <script>
        var rows = 1;
        document.getElementById('num-input').value = rows;
        function addRow() {
            var values = [];
            for (var i = 1; i <= rows; i++) {
                values.push(document.getElementById('key' + i).value);
                values.push(document.getElementById('value' + i).value);
            }
            var cur_text = document.getElementById('form').innerHTML;
            var new_row = (rows+1).toString();
            document.getElementById('form').innerHTML = cur_text.slice(0,cur_text.length-'<input type="submit">'.length) + '<label>enter key ' + new_row + ':</label><input type="text" name="key' + new_row + '" id="key' + new_row + '"><label>&nbspenter value ' + new_row + ':</label><input type="text" name="value' + new_row + '" id="value' + new_row + '"><br><input type="submit">';
            rows += 1;
            document.getElementById('num-input').value = rows;
            console.log(values);
            for (var i = 1; i < rows; i++) {
                document.getElementById('key' + i).value = values[2*i-2];
                document.getElementById('value' + i).value = values[2*i-1];
            }
        }
    </script>


<?php include('./bot.php'); ?>