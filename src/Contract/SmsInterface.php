<?php

namespace Itjack\HyerfSms\Contract;

interface SmsInterface
{

    /**
     * Send a message.
     *
     * @param string|array                                       $to
     * @param \Overtrue\EasySms\Contracts\MessageInterface|array $message
     * @param array                                              $gateways
     *
     * @return array
     *
     * @throws \Overtrue\EasySms\Exceptions\InvalidArgumentException
     * @throws \Overtrue\EasySms\Exceptions\NoGatewayAvailableException
     */
    public function send($to,$message,array $gateways=[]);
}