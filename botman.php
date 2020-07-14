<?php

require_once 'vendor/autoload.php';

use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Cache\SymfonyCache;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Messages\Attachments\Image;


require_once('bot_conversations.php');

$config = [];

DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

$adapter = new FilesystemAdapter();

$botman = BotManFactory::create($config, new SymfonyCache($adapter));


$botman->hears('.*hello.*', function ($bot) {
    $bot->startConversation(new OnboardingConversation);
});
$botman->hears('.*hi.*', function ($bot) {
    $bot->startConversation(new OnboardingConversation);
});

$botman->hears('!q', function($bot) {
    
    $bot->startConversation(new Query);
    
});
$botman->hears('query', function($bot) {
    
    $bot->startConversation(new Query);
    
});

$botman->hears('!feature', function($bot) {
    
    $bot->startConversation(new FeatureRequest);
    
});





$botman->hears('Tell me about BSW', function ($bot) {
    $bot->reply('BSW “Board for Student Welfare” consists of student representatives from each hostel and a few faculty members. This board has been constituted to help the students in the hour of need. BSW gives financial help, informative sessions, counselling and looks after other modes of student welfare.');
});
$botman->hears('What is BSW\?', function ($bot) {
    $bot->reply('BSW “Board for Student Welfare” consists of student representatives from each hostel and a few faculty members. This board has been constituted to help the students in the hour of need. BSW gives financial help, informative sessions, counselling and looks after other modes of student welfare.');
});
$botman->hears('What does BSW do\?', function ($bot) {
    $bot->reply('BSW “Board for Student Welfare” consists of student representatives from each hostel and a few faculty members. This board has been constituted to help the students in the hour of need. BSW gives financial help, informative sessions, counselling and looks after other modes of student welfare.');
});

$botman->hears('What\'s up\?', function ($bot) {
    $bot->reply('The URL Bar! Oh wait, that one’s just for us chatbots.');
});
$botman->hears('Whats up\?', function ($bot) {
    $bot->reply('The URL Bar! Oh wait, that one’s just for us chatbots.');
});
$botman->hears('Whats up', function ($bot) {
    $bot->reply('The URL Bar! Oh wait, that one’s just for us chatbots.');
});

