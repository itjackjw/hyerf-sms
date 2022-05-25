<?php

namespace Itjack\HyerfSms;

use Hyperf\Contract\ConfigInterface;
use Overtrue\EasySms\EasySms;
use Psr\Container\ContainerInterface;

class SmsFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get(ConfigInterface::class)->get("sms");
        return new EasySms($config);
    }
}