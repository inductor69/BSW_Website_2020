<?php

require_once 'vendor/autoload.php';

use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Cache\SymfonyCache;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Messages\Attachments\Image;


require_once('OnboardingConversation.php');

$config = [];

DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

$adapter = new FilesystemAdapter();

$botman = BotManFactory::create($config, new SymfonyCache($adapter));

$botman->hears('Hello', function($bot) {
    
    $bot->startConversation(new OnboardingConversation);
    
});

$botman->hears('hi', function($bot) {
    $bot->startConversation(new OnboardingConversation);
});

$botman->hears('Tell me about BSW', function ($bot) {
    $bot->reply('BSW “Board for Student Welfare” consists of student representatives from each hostel and a few faculty members. This board has been constituted to help the students in the hour of need. BSW gives financial help, informative sessions, counselling and looks after other modes of student welfare.');
});


$botman->fallback(function($bot) {
    $bot->reply('Sorry, I am not able to understand what you said. Here is a list of things I can do for you: ');
});

$botman->listen();