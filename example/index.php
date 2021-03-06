<?php
if (isset($_SERVER['HTTP_X_PJAX'])) {
    //Simulate slow page
    sleep(2);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Automatic Pjax</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico">
</head>
<body>
    <ul>
        <li><a href="./"><strong>Home</strong></a></li>
        <li><a href="example-1.php">Example 1</a></li>
        <li><a href="example-2.php">Example 2</a></li>
        <li><a href="example-3.php">Example 3</a></li>
    </ul>
    <div class="pjax-container">
        <h1>Home page</h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum nibh sed laoreet faucibus. Praesent hendrerit ornare pulvinar. Nam volutpat, enim sit amet rhoncus convallis, nisl ligula sagittis justo, nec sodales mauris quam ac arcu. Praesent at dui nec tortor efficitur imperdiet. In in ex sed tortor tempus ultrices. Nulla eget dui eget massa luctus accumsan eget quis purus. Proin ultrices porttitor quam, ut fermentum lectus mollis vel. Nulla tempor bibendum mauris sit amet hendrerit. Aenean consequat libero sit amet aliquet egestas. Phasellus a finibus justo. Nulla non augue a purus egestas luctus eu eget tellus. Proin viverra pulvinar hendrerit. Integer maximus mauris at magna rhoncus, aliquam venenatis neque aliquam. Proin tincidunt pharetra dui sit amet efficitur. Pellentesque imperdiet augue vel quam posuere, eu lacinia orci vestibulum.</p>

        <p>Praesent aliquet, purus et convallis varius, orci neque scelerisque enim, id consectetur sapien leo et tellus. Maecenas vel nunc justo. Aenean volutpat egestas tortor, ut ultricies nulla tincidunt pellentesque. Nulla molestie nibh a lorem tristique feugiat. Mauris aliquam interdum sem, quis pretium erat egestas vel. Integer id tellus tellus. Nullam vulputate, tortor sed imperdiet tincidunt, justo risus rutrum quam, et tincidunt sapien risus eu ipsum. Quisque nec nisl eu orci commodo euismod at lacinia lorem.</p>

        <p>Maecenas nec scelerisque risus. Fusce dictum arcu imperdiet mi bibendum, ut cursus lacus molestie. Etiam nec tellus vel leo commodo posuere eu et quam. Duis ac velit magna. Nullam placerat velit sit amet orci molestie hendrerit. Ut rutrum a nunc eu elementum. Aliquam erat volutpat. Etiam tortor velit, volutpat vitae nulla at, vulputate consectetur ipsum. Aliquam condimentum porta blandit.</p>

        <p>Cras tincidunt tincidunt sem, vel faucibus ligula efficitur quis. Praesent consequat, lacus vitae pellentesque eleifend, nulla est euismod sapien, eget convallis odio lorem in libero. Maecenas pretium ultricies condimentum. Quisque ultricies elementum laoreet. Nulla quis eleifend diam, non pretium lacus. Proin ullamcorper viverra blandit. Morbi non ipsum orci.</p>

        <p>Phasellus tristique enim vulputate velit hendrerit, et suscipit eros placerat. Proin pharetra porta arcu a blandit. Suspendisse nec ipsum tristique, cursus nunc nec, hendrerit ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam non ornare ante. Duis tempus augue nunc, sit amet egestas neque euismod a. Curabitur maximus congue nunc eleifend dignissim. Ut id eros massa.</p>

        <p>Praesent aliquet, purus et convallis varius, orci neque scelerisque enim, id consectetur sapien leo et tellus. Maecenas vel nunc justo. Aenean volutpat egestas tortor, ut ultricies nulla tincidunt pellentesque. Nulla molestie nibh a lorem tristique feugiat. Mauris aliquam interdum sem, quis pretium erat egestas vel. Integer id tellus tellus. Nullam vulputate, tortor sed imperdiet tincidunt, justo risus rutrum quam, et tincidunt sapien risus eu ipsum. Quisque nec nisl eu orci commodo euismod at lacinia lorem.</p>

        <p>Maecenas nec scelerisque risus. Fusce dictum arcu imperdiet mi bibendum, ut cursus lacus molestie. Etiam nec tellus vel leo commodo posuere eu et quam. Duis ac velit magna. Nullam placerat velit sit amet orci molestie hendrerit. Ut rutrum a nunc eu elementum. Aliquam erat volutpat. Etiam tortor velit, volutpat vitae nulla at, vulputate consectetur ipsum. Aliquam condimentum porta blandit.</p>

        <p>Cras tincidunt tincidunt sem, vel faucibus ligula efficitur quis. Praesent consequat, lacus vitae pellentesque eleifend, nulla est euismod sapien, eget convallis odio lorem in libero. Maecenas pretium ultricies condimentum. Quisque ultricies elementum laoreet. Nulla quis eleifend diam, non pretium lacus. Proin ullamcorper viverra blandit. Morbi non ipsum orci.</p>

        <p>Phasellus tristique enim vulputate velit hendrerit, et suscipit eros placerat. Proin pharetra porta arcu a blandit. Suspendisse nec ipsum tristique, cursus nunc nec, hendrerit ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam non ornare ante. Duis tempus augue nunc, sit amet egestas neque euismod a. Curabitur maximus congue nunc eleifend dignissim. Ut id eros massa.</p>

        <form action="" method="POST">
            <p><input type="text" name="field-text" placeholder="Field text"></p>
            <p><input type="password" name="field-pass" placeholder="Password text"></p>
            <p><input type="file" name="field-upload" multiple></p>
            <p>
                <select name="field-combo">
                    <option value="1">Value 1</option>
                    <option value="2">Value 2</option>
                    <option value="3">Value 3</option>
                    <option value="4">Value 4</option>
                </select>
            </p>
            <p>
                <button type="submit">Send</button>
            </p>
        </form>
    </div>

    <link rel="stylesheet" type="text/css" href="../auto-pjax.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="../auto-pjax.js"></script>
    <script>
    $.autoPjax({ "updateHead": true });
    </script>
</body>
</html>
