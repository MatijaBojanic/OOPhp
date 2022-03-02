<?php

class Subscription
{
    protected StripeGateway $gateway;

    public function __construct(StripeGateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function cancel()
    {

    }
    public function invoice()
    {

    }

    public function swap($newPlan)
    {

    }
}


class StripeGateway
{
    public function findStripeCustomer()
    {

    }

    public function findStripeSubscriptionByCustomer()
    {

    }
}