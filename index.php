<?php 

const API_URL = "https://whenisthenextmcufilm.com/api";
#Inicializar una nueva sesion de cURL; ch = cURL handle
//$ch = curl_init(API_URL);
#Indicar que queremos recibir el resultado de la peticion y no mostrar en pantalla
#ch es el cURL handle
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* Ejecutar la peticion
y guardamos el resultado
*/
#Alternativa utilizar file_get_contents
function get_data(string $url) {
    $result = file_get_contents(API_URL); //Si solo quieres un get
    $data = json_decode($result,true);
    return $data;
}
//$result = curl_exec($ch);
#Transformamos el json a un array asociativo y guardamos en result

#Cerramos la conexion cURL
//curl_close($ch);
$data = get_data(API_URL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Next Marvel movie" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next Marvel title</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    />
</head>
<body>
    <main>
<!--         <pre style="font-size: 12px; overflow: scroll;">
        #    <?php   var_dump($data); ?>
        </pre> -->
        <section>
            <img 
            src="<?= $data["poster_url"]; ?>" 
                width="250" 
                alt="Poster of <?= $data["title"]; ?>" 
            style="border-radius: 16px"
            />
        </section>
        <hgroup>
        <h3><?= $data["title"]; ?> premieres in <?= $data["days_until"]; ?> days</h3>
        <p>Release Date: <?= $data["release_date"]; ?></p>
        <p>Next... "<?= $data["following_production"]["title"]; ?>", in <?= $data["following_production"]["days_until"]; ?> days</p>
        <img 
            src="<?= $data["following_production"]["poster_url"]; ?>" 
                width="100" 
                alt="Poster of <?= $data["title"]; ?>" 
            style="border-radius: 16px"
            />
        </section>
    </main>
    
</body>
</html>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    img {
        margin: 0 auto
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }
    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
</style>