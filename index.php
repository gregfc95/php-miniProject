<?php 

const API_URL = "https://whenisthenextmcufilm.com/api";
require_once 'functions/functions.php';

$data = get_data(API_URL);
$untilMessage = get_until_message($data["days_until"]);
$untilMessageNext = get_until_message($data["following_production"]["days_until"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Next Marvel movie" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next MCU title - <?= $data["title"]; ?></title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    />
</head>
<body>
    <main>
        <section>
            <img 
            src="<?= $data["poster_url"]; ?>" 
                width="250" 
                alt="Poster of <?= $data["title"]; ?>" 
            style="border-radius: 16px"
            />
        </section>
        <hgroup>
        <h3><?= $data["title"]; ?> - <?= $untilMessage ?></h3>
        <p>Release Date: <?= $data["release_date"]; ?></p>
        <p>Next... "<?= $data["following_production"]["title"]; ?>" - <?= $untilMessageNext ?></p>
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