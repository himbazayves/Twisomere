
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<html lang="en">

<head>
  <meta charset="UTF-8" />
</head>

<body>

<form action="#" method="post" id="demoForm" class="demoForm">

    <fieldset>
        <legend>Demo: Get Value or Text of Selected Option</legend>
        
        <p>
            <select id="scripts" name="scripts">
                <option value="scroll">Scrolling Divs JavaScript</option>
                <option value="tooltip">JavaScript Tooltips</option>
                <option value="con_scroll">Continuous Scroller</option>
                <option value="banner">Rotating Banner JavaScript</option>
                <option value="random_img">Random Image PHP</option>
                <option value="form_builder">PHP Form Generator</option>
                <option value="table_class">PHP Table Class</option>
                <option value="order_forms">PHP Order Forms</option>
            </select>
            
            <input type="text" size="30" name="display" id="display" />
        </p>

    </fieldset>
</form>

<br>

<?php
// Delimiters may be slash, dot, or hyphen
$date = "04/30/1973";
list($month, $day, $year) = split('[/.-]', $date);
echo "Month: $month; Day: $day; Year: $year<br />\n";
?>

</body>

</html>
<script>
(function() {
    
    // get references to select list and display text box
    var sel = document.getElementById('scripts');
    var el = document.getElementById('display');


    document.getElementById('scripts').onchange = function () {
        el.value = sel.options[sel.selectedIndex].text;  
    }    
}());
// immediate function to preserve global namespace
</script>