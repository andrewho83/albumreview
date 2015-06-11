<?php


return [

    /**
     * Album Review Plugin Name
     */

    'pluginName' => 'Album Review',

    /**
     * Table Prefix
     */

    'prefix' => 'ar_',
    /**
     * The Herbert version constraint.
     */
    'constraint' => '~0.9.7',

    /**
     * Auto-load all required files.
     */
    'requires' => [
        __DIR__ . '/app/customPostTypes.php'
    ],
    
    /**
     * The tables to manage.
     */
    'tables' => [
    ],


    /**
     * Activate
     */
    'activators' => [
        __DIR__ . '/app/activate.php'
    ],

    /**
     * Activate
     */
    'deactivators' => [
        __DIR__ . '/app/deactivate.php'
    ],

    /**
     * The shortcodes to auto-load.
     */
    'shortcodes' => [
        __DIR__ . '/app/shortcodes.php'
    ],

    /**
     * The widgets to auto-load.
     */
    'widgets' => [
        __DIR__ . '/app/widgets.php'
    ],

    /**
     * The widgets to auto-load.
     */
    'enqueue' => [
        __DIR__ . '/app/enqueue.php'
    ],

    /**
     * The routes to auto-load.
     */
    'routes' => [
        'AlbumReview' => __DIR__ . '/app/routes.php',
        'AlbumReviewInfo' => __DIR__ . '/app/routes.general.php'
    ],

    /**
     * The panels to auto-load.
     */

    'panels' => [
        'AlbumReview' => __DIR__ . '/app/panels.php',
        'AlbumReviewPanels' => __DIR__ . '/app/panels.general.php'
    ],

    /**
     * The APIs to auto-load.
     */
    'apis' => [
        'AlbumReview' => __DIR__ . '/app/api.php'
    ],

    /**
     * The view paths to register.
     *
     * E.G: 'MyPlugin' => __DIR__ . '/views'
     * can be referenced via @MyPlugin/
     * when rendering a view in twig.
     */
    'views' => [
        'AlbumReview' => __DIR__ . '/resources/views'
    ],

    /**
     * The view globals.
     */
    'viewGlobals' => [

    ],

    /**
     * The asset path.
     */
    'assets' => '/resources/assets/'

];
