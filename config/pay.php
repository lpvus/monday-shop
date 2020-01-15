<?php


    return [

        // 阿里支付
        'ali' => [
            'app_id' => env('ALIAPY_APP_ID'),
            'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAhJZqFOvWkLYfGek+zKgI3qFYsNneholMES6j65QbzSghVrdYRVvJEkgB3OmL4rF0g9COhULcF4zZ6CNcMYRQ4qur1NE3+4gtbNH5T1s8DY+Ydnr4c/cl/ST+46tx1jKtMdnDlqKlwXX9Wyo0+yQTV98eKQWjV8VrerCRDkUlwRtzCXrySspIBFzvj5FymSYIQCdJ61rYLhSec1DgmVhvQz78I/NoJ1BuL891r+wf3nluXmVJzZ82i35IoFqRWOA6/qT1ODawmCeH1y4zehP9/qK+QDMycvkJOoW9QvQwlKKrWCbi/Q+LwiT70LbNMOnBwjGY72vJ+c01L7HOBvyl4QIDAQAB',
            // 加密方式： **RSA2**
            'private_key' => 'MIIEowIBAAKCAQEAj9I2/cIeXbsN4EErBpgHBA4z8tYkUGC7iHnARrQWodmsBNkFuU2K+hlLJ6S3nEohOL0vd3ODbY76O7aGSiMTlgwqKKY/sGXXBASQJlFIq/3lKibbnjYunqKeFjcvHqgnnMsB526AHh+PNngaZbHDTDDPd8oK0KEW4pemPjE4AM3rbjgb4CTAQ1ldDKdMUAiFg1oDRfUONHMRuzbpvAdgwwKkpuvH0PImmqQ1qz4P/nrQAX9/7C+QM8ov5jT8n5zeaZmxPgphuBXxA96LUIZhndSKWsvvSQHE0fHkmRxBWwjYyubMxGSHoVZXkyQ9E8sgx7E7EeAzUTcnbbiWzHb7swIDAQABAoIBAA6eqeRlxTx19VUkisEi1yO8Zd97kTlye93Fspv9VoehXvEnNoO9tDD0PUWMYvXKO1JPOPIFlgifDiTfywriQe1w0yBKthKyZ4cLB7Q9cwu4xYDhblXI4DhUA4nyliGhqlUv9cOW4gMt5hr9XoGT7mxiUdS1fx/yICdsjwOncS/zloMgk4My8fJuA8opm8NNIft65crJuSiOBiR39ZyzN9chebKuIotNK4RUQUBCdjgEPs+bE5CI4cMhljKS7o5Gnen9onNPlQGsto3mSi8oStZjssNvCCsUlfGS+UTyjLmrMVgyOWy3fpWudz3EhOszpK9xSpFkpRCntzDcP8zT0eECgYEA900UUGhx9dwOy9Dq119Z6oLn9nlOZcWs8lZQ0LzHfsq6evuQR9qS5+svx0WErL8amW7O3MsfjkSr5APih1xvRmW/n2LLvxmkaBWVAihkXBsk1m+LVRW2OGpPkyOWxZi0EDxVs90lzMps1cR4kepFl2PBO6gtxeaQzj1ViOQ9oMkCgYEAlOFPMU63vfopDPYNiljwMHV1xFafSDN5ZU/p7+6KVVBh9CxTE2O++Sbk9hn1Fa8GzOeeJbf8eav5H/6PlxvIrW8Uid2gOjQDAqTIV2Byy4laHsdyQ+OlRjstZCM3y/xvkQPcvGl6Fnsbu+ZZyv2KJvnNpMakutXUsniS/FfUkpsCgYEA9xEv4WFnsUzID4JKjR97Epr0Kj9pPq4uKfJoTRK9cIQTqHiZ3d+V81P5aOmgMoG+jlmxG89nWFhtLqFe+QM1PKy8s/0dN2/j3ATr2LsIASkxNXc9SaUmZth3ZbYhlIoKI0pUCR1A/YejEjJ2jrjyC9yimfpcuKGwPAv0342/sFkCgYBNFd/YKubuQbGxmVDneidbH+ZLM4Kjcqt/boI1DfCoPceKEs0s8+90t9PDLSt9/7Los2BqLTpXkVibXUXhuqwMSMB8pbkJidapLsLgovqtMj/sQd6DEkKH+6oD+EwynVDy5+oJ0B87tqBkiN+jP+WhSqRUldnDN2Y6xj1s1Nkm0wKBgFPQDmgHm/+ymFbDv06W6oA35p42O/dupqa3TnJDQjeN1WoU2sDOBKbocbPcOMCNG19cTqkr8DkIIERGdyFF0PK7vhbMw9mxFPt5K/5mW/Jr0bnpfsdyXSGDjr366Lq/s7wjgku3VOnXV2t9UUn9DVpUoSkOPgqHynvD+3PNzwTU',
            'return_url' =>  config('app.url') . '/pay/return',
            'notify_url' =>  config('app.url') . '/pay/notify',
            'log' => [ // optional
                       'file' => storage_path('logs/alipay.log'),
                       'level' => 'debug', // 建议生产环境等级调整为 info，开发环境为 debug
                       'type' => 'single', // optional, 可选 daily.
                       'max_file' => 30, // optional, 当 type 为 daily 时有效，默认 30 天
            ],
            'http' => [ // optional
                        'timeout' => 5.0,
                        'connect_timeout' => 5.0,
                        // 更多配置项请参考 [Guzzle](https://guzzle-cn.readthedocs.io/zh_CN/latest/request-options.html)
            ],
            'mode' => 'dev', // optional,设置此参数，将进入沙箱模式
        ],

    ];
