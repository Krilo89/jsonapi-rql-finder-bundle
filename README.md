![https://packagist.org/packages/krilo89/jsonapi-rql-finder-bundle](https://img.shields.io/packagist/dt/krilo89/jsonapi-rql-finder-bundle)
![https://github.com/krilo89/jsonapi-rql-finder-bundle](https://img.shields.io/github/license/krilo89/jsonapi-rql-finder-bundle)
# jsonapi-bundle-rql-finder
An RQL Finder for [paknahad/jsonapi-bundle][1].

This package is only a link between and [paknahad/jsonapi-bundle][1] [andreas-glaser/doctrine-rql][2]

# Installation

```
composer require krilo89/jsonapi-rql-finder-bundle
```

Add the line below to config/bundles.php

```
Krilo89\JsonApiRqlFinderBundle\Krilo89JsonApiRqlFilterBundle::class => ['all' => true],
```


# Usage

Include the RQL filter in the query under rql=

```
http://localhost/api/yourendpoint?rql=RQL string.
```

See https://github.com/xiag-ag/rql-parser/ for documentation on the RQL string.

[1]: https://github.com/paknahad/jsonapi-bundle
[2]: https://github.com/andreas-glaser/doctrine-rql
