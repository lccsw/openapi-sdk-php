<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use PHPUnit\Framework\TestCase;

/**
 * Class NlpTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class NlpTest extends TestCase
{
    public function testWordSegment()
    {
        AlibabaCloud::accessKeyClient(
            \getenv('NLP_ACCESS_KEY_ID'),
            \getenv('NLP_ACCESS_KEY_SECRET')
        )->name('content')
                    ->regionId('cn-shanghai');

        $request = AlibabaCloud::nlp()->v20180408()->wordSegment();

        $request->withDomain('general');
        $request->jsonBody([
                               'lang' => 'ZH',
                               'text' => 'Iphone专用数据线',
                           ]);

        try {
            $result = $request->client('content')->request();
            self::assertEquals('Iphone', $result['data'][0]['word']);
        } catch (ServerException $e) {
            $this->assertContains(
                $e->getErrorCode(),
                [
                    'InvalidApi.NotPurchase',
                    'MissingAccessKeyId',
                    'InvalidAccessKeyId.NotFound',
                ]
            );
        } catch (ClientException $e) {
            self::assertStringStartsWith(
                'cURL error',
                $e->getErrorMessage()
            );
        }
    }
}