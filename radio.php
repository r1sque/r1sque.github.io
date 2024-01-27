<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Player</title>
</head>
<body>

<h1>Radio Player</h1>

<div>
    <h2>SLAMFM</h2>
    <audio controls>
        <source src="<?php echo getRadioStreamUrl('slamfm'); ?>" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
</div>

<div>
    <h2>FUNX</h2>
    <audio controls>
        <source src="<?php echo getRadioStreamUrl('funx'); ?>" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
</div>

<?php
function getRadioStreamUrl($station)
{
    // Define stream URLs for SLAMFM and FUNX
    $radioStreams = [
        'slamfm' => 'http://icecast8.play.cz:8000/funradio_128.mp3',
        'funx' => 'https://stream.funx.nl/funx.aac'
        // Replace these URLs with the actual stream URLs for SLAMFM and FUNX
    ];

    // Check if the specified station exists in the array
    if (array_key_exists($station, $radioStreams)) {
        return $radioStreams[$station];
    } else {
        // Return a default stream URL or handle the error as needed
        return 'https://example.com/default_stream.mp3';
    }
}
?>

</body>
</html>
