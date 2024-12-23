<?php
return [
    /*
     * Whether data should be sent to Ray.
     */
    'enable' => true,

    /*
     * The host used to communicate with the Ray app.
     */
    'host' => '10.211.55.2', // Vagrant: Parallels
    // 'host' => '10.0.2.2', // Vagrant: Default
    // 'host' => 'host.lima.internal', // Lima
    // 'host' => 'localhost', // Ray default

    /*
     * The port number used to communicate with the Ray app.
     */
    'port' => 23517,

    /*
     * Absolute base path for your sites or projects in Homestead, Vagrant, Docker, or another remote development server.
     */
    'remote_path' => null,

    /*
     * Absolute base path for your sites or projects on your local computer where your IDE or code editor is running on.
     */
    'local_path' => null,

    /*
     * When this setting is enabled, the package will not try to format values sent to Ray.
     */
    'always_send_raw_values' => false,
];
