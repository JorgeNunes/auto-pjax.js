<?php
if (isset($_SERVER['HTTP_X_PJAX'])) {
    //Simulate slow page
    sleep(2);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Example 1 - Pjax</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="https://cdn.sstatic.net/Sites/br/img/favicon.ico">
</head>
<body>
    <ul>
        <li><a href="./">Home</a></li>
        <li><a href="example-1.php"><strong>Example 1</strong></a></li>
        <li><a href="example-2.php">Example 2</a></li>
        <li><a href="example-3.php">Example 3</a></li>
    </ul>
    <div class="pjax-container">
        <h1>Example 1</h1>

        <p>Aliquam congue bibendum imperdiet. Duis ut turpis neque. Vestibulum condimentum dictum magna, non faucibus nunc rutrum nec. Pellentesque finibus felis vel turpis condimentum elementum. In nec lacus at purus facilisis efficitur. Donec non ligula in quam congue finibus quis vel lacus. Nulla eu fermentum odio. Quisque egestas luctus lacus nec iaculis. Cras molestie ex nec dictum ultricies. Proin maximus, odio eget eleifend porttitor, tortor eros fermentum massa, sed tristique massa sem sed eros. Aenean eu lacus ac quam tristique fermentum. Sed magna erat, egestas ac laoreet non, ornare at magna. Nulla feugiat elementum odio id accumsan.</p>

        <p>Nunc feugiat efficitur lobortis. Quisque hendrerit vitae lacus nec mollis. Donec vitae magna id lectus semper lobortis a ut ligula. Morbi tincidunt a ex sit amet efficitur. Aliquam facilisis est sodales, consectetur augue vel, egestas nulla. Praesent sit amet ligula leo. Duis condimentum finibus elementum. Suspendisse ut fermentum ante. Duis at tellus sit amet tellus laoreet mattis non eu nibh. Curabitur ex nulla, efficitur at turpis quis, ultricies tempor ligula. Aenean consequat lectus et pellentesque mollis. Morbi pretium sollicitudin ultrices. Mauris congue augue a rhoncus dapibus. Vestibulum dictum et est ultricies tincidunt. Nullam sem enim, tempor vel elit eget, feugiat feugiat massa. In sapien mauris, accumsan sit amet augue eu, ornare venenatis purus.</p>

        <p>Curabitur vitae vehicula nisi. Sed tincidunt rhoncus suscipit. Curabitur viverra, ex at tempor ornare, sem turpis elementum tellus, in lacinia nulla mauris vel eros. Suspendisse potenti. Pellentesque et nunc neque. Curabitur quis ante lectus. Duis interdum nisi nec consectetur tristique. Donec tincidunt, est eget laoreet facilisis, ipsum risus vestibulum odio, ut hendrerit turpis lacus quis justo. Sed feugiat posuere nisl et facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis viverra felis mauris, eget fringilla odio efficitur in. Mauris ultricies elit vel ultricies pretium. Aliquam vestibulum, nisi eget tristique vulputate, nibh purus semper est, at rhoncus ligula sapien nec velit. Ut vel nunc quis nisi tempor cursus eget id justo.</p>

        <p>Morbi maximus ex non leo vehicula, ut sagittis quam vehicula. Nunc ac dui sapien. Etiam blandit laoreet nulla, ut dapibus ante pulvinar ac. Aenean at justo lobortis, auctor sapien quis, molestie justo. Aliquam venenatis elit purus, et lobortis risus fringilla id. Duis et odio nibh. Suspendisse et mattis justo. Suspendisse potenti. Phasellus cursus mauris eu nisl cursus faucibus. Fusce efficitur suscipit tortor ut vestibulum. Curabitur et tortor tincidunt ex volutpat consectetur.</p>

        <p>Quisque vitae ipsum quis eros consequat sollicitudin convallis sit amet felis. Integer lobortis dolor eu mattis lacinia. Etiam laoreet justo ligula, nec malesuada elit dapibus non. Mauris molestie dapibus ante nec convallis. Vivamus varius, est sit amet tempus vulputate, metus mauris auctor purus, quis sollicitudin tellus urna at orci. Maecenas velit lectus, vehicula et sapien vel, elementum tempus eros. Donec pulvinar, ligula eget tincidunt interdum, dui lectus blandit sapien, non feugiat lacus dolor bibendum nisl. Maecenas dapibus et odio a porttitor. Ut ultricies leo quis dignissim ultrices. Proin tristique consequat massa non imperdiet. Vivamus et auctor lectus. In fringilla massa tempor bibendum mattis. Nullam faucibus sed purus sed sagittis.</p>

        <p>Morbi maximus ex non leo vehicula, ut sagittis quam vehicula. Nunc ac dui sapien. Etiam blandit laoreet nulla, ut dapibus ante pulvinar ac. Aenean at justo lobortis, auctor sapien quis, molestie justo. Aliquam venenatis elit purus, et lobortis risus fringilla id. Duis et odio nibh. Suspendisse et mattis justo. Suspendisse potenti. Phasellus cursus mauris eu nisl cursus faucibus. Fusce efficitur suscipit tortor ut vestibulum. Curabitur et tortor tincidunt ex volutpat consectetur.</p>

        <p>Quisque vitae ipsum quis eros consequat sollicitudin convallis sit amet felis. Integer lobortis dolor eu mattis lacinia. Etiam laoreet justo ligula, nec malesuada elit dapibus non. Mauris molestie dapibus ante nec convallis. Vivamus varius, est sit amet tempus vulputate, metus mauris auctor purus, quis sollicitudin tellus urna at orci. Maecenas velit lectus, vehicula et sapien vel, elementum tempus eros. Donec pulvinar, ligula eget tincidunt interdum, dui lectus blandit sapien, non feugiat lacus dolor bibendum nisl. Maecenas dapibus et odio a porttitor. Ut ultricies leo quis dignissim ultrices. Proin tristique consequat massa non imperdiet. Vivamus et auctor lectus. In fringilla massa tempor bibendum mattis. Nullam faucibus sed purus sed sagittis.</p>
    </div>

    <link rel="stylesheet" type="text/css" href="../auto-pjax.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="../auto-pjax.js"></script>
    <script>
    $.autoPjax({ "updateHead": true });
    </script>
</body>
</html>
