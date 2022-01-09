<?php
return [
    'adminEmail' => 'admin@avatisolutions.com',

    'jwt' => [
        'issuer' => 'https://api.riskcube.com',  //name of your project (for information only)
        'audience' => 'https://frontend.riskcube.com',  //description of the audience, eg. the website using the authentication (for info only)
        'id' => '84OEzZHJNQGpZt6vUZhc7',  //a unique identifier for the JWT, typically a random string
        'expire' => 300,  //the short-lived JWT token is here set to expire after 5 min.
    ],
];
