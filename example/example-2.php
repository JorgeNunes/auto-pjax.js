<?php
if (isset($_SERVER['HTTP_X_PJAX'])) {
    //Simulate slow page
    sleep(2);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Example 2 - Pjax</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="https://cdn.sstatic.net/Sites/stackapps/img/favicon.ico">
</head>
<body>
    <ul>
        <li><a href="./">Home</a></li>
        <li><a href="example-1.php">Example 1</a></li>
        <li><a href="example-2.php"><strong>Example 2</strong></a></li>
        <li><a href="example-3.php">Example 3</a></li>
    </ul>
    <div class="pjax-container">
        <h1>Example 2</h1>

        <p>Morbi id enim nulla. Sed tortor lacus, sollicitudin eu lectus eu, interdum viverra erat. Quisque neque velit, ornare et sagittis et, sodales eget odio. Pellentesque tincidunt est eget molestie efficitur. Quisque laoreet, ex ultricies viverra luctus, enim nibh mollis nibh, quis rhoncus diam mauris rhoncus neque. Curabitur ornare nulla felis, eget maximus orci viverra a. Vestibulum convallis massa arcu, viverra faucibus justo congue ut. Pellentesque vitae est in ex accumsan mattis. Duis scelerisque ligula enim. Proin pharetra, nulla sit amet ullamcorper porta, orci mi euismod nisl, vitae dapibus lorem justo et ipsum. Maecenas suscipit nisi ut interdum mollis. Sed pharetra, odio a fringilla interdum, turpis nisi finibus lorem, id fringilla ipsum ligula sit amet arcu. Aliquam dapibus mauris ut pretium finibus. Nam ut hendrerit tortor.</p>

        <p>Cras ac malesuada turpis, vehicula luctus diam. Morbi tempus est vel tristique scelerisque. Donec ornare ex ex, dignissim egestas lectus imperdiet at. Pellentesque leo dui, scelerisque ut diam in, vehicula scelerisque mi. Nam egestas congue luctus. Fusce interdum at sapien et condimentum. Proin sollicitudin non eros in scelerisque. Integer odio nulla, ultrices sit amet volutpat condimentum, mattis ac nulla. Duis sodales consectetur ligula, ut blandit ligula volutpat eu. Quisque vitae aliquam arcu. Praesent quis mollis lorem. Curabitur convallis maximus mauris vitae fermentum.</p>

        <p>Ut tincidunt nibh tristique porttitor mattis. Nam quam felis, vehicula facilisis ipsum vel, vestibulum tincidunt tellus. Duis finibus nibh augue, a blandit felis dapibus nec. Curabitur feugiat porta ante, ac ultrices est ullamcorper et. Etiam ut feugiat enim. Quisque a purus metus. Donec vel consectetur nisl. Phasellus iaculis porttitor lectus sit amet posuere.</p>

        <p>Phasellus tincidunt pellentesque tempor. Nulla sed tellus commodo, egestas neque id, scelerisque felis. Aenean sit amet ornare diam. Suspendisse sed pretium purus. Maecenas lacinia tristique mollis. Donec et dui aliquet, sodales elit tristique, tincidunt neque. Mauris porta feugiat rutrum. Aliquam erat volutpat.</p>

        <p>Donec ultricies et mauris a finibus. Cras vitae placerat justo. Ut convallis, nisi eget molestie imperdiet, odio nulla pulvinar massa, ac mattis diam neque non ex. Nullam pellentesque dui mi, et luctus ipsum porta euismod. Nunc imperdiet suscipit dolor sit amet porta. Vestibulum rhoncus nisl congue nisi facilisis dignissim. Ut sagittis risus nec venenatis ullamcorper. Duis sit amet mattis ex. Nullam quis mi magna. Mauris imperdiet dolor id porttitor efficitur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam efficitur malesuada massa, id vestibulum neque tristique eget. Sed aliquet tincidunt elit convallis euismod. Proin molestie commodo ante, quis bibendum quam tincidunt et. Quisque laoreet sagittis arcu a fermentum. Nulla et suscipit sapien, volutpat placerat lacus.</p>

        <p>Phasellus tincidunt pellentesque tempor. Nulla sed tellus commodo, egestas neque id, scelerisque felis. Aenean sit amet ornare diam. Suspendisse sed pretium purus. Maecenas lacinia tristique mollis. Donec et dui aliquet, sodales elit tristique, tincidunt neque. Mauris porta feugiat rutrum. Aliquam erat volutpat.</p>

        <p>Donec ultricies et mauris a finibus. Cras vitae placerat justo. Ut convallis, nisi eget molestie imperdiet, odio nulla pulvinar massa, ac mattis diam neque non ex. Nullam pellentesque dui mi, et luctus ipsum porta euismod. Nunc imperdiet suscipit dolor sit amet porta. Vestibulum rhoncus nisl congue nisi facilisis dignissim. Ut sagittis risus nec venenatis ullamcorper. Duis sit amet mattis ex. Nullam quis mi magna. Mauris imperdiet dolor id porttitor efficitur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam efficitur malesuada massa, id vestibulum neque tristique eget. Sed aliquet tincidunt elit convallis euismod. Proin molestie commodo ante, quis bibendum quam tincidunt et. Quisque laoreet sagittis arcu a fermentum. Nulla et suscipit sapien, volutpat placerat lacus.</p>
    </div>

    <link rel="stylesheet" type="text/css" href="../auto-pjax.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="../auto-pjax.js"></script>
    <script>
    $.autoPjax({ "updateHead": true });
    </script>
</body>
</html>
