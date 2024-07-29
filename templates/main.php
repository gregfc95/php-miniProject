<main>
        <section>
            <img 
            src="<?= $poster_url; ?>" 
                width="250" 
                alt="Poster of <?= $title; ?>" 
            />
        </section>
        <hgroup>
        <h3><?= $title; ?> - <?= $until_message ?></h3>
        <p>Release Date: <?= $release_date; ?></p>
      
        <p>Up next... "<?= $following_production["title"]; ?>" - <?= $until_message_next ?></p>
        <img 
            src="<?= $following_production["poster_url"]; ?>" 
                width="100" 
                alt="Poster of <?= $title; ?>" 
            />
        </section>
</main>

