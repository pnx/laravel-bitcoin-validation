<?php

namespace Tests\Fixtures;

class XPubAddress
{
    public static function valid()
    {
        return [
            [ "xpub6CLsFKHXmnPyhjnVhfKZaPXe7KYjiZfFKbPz41a6zpnMbd5jPVRAt3spdXtUzKaj33SQgTi6kutS7PnUexSYE5VxdNHhiUaLdq5Wg5483pK" ],
            [ "xpub6DHAZgcryvCDJE7XdTNWC7MBJFDSKm1Lf7MmeV1k8gQ6aQVJ3AKGfSQonzDzefd7cUuJ1e1e3hzvmyFvU4XMoEStLY7gNo5fPGJmJusj6un" ],
            [ "xpub6BhrdE9UKVAS48E14rmu2pvDwoLAvVdwCHvTzrjiDCSHY2tVN9dhuHSBERxRcR8ndUGy7W9CrFnuEaCf6pX7S85rW88y9sAn3uWTmhFWRxi" ],
            [ "xpub6DV8CvF4yW9wkvq5LQAGDSV3NPWJdQGUGfLFpmAbQxfkR8YHR6izxWPCy49F114km92shYcAh7CY4TwTFLcGSEtq3MjusYLx3iJAJnBnN1a" ],
        ];
    }

    public static function invalid()
    {
        return [
            [ "xpub6X9gQ9XFdkReWr8srP2v3b6LJJD88qhnnVT6P4bKKVLa4EQzSVNiK945jwKZg7VLLQRUQcaPy3zTvXQzsTnHqoFUL3BAV89ci9Qfgz9bA88" ],
            [ "xpub6WzmmcnheKiZVej2uwXGthNJAUpNwGESVtGer9FqyBsofZW5jF8Xa5vtWoNoxLWDJ7SWsgh8sKa6WumEvpfF8dSiQfBgbhzZ4523CNeMv1k" ],
            [ "xpub6YJxHkKzUriRaa5e4cQm54MQUZCJAq8Frif7dEsExFo6nQgX1hAtLff4f4mP8VpeGBdCetECv5qqsPb3kQSR85JwN9gdjbBvaQMfDfjZdtJ" ]
        ];
    }
}
