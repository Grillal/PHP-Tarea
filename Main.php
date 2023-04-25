<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Objetivos de la ONU</title>
</head>
<body>

    <section class="image"> 
    <section class="text-title">
        <h1>Agua limpia y Sanemaiento</h1>
    </section>
    </section>

    <section class="text">
    <h2> Desafíos pendientes en el acceso a agua potable y saneamiento en áreas rurales y urbanas:</h2>
    <p>Aunque se ha logrado avanzar significativamente en la ampliación del acceso a agua potable y saneamiento, todavía hay una gran cantidad de personas, principalmente en áreas rurales, que no cuentan con estos servicios básicos.</p>
    <p>A nivel mundial, una de cada tres personas no tiene acceso a agua potable segura y dos de cada cinco no disponen de instalaciones básicas para lavarse las manos.</p>
    <br><br>
    <img src="Aguays.jpg" class="Aguays">
    </section>

    <section class="image"></section>
    <section class="text">
        <h2>La importancia de la higiene y el saneamiento en la prevención de enfermedades, especialmente durante la pandemia de COVID-19:</h2>
        <p>La pandemia de la COVID-19 ha destacado la importancia crucial del saneamiento, la higiene y un acceso adecuado a agua limpia para prevenir y controlar enfermedades.</p>
        <p>La higiene de manos es esencial para salvar vidas, y el lavado de manos es una de las acciones más efectivas para reducir la propagación de patógenos y prevenir infecciones, incluido el virus de la COVID-19.</p>
    </section>

    <section class="image"></section>
    <section class="text">
        <h2>Datos Destacables</h2>
        <p>> Entre 1990 y 2015, la proporción de población mundial que utilizaba una fuente mejorada de agua potable pasó del 76% al 90%.</p>
        <p>> Las mujeres y las niñas son las encargadas de  recolectar agua en el 80% de los hogares sin acceso a agua corriente.</p>
        <p>> Más del 80% de las aguas residuales resultantes de actividades humanas se vierten en los ríos o el mar sin ningún tratamiento, lo que provoca su contaminación.</p>
        <p>> Cada día, alrededor de 1000 niños mueren debido a enfermedades diarreicas asociadas a la falta de higiene.</p>
        <p>> Aproximadamente el 70% de todas las aguas extraídas de los ríos, lagos y acuíferos se utilizan para el riego.</p>
    </section>

    <section class="image"></section>
    <section class="text">
        <h2>Objetivo de la ONU</h2>
        <p>La ONU busca lograr el acceso universal y equitativo al agua potable y saneamiento, mejorar la calidad del agua, aumentar el uso eficiente de los recursos hídricos, implementar la gestión integrada de los recursos hídricos y proteger los ecosistemas relacionados con el agua.</p> 
        <p>También se busca ampliar la cooperación internacional y fortalecer la participación de las comunidades locales en la mejora de la gestión del agua y el saneamiento.</p>
    </section>

    <section class="image"></section>
    <section class="text">
        <h2>Muestreo de Imagenes con PHP</h2>
        <p>Utilizando los elementos While, For y If.</p>
    </section>

    <br><br><br><br>

    <?php
$directorio = "imagenes/";
$archivos = scandir($directorio);

// Recorremos los elementos en el arreglo usando un ciclo "for"
for ($i = 2; $i < count($archivos); $i++) {

  // Verificamos si el archivo es una imagen usando un ciclo "while"
  $extensiones = array("jpg", "jpeg", "png", "gif");
  $j = 0;
  $es_imagen = false;
  while ($j < count($extensiones)) {
    if (strpos(strtolower($archivos[$i]), "." . $extensiones[$j]) !== false) {
      $es_imagen = true;
      break;
    }
    $j++;
  }

  // Si el archivo es una imagen, lo mostramos
  if ($es_imagen) {
    echo "<img src='" . $directorio . $archivos[$i] . "' class='mi-clase'>";
  }
}
?>

    <div class="notification">
        <p>Maestro, Bienvenido a mi Pagina Web </p>
        <span class="notification-progress"></span>
    </div>

    <br><br><br><br><br><br><br><br><br>

    <footer class="footer">
        <br>
        &copy; Objetivos de la ONU
        <br><br>
        <a href="https://www.un.org/sustainabledevelopment/es/water-and-sanitation/" target="_blank">Pagina Oficial</a>
        <p>Ponce Perales Luis Guillermo</p>
     </footer>

</body>
</html>