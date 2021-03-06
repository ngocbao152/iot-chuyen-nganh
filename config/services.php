<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
     'firebase' => [
         'database_url' => env('FIREBASE_DATABASE_URL', 'https://tuoicay-68633.firebaseio.com/'),
         'project_id' => env('FIREBASE_PROJECT_ID', 'tuoicay-68633'),
         'private_key_id' => env('FIREBASE_PRIVATE_KEY_ID', 'yd500cf3155d823bcd594428549c21494430d89f3'),
         'private_key' => str_replace("\\n", "\n", env('FIREBASE_PRIVATE_KEY', '-----BEGIN PRIVATE KEY-----\nMIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQCdNHUDmX8/kLCw\nk2/qM65DfaN+kpPVmL6PiRBiccMmF+8a+0bRh8+BFwBL9atKAmL+piekhentpVna\nM8EQEwAaF3dC1SwWTpCvIvQTPwY1b1B2ZYZ4iSrpJssYXqP7Lw52Tj3IGEs0aywZ\nTeANfyBEjb0EB15D9djQKJ6xONV4UAMJWQcWX9p2Vxj+r4ixd+Q4uPWxk7nrcsh5\n+oBJD4VMagwea0EMC1QZobWQLYeuU08JnSR6XQ5/2JGfYdgit1MLKVwn0snEUhMh\nuFUSppmr/oET7jEFuLc7aBQEkdbU0GueJDcVoD+QrcLtwjRwEzCtLEpQhMwcvhbV\nbpHT++kLAgMBAAECggEANcmmhdJFwyKHCguQPcJsDCSXRa3yTiGChgsAI6bH/icv\nRPyXyQZeXc1YaSUH8/0oEPgZ1UWKeijauvl9Q7o0jTjdMe1NNd6wy3O6rkEgpzTM\ng44OOfy4xWhkEhUDp2R83sa7hdSmGqvWvVuzXvrRuBMFCrVYsAkUo3haf8mx5IV2\nI94X9AY96side061Guv7u4Lh1Rr9TtjH8lasYf3IUO5oNypcaBwImLn7DValgwec\n669myeeVGiNobVOwma0Psad8U1RRyg6LjQuR/UfEXMGnwpioPGenS7aAc0e9HIRf\nIvdvG4fmnt5RXAxGkjG+ChDFiGQnXl6MxphbMamgjQKBgQDZW4peJ0Og6aS3ZPls\nH4rxW4sh20SKLsS9NNt894cPy1OyGMFv4fgCsXrJ8kgkz5Iv6869uxDLZFofGDfZ\nQ9fYD+Tnruy3mLpxaLsOQQMJaD0I/o+1eYrmkmgMxaEGjo3o1snFMqMuGPfgoHFa\nQNaSz4ohn95OKi6+2M1uN6U4fQKBgQC5JznNDJAWNwa8RZvfHmTz1CiZuJr5/VS9\ndXadnKQT8+VPW7Krd5PjquX07041mfB+yi/8KI90VU61SKmd58DUDSNV7eTx8VF1\nWdp+3tEC6OteJ0y+Phub6UuDUXTL3V67HaIm0q4KdGrhTIPfJq0tCDPOFgn8EPxw\nY12p6lDmJwKBgQCl5dWdeXCHz+zVwW8SVJzzDQELrVUJ9xpYo5BnOHJQ3ssZ4wU5\nhQqL27SxkIf5+KhGhT/91lrCMu0KUKzH2p1THwaCwyOQGjUrvFkRTxOnSXVUeR9s\nzsDyrYpXPTxjSckMj2vfZH/h/lKrkyoRTe24jkmK0n+Vv2KAbe+WEUi87QKBgQCQ\n1F4iRvFubxyVqN2EagINuKcJl52ibscabAecwiqWcPGuYcwg1CiardOzBH3o78Fv\nbDicxh1wokovA+ep3N65AI3jaXLszhcp9F81XpWf8RIrVBJzvaFbE+I9ljoGPeMb\n+tIcDDCXfPkdwvxkUZyk3QWo7xRgV+kfAJsDjoY5gQKBgHegisjNvYiB5zpEVaTv\nxPGsXBZ8th8fiBwrP4VsV6MSQis5whqRirJjtX55BoNOoDRFQTi3G6DYKUmmn1g5\nBRDKTsLt44BhmyovryDA6XzmUvE8AYlQtEXqhThKgjN0ZkE4WxErvv+/wetezFIe\nnun1iSVFYXHXwNo4O8tEziVz\n-----END PRIVATE KEY-----\n')),
         'client_email' => env('FIREBASE_CLIENT_EMAIL', 'firebase-adminsdk-rkazg@tuoicay-68633.iam.gserviceaccount.com'),
         'client_id' => env('FIREBASE_CLIENT_ID', '106286677332036639826'),
         'client_x509_cert_url' => env('FIREBASE_CLIENT_x509_CERT_URL', 'https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-rkazg%40tuoicay-68633.iam.gserviceaccount.com'),
     ],

];
