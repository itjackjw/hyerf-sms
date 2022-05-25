<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  1092428238@qq.com
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Itjack\HyerfSms;

use Itjack\HyerfSms\Contract\SmsInterface;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                SmsInterface::class => SmsFactory::class
            ],
            'commands' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish'=>[
                'id' => 'config',
                'description' => 'The config for sms component.',
                'source'=>__DIR__.'/../publish/sms.php',
                'destination' => BASE_PATH . '/config/autoload/sms.php',
            ]
        ];
    }
}
