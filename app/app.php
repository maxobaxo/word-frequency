<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RepeatCounter.php';

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {

        return $app['twig']->render('home.html.twig');
    });

    $app->get('/result', function() use ($app) {
        $repeater = new RepeatCounter;
        $word = $_GET['word'];
        $lyrics = $_GET['lyrics'];
        $repeats = $repeater->countRepeats($word, $lyrics);

        $lyrics_label = $_GET['lyrics-label'];

        return $app['twig']->render('result.html.twig', array('word' => $word, 'lyrics' => $lyrics, 'repeats' => $repeats));
    });

    return $app;
?>
