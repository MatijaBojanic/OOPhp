<?php
//ducktyping with dynamic NewsletterSubscriptionsController, store method does not have a concrete type of param



class CampaignMonitor
{
    public function subscribe($email)
    {
        die('subscribing with CampaignMonitor');
    }
}

class Drip
{
    public function subscribe($email)
    {
        die('subscribing with Drip');
    }
}
class NewsletterSubscriptionsController
{
    public function store( $newsletter)
    {
        $email = 'jhon@doe.com';
        $newsletter->subscribe($email);
    }
}

$controller = new NewsletterSubscriptionsController();
$controller-> store(new Drip());