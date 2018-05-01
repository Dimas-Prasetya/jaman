<?php
    require 'vendor/autoload.php';

    use Goutte\Client;
    use GuzzleHttp\Client as GuzzleClient;

    $client = new Client();

    $guzzleclient = new GuzzleClient(array(
        'timeout'   => 60,
        'verify'    => false,
    ));

    $client->setClient($guzzleclient);

    // Go to the symfony.com website
    $crawler = $client->request('GET', 'https://portal.bandung.go.id/daftar-hotel-dan-restoran-di-kota-bandung');

    // Click on the "Sarana dan Prasarana" link
    // $link = $crawler->selectLink('Sarana dan Prasarana')->link();
    // $subLink = $crawler-
    // $crawler = $client->click($link);

    // Get the latest post in this category and display the titles
    $crawler->filter('h3')->first()->each(function ($node) {
        print $node->text()."\n";
    });
?>