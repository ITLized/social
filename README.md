# Social bundle for Symfony by ITLized

## Installation:

### Add bundle to your composer.json file

``` js
// composer.json

{
    "require": {
		// ...
        "itlized/social": "~2.1"
    }
}
```

### Download the bundle using Composer

``` bash
$ php composer.phar update itlized/social
```

### Add bundle to your application kernel

``` php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Itlized\Bundle\SocialBundle\ItlizedSocialBundle(),
        // ...
    );
}
```

### Add routing.yml from the bundle to your app

``` php
// app/config/routing.yml

itlized_social:
    resource: "@ItlizedSocialBundle/Resources/config/routing.yml"
    prefix:   /

```

### Config bundle parameters for your app

``` php
// app/config/config.yml

parameters:
    itlized_social:
        routing: itlized_social_endpoint
        providers:
            Facebook:
                enabled: true
                keys:
                    id: xxx61753xxx
                    secret: xxxfb1578dbb194dxxx

```

## Links
 - http://hybridauth.sourceforge.net/
 - http://www.itlized.com
