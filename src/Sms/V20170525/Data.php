<?php
return [ 'product' => [ 'name' => 'Sms', 'domain' => 'sms.aliyuncs.com,sms.[Region].aliyuncs.com,sms-cn-shagnhai.aliyuncs.com', 'type' => 'Outer', ], 'version' => [ 'product' => 'Sms', 'name' => '2017-05-25', ], 'api' => [ 'SendSms' => [ 'attributes' => [ 'version' => '2017-05-25', 'showJsonItemName' => 'true', 'name' => 'SendSms', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Sms', ], 'parameters' => [ 'Parameter' => [ 'Format' => [ 'name' => 'Format', 'tagName' => 'Format', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PhoneNumbers' => [ 'name' => 'PhoneNumbers', 'tagName' => 'PhoneNumbers', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'Signature' => [ 'name' => 'Signature', 'tagName' => 'Signature', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'SignatureMethod' => [ 'name' => 'SignatureMethod', 'tagName' => 'SignatureMethod', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'SignatureNonce' => [ 'name' => 'SignatureNonce', 'tagName' => 'SignatureNonce', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'SignatureVersion' => [ 'name' => 'SignatureVersion', 'tagName' => 'SignatureVersion', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'SignName' => [ 'name' => 'SignName', 'tagName' => 'SignName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'TemplateCode' => [ 'name' => 'TemplateCode', 'tagName' => 'TemplateCode', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'TemplateParam' => [ 'name' => 'TemplateParam', 'tagName' => 'TemplateParam', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'OutId' => [ 'name' => 'OutId', 'tagName' => 'OutId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'SmsUpExtendCode' => [ 'name' => 'SmsUpExtendCode', 'tagName' => 'SmsUpExtendCode', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Timestamp' => [ 'name' => 'Timestamp', 'tagName' => 'Timestamp', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Version' => [ 'name' => 'Version', 'tagName' => 'Version', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://dysmsapi.aliyuncs.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => null, 'name' => 'SendSms', ], ],];