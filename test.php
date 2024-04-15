<?php
define('LOGO_PHP', 'https://www.php.net/images/logos/php-logo.svg');
// Son estaticas y no pueden cambiar su valor
const CONSTANTE_LOCAL = 'Valor constante';
// Variables
$title = '¡App con PHP!';
$isDev = true;
$age = 30;
$name = " Pedro";
$testBool = (bool) 'askñdskadajskn';
$interpolar = "Hola $name, tienes \$age años";
$interpolar .= " y eres " . ($isDev ? "desarrollador" : "no desarrollador");
$isOld = $age > 40;
// Una forma de usarlo
if ($isOld) {
  echo "Eres viejo";
} else if ($isDev) {
  echo "Eres desarrollador... pobre";
} else {
  echo "Eres joven";
}

// Error de compilación
// $testMatch = match (true) {
//   $age < 5   => "Tienes menos de 6 años $name",
//   $age < 10  => "Tienes entre 6 y 10 años $name",
//   $age < 15  => "Tienes entre 11 y 15 años $name",
//   $age < 20  => "Tienes entre 16 y 20 años $name",
//   $age < 25  => "Tienes entre 21 y 25 años $name",
//   $age < 30  => "Tienes entre 26 y 30 años $name",
//   default    => "Tienes otra edad $name",
// };

$array = ['PHP', 'JavaScript', 'Python'];
$array[] = 'TypeScript';

$person = [
  'name' => 'Pedro',
  'age' => 30,
  'isDev' => true,
];


// var_dump($title);
// var_dump($isDev);
// var_dump($age);
// var_dump($name);

// echo gettype($title);
// echo gettype($isDev);
// echo gettype($age);
// echo gettype($name);

// echo is_string($title);
// echo is_bool($isDev);
// echo is_int($age);
// echo is_string($name);
?>


<?php if ($isOld) : ?>
  <h2>Eres viejo</h2>
<?php elseif ($isDev) : ?>
  <h2>Eres desarrollador... pobre</h2>
<?php else : ?>
  <h2>Eres joven</h2>
<?php endif; ?>

<img src="<?= LOGO_PHP; ?>" alt="Logo PHP" width="100" />
<h1>
  <?= $title; ?>
</h1>
<!-- Concatenar con . -->
<h2>
  <?= $name
    . " tiene <br/>"
    . $age
    . " años";
  ?>
</h2>
<h3>
  <?= $isDev ? "Es desarrollador" : "No es desarrollador"; ?>
</h3>
<!-- Sumat con + -->
<p>
  <?= $age + 10; ?>
</p>
<p>
  <?= $testBool; ?>
</p>
<p>
  <?= $interpolar; ?>
</p>
<p>
  <?= CONSTANTE_LOCAL; ?>
</p>
<ul>
  <?php foreach ($array as $key => $item) : ?>
    <li><?= $key . " " . $item; ?></li>
  <?php endforeach; ?>
</ul>



<style>
  :root {
    color-scheme: dark;
  }

  body {
    display: grid;
    place-items: center;
    text-align: center;
  }
</style>