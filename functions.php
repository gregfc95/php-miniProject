<?php 
declare(strict_types=1);
function get_data(string $url):array 
{
    $result = file_get_contents(API_URL);
    $data = json_decode($result,true);
    return $data;
}

function get_until_message (int $days):string 
{
    return match (true) {
        $days === 0 => "Premier TODAY!",
        $days === 1 => "Premier tomorrow!",
        $days < 7   => "This week will be the premier",
        $days < 30  => "This month will be the premier",
        default     => "$days days left until premier",
    };
}

function render_template (string $template, array $data = []) 
{
    extract($data);
    require "templates/$template.php";
}
?>