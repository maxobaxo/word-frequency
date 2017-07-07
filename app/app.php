<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RepeatCounter.php';

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {

        return $app['twig']->render('home.html.twig');
    });

    $app->get('/repeat_result', function() use ($app) {
        $repeater = new RepeatCounter;
        $word = $_GET['word'];
        $sentence = $_GET['sentence']);
        $repeats = $repeater->countRepeats($word, $sentence);

        return $app['twig']->render('result.html.twig', array('word' => $word, 'sentence' => $sentence, 'repeats' => $repeats));
    });

    return $app;
?>
