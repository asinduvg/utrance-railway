<?php

require_once "../controllers/BookingController.php";

$app->router->get('/utrance-railway/myBookings', [BookingController::class, 'getAllBookings']);
$app->router->post('/utrance-railway/myBookings', [BookingController::class, 'getAllBookings']);

$app->router->get('/utrance-railway/bookings', [BookingController::class, 'manageBookings']);
// $app->router->post('/utrance-railway/bookings', [BookingController::class, 'manageBookings']);
// $app->router->post('/utrance-railway/getSearchbookings', [BookingController::class, 'SearchManageBookings']);


$app->router->get('/utrance-railway/book-seats', [BookingController::class, 'createSeatBooking']);
$app->router->post('/utrance-railway/book-seats', [BookingController::class, 'createSeatBooking']);

$app->router->get('/utrance-railway/book-freights', [BookingController::class, 'bookFreight']);

$app->router->get('/utrance-railway/booked-tourIntersect', [BookingController::class, 'bookedTourIntersect']);
$app->router->get('/utrance-railway/booked-tourDirect', [BookingController::class, 'bookedTourDirect']);

$app->router->get('/utrance-railway/booking-train', [BookingController::class, 'bookingForTrain']);
$app->router->post('/utrance-railway/booking-train', [BookingController::class, 'bookingForTrain']);

$app->router->get('/utrance-railway/freight-search', [BookingController::class, 'searchFreightTrains']);
$app->router->get('/utrance-railway/freight-bookings', [BookingController::class, 'manageFreights']);
$app->router->get('/utrance-railway/freight-booking-train', [BookingController::class, 'freightBookingForTrain']);

// booking
$app->router->get('/utrance-railway/checkout', [BookingController::class, 'checkout']);
$app->router->post('/utrance-railway/checkout', [BookingController::class, 'checkout']);

$app->router->get('/utrance-railway/getBookings', [BookingController::class, 'bookingDetails']);
$app->router->post('/utrance-railway/getBookings', [BookingController::class, 'bookingDetails']);
$app->router->get('/utrance-railway/booking-success', [BookingController::class, 'bookingSuccess']);

?>