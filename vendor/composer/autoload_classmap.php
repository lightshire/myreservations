<?php

// autoload_classmap.php generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'AddHotelIdInReservations' => $baseDir . '/app/database/migrations/2013_05_24_235613_add_hotel_id_in_reservations.php',
    'AdminController' => $baseDir . '/app/controllers/AdminController.php',
    'ApiTypes' => $baseDir . '/app/libraries/ApiTypes.php',
    'BaseController' => $baseDir . '/app/controllers/BaseController.php',
    'Client' => $baseDir . '/app/models/Client.php',
    'ClientApi' => $baseDir . '/app/libraries/ClientApi.php',
    'CreateClientsTable' => $baseDir . '/app/database/migrations/2013_05_24_194202_create_clients_table.php',
    'CreateReservationsTable' => $baseDir . '/app/database/migrations/2013_05_24_164249_create_reservations_table.php',
    'CreateUserTable' => $baseDir . '/app/database/migrations/2013_05_19_183540_create_User_table.php',
    'DatabaseSeeder' => $baseDir . '/app/database/seeds/DatabaseSeeder.php',
    'DateConverter' => $baseDir . '/app/libraries/DateConverter.php',
    'FilterTestCase' => $vendorDir . '/jasonlewis/basset/tests/Cases/FilterTestCase.php',
    'HomeController' => $baseDir . '/app/controllers/HomeController.php',
    'IlluminateQueueClosure' => $vendorDir . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
    'IndexController' => $baseDir . '/app/controllers/IndexController.php',
    'LoginController' => $baseDir . '/app/controllers/LoginController.php',
    'Reservation' => $baseDir . '/app/models/Reservation.php',
    'ReservationApi' => $baseDir . '/app/libraries/ReservationApi.php',
    'ReservationApiController' => $baseDir . '/app/controllers/ReservationApiController.php',
    'ReservationsController' => $baseDir . '/app/controllers/ReservationsController.php',
    'RestAPI' => $baseDir . '/app/libraries/IRestApi.php',
    'SessionHandlerInterface' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
    'TestCase' => $baseDir . '/app/tests/TestCase.php',
    'User' => $baseDir . '/app/models/User.php',
    'UserTableSeeder' => $baseDir . '/app/database/seeds/UserTableSeeder.php',
);
