<?php
//ducktyping with dynamic NewsletterSubscriptionsController, store method does not have a concrete type of param

interface Newsletter
{
    public function subscribe($email);
}

class CampaignMonitor implements Newsletter
{
    public function subscribe($email)
    {
        die('subscribing with CampaignMonitor');
    }
}

class Drip implements Newsletter
{
    public function subscribe($email)
    {
        die('subscribing with Drip');
    }
}
class NewsletterSubscriptionsController
{
    public function store(Newsletter $newsletter)
    {
        $email = 'jhon@doe.com';
        $newsletter->subscribe($email);
    }
}

$controller = new NewsletterSubscriptionsController();
$controller-> store(new CampaignMonitor());