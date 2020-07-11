<?php

use BotMan\BotMan\Messages\Conversations\Conversation;

class OnboardingConversation extends Conversation
{

    protected $firstname;

    public function askFirstname()
    {
        $this->ask('Hi, what is your name?', function($answer) {
            $firstName = $answer->getText();
            $this->say('Nice to meet you '.$firstName);
        });
    }


    public function run()
    {
        $this->askFirstname();
    }
}

class Query extends Conversation
{

    protected $name;
    protected $entrynumber;
    protected $query;

    public function askName()
    {
        $this->ask('Hi, what is your name?', function($answer) {
            $name = $answer->getText();
            $this->say('Nice to meet you '.$name);
            $this->askEntryNumber();
        });
    }

    public function askEntryNumber()
    {
        $this->ask('May I know your entry number?', function($answer) {
            $entrynumber = $answer->getText();
            $this->say('Thankyou!');
            $this->takeQuery();
        });
    }

    public function takeQuery()
    {
        $this->ask('You may now describe the problem you are facing.', function($answer) {
            $entrynumber = $answer->getText();
            $this->say('I have registered your request. BSW will contact you shortly!');
            $this->say('Thankyou for contacting us!');
        });
    }



    public function run()
    {
        $this->askName();
    }
}