### 兼容overtrue/easy-sms协程化，hyperf用户方便使用，详细使用请参考：https://github.com/overtrue/easy-sms

#### 1.安装
```
composer require itjack/hyperf-sms
```

#### 2.发布配置

```
php bin/hyperf.php vendor:publish itjack/hyperf-sms
```
#### 3.基本调用

```

use Itjack\HyerfSms\Contract\SmsInterface;
use Hyperf\Utils\ApplicationContext;

$easySms = ApplicationContext::getContainer()->get(SmsInterface::class);
$result = $easySms->send(18888888888, [
    'content'  => '{1}为您的登录验证码，请于5分钟内填写',
    'template' => '12345',
    'data' => [
        'code' => 1234
    ],
]);
```


