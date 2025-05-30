<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" href="/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vite App</title>
    <?= vite('main.js'); ?>
  </head>
  <body>
    <div id="app" data-page="<?= htmlspecialchars(json_encode($page ?? []))?>"></div>
  </body>
</html>
