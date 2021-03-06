<?php
if (isset($_SERVER['HTTP_X_PJAX'])) {
    //Simulate slow page
    sleep(2);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Example 3 - Pjax</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="https://meta.stackexchange.com/content/Sites/stackexchangemeta/img/favicon.ico">
</head>
<body>
    <ul>
        <li><a href="./">Home</a></li>
        <li><a href="example-1.php">Example 1</a></li>
        <li><a href="example-2.php">Example 2</a></li>
        <li><a href="example-3.php"><strong>Example 3</strong></a></li>
    </ul>
    <div class="pjax-container">
        <h1>Example 3</h1>

        <p>Sed ligula neque, accumsan congue nisl eget, mollis mattis nibh. Donec felis velit, convallis eu velit nec, laoreet viverra eros. Nam sed lacus lobortis, viverra sapien quis, vehicula libero. Fusce faucibus consectetur nulla, ut consectetur massa pulvinar et. Suspendisse et nisi eu purus finibus euismod sit amet et mauris. Nam euismod risus consectetur pulvinar condimentum. Etiam sit amet nunc eu dolor fringilla molestie. Vivamus in urna porttitor, molestie justo vulputate, aliquam ipsum. Praesent vitae nunc ut nisl congue congue eget at arcu. Cras eu lacus vel enim commodo sollicitudin et ac neque. In hac habitasse platea dictumst. Sed massa metus, volutpat sit amet urna aliquam, porttitor dictum metus. Mauris convallis viverra metus, id pulvinar ante consequat et. Praesent orci est, tincidunt vitae velit vitae, facilisis faucibus metus.</p>

        <p>Nullam scelerisque odio at ipsum lacinia aliquam. Donec odio ex, placerat id quam a, faucibus scelerisque magna. Suspendisse sed urna quam. Morbi maximus feugiat sem, quis volutpat diam tempus et. Mauris nec mauris quis odio suscipit tempor efficitur sit amet magna. Nam finibus pulvinar mattis. Vestibulum eros ex, pretium ut ex vitae, hendrerit venenatis neque. Duis ut tortor dolor. Aliquam faucibus ultrices purus, blandit lacinia magna accumsan eget. Integer tincidunt tristique arcu quis ullamcorper. Proin gravida enim ut erat fermentum, in fringilla turpis eleifend.</p>

        <p>Nulla facilisi. Mauris egestas sapien eget tellus feugiat, at pulvinar diam mattis. Cras imperdiet, sapien vel lacinia cursus, lorem nibh bibendum lacus, et elementum urna enim vitae augue. Mauris ultrices arcu nec enim cursus fringilla. Donec varius tempor mi ut eleifend. Nulla hendrerit enim nisi, eget rutrum mi rhoncus non. Suspendisse potenti. Sed condimentum dolor sagittis, pretium est vel, consequat sapien. Vivamus vulputate scelerisque mattis.</p>

        <p>Vivamus elementum cursus iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec iaculis purus at dignissim finibus. Vivamus elit nisi, tempus vel leo eu, laoreet elementum nulla. Cras facilisis turpis id eleifend tincidunt. Vestibulum lobortis non sem ut rhoncus. Etiam egestas lacus id euismod tristique. Donec ut orci euismod, pulvinar leo in, sagittis turpis. Donec mollis tortor eget euismod lobortis.</p>

        <p>Morbi interdum ipsum ut ornare efficitur. Phasellus aliquam maximus orci nec varius. Nullam eget feugiat justo, vitae lacinia nisl. Morbi feugiat nisl at augue placerat tincidunt eget quis sapien. Integer venenatis orci eu ante laoreet, eu consectetur massa accumsan. Aenean fermentum quam eu lectus aliquam cursus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus elementum venenatis lacus, dictum scelerisque dui accumsan vitae. Aliquam a luctus dui.</p>

        <p>Nulla facilisi. Mauris egestas sapien eget tellus feugiat, at pulvinar diam mattis. Cras imperdiet, sapien vel lacinia cursus, lorem nibh bibendum lacus, et elementum urna enim vitae augue. Mauris ultrices arcu nec enim cursus fringilla. Donec varius tempor mi ut eleifend. Nulla hendrerit enim nisi, eget rutrum mi rhoncus non. Suspendisse potenti. Sed condimentum dolor sagittis, pretium est vel, consequat sapien. Vivamus vulputate scelerisque mattis.</p>

        <p>Vivamus elementum cursus iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec iaculis purus at dignissim finibus. Vivamus elit nisi, tempus vel leo eu, laoreet elementum nulla. Cras facilisis turpis id eleifend tincidunt. Vestibulum lobortis non sem ut rhoncus. Etiam egestas lacus id euismod tristique. Donec ut orci euismod, pulvinar leo in, sagittis turpis. Donec mollis tortor eget euismod lobortis.</p>

        <p>Morbi interdum ipsum ut ornare efficitur. Phasellus aliquam maximus orci nec varius. Nullam eget feugiat justo, vitae lacinia nisl. Morbi feugiat nisl at augue placerat tincidunt eget quis sapien. Integer venenatis orci eu ante laoreet, eu consectetur massa accumsan. Aenean fermentum quam eu lectus aliquam cursus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus elementum venenatis lacus, dictum scelerisque dui accumsan vitae. Aliquam a luctus dui.</p>
    </div>

    <link rel="stylesheet" type="text/css" href="../auto-pjax.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="../auto-pjax.js"></script>
    <script>
    $.autoPjax({ "updateHead": true });
    </script>
</body>
</html>
