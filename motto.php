<?php
$mottos = [
    "Swag Inc. stands in solidarity with the Bajookanese refugees.",
    "Swagaryans are the most oppressed race.",
    "I'm Joe Biden, and I approve this message.",
    "I'm Barack Obama, and I approve this message.",
    "I'm Donald Trump, and I approve this message."
];

echo $mottos[rand(0, sizeof($mottos) - 1)];
?>