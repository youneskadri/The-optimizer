<?php

namespace App\Controller;
<<<<<<< Updated upstream
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
=======
use App\ChatBot\Conversation\OnBoardingConversation;
use App\ChatBot\Conversation\QuestionConversation;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Cache\SymfonyCache;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use BotMan\Drivers\Web\WebDriver;
use ReceiveMiddleware;
use stdClass;
>>>>>>> Stashed changes
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
<<<<<<< Updated upstream

class TunibotController extends AbstractController
=======
use App\Repository\UserRepository;
use App\Entity\User;
use BotMan\BotMan\Interfaces\UserInterface as InterfacesUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class TunibotController extends AbstractController 
>>>>>>> Stashed changes
{
    #[Route('/tunibot', name: 'tunibot')]
    public function chatAction()
{
    DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

    // Configuration for the BotMan WebDriver
    $config = [];

    // Create BotMan instance
    $botman = BotManFactory::create($config);
<<<<<<< Updated upstream

    // Give the bot some things to listen for.
    $botman->hears('(hello|hi|hey|nik omk)', function (BotMan $bot) {
        $bot->reply('Hello!');
    });
    $botman->hears('(cv|chfama jdid aandkom)', function (BotMan $bot) {
        $bot->reply('Hmd bro w inty?');
    });
=======
     
    // Give the bot some things to listen for.
    $botman->hears(
        'gif {name}',
        function (BotMan $bot, string $name) {
            $bot->reply(
                OutgoingMessage::create('this is your gif')
                    ->withAttachment($this->fetchGiphyGif($name))
            );
        }
    );
    $botman->hears(
        'weather in {location}',
        function (BotMan $bot, string $location) {
            $response = $this->fetchWeatherData($location);
            $bot->reply(sprintf('<img src="%s" alt="icon"/>', $response->current->weather_icons[0]));
            $bot->reply(sprintf('Weather in %s is %s!', $response->location->name, $response->current->weather_descriptions[0]));
        }
    );
    $botman->hears(
        'my name is {name}',
        function (BotMan $bot, string $name) {
            $bot->userStorage()->save(['name' => $name]);
            $bot->reply('Hello, ' . $name);
        }
    );
    $botman->hears(
        'i m from {location}',
        function (BotMan $bot, string $location) {
            $bot->userStorage()->save(['location' => $location]);
           
        }
    );
    $botman->hears(
        'mm',
        function (BotMan $bot) {
            $bot->reply('Your name is ' . $bot->userStorage()->get('name').''.'you are from '.$bot->userStorage()->get('location'));
        }
    );
    $botman->hears(
        'information',
        function (BotMan $bot) {
            $user = $bot->getUser();
            $bot->reply('First name: ' . $user->getFirstName());
        }
    );
>>>>>>> Stashed changes

    // Set a fallback
    $botman->fallback(function (BotMan $bot) {
        $bot->reply('Sorry, I did not understand.');
    });

    // Start listening
    $botman->listen();

    return new Response();
 }

<<<<<<< Updated upstream
 #[Route('/', name: 'tunisport')]
    public function indexAction(Request $request)
    {
=======
 #[Route('/client', name: 'client')]
    public function indexAction(Request $request,User $user,BotMan $bot)
    {    $user = $bot->getUser();
>>>>>>> Stashed changes
        return $this->render('front.html.twig');
    }


    #[Route('/chatframe', name: 'chatframe')]
    public function chatframeAction(Request $request)
    {
        return $this->render('tunibot/index.html.twig');
    }
<<<<<<< Updated upstream
=======
    private function fetchWeatherData(string $location): stdClass
    {
        //😀 dirty, but simple and fine for me in POC
        $url = 'http://api.weatherstack.com/current?access_key=495e91f5482b29842f441007f3981fb9&query=' . urlencode($location);

      

        return json_decode(file_get_contents($url));
    }

    private function fetchGiphyGif(string $name): Image
    {
        $url = sprintf('https://api.giphy.com/v1/gifs/H2meCvoDg0tGUoawemeXEjPEveKv3fzs?api_key=H2meCvoDg0tGUoawemeXEjPEveKv3fzs', urlencode($name));
        $response = json_decode(file_get_contents($url));

        return new Image($response->data[0]->images->downsized_large->url);
    }
>>>>>>> Stashed changes
}
