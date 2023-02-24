<?php

namespace App\Controller;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class TunibotController extends AbstractController
{
    #[Route('/tunibot', name: 'tunibot')]
    public function chatAction()
{
    DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

    // Configuration for the BotMan WebDriver
    $config = [];

    // Create BotMan instance
    $botman = BotManFactory::create($config);

    // Give the bot some things to listen for.
    $botman->hears('(hello|hi|hey|nik omk)', function (BotMan $bot) {
        $bot->reply('Hello!');
    });
    $botman->hears('(cv|chfama jdid aandkom)', function (BotMan $bot) {
        $bot->reply('Hmd bro w inty?');
    });

    // Set a fallback
    $botman->fallback(function (BotMan $bot) {
        $bot->reply('Sorry, I did not understand.');
    });

    // Start listening
    $botman->listen();

    return new Response();
 }

 #[Route('/', name: 'tunisport')]
    public function indexAction(Request $request)
    {
        return $this->render('front.html.twig');
    }


    #[Route('/chatframe', name: 'chatframe')]
    public function chatframeAction(Request $request)
    {
        return $this->render('tunibot/index.html.twig');
    }
}
