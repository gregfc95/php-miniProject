<?php 

require_once 'consts.php';
require_once 'functions.php';

$data = get_data(API_URL);
$until_message = get_until_message($data["days_until"]);
$until_message_next = get_until_message($data["following_production"]["days_until"]);
?>

<?php render_template('head', ["title" => $data["title"]]); ?>
<?php render_template('main', array_merge (
    $data,
    ["until_message" => $until_message,
    "until_message_next" => $until_message_next]
)); ?>
<?php render_template('styles') ?>

