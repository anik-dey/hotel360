<?php

use App\Http\Controllers\Configuration\Room\RoomController;
use App\Http\Controllers\Configuration\Room\FloorController;
use App\Http\Controllers\Configuration\Room\RoomAmenitiesController;
use App\Http\Controllers\Configuration\Room\AssignAmenitiesController;
use App\Http\Controllers\Configuration\Room\BookingTypeController;
use App\Http\Controllers\Configuration\Room\BedController;
use App\Http\Controllers\Configuration\Room\BookingSourceController;
use App\Http\Controllers\Configuration\Room\ComplementaryController;
use App\Http\Controllers\Configuration\Room\PromocodeController;
use App\Models\Configuration\room\BookingSource;
use Illuminate\Support\Facades\Route;

Route::prefix('configuration/room-settings')->middleware(['auth'])->group(function () {

    //Foor Related Route
    Route::resource('floor-list', FloorController::class);
    Route::get('deleted-floor', [FloorController::class, 'deleted_item'])->name('deleted-floor');
    Route::get('restore-floor/{id}', [FloorController::class, 'restore_item'])->name('floor-restore');
    Route::delete('force-delete-floor/{id}', [FloorController::class, 'force_delete_item'])->name('floor-force-delete');

    //Room Related route
    Route::resource('room-list', RoomController::class);
    Route::get('deleted-room', [RoomController::class, 'deleted_item'])->name('deleted-room');
    Route::get('restore-room/{id}', [RoomController::class, 'restore_item'])->name('room-restore');
    Route::delete('force-delete-room/{id}', [RoomController::class, 'force_delete_item'])->name('room-force-delete');

    //Room Amenities Related Route
    Route::resource('room-amenities', RoomAmenitiesController::class);
    Route::get('deleted-amenities', [RoomAmenitiesController::class, 'deleted_item'])->name('deleted-amenities');
    Route::get('restore-amenities/{id}', [RoomAmenitiesController::class, 'restore_item'])->name('amenities-restore');
    Route::delete('force-delete-amenities/{id}', [RoomAmenitiesController::class, 'force_delete_item'])->name('amenities-force-delete');

    Route::post('api/fetch-floor', [RoomController::class, 'fetchFloor']);
    Route::post('api/fetch-room', [RoomController::class, 'fetchRoom']);
    Route::post('api/fetch-room-update', [RoomController::class, 'fetchRoomUpdate']);
    Route::resource('assign-amenities', AssignAmenitiesController::class);

    //Booking Type Related Route
    Route::resource('booking-type-list', BookingTypeController::class);
    Route::get('deleted-booking-type', [BookingTypeController::class, 'deleted_item'])->name('deleted-booking-type');
    Route::get('restore-booking-type/{id}', [BookingTypeController::class, 'restore_item'])->name('booking-type-restore');
    Route::delete('force-delete-booking-type/{id}', [BookingTypeController::class, 'force_delete_item'])->name('booking-type-force-delete');

    //Bed Related Route
    Route::resource('bed-list', BedController::class);
    Route::get('deleted-item', [BedController::class, 'deleted_item'])->name('deleted-bed');
    Route::get('restore/{id}', [BedController::class, 'restore_item'])->name('bed-restore');
    Route::delete('force-delete/{id}', [BedController::class, 'force_delete_item'])->name('bed-force-delete');

    //Complementary Realated Route
    Route::resource('complementary', ComplementaryController::class);
    Route::get('deleted-complementary', [ComplementaryController::class, 'deleted_item'])->name('deleted-complementary');
    Route::get('restore-complementary/{id}', [ComplementaryController::class, 'restore_item'])->name('complementary-restore');
    Route::delete('force-delete-complementary/{id}', [ComplementaryController::class, 'force_delete_item'])->name('complementary-force-delete');

    //Promocode Related Route
    Route::resource('promocode', PromocodeController::class);
    Route::get('deleted-promocode', [PromocodeController::class, 'deleted_item'])->name('deleted-promocode');
    Route::get('restore-promocode/{id}', [PromocodeController::class, 'restore_item'])->name('promocode-restore');
    Route::delete('force-delete-promocode/{id}', [PromocodeController::class, 'force_delete_item'])->name('promocode-force-delete');

    //Booking Source Related Route
    Route::resource('booking-source', BookingSourceController::class);
    Route::get('deleted-booking-source', [BookingSourceController::class, 'deleted_item'])->name('deleted-booking-source');
    Route::get('restore-booking-source/{id}', [BookingSourceController::class, 'restore_item'])->name('booking-source-restore');
    Route::delete('force-delete-booking-source/{id}', [BookingSourceController::class, 'force_delete_item'])->name('booking-source-force-delete');
});