$botman->hears('!em', function ($bot) {
    $bot->reply('    
    <li class="list-group-item col-12 col-md-6"><a href="tel:+91-11-2659-1000">IIT SECURITY </a> 11-2659-1000</li>
    <li class="list-group-item col-12 col-md-6"><a href="tel:+91-11-2659-6101">IIT FIRE SERVICE  </a> 11-2659-6101</li>
    <li class="list-group-item col-12 col-md-6"><a href="tel:+91-11-2659-1500">IIT HOSPITAL </a> 11-2659-1500</li>
    <li class="list-group-item col-12 col-md-6"><a href="tel:+91-11-2659-6666">IIT AMBULANCE </a> 11-2659-6666</li>
    <li class="list-group-item col-12 col-md-6"><a href="tel:+91-11-2659-1699">FACULTY GUEST HOUSE </a> 11-2659-1699</li>
    <li class="list-group-item col-12 col-md-6"><a href="tel:+91-11-2659-1906">MAIN GUEST HOUSE </a> 11-2659-1906</li>
    <li class="list-group-item col-12"><a href="tel:+91-11-2659-1400">POWER SUPPLY (MAIN) </a> 11-2659-1400</li>');
});
$botman->hears('em', function ($bot) {
    $bot->reply('    
    <li class="list-group-item col-12 col-md-6"><a href="tel:+91-11-2659-1000">IIT SECURITY </a> 11-2659-1000</li>
    <li class="list-group-item col-12 col-md-6"><a href="tel:+91-11-2659-6101">IIT FIRE SERVICE  </a> 11-2659-6101</li>
    <li class="list-group-item col-12 col-md-6"><a href="tel:+91-11-2659-1500">IIT HOSPITAL </a> 11-2659-1500</li>
    <li class="list-group-item col-12 col-md-6"><a href="tel:+91-11-2659-6666">IIT AMBULANCE </a> 11-2659-6666</li>
    <li class="list-group-item col-12 col-md-6"><a href="tel:+91-11-2659-1699">FACULTY GUEST HOUSE </a> 11-2659-1699</li>
    <li class="list-group-item col-12 col-md-6"><a href="tel:+91-11-2659-1906">MAIN GUEST HOUSE </a> 11-2659-1906</li>
    <li class="list-group-item col-12"><a href="tel:+91-11-2659-1400">POWER SUPPLY (MAIN) </a> 11-2659-1400</li>');
});
$botman->hears('!em security', function ($bot) {
    $bot->reply('
    <li class="list-group-item col-12 "><a href="tel:+91-11-2659-1000">Security Control Room </a>11-2659-1000</li>
    <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6500">Anti Raging Helpline </a>11-2659-6500</li>
    <li class="list-group-item col-12 "><a href="tel:+91-11-2659-1712">Duty Officer </a>11-2659-1712</li>
    <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6903">Control Room (RCA) </a>11-2659-6903</li>
    <li class="list-group-item col-12 "><a href="tel:+91-11-2659-7225">Bharti School </a>11-2659-7225</li>
    <li class="list-group-item col-12 "><a href="tel:+91-11-2659-7161">Security Cabin (MSB) I </a>11-2659-7161</li>
    <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6942">Security Cabin (MSB) II</a>11-2659-6942</li>
    <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6981">Main Gate I </a>11-2659-6981</li>
    <li class="list-group-item col-12"><a href="tel:+91-11-2659-6828">Main Gate II </a>11-2659-6828</li>
    <li class="list-group-item col-12"><a href="tel:+91-11-2659-6999">Hostel Gate  </a>11-2659-6999</li>
    <li class="list-group-item col-12"><a href="tel:+91-11-2659-6900">Mahrauli Gate </a>11-2659-6900</li>
    <li class="list-group-item col-12"><a href="tel:+91-11-2659-6969">JNU Gate </a>11-2659-6969</li>
    <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6849">Adhchini Gate </a>11-2659-6849</li>
    <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6387">Vishwakarma Bhawan </a>11-2659-6387</li>
    <li class="list-group-item col-12"><a href="tel:+91-11-2659-1711">Security Officer </a>11-2659-1711</li>
    ');
});
$botman->hears('em security', function ($bot) {
    $bot->reply('
    <li class="list-group-item col-12 "><a href="tel:+91-11-2659-1000">Security Control Room </a>11-2659-1000</li>
    <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6500">Anti Raging Helpline </a>11-2659-6500</li>
    <li class="list-group-item col-12 "><a href="tel:+91-11-2659-1712">Duty Officer </a>11-2659-1712</li>
    <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6903">Control Room (RCA) </a>11-2659-6903</li>
    <li class="list-group-item col-12 "><a href="tel:+91-11-2659-7225">Bharti School </a>11-2659-7225</li>
    <li class="list-group-item col-12 "><a href="tel:+91-11-2659-7161">Security Cabin (MSB) I </a>11-2659-7161</li>
    <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6942">Security Cabin (MSB) II</a>11-2659-6942</li>
    <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6981">Main Gate I </a>11-2659-6981</li>
    <li class="list-group-item col-12"><a href="tel:+91-11-2659-6828">Main Gate II </a>11-2659-6828</li>
    <li class="list-group-item col-12"><a href="tel:+91-11-2659-6999">Hostel Gate  </a>11-2659-6999</li>
    <li class="list-group-item col-12"><a href="tel:+91-11-2659-6900">Mahrauli Gate </a>11-2659-6900</li>
    <li class="list-group-item col-12"><a href="tel:+91-11-2659-6969">JNU Gate </a>11-2659-6969</li>
    <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6849">Adhchini Gate </a>11-2659-6849</li>
    <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6387">Vishwakarma Bhawan </a>11-2659-6387</li>
    <li class="list-group-item col-12"><a href="tel:+91-11-2659-1711">Security Officer </a>11-2659-1711</li>
    ');
});
$botman->hears('!em hostels', function ($bot) {
    $bot->reply('
    <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6911">Aravali </a>11-2659-6911</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6891">Girnar </a>11-2659-6891</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6825">Himadri </a>11-2659-6825</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6894">Fire Control Room Himadri </a>11-2659-6894</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6826">Kailash </a>11-2659-6826</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6855">Security Gate Kailash </a>11-2659-6855</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6915">Karakoram</a>11-2659-6915</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6917">Kumaon </a>11-2659-6917</li>
        <li class="list-group-item col-12"><a href="tel:+91-11-2659-6919">Nilgiri </a>11-2659-6919</li>
        <li class="list-group-item col-12"><a href="tel:+91-11-2659-7066">Satpura </a>11-2659-7066</li>
        <li class="list-group-item col-12"><a href="tel:+91-11-2659-6921">Shivalik </a>11-2659-6921</li>
        <li class="list-group-item col-12"><a href="tel:+91-11-2659-6899">Udaigiri </a>11-2659-6899</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6923">Vindhyachal </a>11-2659-6923</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-7068">Zanskar </a>11-2659-7068</li>
        ');
});
$botman->hears('em hostels', function ($bot) {
    $bot->reply('
    <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6911">Aravali </a>11-2659-6911</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6891">Girnar </a>11-2659-6891</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6825">Himadri </a>11-2659-6825</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6894">Fire Control Room Himadri </a>11-2659-6894</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6826">Kailash </a>11-2659-6826</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6855">Security Gate Kailash </a>11-2659-6855</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6915">Karakoram</a>11-2659-6915</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6917">Kumaon </a>11-2659-6917</li>
        <li class="list-group-item col-12"><a href="tel:+91-11-2659-6919">Nilgiri </a>11-2659-6919</li>
        <li class="list-group-item col-12"><a href="tel:+91-11-2659-7066">Satpura </a>11-2659-7066</li>
        <li class="list-group-item col-12"><a href="tel:+91-11-2659-6921">Shivalik </a>11-2659-6921</li>
        <li class="list-group-item col-12"><a href="tel:+91-11-2659-6899">Udaigiri </a>11-2659-6899</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6923">Vindhyachal </a>11-2659-6923</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-7068">Zanskar </a>11-2659-7068</li>
        ');
});
$botman->hears('em hostel', function ($bot) {
    $bot->reply('
    <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6911">Aravali </a>11-2659-6911</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6891">Girnar </a>11-2659-6891</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6825">Himadri </a>11-2659-6825</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6894">Fire Control Room Himadri </a>11-2659-6894</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6826">Kailash </a>11-2659-6826</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6855">Security Gate Kailash </a>11-2659-6855</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6915">Karakoram</a>11-2659-6915</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6917">Kumaon </a>11-2659-6917</li>
        <li class="list-group-item col-12"><a href="tel:+91-11-2659-6919">Nilgiri </a>11-2659-6919</li>
        <li class="list-group-item col-12"><a href="tel:+91-11-2659-7066">Satpura </a>11-2659-7066</li>
        <li class="list-group-item col-12"><a href="tel:+91-11-2659-6921">Shivalik </a>11-2659-6921</li>
        <li class="list-group-item col-12"><a href="tel:+91-11-2659-6899">Udaigiri </a>11-2659-6899</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-6923">Vindhyachal </a>11-2659-6923</li>
        <li class="list-group-item col-12 "><a href="tel:+91-11-2659-7068">Zanskar </a>11-2659-7068</li>
        ');
});

$botman->hears('!qp {course}', function ($bot, $course) {
    $bot->reply('<a target="_blank" style="color: cornsilk;" href="http://localhost:8888/BSW_Website_2020/coursepage.php?course='.strtoupper($course).'">Click here for '.strtoupper($course).' Question Papers</a>');
});
$botman->hears('past qps {course}', function ($bot, $course) {
    $bot->reply('<a target="_blank" style="color: cornsilk;" href="http://localhost:8888/BSW_Website_2020/coursepage.php?course='.strtoupper($course).'">Click here for '.strtoupper($course).' Question Papers</a>');
});
$botman->hears('qps {course}', function ($bot, $course) {
    $bot->reply('<a target="_blank" style="color: cornsilk;" href="http://localhost:8888/BSW_Website_2020/coursepage.php?course='.strtoupper($course).'">Click here for '.strtoupper($course).' Question Papers</a>');
});
$botman->hears('question papers {course}', function ($bot, $course) {
    $bot->reply('<a target="_blank" style="color: cornsilk;" href="http://localhost:8888/BSW_Website_2020/coursepage.php?course='.strtoupper($course).'">Click here for '.strtoupper($course).' Question Papers</a>');
});
$botman->hears('-{course}', function ($bot, $course) {
    $bot->reply('<a target="_blank" style="color: cornsilk;" href="http://localhost:8888/BSW_Website_2020/coursepage.php?course='.strtoupper($course).'">Click here for '.strtoupper($course).' Question Papers</a>');
});



$botman->hears('!rep {hostel}', function ($bot, $hostel) {
    $rep = array(
        "aravali" => 'Harshit Khanna <br><a href="google.com" target="_blank" style="font-size:16px; max-width:300px;"><span class="fa fa-facebook"></span> harshitkhanna1010@gmail.com</button></a><br><a  my-1" style="font-size:16px; max-width:300px;"><span class="fa fa-phone"></span> +91 9406559834  </a>',
        "girnar" => 'Harshit Khanna <br><a href="google.com" target="_blank" style="font-size:16px; max-width:300px;"><span class="fa fa-facebook"></span> harshitkhanna1010@gmail.com</button></a><br><a  my-1" style="font-size:16px; max-width:300px;"><span class="fa fa-phone"></span> +91 9406559834  </a>',
        "himadri" => 'Harshit Khanna <br><a href="google.com" target="_blank" style="font-size:16px; max-width:300px;"><span class="fa fa-facebook"></span> harshitkhanna1010@gmail.com</button></a><br><a  my-1" style="font-size:16px; max-width:300px;"><span class="fa fa-phone"></span> +91 9406559834  </a>',
        "jwalamukhi" => 'Harshit Khanna <br><a href="google.com" target="_blank" style="font-size:16px; max-width:300px;"><span class="fa fa-facebook"></span> harshitkhanna1010@gmail.com</button></a><br><a  my-1" style="font-size:16px; max-width:300px;"><span class="fa fa-phone"></span> +91 9406559834  </a>',
        "kailash" => 'Harshit Khanna <br><a href="google.com" target="_blank" style="font-size:16px; max-width:300px;"><span class="fa fa-facebook"></span> harshitkhanna1010@gmail.com</button></a><br><a  my-1" style="font-size:16px; max-width:300px;"><span class="fa fa-phone"></span> +91 9406559834  </a>',
        "karakoram" => 'Harshit Khanna <br><a href="google.com" target="_blank" style="font-size:16px; max-width:300px;"><span class="fa fa-facebook"></span> harshitkhanna1010@gmail.com</button></a><br><a  my-1" style="font-size:16px; max-width:300px;"><span class="fa fa-phone"></span> +91 9406559834  </a>',
        "kumaon" => 'Harshit Khanna <br><a href="google.com" target="_blank" style="font-size:16px; max-width:300px;"><span class="fa fa-facebook"></span> harshitkhanna1010@gmail.com</button></a><br><a  my-1" style="font-size:16px; max-width:300px;"><span class="fa fa-phone"></span> +91 9406559834  </a>',
        "nilgiri" => 'Harshit Khanna <br><a href="google.com" target="_blank" style="font-size:16px; max-width:300px;"><span class="fa fa-facebook"></span> harshitkhanna1010@gmail.com</button></a><br><a  my-1" style="font-size:16px; max-width:300px;"><span class="fa fa-phone"></span> +91 9406559834  </a>',
        "satpura" => 'Harshit Khanna <br><a href="google.com" target="_blank" style="font-size:16px; max-width:300px;"><span class="fa fa-facebook"></span> harshitkhanna1010@gmail.com</button></a><br><a  my-1" style="font-size:16px; max-width:300px;"><span class="fa fa-phone"></span> +91 9406559834  </a>',
        "shivalik" => 'Harshit Khanna <br><a href="google.com" target="_blank" style="font-size:16px; max-width:300px;"><span class="fa fa-facebook"></span> harshitkhanna1010@gmail.com</button></a><br><a  my-1" style="font-size:16px; max-width:300px;"><span class="fa fa-phone"></span> +91 9406559834  </a>',
        "udaigiri" => 'Harshit Khanna <br><a href="google.com" target="_blank" style="font-size:16px; max-width:300px;"><span class="fa fa-facebook"></span> harshitkhanna1010@gmail.com</button></a><br><a  my-1" style="font-size:16px; max-width:300px;"><span class="fa fa-phone"></span> +91 9406559834  </a>',
        "vindhyachal" => 'Harshit Khanna <br><a href="google.com" target="_blank" style="font-size:16px; max-width:300px;"><span class="fa fa-facebook"></span> harshitkhanna1010@gmail.com</button></a><br><a  my-1" style="font-size:16px; max-width:300px;"><span class="fa fa-phone"></span> +91 9406559834  </a>',
        "zanskar" => 'Harshit Khanna <br><a href="google.com" target="_blank" style="font-size:16px; max-width:300px;"><span class="fa fa-facebook"></span> harshitkhanna1010@gmail.com</button></a><br><a  my-1" style="font-size:16px; max-width:300px;"><span class="fa fa-phone"></span> +91 9406559834  </a>',
    );
    if(isset($rep[$hostel])){
    $bot->reply(''.$rep[$hostel]);
    }
    else{
        $bot->reply('Sorry, please chack your input for errors.');
    }
});


$botman->hears('!joke', function ($bot) {

    $curl = new Curl\Curl();
    $curl->setHeader('Accept', 'text/plain');
    $curl->get('https://icanhazdadjoke.com/');

    $bot->reply($curl->response);
});
$botman->hears('joke', function ($bot) {

    $curl = new Curl\Curl();
    $curl->setHeader('Accept', 'text/plain');
    $curl->get('https://icanhazdadjoke.com/');

    $bot->reply($curl->response);
});
$botman->hears('tell me a joke', function ($bot) {

    $curl = new Curl\Curl();
    $curl->setHeader('Accept', 'text/plain');
    $curl->get('https://icanhazdadjoke.com/');

    $bot->reply($curl->response);
});


$botman->fallback(function($bot) {
    $bot->reply('Sorry, I am not able to understand what you said. Here is a list of things I can do for you: ');
});

$botman->listen();