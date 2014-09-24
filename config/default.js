module.exports = (function () {

    'use strict';

    return {
        author: {
            email: 'manovotny@gmail.com',
            name: 'Michael Novotny',
            url: 'http://manovotny.com',
            username: 'manovotny'
        },
        files: {
            browserify: 'bundle'
        },
        paths: {
            curl: 'curl_downloads',
            source: 'src',
            translations: 'lang'
        },
        project: {
            composer: 'manovotny/wp-dom-util',
            description: 'A PHP DOM utility for WordPress.',
            git: 'git://github.com/manovotny/wp-dom-util.git',
            name: 'WP DOM Util',
            slug: 'wp-dom-util',
            type: 'plugin', // Should be `plugin` or `theme`.
            url: 'https://github.com/manovotny/wp-dom-util',
            version: '1.0.0'
        }
    };

}());
