<?php

use Nails\Category\Model;
use Nails\Category\Resource;

return [
    /**
     * Classes/libraries which don't necessarily relate to a database table.
     * Once instantiated, a request for a service will always return the same instance.
     */
    'services'  => [],

    /**
     * Models generally represent database tables.
     * Once instantiated, a request for a model will always return the same instance.
     */
    'models'    => [
        'Category' => function (): Model\Category {
            if (class_exists('\App\Category\Model\Category')) {
                return new \App\Category\Model\Category();
            } else {
                return new Model\Category();
            }
        },
    ],

    /**
     * A class for which a new instance is created each time it is requested.
     */
    'factories' => [],

    /**
     * A class which represents an object from the database
     */
    'resources' => [
        'Category' => function ($mObj): Resource\Category {
            if (class_exists('\App\Category\Resource\Category')) {
                return new \App\Category\Resource\Category($mObj);
            } else {
                return new Resource\Category($mObj);
            }
        },
    ],
];
