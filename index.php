<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/item.css">
    <title>A small Reddit reader</title>
    <script src="https://unpkg.com/@webcreate/infinite-ajax-scroll/dist/infinite-ajax-scroll.min.js"></script
</head>
<body>
<div class="page">
    <div class="container">
        <?php require_once __DIR__ . '/items.php' ?>
    </div>
    <div class="spinner">Loading...</div>
    <script>
      let ias = new InfiniteAjaxScroll('.container', {
        item: '.item',
        next: '.next',
        pagination: '.pagination',
        spinner: '.spinner',
      });
    </script>
</div>
</body>
</html>
