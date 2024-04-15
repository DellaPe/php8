<?php
const API_URL = 'https://whenisthenextmcufilm.com/api';
const MY_PORTFOLIO_URL = 'https://porfolio-nextjs-git-main-dellapes-projects.vercel.app/';
const PHP_URL = 'https://www.php.net/manual/es/intro-whatis.php';
// Inicialzar una nueva sesión de Curl - ch = hurl handler
$ch = curl_init(API_URL);
// Idicar que queremos la respuesta de la petición y no que se imprima en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/*
  Ejecutar la petición y guardar la respuesta en $response
  curl_exec($ch) ejecuta la petición
*/

// $response = file_get_contents(API_URL); Si solo quiero el get
$response = curl_exec($ch);
$data = json_decode($response, true); // array asociativo
// Cerrar la sesión de Curl
curl_close($ch);
// var_dump($data);

$type = '';
if ($data['type'] = 'Movie') {
  $type = 'película';
} else {
  $type = 'serie';
};
$h1 = 'Próxima ' . $type . ' de Marvel';
?>

<head>
  <meta charset="UTF-8" />
  <title>Próxima pelicula de Marvel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Próxima pelicula de Marvel" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
</head>

<main>
  <h1> <?= $h1 ?> </h1>
  <section>
    <img src="<?= $data['poster_url']; ?>" alt="<?= $data['title']; ?>" width="300" />
  </section>
  <hgroup>
    <h2><?= $data['title']; ?></h2>
    <h4><?= 'Se estrena en ' . $data['days_until'] . ' días'; ?></h4>
    <h4><?= '(' . $data['release_date'] . ')'; ?></h4>
  </hgroup>
  <hgroup class="future">
    <p>Próximamente</p>
    <p><?= $data['following_production']['title']; ?></p>
  </hgroup>

  <footer>
    <a href="<?= API_URL; ?>">API</a>
    <a href="<?= MY_PORTFOLIO_URL; ?>">MI PORFILIO</a>
    <a href="<?= PHP_URL; ?>"> PHP</a>
  </footer>
</main>

<style>
  :root {
    color-scheme: dark;
  }

  h1 {
    text-align: center;
  }

  h2 {
    margin: 4px 0 0 0;
  }

  h4 {
    margin: 0px;
  }

  .future {
    margin-top: 4px;
  }

  p {
    margin: 0px;
  }

  section {
    display: flex;
    justify-content: center;
    text-align: center;

  }

  img {
    border-radius: 20px;
  }

  hgroup {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
  }

  img {
    margin: 0 auto;
  }

  footer {
    margin-top: 16px;
    display: flex;
    justify-content: center;
    gap: 50px
  }
</style>