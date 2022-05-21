<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
    .card {
        cursor: pointer;
    }

    .reserv-date p {
        font-size: 13px;
        margin-bottom: 0px;
    }

    .reserv-date h4 {
        margin-bottom: 0px;
    }

    .client h6 {
        margin-bottom: 0px;
    }

    .client h4 {
        margin-bottom: 0px;
    }

    .reserv-date small {
        font-size: 12px;
    }

    /* Modal CSS */

    .modal.left .modal-dialog {
        position: fixed;
        right: 0;
        margin: auto;
        width: 400px;
        height: 100%;
        -webkit-transform: translate3d(0%, 0, 0);
        -ms-transform: translate3d(0%, 0, 0);
        -o-transform: translate3d(0%, 0, 0);
        transform: translate3d(0%, 0, 0);
    }

    .modal.left .modal-content {
        height: 100%;
        overflow-y: auto;
    }

    .modal.right .modal-body {
        padding: 15px 15px 80px;
    }

    .modal.right.fade .modal-dialog {
        left: -320px;
        -webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
        -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
        -o-transition: opacity 0.3s linear, left 0.3s ease-out;
        transition: opacity 0.3s linear, left 0.3s ease-out;
    }

    .modal.right.fade.show .modal-dialog {
        right: 0;
    }

    /* ----- MODAL STYLE ----- */

    .modal-content {
        border-radius: 0;
        border: none;
    }

    .modal-header {
        border-bottom-color: #eeeeee;
        background-color: #fafafa;
    }
    </style>
</head>

<body>
    <header>
        <nav class="shadow navbar navbar-expand-lg navbar-light pt-4" style="border-bottom: 1px solid goldenrod;">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item" style="margin-left:25px">
                            <!-- nav switch -->
                            <form class="d-flex">
                                <div class="form-check form-switch p-2" style="margin-left:25px">
                                    <input style="width: 60px; height: 20px;" class="form-check-input " type="checkbox"
                                        role="switch" id="flexSwitchCheckDefault">
                                </div>
                            </form>
                        </li>
                        <li class="nav-item position-relative mx-3">
                            <a class="nav-link active" aria-current="page" href="/">Home
                            </a>
                        </li>
                        <li class="nav-item position-relative mx-3">
                            <a class="nav-link active" aria-current="page" href="#">Reservation
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                                    10+
                                    <span class="visually-hidden">unread messages</span>
                            </a>
                        </li>
                        <li class="nav-item position-relative mx-3">
                            <a class="nav-link active" aria-current="page" href="#">Arrivals
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                                    12+
                                    <span class="visually-hidden">unread messages</span>
                            </a>
                        </li>
                        <li class="nav-item position-relative mx-3">
                            <a class="nav-link active" aria-current="page" href="#">Departures
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                                    20+
                                    <span class="visually-hidden">unread messages</span>
                            </a>
                        </li>
                        <li class="nav-item position-relative mx-3">
                            <a class="nav-link active" aria-current="page" href="#">In House
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                                    05+
                                    <span class="visually-hidden">unread messages</span>
                            </a>
                        </li>
                    </ul>
                    <button class="btn btn-sm btn-outline-secondary me-1 mb-1" type="button"><span class="pe-1"><svg
                                width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path
                                    d="M319.9 320c57.41 0 103.1-46.56 103.1-104c0-57.44-46.54-104-103.1-104c-57.41 0-103.1 46.56-103.1 104C215.9 273.4 262.5 320 319.9 320zM369.9 352H270.1C191.6 352 128 411.7 128 485.3C128 500.1 140.7 512 156.4 512h327.2C499.3 512 512 500.1 512 485.3C512 411.7 448.4 352 369.9 352zM512 160c44.18 0 80-35.82 80-80S556.2 0 512 0c-44.18 0-80 35.82-80 80S467.8 160 512 160zM183.9 216c0-5.449 .9824-10.63 1.609-15.91C174.6 194.1 162.6 192 149.9 192H88.08C39.44 192 0 233.8 0 285.3C0 295.6 7.887 304 17.62 304h199.5C196.7 280.2 183.9 249.7 183.9 216zM128 160c44.18 0 80-35.82 80-80S172.2 0 128 0C83.82 0 48 35.82 48 80S83.82 160 128 160zM551.9 192h-61.84c-12.8 0-24.88 3.037-35.86 8.24C454.8 205.5 455.8 210.6 455.8 216c0 33.71-12.78 64.21-33.16 88h199.7C632.1 304 640 295.6 640 285.3C640 233.8 600.6 192 551.9 192z" />
                            </svg></span> Make Group</button>
                    <button class="btn btn-sm btn-outline-secondary me-1 mb-1" type="button"><span class="pe-1"><svg
                                width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M192 312C192 298.8 202.8 288 216 288H384V160H256c-17.67 0-32-14.33-32-32L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48v-128H216C202.8 336 192 325.3 192 312zM256 0v128h128L256 0zM568.1 295l-80-80c-9.375-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94L494.1 288H384v48h110.1l-39.03 39.03C450.3 379.7 448 385.8 448 392s2.344 12.28 7.031 16.97c9.375 9.375 24.56 9.375 33.94 0l80-80C578.3 319.6 578.3 304.4 568.1 295z" />
                            </svg></span> Export</button>
                    <form class="d-flex mb-1" style="width: 200px; height: 35px;">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-sm btn-outline-secondary" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid my-5" id="">
            <div class="row g-4">
                <div class="col-md-3 col-sm-6">
                    <div class="shadow rounded   ">
                        <!-- reservation Record -->
                        <div class="card">
                            <div class="card-header d-flex flex-row align-items-center"
                                style="border-left:4px solid goldenrod;">
                                <div class="pe-3">
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path
                                            d="M480 192H592C618.5 192 640 213.5 640 240V464C640 490.5 618.5 512 592 512H48C21.49 512 0 490.5 0 464V144C0 117.5 21.49 96 48 96H64V24C64 10.75 74.75 0 88 0C101.3 0 112 10.75 112 24V96H176V24C176 10.75 186.7 0 200 0C213.3 0 224 10.75 224 24V96H288V48C288 21.49 309.5 0 336 0H432C458.5 0 480 21.49 480 48V192zM576 368C576 359.2 568.8 352 560 352H528C519.2 352 512 359.2 512 368V400C512 408.8 519.2 416 528 416H560C568.8 416 576 408.8 576 400V368zM240 416C248.8 416 256 408.8 256 400V368C256 359.2 248.8 352 240 352H208C199.2 352 192 359.2 192 368V400C192 408.8 199.2 416 208 416H240zM128 368C128 359.2 120.8 352 112 352H80C71.16 352 64 359.2 64 368V400C64 408.8 71.16 416 80 416H112C120.8 416 128 408.8 128 400V368zM528 256C519.2 256 512 263.2 512 272V304C512 312.8 519.2 320 528 320H560C568.8 320 576 312.8 576 304V272C576 263.2 568.8 256 560 256H528zM256 176C256 167.2 248.8 160 240 160H208C199.2 160 192 167.2 192 176V208C192 216.8 199.2 224 208 224H240C248.8 224 256 216.8 256 208V176zM80 160C71.16 160 64 167.2 64 176V208C64 216.8 71.16 224 80 224H112C120.8 224 128 216.8 128 208V176C128 167.2 120.8 160 112 160H80zM256 272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272zM112 320C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304C64 312.8 71.16 320 80 320H112zM416 272C416 263.2 408.8 256 400 256H368C359.2 256 352 263.2 352 272V304C352 312.8 359.2 320 368 320H400C408.8 320 416 312.8 416 304V272zM368 64C359.2 64 352 71.16 352 80V112C352 120.8 359.2 128 368 128H400C408.8 128 416 120.8 416 112V80C416 71.16 408.8 64 400 64H368zM416 176C416 167.2 408.8 160 400 160H368C359.2 160 352 167.2 352 176V208C352 216.8 359.2 224 368 224H400C408.8 224 416 216.8 416 208V176z" />
                                    </svg>
                                </div>
                                <div class="client">
                                    <h6>Mr. Ranaidinho <span><svg width="10" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 640 512">
                                                <path
                                                    d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z" />
                                            </svg></span></h6>
                                    <small>NB4637S743 | 029856</small>
                                </div>
                            </div>
                            <div class="card-body" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="row row-cols-3 text-center">
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <h4><b>1</b></h4>
                                        <small>Night</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2   mt-3">
                                    <div class="col reserv-date">
                                        <p>Booking Date</p>
                                        <small>20-12-2021</small>
                                    </div>
                                    <div class="col d-flex flex-row justify-content-center">
                                        <svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M315.1 271l-70.56-112.1C232.8 139.3 212.5 128 190.3 128H129.7c-22.22 0-42.53 11.25-54.28 30.09L4.873 271c-9.375 14.98-4.812 34.72 10.16 44.09c15 9.375 34.75 4.812 44.09-10.19l28.88-46.18L87.1 480c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32l0-144h16V480c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32V258.8l28.88 46.2C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271zM160 96c26.5 0 48-21.5 48-48S186.5 0 160 0C133.5 0 112 21.5 112 48S133.5 96 160 96z" />
                                        </svg>
                                        <p class="me-3">2</p>
                                        <svg width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M160 96c26.5 0 48-21.5 48-48s-21.5-48-47.1-48c-26.5 0-48 21.5-48 48S133.5 96 160 96zM315.1 271l-61.19-97.95C236.3 144.9 205.8 128 172.5 128H147.5C114.2 128 83.75 144.9 66.06 173.1L4.873 271C-4.502 286 .0607 305.8 15.03 315.1c15.03 9.375 34.75 4.812 44.09-10.19l32.62-52.19L47.1 384h40v96c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32v-96h16v96c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32v-96h40l-43.76-131.3l32.63 52.22C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271z" />
                                        </svg>
                                        <p>0</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2  ">
                                    <div class="col reserv-date">
                                        <p>Room Type</p>
                                        <small>306 / Breackfast</small>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p><b>Confirm</b></p>
                                        <small>Reservation</small>
                                    </div>
                                </div>
                                <div class="row row-cols-2 mt-2 ">
                                    <div class="col reserv-date">
                                        <p>Total</p>
                                        <p>Paid</p>
                                        <p class="text-danger">Balance</p>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p>$ 185.00</p>
                                        <p>$ 00.00</p>
                                        <p class="text-danger">$ 00.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M448 192H64C28.65 192 0 220.7 0 256v96c0 17.67 14.33 32 32 32h32v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h32c17.67 0 32-14.33 32-32V256C512 220.7 483.3 192 448 192zM384 448H128v-96h256V448zM432 296c-13.25 0-24-10.75-24-24c0-13.27 10.75-24 24-24s24 10.73 24 24C456 285.3 445.3 296 432 296zM128 64h229.5L384 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C387.4 3.375 379.2 0 370.8 0H96C78.34 0 64 14.33 64 32v128h64V64z" />
                                </svg>
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M256 352c-16.53 0-33.06-5.422-47.16-16.41L0 173.2V400C0 426.5 21.49 448 48 448h416c26.51 0 48-21.49 48-48V173.2l-208.8 162.5C289.1 346.6 272.5 352 256 352zM16.29 145.3l212.2 165.1c16.19 12.6 38.87 12.6 55.06 0l212.2-165.1C505.1 137.3 512 125 512 112C512 85.49 490.5 64 464 64h-416C21.49 64 0 85.49 0 112C0 125 6.01 137.3 16.29 145.3z" />
                                </svg>
                                <svg class="pe-2" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path
                                        d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM96 392c-13.25 0-24-10.75-24-24S82.75 344 96 344s24 10.75 24 24S109.3 392 96 392zM96 296c-13.25 0-24-10.75-24-24S82.75 248 96 248S120 258.8 120 272S109.3 296 96 296zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM304 384h-128C167.2 384 160 376.8 160 368C160 359.2 167.2 352 176 352h128c8.801 0 16 7.199 16 16C320 376.8 312.8 384 304 384zM304 288h-128C167.2 288 160 280.8 160 272C160 263.2 167.2 256 176 256h128C312.8 256 320 263.2 320 272C320 280.8 312.8 288 304 288z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="shadow rounded   ">
                        <!-- reservation Record -->
                        <div class="card">
                            <div class="card-header d-flex flex-row align-items-center"
                                style="border-left:4px solid goldenrod;">
                                <div class="pe-3">
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path
                                            d="M480 192H592C618.5 192 640 213.5 640 240V464C640 490.5 618.5 512 592 512H48C21.49 512 0 490.5 0 464V144C0 117.5 21.49 96 48 96H64V24C64 10.75 74.75 0 88 0C101.3 0 112 10.75 112 24V96H176V24C176 10.75 186.7 0 200 0C213.3 0 224 10.75 224 24V96H288V48C288 21.49 309.5 0 336 0H432C458.5 0 480 21.49 480 48V192zM576 368C576 359.2 568.8 352 560 352H528C519.2 352 512 359.2 512 368V400C512 408.8 519.2 416 528 416H560C568.8 416 576 408.8 576 400V368zM240 416C248.8 416 256 408.8 256 400V368C256 359.2 248.8 352 240 352H208C199.2 352 192 359.2 192 368V400C192 408.8 199.2 416 208 416H240zM128 368C128 359.2 120.8 352 112 352H80C71.16 352 64 359.2 64 368V400C64 408.8 71.16 416 80 416H112C120.8 416 128 408.8 128 400V368zM528 256C519.2 256 512 263.2 512 272V304C512 312.8 519.2 320 528 320H560C568.8 320 576 312.8 576 304V272C576 263.2 568.8 256 560 256H528zM256 176C256 167.2 248.8 160 240 160H208C199.2 160 192 167.2 192 176V208C192 216.8 199.2 224 208 224H240C248.8 224 256 216.8 256 208V176zM80 160C71.16 160 64 167.2 64 176V208C64 216.8 71.16 224 80 224H112C120.8 224 128 216.8 128 208V176C128 167.2 120.8 160 112 160H80zM256 272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272zM112 320C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304C64 312.8 71.16 320 80 320H112zM416 272C416 263.2 408.8 256 400 256H368C359.2 256 352 263.2 352 272V304C352 312.8 359.2 320 368 320H400C408.8 320 416 312.8 416 304V272zM368 64C359.2 64 352 71.16 352 80V112C352 120.8 359.2 128 368 128H400C408.8 128 416 120.8 416 112V80C416 71.16 408.8 64 400 64H368zM416 176C416 167.2 408.8 160 400 160H368C359.2 160 352 167.2 352 176V208C352 216.8 359.2 224 368 224H400C408.8 224 416 216.8 416 208V176z" />
                                    </svg>
                                </div>
                                <div class="client">
                                    <h6>Mr. Ranaidinho <span><svg width="10" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 640 512">
                                                <path
                                                    d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z" />
                                            </svg></span></h6>
                                    <small>NB4637S743 | 029856</small>
                                </div>
                            </div>
                            <div class="card-body" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="row row-cols-3 text-center">
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <h4><b>1</b></h4>
                                        <small>Night</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2   mt-3">
                                    <div class="col reserv-date">
                                        <p>Booking Date</p>
                                        <small>20-12-2021</small>
                                    </div>
                                    <div class="col d-flex flex-row justify-content-center">
                                        <svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M315.1 271l-70.56-112.1C232.8 139.3 212.5 128 190.3 128H129.7c-22.22 0-42.53 11.25-54.28 30.09L4.873 271c-9.375 14.98-4.812 34.72 10.16 44.09c15 9.375 34.75 4.812 44.09-10.19l28.88-46.18L87.1 480c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32l0-144h16V480c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32V258.8l28.88 46.2C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271zM160 96c26.5 0 48-21.5 48-48S186.5 0 160 0C133.5 0 112 21.5 112 48S133.5 96 160 96z" />
                                        </svg>
                                        <p class="me-3">2</p>
                                        <svg width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M160 96c26.5 0 48-21.5 48-48s-21.5-48-47.1-48c-26.5 0-48 21.5-48 48S133.5 96 160 96zM315.1 271l-61.19-97.95C236.3 144.9 205.8 128 172.5 128H147.5C114.2 128 83.75 144.9 66.06 173.1L4.873 271C-4.502 286 .0607 305.8 15.03 315.1c15.03 9.375 34.75 4.812 44.09-10.19l32.62-52.19L47.1 384h40v96c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32v-96h16v96c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32v-96h40l-43.76-131.3l32.63 52.22C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271z" />
                                        </svg>
                                        <p>0</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2  ">
                                    <div class="col reserv-date">
                                        <p>Room Type</p>
                                        <small>306 / Breackfast</small>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p><b>Confirm</b></p>
                                        <small>Reservation</small>
                                    </div>
                                </div>
                                <div class="row row-cols-2 mt-2 ">
                                    <div class="col reserv-date">
                                        <p>Total</p>
                                        <p>Paid</p>
                                        <p class="text-danger">Balance</p>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p>$ 185.00</p>
                                        <p>$ 00.00</p>
                                        <p class="text-danger">$ 00.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M448 192H64C28.65 192 0 220.7 0 256v96c0 17.67 14.33 32 32 32h32v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h32c17.67 0 32-14.33 32-32V256C512 220.7 483.3 192 448 192zM384 448H128v-96h256V448zM432 296c-13.25 0-24-10.75-24-24c0-13.27 10.75-24 24-24s24 10.73 24 24C456 285.3 445.3 296 432 296zM128 64h229.5L384 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C387.4 3.375 379.2 0 370.8 0H96C78.34 0 64 14.33 64 32v128h64V64z" />
                                </svg>
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M256 352c-16.53 0-33.06-5.422-47.16-16.41L0 173.2V400C0 426.5 21.49 448 48 448h416c26.51 0 48-21.49 48-48V173.2l-208.8 162.5C289.1 346.6 272.5 352 256 352zM16.29 145.3l212.2 165.1c16.19 12.6 38.87 12.6 55.06 0l212.2-165.1C505.1 137.3 512 125 512 112C512 85.49 490.5 64 464 64h-416C21.49 64 0 85.49 0 112C0 125 6.01 137.3 16.29 145.3z" />
                                </svg>
                                <svg class="pe-2" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path
                                        d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM96 392c-13.25 0-24-10.75-24-24S82.75 344 96 344s24 10.75 24 24S109.3 392 96 392zM96 296c-13.25 0-24-10.75-24-24S82.75 248 96 248S120 258.8 120 272S109.3 296 96 296zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM304 384h-128C167.2 384 160 376.8 160 368C160 359.2 167.2 352 176 352h128c8.801 0 16 7.199 16 16C320 376.8 312.8 384 304 384zM304 288h-128C167.2 288 160 280.8 160 272C160 263.2 167.2 256 176 256h128C312.8 256 320 263.2 320 272C320 280.8 312.8 288 304 288z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="shadow rounded   ">
                        <!-- reservation Record -->
                        <div class="card">
                            <div class="card-header d-flex flex-row align-items-center"
                                style="border-left:4px solid goldenrod;">
                                <div class="pe-3">
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path
                                            d="M480 192H592C618.5 192 640 213.5 640 240V464C640 490.5 618.5 512 592 512H48C21.49 512 0 490.5 0 464V144C0 117.5 21.49 96 48 96H64V24C64 10.75 74.75 0 88 0C101.3 0 112 10.75 112 24V96H176V24C176 10.75 186.7 0 200 0C213.3 0 224 10.75 224 24V96H288V48C288 21.49 309.5 0 336 0H432C458.5 0 480 21.49 480 48V192zM576 368C576 359.2 568.8 352 560 352H528C519.2 352 512 359.2 512 368V400C512 408.8 519.2 416 528 416H560C568.8 416 576 408.8 576 400V368zM240 416C248.8 416 256 408.8 256 400V368C256 359.2 248.8 352 240 352H208C199.2 352 192 359.2 192 368V400C192 408.8 199.2 416 208 416H240zM128 368C128 359.2 120.8 352 112 352H80C71.16 352 64 359.2 64 368V400C64 408.8 71.16 416 80 416H112C120.8 416 128 408.8 128 400V368zM528 256C519.2 256 512 263.2 512 272V304C512 312.8 519.2 320 528 320H560C568.8 320 576 312.8 576 304V272C576 263.2 568.8 256 560 256H528zM256 176C256 167.2 248.8 160 240 160H208C199.2 160 192 167.2 192 176V208C192 216.8 199.2 224 208 224H240C248.8 224 256 216.8 256 208V176zM80 160C71.16 160 64 167.2 64 176V208C64 216.8 71.16 224 80 224H112C120.8 224 128 216.8 128 208V176C128 167.2 120.8 160 112 160H80zM256 272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272zM112 320C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304C64 312.8 71.16 320 80 320H112zM416 272C416 263.2 408.8 256 400 256H368C359.2 256 352 263.2 352 272V304C352 312.8 359.2 320 368 320H400C408.8 320 416 312.8 416 304V272zM368 64C359.2 64 352 71.16 352 80V112C352 120.8 359.2 128 368 128H400C408.8 128 416 120.8 416 112V80C416 71.16 408.8 64 400 64H368zM416 176C416 167.2 408.8 160 400 160H368C359.2 160 352 167.2 352 176V208C352 216.8 359.2 224 368 224H400C408.8 224 416 216.8 416 208V176z" />
                                    </svg>
                                </div>
                                <div class="client">
                                    <h6>Mr. Ranaidinho <span><svg width="10" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 640 512">
                                                <path
                                                    d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z" />
                                            </svg></span></h6>
                                    <small>NB4637S743 | 029856</small>
                                </div>
                            </div>
                            <div class="card-body" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="row row-cols-3 text-center">
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <h4><b>1</b></h4>
                                        <small>Night</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2   mt-3">
                                    <div class="col reserv-date">
                                        <p>Booking Date</p>
                                        <small>20-12-2021</small>
                                    </div>
                                    <div class="col d-flex flex-row justify-content-center">
                                        <svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M315.1 271l-70.56-112.1C232.8 139.3 212.5 128 190.3 128H129.7c-22.22 0-42.53 11.25-54.28 30.09L4.873 271c-9.375 14.98-4.812 34.72 10.16 44.09c15 9.375 34.75 4.812 44.09-10.19l28.88-46.18L87.1 480c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32l0-144h16V480c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32V258.8l28.88 46.2C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271zM160 96c26.5 0 48-21.5 48-48S186.5 0 160 0C133.5 0 112 21.5 112 48S133.5 96 160 96z" />
                                        </svg>
                                        <p class="me-3">2</p>
                                        <svg width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M160 96c26.5 0 48-21.5 48-48s-21.5-48-47.1-48c-26.5 0-48 21.5-48 48S133.5 96 160 96zM315.1 271l-61.19-97.95C236.3 144.9 205.8 128 172.5 128H147.5C114.2 128 83.75 144.9 66.06 173.1L4.873 271C-4.502 286 .0607 305.8 15.03 315.1c15.03 9.375 34.75 4.812 44.09-10.19l32.62-52.19L47.1 384h40v96c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32v-96h16v96c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32v-96h40l-43.76-131.3l32.63 52.22C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271z" />
                                        </svg>
                                        <p>0</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2  ">
                                    <div class="col reserv-date">
                                        <p>Room Type</p>
                                        <small>306 / Breackfast</small>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p><b>Confirm</b></p>
                                        <small>Reservation</small>
                                    </div>
                                </div>
                                <div class="row row-cols-2 mt-2 ">
                                    <div class="col reserv-date">
                                        <p>Total</p>
                                        <p>Paid</p>
                                        <p class="text-danger">Balance</p>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p>$ 185.00</p>
                                        <p>$ 00.00</p>
                                        <p class="text-danger">$ 00.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M448 192H64C28.65 192 0 220.7 0 256v96c0 17.67 14.33 32 32 32h32v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h32c17.67 0 32-14.33 32-32V256C512 220.7 483.3 192 448 192zM384 448H128v-96h256V448zM432 296c-13.25 0-24-10.75-24-24c0-13.27 10.75-24 24-24s24 10.73 24 24C456 285.3 445.3 296 432 296zM128 64h229.5L384 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C387.4 3.375 379.2 0 370.8 0H96C78.34 0 64 14.33 64 32v128h64V64z" />
                                </svg>
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M256 352c-16.53 0-33.06-5.422-47.16-16.41L0 173.2V400C0 426.5 21.49 448 48 448h416c26.51 0 48-21.49 48-48V173.2l-208.8 162.5C289.1 346.6 272.5 352 256 352zM16.29 145.3l212.2 165.1c16.19 12.6 38.87 12.6 55.06 0l212.2-165.1C505.1 137.3 512 125 512 112C512 85.49 490.5 64 464 64h-416C21.49 64 0 85.49 0 112C0 125 6.01 137.3 16.29 145.3z" />
                                </svg>
                                <svg class="pe-2" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path
                                        d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM96 392c-13.25 0-24-10.75-24-24S82.75 344 96 344s24 10.75 24 24S109.3 392 96 392zM96 296c-13.25 0-24-10.75-24-24S82.75 248 96 248S120 258.8 120 272S109.3 296 96 296zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM304 384h-128C167.2 384 160 376.8 160 368C160 359.2 167.2 352 176 352h128c8.801 0 16 7.199 16 16C320 376.8 312.8 384 304 384zM304 288h-128C167.2 288 160 280.8 160 272C160 263.2 167.2 256 176 256h128C312.8 256 320 263.2 320 272C320 280.8 312.8 288 304 288z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="shadow rounded   ">
                        <!-- reservation Record -->
                        <div class="card">
                            <div class="card-header d-flex flex-row align-items-center"
                                style="border-left:4px solid goldenrod;">
                                <div class="pe-3">
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path
                                            d="M480 192H592C618.5 192 640 213.5 640 240V464C640 490.5 618.5 512 592 512H48C21.49 512 0 490.5 0 464V144C0 117.5 21.49 96 48 96H64V24C64 10.75 74.75 0 88 0C101.3 0 112 10.75 112 24V96H176V24C176 10.75 186.7 0 200 0C213.3 0 224 10.75 224 24V96H288V48C288 21.49 309.5 0 336 0H432C458.5 0 480 21.49 480 48V192zM576 368C576 359.2 568.8 352 560 352H528C519.2 352 512 359.2 512 368V400C512 408.8 519.2 416 528 416H560C568.8 416 576 408.8 576 400V368zM240 416C248.8 416 256 408.8 256 400V368C256 359.2 248.8 352 240 352H208C199.2 352 192 359.2 192 368V400C192 408.8 199.2 416 208 416H240zM128 368C128 359.2 120.8 352 112 352H80C71.16 352 64 359.2 64 368V400C64 408.8 71.16 416 80 416H112C120.8 416 128 408.8 128 400V368zM528 256C519.2 256 512 263.2 512 272V304C512 312.8 519.2 320 528 320H560C568.8 320 576 312.8 576 304V272C576 263.2 568.8 256 560 256H528zM256 176C256 167.2 248.8 160 240 160H208C199.2 160 192 167.2 192 176V208C192 216.8 199.2 224 208 224H240C248.8 224 256 216.8 256 208V176zM80 160C71.16 160 64 167.2 64 176V208C64 216.8 71.16 224 80 224H112C120.8 224 128 216.8 128 208V176C128 167.2 120.8 160 112 160H80zM256 272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272zM112 320C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304C64 312.8 71.16 320 80 320H112zM416 272C416 263.2 408.8 256 400 256H368C359.2 256 352 263.2 352 272V304C352 312.8 359.2 320 368 320H400C408.8 320 416 312.8 416 304V272zM368 64C359.2 64 352 71.16 352 80V112C352 120.8 359.2 128 368 128H400C408.8 128 416 120.8 416 112V80C416 71.16 408.8 64 400 64H368zM416 176C416 167.2 408.8 160 400 160H368C359.2 160 352 167.2 352 176V208C352 216.8 359.2 224 368 224H400C408.8 224 416 216.8 416 208V176z" />
                                    </svg>
                                </div>
                                <div class="client">
                                    <h6>Mr. Ranaidinho <span><svg width="10" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 640 512">
                                                <path
                                                    d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z" />
                                            </svg></span></h6>
                                    <small>NB4637S743 | 029856</small>
                                </div>
                            </div>
                            <div class="card-body" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="row row-cols-3 text-center">
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <h4><b>1</b></h4>
                                        <small>Night</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2   mt-3">
                                    <div class="col reserv-date">
                                        <p>Booking Date</p>
                                        <small>20-12-2021</small>
                                    </div>
                                    <div class="col d-flex flex-row justify-content-center">
                                        <svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M315.1 271l-70.56-112.1C232.8 139.3 212.5 128 190.3 128H129.7c-22.22 0-42.53 11.25-54.28 30.09L4.873 271c-9.375 14.98-4.812 34.72 10.16 44.09c15 9.375 34.75 4.812 44.09-10.19l28.88-46.18L87.1 480c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32l0-144h16V480c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32V258.8l28.88 46.2C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271zM160 96c26.5 0 48-21.5 48-48S186.5 0 160 0C133.5 0 112 21.5 112 48S133.5 96 160 96z" />
                                        </svg>
                                        <p class="me-3">2</p>
                                        <svg width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M160 96c26.5 0 48-21.5 48-48s-21.5-48-47.1-48c-26.5 0-48 21.5-48 48S133.5 96 160 96zM315.1 271l-61.19-97.95C236.3 144.9 205.8 128 172.5 128H147.5C114.2 128 83.75 144.9 66.06 173.1L4.873 271C-4.502 286 .0607 305.8 15.03 315.1c15.03 9.375 34.75 4.812 44.09-10.19l32.62-52.19L47.1 384h40v96c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32v-96h16v96c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32v-96h40l-43.76-131.3l32.63 52.22C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271z" />
                                        </svg>
                                        <p>0</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2  ">
                                    <div class="col reserv-date">
                                        <p>Room Type</p>
                                        <small>306 / Breackfast</small>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p><b>Confirm</b></p>
                                        <small>Reservation</small>
                                    </div>
                                </div>
                                <div class="row row-cols-2 mt-2 ">
                                    <div class="col reserv-date">
                                        <p>Total</p>
                                        <p>Paid</p>
                                        <p class="text-danger">Balance</p>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p>$ 185.00</p>
                                        <p>$ 00.00</p>
                                        <p class="text-danger">$ 00.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M448 192H64C28.65 192 0 220.7 0 256v96c0 17.67 14.33 32 32 32h32v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h32c17.67 0 32-14.33 32-32V256C512 220.7 483.3 192 448 192zM384 448H128v-96h256V448zM432 296c-13.25 0-24-10.75-24-24c0-13.27 10.75-24 24-24s24 10.73 24 24C456 285.3 445.3 296 432 296zM128 64h229.5L384 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C387.4 3.375 379.2 0 370.8 0H96C78.34 0 64 14.33 64 32v128h64V64z" />
                                </svg>
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M256 352c-16.53 0-33.06-5.422-47.16-16.41L0 173.2V400C0 426.5 21.49 448 48 448h416c26.51 0 48-21.49 48-48V173.2l-208.8 162.5C289.1 346.6 272.5 352 256 352zM16.29 145.3l212.2 165.1c16.19 12.6 38.87 12.6 55.06 0l212.2-165.1C505.1 137.3 512 125 512 112C512 85.49 490.5 64 464 64h-416C21.49 64 0 85.49 0 112C0 125 6.01 137.3 16.29 145.3z" />
                                </svg>
                                <svg class="pe-2" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path
                                        d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM96 392c-13.25 0-24-10.75-24-24S82.75 344 96 344s24 10.75 24 24S109.3 392 96 392zM96 296c-13.25 0-24-10.75-24-24S82.75 248 96 248S120 258.8 120 272S109.3 296 96 296zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM304 384h-128C167.2 384 160 376.8 160 368C160 359.2 167.2 352 176 352h128c8.801 0 16 7.199 16 16C320 376.8 312.8 384 304 384zM304 288h-128C167.2 288 160 280.8 160 272C160 263.2 167.2 256 176 256h128C312.8 256 320 263.2 320 272C320 280.8 312.8 288 304 288z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="shadow rounded   ">
                        <!-- reservation Record -->
                        <div class="card">
                            <div class="card-header d-flex flex-row align-items-center"
                                style="border-left:4px solid goldenrod;">
                                <div class="pe-3">
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path
                                            d="M480 192H592C618.5 192 640 213.5 640 240V464C640 490.5 618.5 512 592 512H48C21.49 512 0 490.5 0 464V144C0 117.5 21.49 96 48 96H64V24C64 10.75 74.75 0 88 0C101.3 0 112 10.75 112 24V96H176V24C176 10.75 186.7 0 200 0C213.3 0 224 10.75 224 24V96H288V48C288 21.49 309.5 0 336 0H432C458.5 0 480 21.49 480 48V192zM576 368C576 359.2 568.8 352 560 352H528C519.2 352 512 359.2 512 368V400C512 408.8 519.2 416 528 416H560C568.8 416 576 408.8 576 400V368zM240 416C248.8 416 256 408.8 256 400V368C256 359.2 248.8 352 240 352H208C199.2 352 192 359.2 192 368V400C192 408.8 199.2 416 208 416H240zM128 368C128 359.2 120.8 352 112 352H80C71.16 352 64 359.2 64 368V400C64 408.8 71.16 416 80 416H112C120.8 416 128 408.8 128 400V368zM528 256C519.2 256 512 263.2 512 272V304C512 312.8 519.2 320 528 320H560C568.8 320 576 312.8 576 304V272C576 263.2 568.8 256 560 256H528zM256 176C256 167.2 248.8 160 240 160H208C199.2 160 192 167.2 192 176V208C192 216.8 199.2 224 208 224H240C248.8 224 256 216.8 256 208V176zM80 160C71.16 160 64 167.2 64 176V208C64 216.8 71.16 224 80 224H112C120.8 224 128 216.8 128 208V176C128 167.2 120.8 160 112 160H80zM256 272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272zM112 320C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304C64 312.8 71.16 320 80 320H112zM416 272C416 263.2 408.8 256 400 256H368C359.2 256 352 263.2 352 272V304C352 312.8 359.2 320 368 320H400C408.8 320 416 312.8 416 304V272zM368 64C359.2 64 352 71.16 352 80V112C352 120.8 359.2 128 368 128H400C408.8 128 416 120.8 416 112V80C416 71.16 408.8 64 400 64H368zM416 176C416 167.2 408.8 160 400 160H368C359.2 160 352 167.2 352 176V208C352 216.8 359.2 224 368 224H400C408.8 224 416 216.8 416 208V176z" />
                                    </svg>
                                </div>
                                <div class="client">
                                    <h6>Mr. Ranaidinho <span><svg width="10" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 640 512">
                                                <path
                                                    d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z" />
                                            </svg></span></h6>
                                    <small>NB4637S743 | 029856</small>
                                </div>
                            </div>
                            <div class="card-body" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="row row-cols-3 text-center">
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <h4><b>1</b></h4>
                                        <small>Night</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2   mt-3">
                                    <div class="col reserv-date">
                                        <p>Booking Date</p>
                                        <small>20-12-2021</small>
                                    </div>
                                    <div class="col d-flex flex-row justify-content-center">
                                        <svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M315.1 271l-70.56-112.1C232.8 139.3 212.5 128 190.3 128H129.7c-22.22 0-42.53 11.25-54.28 30.09L4.873 271c-9.375 14.98-4.812 34.72 10.16 44.09c15 9.375 34.75 4.812 44.09-10.19l28.88-46.18L87.1 480c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32l0-144h16V480c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32V258.8l28.88 46.2C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271zM160 96c26.5 0 48-21.5 48-48S186.5 0 160 0C133.5 0 112 21.5 112 48S133.5 96 160 96z" />
                                        </svg>
                                        <p class="me-3">2</p>
                                        <svg width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M160 96c26.5 0 48-21.5 48-48s-21.5-48-47.1-48c-26.5 0-48 21.5-48 48S133.5 96 160 96zM315.1 271l-61.19-97.95C236.3 144.9 205.8 128 172.5 128H147.5C114.2 128 83.75 144.9 66.06 173.1L4.873 271C-4.502 286 .0607 305.8 15.03 315.1c15.03 9.375 34.75 4.812 44.09-10.19l32.62-52.19L47.1 384h40v96c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32v-96h16v96c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32v-96h40l-43.76-131.3l32.63 52.22C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271z" />
                                        </svg>
                                        <p>0</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2  ">
                                    <div class="col reserv-date">
                                        <p>Room Type</p>
                                        <small>306 / Breackfast</small>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p><b>Confirm</b></p>
                                        <small>Reservation</small>
                                    </div>
                                </div>
                                <div class="row row-cols-2 mt-2 ">
                                    <div class="col reserv-date">
                                        <p>Total</p>
                                        <p>Paid</p>
                                        <p class="text-danger">Balance</p>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p>$ 185.00</p>
                                        <p>$ 00.00</p>
                                        <p class="text-danger">$ 00.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M448 192H64C28.65 192 0 220.7 0 256v96c0 17.67 14.33 32 32 32h32v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h32c17.67 0 32-14.33 32-32V256C512 220.7 483.3 192 448 192zM384 448H128v-96h256V448zM432 296c-13.25 0-24-10.75-24-24c0-13.27 10.75-24 24-24s24 10.73 24 24C456 285.3 445.3 296 432 296zM128 64h229.5L384 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C387.4 3.375 379.2 0 370.8 0H96C78.34 0 64 14.33 64 32v128h64V64z" />
                                </svg>
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M256 352c-16.53 0-33.06-5.422-47.16-16.41L0 173.2V400C0 426.5 21.49 448 48 448h416c26.51 0 48-21.49 48-48V173.2l-208.8 162.5C289.1 346.6 272.5 352 256 352zM16.29 145.3l212.2 165.1c16.19 12.6 38.87 12.6 55.06 0l212.2-165.1C505.1 137.3 512 125 512 112C512 85.49 490.5 64 464 64h-416C21.49 64 0 85.49 0 112C0 125 6.01 137.3 16.29 145.3z" />
                                </svg>
                                <svg class="pe-2" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path
                                        d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM96 392c-13.25 0-24-10.75-24-24S82.75 344 96 344s24 10.75 24 24S109.3 392 96 392zM96 296c-13.25 0-24-10.75-24-24S82.75 248 96 248S120 258.8 120 272S109.3 296 96 296zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM304 384h-128C167.2 384 160 376.8 160 368C160 359.2 167.2 352 176 352h128c8.801 0 16 7.199 16 16C320 376.8 312.8 384 304 384zM304 288h-128C167.2 288 160 280.8 160 272C160 263.2 167.2 256 176 256h128C312.8 256 320 263.2 320 272C320 280.8 312.8 288 304 288z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="shadow rounded   ">
                        <!-- reservation Record -->
                        <div class="card">
                            <div class="card-header d-flex flex-row align-items-center"
                                style="border-left:4px solid goldenrod;">
                                <div class="pe-3">
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path
                                            d="M480 192H592C618.5 192 640 213.5 640 240V464C640 490.5 618.5 512 592 512H48C21.49 512 0 490.5 0 464V144C0 117.5 21.49 96 48 96H64V24C64 10.75 74.75 0 88 0C101.3 0 112 10.75 112 24V96H176V24C176 10.75 186.7 0 200 0C213.3 0 224 10.75 224 24V96H288V48C288 21.49 309.5 0 336 0H432C458.5 0 480 21.49 480 48V192zM576 368C576 359.2 568.8 352 560 352H528C519.2 352 512 359.2 512 368V400C512 408.8 519.2 416 528 416H560C568.8 416 576 408.8 576 400V368zM240 416C248.8 416 256 408.8 256 400V368C256 359.2 248.8 352 240 352H208C199.2 352 192 359.2 192 368V400C192 408.8 199.2 416 208 416H240zM128 368C128 359.2 120.8 352 112 352H80C71.16 352 64 359.2 64 368V400C64 408.8 71.16 416 80 416H112C120.8 416 128 408.8 128 400V368zM528 256C519.2 256 512 263.2 512 272V304C512 312.8 519.2 320 528 320H560C568.8 320 576 312.8 576 304V272C576 263.2 568.8 256 560 256H528zM256 176C256 167.2 248.8 160 240 160H208C199.2 160 192 167.2 192 176V208C192 216.8 199.2 224 208 224H240C248.8 224 256 216.8 256 208V176zM80 160C71.16 160 64 167.2 64 176V208C64 216.8 71.16 224 80 224H112C120.8 224 128 216.8 128 208V176C128 167.2 120.8 160 112 160H80zM256 272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272zM112 320C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304C64 312.8 71.16 320 80 320H112zM416 272C416 263.2 408.8 256 400 256H368C359.2 256 352 263.2 352 272V304C352 312.8 359.2 320 368 320H400C408.8 320 416 312.8 416 304V272zM368 64C359.2 64 352 71.16 352 80V112C352 120.8 359.2 128 368 128H400C408.8 128 416 120.8 416 112V80C416 71.16 408.8 64 400 64H368zM416 176C416 167.2 408.8 160 400 160H368C359.2 160 352 167.2 352 176V208C352 216.8 359.2 224 368 224H400C408.8 224 416 216.8 416 208V176z" />
                                    </svg>
                                </div>
                                <div class="client">
                                    <h6>Mr. Ranaidinho <span><svg width="10" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 640 512">
                                                <path
                                                    d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z" />
                                            </svg></span></h6>
                                    <small>NB4637S743 | 029856</small>
                                </div>
                            </div>
                            <div class="card-body" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="row row-cols-3 text-center">
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <h4><b>1</b></h4>
                                        <small>Night</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2   mt-3">
                                    <div class="col reserv-date">
                                        <p>Booking Date</p>
                                        <small>20-12-2021</small>
                                    </div>
                                    <div class="col d-flex flex-row justify-content-center">
                                        <svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M315.1 271l-70.56-112.1C232.8 139.3 212.5 128 190.3 128H129.7c-22.22 0-42.53 11.25-54.28 30.09L4.873 271c-9.375 14.98-4.812 34.72 10.16 44.09c15 9.375 34.75 4.812 44.09-10.19l28.88-46.18L87.1 480c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32l0-144h16V480c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32V258.8l28.88 46.2C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271zM160 96c26.5 0 48-21.5 48-48S186.5 0 160 0C133.5 0 112 21.5 112 48S133.5 96 160 96z" />
                                        </svg>
                                        <p class="me-3">2</p>
                                        <svg width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M160 96c26.5 0 48-21.5 48-48s-21.5-48-47.1-48c-26.5 0-48 21.5-48 48S133.5 96 160 96zM315.1 271l-61.19-97.95C236.3 144.9 205.8 128 172.5 128H147.5C114.2 128 83.75 144.9 66.06 173.1L4.873 271C-4.502 286 .0607 305.8 15.03 315.1c15.03 9.375 34.75 4.812 44.09-10.19l32.62-52.19L47.1 384h40v96c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32v-96h16v96c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32v-96h40l-43.76-131.3l32.63 52.22C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271z" />
                                        </svg>
                                        <p>0</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2  ">
                                    <div class="col reserv-date">
                                        <p>Room Type</p>
                                        <small>306 / Breackfast</small>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p><b>Confirm</b></p>
                                        <small>Reservation</small>
                                    </div>
                                </div>
                                <div class="row row-cols-2 mt-2 ">
                                    <div class="col reserv-date">
                                        <p>Total</p>
                                        <p>Paid</p>
                                        <p class="text-danger">Balance</p>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p>$ 185.00</p>
                                        <p>$ 00.00</p>
                                        <p class="text-danger">$ 00.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M448 192H64C28.65 192 0 220.7 0 256v96c0 17.67 14.33 32 32 32h32v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h32c17.67 0 32-14.33 32-32V256C512 220.7 483.3 192 448 192zM384 448H128v-96h256V448zM432 296c-13.25 0-24-10.75-24-24c0-13.27 10.75-24 24-24s24 10.73 24 24C456 285.3 445.3 296 432 296zM128 64h229.5L384 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C387.4 3.375 379.2 0 370.8 0H96C78.34 0 64 14.33 64 32v128h64V64z" />
                                </svg>
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M256 352c-16.53 0-33.06-5.422-47.16-16.41L0 173.2V400C0 426.5 21.49 448 48 448h416c26.51 0 48-21.49 48-48V173.2l-208.8 162.5C289.1 346.6 272.5 352 256 352zM16.29 145.3l212.2 165.1c16.19 12.6 38.87 12.6 55.06 0l212.2-165.1C505.1 137.3 512 125 512 112C512 85.49 490.5 64 464 64h-416C21.49 64 0 85.49 0 112C0 125 6.01 137.3 16.29 145.3z" />
                                </svg>
                                <svg class="pe-2" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path
                                        d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM96 392c-13.25 0-24-10.75-24-24S82.75 344 96 344s24 10.75 24 24S109.3 392 96 392zM96 296c-13.25 0-24-10.75-24-24S82.75 248 96 248S120 258.8 120 272S109.3 296 96 296zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM304 384h-128C167.2 384 160 376.8 160 368C160 359.2 167.2 352 176 352h128c8.801 0 16 7.199 16 16C320 376.8 312.8 384 304 384zM304 288h-128C167.2 288 160 280.8 160 272C160 263.2 167.2 256 176 256h128C312.8 256 320 263.2 320 272C320 280.8 312.8 288 304 288z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="shadow rounded   ">
                        <!-- reservation Record -->
                        <div class="card">
                            <div class="card-header d-flex flex-row align-items-center"
                                style="border-left:4px solid goldenrod;">
                                <div class="pe-3">
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path
                                            d="M480 192H592C618.5 192 640 213.5 640 240V464C640 490.5 618.5 512 592 512H48C21.49 512 0 490.5 0 464V144C0 117.5 21.49 96 48 96H64V24C64 10.75 74.75 0 88 0C101.3 0 112 10.75 112 24V96H176V24C176 10.75 186.7 0 200 0C213.3 0 224 10.75 224 24V96H288V48C288 21.49 309.5 0 336 0H432C458.5 0 480 21.49 480 48V192zM576 368C576 359.2 568.8 352 560 352H528C519.2 352 512 359.2 512 368V400C512 408.8 519.2 416 528 416H560C568.8 416 576 408.8 576 400V368zM240 416C248.8 416 256 408.8 256 400V368C256 359.2 248.8 352 240 352H208C199.2 352 192 359.2 192 368V400C192 408.8 199.2 416 208 416H240zM128 368C128 359.2 120.8 352 112 352H80C71.16 352 64 359.2 64 368V400C64 408.8 71.16 416 80 416H112C120.8 416 128 408.8 128 400V368zM528 256C519.2 256 512 263.2 512 272V304C512 312.8 519.2 320 528 320H560C568.8 320 576 312.8 576 304V272C576 263.2 568.8 256 560 256H528zM256 176C256 167.2 248.8 160 240 160H208C199.2 160 192 167.2 192 176V208C192 216.8 199.2 224 208 224H240C248.8 224 256 216.8 256 208V176zM80 160C71.16 160 64 167.2 64 176V208C64 216.8 71.16 224 80 224H112C120.8 224 128 216.8 128 208V176C128 167.2 120.8 160 112 160H80zM256 272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272zM112 320C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304C64 312.8 71.16 320 80 320H112zM416 272C416 263.2 408.8 256 400 256H368C359.2 256 352 263.2 352 272V304C352 312.8 359.2 320 368 320H400C408.8 320 416 312.8 416 304V272zM368 64C359.2 64 352 71.16 352 80V112C352 120.8 359.2 128 368 128H400C408.8 128 416 120.8 416 112V80C416 71.16 408.8 64 400 64H368zM416 176C416 167.2 408.8 160 400 160H368C359.2 160 352 167.2 352 176V208C352 216.8 359.2 224 368 224H400C408.8 224 416 216.8 416 208V176z" />
                                    </svg>
                                </div>
                                <div class="client">
                                    <h6>Mr. Ranaidinho <span><svg width="10" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 640 512">
                                                <path
                                                    d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z" />
                                            </svg></span></h6>
                                    <small>NB4637S743 | 029856</small>
                                </div>
                            </div>
                            <div class="card-body" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="row row-cols-3 text-center">
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <h4><b>1</b></h4>
                                        <small>Night</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2   mt-3">
                                    <div class="col reserv-date">
                                        <p>Booking Date</p>
                                        <small>20-12-2021</small>
                                    </div>
                                    <div class="col d-flex flex-row justify-content-center">
                                        <svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M315.1 271l-70.56-112.1C232.8 139.3 212.5 128 190.3 128H129.7c-22.22 0-42.53 11.25-54.28 30.09L4.873 271c-9.375 14.98-4.812 34.72 10.16 44.09c15 9.375 34.75 4.812 44.09-10.19l28.88-46.18L87.1 480c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32l0-144h16V480c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32V258.8l28.88 46.2C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271zM160 96c26.5 0 48-21.5 48-48S186.5 0 160 0C133.5 0 112 21.5 112 48S133.5 96 160 96z" />
                                        </svg>
                                        <p class="me-3">2</p>
                                        <svg width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M160 96c26.5 0 48-21.5 48-48s-21.5-48-47.1-48c-26.5 0-48 21.5-48 48S133.5 96 160 96zM315.1 271l-61.19-97.95C236.3 144.9 205.8 128 172.5 128H147.5C114.2 128 83.75 144.9 66.06 173.1L4.873 271C-4.502 286 .0607 305.8 15.03 315.1c15.03 9.375 34.75 4.812 44.09-10.19l32.62-52.19L47.1 384h40v96c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32v-96h16v96c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32v-96h40l-43.76-131.3l32.63 52.22C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271z" />
                                        </svg>
                                        <p>0</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2  ">
                                    <div class="col reserv-date">
                                        <p>Room Type</p>
                                        <small>306 / Breackfast</small>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p><b>Confirm</b></p>
                                        <small>Reservation</small>
                                    </div>
                                </div>
                                <div class="row row-cols-2 mt-2 ">
                                    <div class="col reserv-date">
                                        <p>Total</p>
                                        <p>Paid</p>
                                        <p class="text-danger">Balance</p>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p>$ 185.00</p>
                                        <p>$ 00.00</p>
                                        <p class="text-danger">$ 00.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M448 192H64C28.65 192 0 220.7 0 256v96c0 17.67 14.33 32 32 32h32v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h32c17.67 0 32-14.33 32-32V256C512 220.7 483.3 192 448 192zM384 448H128v-96h256V448zM432 296c-13.25 0-24-10.75-24-24c0-13.27 10.75-24 24-24s24 10.73 24 24C456 285.3 445.3 296 432 296zM128 64h229.5L384 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C387.4 3.375 379.2 0 370.8 0H96C78.34 0 64 14.33 64 32v128h64V64z" />
                                </svg>
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M256 352c-16.53 0-33.06-5.422-47.16-16.41L0 173.2V400C0 426.5 21.49 448 48 448h416c26.51 0 48-21.49 48-48V173.2l-208.8 162.5C289.1 346.6 272.5 352 256 352zM16.29 145.3l212.2 165.1c16.19 12.6 38.87 12.6 55.06 0l212.2-165.1C505.1 137.3 512 125 512 112C512 85.49 490.5 64 464 64h-416C21.49 64 0 85.49 0 112C0 125 6.01 137.3 16.29 145.3z" />
                                </svg>
                                <svg class="pe-2" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path
                                        d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM96 392c-13.25 0-24-10.75-24-24S82.75 344 96 344s24 10.75 24 24S109.3 392 96 392zM96 296c-13.25 0-24-10.75-24-24S82.75 248 96 248S120 258.8 120 272S109.3 296 96 296zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM304 384h-128C167.2 384 160 376.8 160 368C160 359.2 167.2 352 176 352h128c8.801 0 16 7.199 16 16C320 376.8 312.8 384 304 384zM304 288h-128C167.2 288 160 280.8 160 272C160 263.2 167.2 256 176 256h128C312.8 256 320 263.2 320 272C320 280.8 312.8 288 304 288z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="shadow rounded   ">
                        <!-- reservation Record -->
                        <div class="card">
                            <div class="card-header d-flex flex-row align-items-center"
                                style="border-left:4px solid goldenrod;">
                                <div class="pe-3">
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path
                                            d="M480 192H592C618.5 192 640 213.5 640 240V464C640 490.5 618.5 512 592 512H48C21.49 512 0 490.5 0 464V144C0 117.5 21.49 96 48 96H64V24C64 10.75 74.75 0 88 0C101.3 0 112 10.75 112 24V96H176V24C176 10.75 186.7 0 200 0C213.3 0 224 10.75 224 24V96H288V48C288 21.49 309.5 0 336 0H432C458.5 0 480 21.49 480 48V192zM576 368C576 359.2 568.8 352 560 352H528C519.2 352 512 359.2 512 368V400C512 408.8 519.2 416 528 416H560C568.8 416 576 408.8 576 400V368zM240 416C248.8 416 256 408.8 256 400V368C256 359.2 248.8 352 240 352H208C199.2 352 192 359.2 192 368V400C192 408.8 199.2 416 208 416H240zM128 368C128 359.2 120.8 352 112 352H80C71.16 352 64 359.2 64 368V400C64 408.8 71.16 416 80 416H112C120.8 416 128 408.8 128 400V368zM528 256C519.2 256 512 263.2 512 272V304C512 312.8 519.2 320 528 320H560C568.8 320 576 312.8 576 304V272C576 263.2 568.8 256 560 256H528zM256 176C256 167.2 248.8 160 240 160H208C199.2 160 192 167.2 192 176V208C192 216.8 199.2 224 208 224H240C248.8 224 256 216.8 256 208V176zM80 160C71.16 160 64 167.2 64 176V208C64 216.8 71.16 224 80 224H112C120.8 224 128 216.8 128 208V176C128 167.2 120.8 160 112 160H80zM256 272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272zM112 320C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304C64 312.8 71.16 320 80 320H112zM416 272C416 263.2 408.8 256 400 256H368C359.2 256 352 263.2 352 272V304C352 312.8 359.2 320 368 320H400C408.8 320 416 312.8 416 304V272zM368 64C359.2 64 352 71.16 352 80V112C352 120.8 359.2 128 368 128H400C408.8 128 416 120.8 416 112V80C416 71.16 408.8 64 400 64H368zM416 176C416 167.2 408.8 160 400 160H368C359.2 160 352 167.2 352 176V208C352 216.8 359.2 224 368 224H400C408.8 224 416 216.8 416 208V176z" />
                                    </svg>
                                </div>
                                <div class="client">
                                    <h6>Mr. Ranaidinho <span><svg width="10" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 640 512">
                                                <path
                                                    d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z" />
                                            </svg></span></h6>
                                    <small>NB4637S743 | 029856</small>
                                </div>
                            </div>
                            <div class="card-body" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="row row-cols-3 text-center">
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <h4><b>1</b></h4>
                                        <small>Night</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2   mt-3">
                                    <div class="col reserv-date">
                                        <p>Booking Date</p>
                                        <small>20-12-2021</small>
                                    </div>
                                    <div class="col d-flex flex-row justify-content-center">
                                        <svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M315.1 271l-70.56-112.1C232.8 139.3 212.5 128 190.3 128H129.7c-22.22 0-42.53 11.25-54.28 30.09L4.873 271c-9.375 14.98-4.812 34.72 10.16 44.09c15 9.375 34.75 4.812 44.09-10.19l28.88-46.18L87.1 480c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32l0-144h16V480c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32V258.8l28.88 46.2C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271zM160 96c26.5 0 48-21.5 48-48S186.5 0 160 0C133.5 0 112 21.5 112 48S133.5 96 160 96z" />
                                        </svg>
                                        <p class="me-3">2</p>
                                        <svg width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M160 96c26.5 0 48-21.5 48-48s-21.5-48-47.1-48c-26.5 0-48 21.5-48 48S133.5 96 160 96zM315.1 271l-61.19-97.95C236.3 144.9 205.8 128 172.5 128H147.5C114.2 128 83.75 144.9 66.06 173.1L4.873 271C-4.502 286 .0607 305.8 15.03 315.1c15.03 9.375 34.75 4.812 44.09-10.19l32.62-52.19L47.1 384h40v96c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32v-96h16v96c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32v-96h40l-43.76-131.3l32.63 52.22C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271z" />
                                        </svg>
                                        <p>0</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2  ">
                                    <div class="col reserv-date">
                                        <p>Room Type</p>
                                        <small>306 / Breackfast</small>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p><b>Confirm</b></p>
                                        <small>Reservation</small>
                                    </div>
                                </div>
                                <div class="row row-cols-2 mt-2 ">
                                    <div class="col reserv-date">
                                        <p>Total</p>
                                        <p>Paid</p>
                                        <p class="text-danger">Balance</p>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p>$ 185.00</p>
                                        <p>$ 00.00</p>
                                        <p class="text-danger">$ 00.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M448 192H64C28.65 192 0 220.7 0 256v96c0 17.67 14.33 32 32 32h32v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h32c17.67 0 32-14.33 32-32V256C512 220.7 483.3 192 448 192zM384 448H128v-96h256V448zM432 296c-13.25 0-24-10.75-24-24c0-13.27 10.75-24 24-24s24 10.73 24 24C456 285.3 445.3 296 432 296zM128 64h229.5L384 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C387.4 3.375 379.2 0 370.8 0H96C78.34 0 64 14.33 64 32v128h64V64z" />
                                </svg>
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M256 352c-16.53 0-33.06-5.422-47.16-16.41L0 173.2V400C0 426.5 21.49 448 48 448h416c26.51 0 48-21.49 48-48V173.2l-208.8 162.5C289.1 346.6 272.5 352 256 352zM16.29 145.3l212.2 165.1c16.19 12.6 38.87 12.6 55.06 0l212.2-165.1C505.1 137.3 512 125 512 112C512 85.49 490.5 64 464 64h-416C21.49 64 0 85.49 0 112C0 125 6.01 137.3 16.29 145.3z" />
                                </svg>
                                <svg class="pe-2" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path
                                        d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM96 392c-13.25 0-24-10.75-24-24S82.75 344 96 344s24 10.75 24 24S109.3 392 96 392zM96 296c-13.25 0-24-10.75-24-24S82.75 248 96 248S120 258.8 120 272S109.3 296 96 296zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM304 384h-128C167.2 384 160 376.8 160 368C160 359.2 167.2 352 176 352h128c8.801 0 16 7.199 16 16C320 376.8 312.8 384 304 384zM304 288h-128C167.2 288 160 280.8 160 272C160 263.2 167.2 256 176 256h128C312.8 256 320 263.2 320 272C320 280.8 312.8 288 304 288z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="shadow rounded   ">
                        <!-- reservation Record -->
                        <div class="card">
                            <div class="card-header d-flex flex-row align-items-center"
                                style="border-left:4px solid goldenrod;">
                                <div class="pe-3">
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path
                                            d="M480 192H592C618.5 192 640 213.5 640 240V464C640 490.5 618.5 512 592 512H48C21.49 512 0 490.5 0 464V144C0 117.5 21.49 96 48 96H64V24C64 10.75 74.75 0 88 0C101.3 0 112 10.75 112 24V96H176V24C176 10.75 186.7 0 200 0C213.3 0 224 10.75 224 24V96H288V48C288 21.49 309.5 0 336 0H432C458.5 0 480 21.49 480 48V192zM576 368C576 359.2 568.8 352 560 352H528C519.2 352 512 359.2 512 368V400C512 408.8 519.2 416 528 416H560C568.8 416 576 408.8 576 400V368zM240 416C248.8 416 256 408.8 256 400V368C256 359.2 248.8 352 240 352H208C199.2 352 192 359.2 192 368V400C192 408.8 199.2 416 208 416H240zM128 368C128 359.2 120.8 352 112 352H80C71.16 352 64 359.2 64 368V400C64 408.8 71.16 416 80 416H112C120.8 416 128 408.8 128 400V368zM528 256C519.2 256 512 263.2 512 272V304C512 312.8 519.2 320 528 320H560C568.8 320 576 312.8 576 304V272C576 263.2 568.8 256 560 256H528zM256 176C256 167.2 248.8 160 240 160H208C199.2 160 192 167.2 192 176V208C192 216.8 199.2 224 208 224H240C248.8 224 256 216.8 256 208V176zM80 160C71.16 160 64 167.2 64 176V208C64 216.8 71.16 224 80 224H112C120.8 224 128 216.8 128 208V176C128 167.2 120.8 160 112 160H80zM256 272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272zM112 320C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304C64 312.8 71.16 320 80 320H112zM416 272C416 263.2 408.8 256 400 256H368C359.2 256 352 263.2 352 272V304C352 312.8 359.2 320 368 320H400C408.8 320 416 312.8 416 304V272zM368 64C359.2 64 352 71.16 352 80V112C352 120.8 359.2 128 368 128H400C408.8 128 416 120.8 416 112V80C416 71.16 408.8 64 400 64H368zM416 176C416 167.2 408.8 160 400 160H368C359.2 160 352 167.2 352 176V208C352 216.8 359.2 224 368 224H400C408.8 224 416 216.8 416 208V176z" />
                                    </svg>
                                </div>
                                <div class="client">
                                    <h6>Mr. Ranaidinho <span><svg width="10" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 640 512">
                                                <path
                                                    d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z" />
                                            </svg></span></h6>
                                    <small>NB4637S743 | 029856</small>
                                </div>
                            </div>
                            <div class="card-body" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="row row-cols-3 text-center">
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <h4><b>1</b></h4>
                                        <small>Night</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2   mt-3">
                                    <div class="col reserv-date">
                                        <p>Booking Date</p>
                                        <small>20-12-2021</small>
                                    </div>
                                    <div class="col d-flex flex-row justify-content-center">
                                        <svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M315.1 271l-70.56-112.1C232.8 139.3 212.5 128 190.3 128H129.7c-22.22 0-42.53 11.25-54.28 30.09L4.873 271c-9.375 14.98-4.812 34.72 10.16 44.09c15 9.375 34.75 4.812 44.09-10.19l28.88-46.18L87.1 480c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32l0-144h16V480c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32V258.8l28.88 46.2C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271zM160 96c26.5 0 48-21.5 48-48S186.5 0 160 0C133.5 0 112 21.5 112 48S133.5 96 160 96z" />
                                        </svg>
                                        <p class="me-3">2</p>
                                        <svg width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M160 96c26.5 0 48-21.5 48-48s-21.5-48-47.1-48c-26.5 0-48 21.5-48 48S133.5 96 160 96zM315.1 271l-61.19-97.95C236.3 144.9 205.8 128 172.5 128H147.5C114.2 128 83.75 144.9 66.06 173.1L4.873 271C-4.502 286 .0607 305.8 15.03 315.1c15.03 9.375 34.75 4.812 44.09-10.19l32.62-52.19L47.1 384h40v96c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32v-96h16v96c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32v-96h40l-43.76-131.3l32.63 52.22C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271z" />
                                        </svg>
                                        <p>0</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2  ">
                                    <div class="col reserv-date">
                                        <p>Room Type</p>
                                        <small>306 / Breackfast</small>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p><b>Confirm</b></p>
                                        <small>Reservation</small>
                                    </div>
                                </div>
                                <div class="row row-cols-2 mt-2 ">
                                    <div class="col reserv-date">
                                        <p>Total</p>
                                        <p>Paid</p>
                                        <p class="text-danger">Balance</p>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p>$ 185.00</p>
                                        <p>$ 00.00</p>
                                        <p class="text-danger">$ 00.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M448 192H64C28.65 192 0 220.7 0 256v96c0 17.67 14.33 32 32 32h32v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h32c17.67 0 32-14.33 32-32V256C512 220.7 483.3 192 448 192zM384 448H128v-96h256V448zM432 296c-13.25 0-24-10.75-24-24c0-13.27 10.75-24 24-24s24 10.73 24 24C456 285.3 445.3 296 432 296zM128 64h229.5L384 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C387.4 3.375 379.2 0 370.8 0H96C78.34 0 64 14.33 64 32v128h64V64z" />
                                </svg>
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M256 352c-16.53 0-33.06-5.422-47.16-16.41L0 173.2V400C0 426.5 21.49 448 48 448h416c26.51 0 48-21.49 48-48V173.2l-208.8 162.5C289.1 346.6 272.5 352 256 352zM16.29 145.3l212.2 165.1c16.19 12.6 38.87 12.6 55.06 0l212.2-165.1C505.1 137.3 512 125 512 112C512 85.49 490.5 64 464 64h-416C21.49 64 0 85.49 0 112C0 125 6.01 137.3 16.29 145.3z" />
                                </svg>
                                <svg class="pe-2" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path
                                        d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM96 392c-13.25 0-24-10.75-24-24S82.75 344 96 344s24 10.75 24 24S109.3 392 96 392zM96 296c-13.25 0-24-10.75-24-24S82.75 248 96 248S120 258.8 120 272S109.3 296 96 296zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM304 384h-128C167.2 384 160 376.8 160 368C160 359.2 167.2 352 176 352h128c8.801 0 16 7.199 16 16C320 376.8 312.8 384 304 384zM304 288h-128C167.2 288 160 280.8 160 272C160 263.2 167.2 256 176 256h128C312.8 256 320 263.2 320 272C320 280.8 312.8 288 304 288z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="shadow rounded   ">
                        <!-- reservation Record -->
                        <div class="card">
                            <div class="card-header d-flex flex-row align-items-center"
                                style="border-left:4px solid goldenrod;">
                                <div class="pe-3">
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path
                                            d="M480 192H592C618.5 192 640 213.5 640 240V464C640 490.5 618.5 512 592 512H48C21.49 512 0 490.5 0 464V144C0 117.5 21.49 96 48 96H64V24C64 10.75 74.75 0 88 0C101.3 0 112 10.75 112 24V96H176V24C176 10.75 186.7 0 200 0C213.3 0 224 10.75 224 24V96H288V48C288 21.49 309.5 0 336 0H432C458.5 0 480 21.49 480 48V192zM576 368C576 359.2 568.8 352 560 352H528C519.2 352 512 359.2 512 368V400C512 408.8 519.2 416 528 416H560C568.8 416 576 408.8 576 400V368zM240 416C248.8 416 256 408.8 256 400V368C256 359.2 248.8 352 240 352H208C199.2 352 192 359.2 192 368V400C192 408.8 199.2 416 208 416H240zM128 368C128 359.2 120.8 352 112 352H80C71.16 352 64 359.2 64 368V400C64 408.8 71.16 416 80 416H112C120.8 416 128 408.8 128 400V368zM528 256C519.2 256 512 263.2 512 272V304C512 312.8 519.2 320 528 320H560C568.8 320 576 312.8 576 304V272C576 263.2 568.8 256 560 256H528zM256 176C256 167.2 248.8 160 240 160H208C199.2 160 192 167.2 192 176V208C192 216.8 199.2 224 208 224H240C248.8 224 256 216.8 256 208V176zM80 160C71.16 160 64 167.2 64 176V208C64 216.8 71.16 224 80 224H112C120.8 224 128 216.8 128 208V176C128 167.2 120.8 160 112 160H80zM256 272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272zM112 320C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304C64 312.8 71.16 320 80 320H112zM416 272C416 263.2 408.8 256 400 256H368C359.2 256 352 263.2 352 272V304C352 312.8 359.2 320 368 320H400C408.8 320 416 312.8 416 304V272zM368 64C359.2 64 352 71.16 352 80V112C352 120.8 359.2 128 368 128H400C408.8 128 416 120.8 416 112V80C416 71.16 408.8 64 400 64H368zM416 176C416 167.2 408.8 160 400 160H368C359.2 160 352 167.2 352 176V208C352 216.8 359.2 224 368 224H400C408.8 224 416 216.8 416 208V176z" />
                                    </svg>
                                </div>
                                <div class="client">
                                    <h6>Mr. Ranaidinho <span><svg width="10" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 640 512">
                                                <path
                                                    d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z" />
                                            </svg></span></h6>
                                    <small>NB4637S743 | 029856</small>
                                </div>
                            </div>
                            <div class="card-body" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="row row-cols-3 text-center">
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <h4><b>1</b></h4>
                                        <small>Night</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2   mt-3">
                                    <div class="col reserv-date">
                                        <p>Booking Date</p>
                                        <small>20-12-2021</small>
                                    </div>
                                    <div class="col d-flex flex-row justify-content-center">
                                        <svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M315.1 271l-70.56-112.1C232.8 139.3 212.5 128 190.3 128H129.7c-22.22 0-42.53 11.25-54.28 30.09L4.873 271c-9.375 14.98-4.812 34.72 10.16 44.09c15 9.375 34.75 4.812 44.09-10.19l28.88-46.18L87.1 480c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32l0-144h16V480c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32V258.8l28.88 46.2C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271zM160 96c26.5 0 48-21.5 48-48S186.5 0 160 0C133.5 0 112 21.5 112 48S133.5 96 160 96z" />
                                        </svg>
                                        <p class="me-3">2</p>
                                        <svg width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M160 96c26.5 0 48-21.5 48-48s-21.5-48-47.1-48c-26.5 0-48 21.5-48 48S133.5 96 160 96zM315.1 271l-61.19-97.95C236.3 144.9 205.8 128 172.5 128H147.5C114.2 128 83.75 144.9 66.06 173.1L4.873 271C-4.502 286 .0607 305.8 15.03 315.1c15.03 9.375 34.75 4.812 44.09-10.19l32.62-52.19L47.1 384h40v96c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32v-96h16v96c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32v-96h40l-43.76-131.3l32.63 52.22C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271z" />
                                        </svg>
                                        <p>0</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2  ">
                                    <div class="col reserv-date">
                                        <p>Room Type</p>
                                        <small>306 / Breackfast</small>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p><b>Confirm</b></p>
                                        <small>Reservation</small>
                                    </div>
                                </div>
                                <div class="row row-cols-2 mt-2 ">
                                    <div class="col reserv-date">
                                        <p>Total</p>
                                        <p>Paid</p>
                                        <p class="text-danger">Balance</p>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p>$ 185.00</p>
                                        <p>$ 00.00</p>
                                        <p class="text-danger">$ 00.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M448 192H64C28.65 192 0 220.7 0 256v96c0 17.67 14.33 32 32 32h32v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h32c17.67 0 32-14.33 32-32V256C512 220.7 483.3 192 448 192zM384 448H128v-96h256V448zM432 296c-13.25 0-24-10.75-24-24c0-13.27 10.75-24 24-24s24 10.73 24 24C456 285.3 445.3 296 432 296zM128 64h229.5L384 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C387.4 3.375 379.2 0 370.8 0H96C78.34 0 64 14.33 64 32v128h64V64z" />
                                </svg>
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M256 352c-16.53 0-33.06-5.422-47.16-16.41L0 173.2V400C0 426.5 21.49 448 48 448h416c26.51 0 48-21.49 48-48V173.2l-208.8 162.5C289.1 346.6 272.5 352 256 352zM16.29 145.3l212.2 165.1c16.19 12.6 38.87 12.6 55.06 0l212.2-165.1C505.1 137.3 512 125 512 112C512 85.49 490.5 64 464 64h-416C21.49 64 0 85.49 0 112C0 125 6.01 137.3 16.29 145.3z" />
                                </svg>
                                <svg class="pe-2" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path
                                        d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM96 392c-13.25 0-24-10.75-24-24S82.75 344 96 344s24 10.75 24 24S109.3 392 96 392zM96 296c-13.25 0-24-10.75-24-24S82.75 248 96 248S120 258.8 120 272S109.3 296 96 296zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM304 384h-128C167.2 384 160 376.8 160 368C160 359.2 167.2 352 176 352h128c8.801 0 16 7.199 16 16C320 376.8 312.8 384 304 384zM304 288h-128C167.2 288 160 280.8 160 272C160 263.2 167.2 256 176 256h128C312.8 256 320 263.2 320 272C320 280.8 312.8 288 304 288z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="shadow rounded   ">
                        <!-- reservation Record -->
                        <div class="card">
                            <div class="card-header d-flex flex-row align-items-center"
                                style="border-left:4px solid goldenrod;">
                                <div class="pe-3">
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path
                                            d="M480 192H592C618.5 192 640 213.5 640 240V464C640 490.5 618.5 512 592 512H48C21.49 512 0 490.5 0 464V144C0 117.5 21.49 96 48 96H64V24C64 10.75 74.75 0 88 0C101.3 0 112 10.75 112 24V96H176V24C176 10.75 186.7 0 200 0C213.3 0 224 10.75 224 24V96H288V48C288 21.49 309.5 0 336 0H432C458.5 0 480 21.49 480 48V192zM576 368C576 359.2 568.8 352 560 352H528C519.2 352 512 359.2 512 368V400C512 408.8 519.2 416 528 416H560C568.8 416 576 408.8 576 400V368zM240 416C248.8 416 256 408.8 256 400V368C256 359.2 248.8 352 240 352H208C199.2 352 192 359.2 192 368V400C192 408.8 199.2 416 208 416H240zM128 368C128 359.2 120.8 352 112 352H80C71.16 352 64 359.2 64 368V400C64 408.8 71.16 416 80 416H112C120.8 416 128 408.8 128 400V368zM528 256C519.2 256 512 263.2 512 272V304C512 312.8 519.2 320 528 320H560C568.8 320 576 312.8 576 304V272C576 263.2 568.8 256 560 256H528zM256 176C256 167.2 248.8 160 240 160H208C199.2 160 192 167.2 192 176V208C192 216.8 199.2 224 208 224H240C248.8 224 256 216.8 256 208V176zM80 160C71.16 160 64 167.2 64 176V208C64 216.8 71.16 224 80 224H112C120.8 224 128 216.8 128 208V176C128 167.2 120.8 160 112 160H80zM256 272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272zM112 320C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304C64 312.8 71.16 320 80 320H112zM416 272C416 263.2 408.8 256 400 256H368C359.2 256 352 263.2 352 272V304C352 312.8 359.2 320 368 320H400C408.8 320 416 312.8 416 304V272zM368 64C359.2 64 352 71.16 352 80V112C352 120.8 359.2 128 368 128H400C408.8 128 416 120.8 416 112V80C416 71.16 408.8 64 400 64H368zM416 176C416 167.2 408.8 160 400 160H368C359.2 160 352 167.2 352 176V208C352 216.8 359.2 224 368 224H400C408.8 224 416 216.8 416 208V176z" />
                                    </svg>
                                </div>
                                <div class="client">
                                    <h6>Mr. Ranaidinho <span><svg width="10" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 640 512">
                                                <path
                                                    d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z" />
                                            </svg></span></h6>
                                    <small>NB4637S743 | 029856</small>
                                </div>
                            </div>
                            <div class="card-body" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="row row-cols-3 text-center">
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <h4><b>1</b></h4>
                                        <small>Night</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2   mt-3">
                                    <div class="col reserv-date">
                                        <p>Booking Date</p>
                                        <small>20-12-2021</small>
                                    </div>
                                    <div class="col d-flex flex-row justify-content-center">
                                        <svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M315.1 271l-70.56-112.1C232.8 139.3 212.5 128 190.3 128H129.7c-22.22 0-42.53 11.25-54.28 30.09L4.873 271c-9.375 14.98-4.812 34.72 10.16 44.09c15 9.375 34.75 4.812 44.09-10.19l28.88-46.18L87.1 480c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32l0-144h16V480c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32V258.8l28.88 46.2C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271zM160 96c26.5 0 48-21.5 48-48S186.5 0 160 0C133.5 0 112 21.5 112 48S133.5 96 160 96z" />
                                        </svg>
                                        <p class="me-3">2</p>
                                        <svg width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M160 96c26.5 0 48-21.5 48-48s-21.5-48-47.1-48c-26.5 0-48 21.5-48 48S133.5 96 160 96zM315.1 271l-61.19-97.95C236.3 144.9 205.8 128 172.5 128H147.5C114.2 128 83.75 144.9 66.06 173.1L4.873 271C-4.502 286 .0607 305.8 15.03 315.1c15.03 9.375 34.75 4.812 44.09-10.19l32.62-52.19L47.1 384h40v96c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32v-96h16v96c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32v-96h40l-43.76-131.3l32.63 52.22C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271z" />
                                        </svg>
                                        <p>0</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2  ">
                                    <div class="col reserv-date">
                                        <p>Room Type</p>
                                        <small>306 / Breackfast</small>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p><b>Confirm</b></p>
                                        <small>Reservation</small>
                                    </div>
                                </div>
                                <div class="row row-cols-2 mt-2 ">
                                    <div class="col reserv-date">
                                        <p>Total</p>
                                        <p>Paid</p>
                                        <p class="text-danger">Balance</p>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p>$ 185.00</p>
                                        <p>$ 00.00</p>
                                        <p class="text-danger">$ 00.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M448 192H64C28.65 192 0 220.7 0 256v96c0 17.67 14.33 32 32 32h32v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h32c17.67 0 32-14.33 32-32V256C512 220.7 483.3 192 448 192zM384 448H128v-96h256V448zM432 296c-13.25 0-24-10.75-24-24c0-13.27 10.75-24 24-24s24 10.73 24 24C456 285.3 445.3 296 432 296zM128 64h229.5L384 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C387.4 3.375 379.2 0 370.8 0H96C78.34 0 64 14.33 64 32v128h64V64z" />
                                </svg>
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M256 352c-16.53 0-33.06-5.422-47.16-16.41L0 173.2V400C0 426.5 21.49 448 48 448h416c26.51 0 48-21.49 48-48V173.2l-208.8 162.5C289.1 346.6 272.5 352 256 352zM16.29 145.3l212.2 165.1c16.19 12.6 38.87 12.6 55.06 0l212.2-165.1C505.1 137.3 512 125 512 112C512 85.49 490.5 64 464 64h-416C21.49 64 0 85.49 0 112C0 125 6.01 137.3 16.29 145.3z" />
                                </svg>
                                <svg class="pe-2" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path
                                        d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM96 392c-13.25 0-24-10.75-24-24S82.75 344 96 344s24 10.75 24 24S109.3 392 96 392zM96 296c-13.25 0-24-10.75-24-24S82.75 248 96 248S120 258.8 120 272S109.3 296 96 296zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM304 384h-128C167.2 384 160 376.8 160 368C160 359.2 167.2 352 176 352h128c8.801 0 16 7.199 16 16C320 376.8 312.8 384 304 384zM304 288h-128C167.2 288 160 280.8 160 272C160 263.2 167.2 256 176 256h128C312.8 256 320 263.2 320 272C320 280.8 312.8 288 304 288z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="shadow rounded   ">
                        <!-- reservation Record -->
                        <div class="card">
                            <div class="card-header d-flex flex-row align-items-center"
                                style="border-left:4px solid goldenrod;">
                                <div class="pe-3">
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path
                                            d="M480 192H592C618.5 192 640 213.5 640 240V464C640 490.5 618.5 512 592 512H48C21.49 512 0 490.5 0 464V144C0 117.5 21.49 96 48 96H64V24C64 10.75 74.75 0 88 0C101.3 0 112 10.75 112 24V96H176V24C176 10.75 186.7 0 200 0C213.3 0 224 10.75 224 24V96H288V48C288 21.49 309.5 0 336 0H432C458.5 0 480 21.49 480 48V192zM576 368C576 359.2 568.8 352 560 352H528C519.2 352 512 359.2 512 368V400C512 408.8 519.2 416 528 416H560C568.8 416 576 408.8 576 400V368zM240 416C248.8 416 256 408.8 256 400V368C256 359.2 248.8 352 240 352H208C199.2 352 192 359.2 192 368V400C192 408.8 199.2 416 208 416H240zM128 368C128 359.2 120.8 352 112 352H80C71.16 352 64 359.2 64 368V400C64 408.8 71.16 416 80 416H112C120.8 416 128 408.8 128 400V368zM528 256C519.2 256 512 263.2 512 272V304C512 312.8 519.2 320 528 320H560C568.8 320 576 312.8 576 304V272C576 263.2 568.8 256 560 256H528zM256 176C256 167.2 248.8 160 240 160H208C199.2 160 192 167.2 192 176V208C192 216.8 199.2 224 208 224H240C248.8 224 256 216.8 256 208V176zM80 160C71.16 160 64 167.2 64 176V208C64 216.8 71.16 224 80 224H112C120.8 224 128 216.8 128 208V176C128 167.2 120.8 160 112 160H80zM256 272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272zM112 320C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304C64 312.8 71.16 320 80 320H112zM416 272C416 263.2 408.8 256 400 256H368C359.2 256 352 263.2 352 272V304C352 312.8 359.2 320 368 320H400C408.8 320 416 312.8 416 304V272zM368 64C359.2 64 352 71.16 352 80V112C352 120.8 359.2 128 368 128H400C408.8 128 416 120.8 416 112V80C416 71.16 408.8 64 400 64H368zM416 176C416 167.2 408.8 160 400 160H368C359.2 160 352 167.2 352 176V208C352 216.8 359.2 224 368 224H400C408.8 224 416 216.8 416 208V176z" />
                                    </svg>
                                </div>
                                <div class="client">
                                    <h6>Mr. Ranaidinho <span><svg width="10" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 640 512">
                                                <path
                                                    d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z" />
                                            </svg></span></h6>
                                    <small>NB4637S743 | 029856</small>
                                </div>
                            </div>
                            <div class="card-body" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="row row-cols-3 text-center">
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <h4><b>1</b></h4>
                                        <small>Night</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2   mt-3">
                                    <div class="col reserv-date">
                                        <p>Booking Date</p>
                                        <small>20-12-2021</small>
                                    </div>
                                    <div class="col d-flex flex-row justify-content-center">
                                        <svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M315.1 271l-70.56-112.1C232.8 139.3 212.5 128 190.3 128H129.7c-22.22 0-42.53 11.25-54.28 30.09L4.873 271c-9.375 14.98-4.812 34.72 10.16 44.09c15 9.375 34.75 4.812 44.09-10.19l28.88-46.18L87.1 480c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32l0-144h16V480c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32V258.8l28.88 46.2C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271zM160 96c26.5 0 48-21.5 48-48S186.5 0 160 0C133.5 0 112 21.5 112 48S133.5 96 160 96z" />
                                        </svg>
                                        <p class="me-3">2</p>
                                        <svg width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M160 96c26.5 0 48-21.5 48-48s-21.5-48-47.1-48c-26.5 0-48 21.5-48 48S133.5 96 160 96zM315.1 271l-61.19-97.95C236.3 144.9 205.8 128 172.5 128H147.5C114.2 128 83.75 144.9 66.06 173.1L4.873 271C-4.502 286 .0607 305.8 15.03 315.1c15.03 9.375 34.75 4.812 44.09-10.19l32.62-52.19L47.1 384h40v96c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32v-96h16v96c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32v-96h40l-43.76-131.3l32.63 52.22C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271z" />
                                        </svg>
                                        <p>0</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2  ">
                                    <div class="col reserv-date">
                                        <p>Room Type</p>
                                        <small>306 / Breackfast</small>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p><b>Confirm</b></p>
                                        <small>Reservation</small>
                                    </div>
                                </div>
                                <div class="row row-cols-2 mt-2 ">
                                    <div class="col reserv-date">
                                        <p>Total</p>
                                        <p>Paid</p>
                                        <p class="text-danger">Balance</p>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p>$ 185.00</p>
                                        <p>$ 00.00</p>
                                        <p class="text-danger">$ 00.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M448 192H64C28.65 192 0 220.7 0 256v96c0 17.67 14.33 32 32 32h32v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h32c17.67 0 32-14.33 32-32V256C512 220.7 483.3 192 448 192zM384 448H128v-96h256V448zM432 296c-13.25 0-24-10.75-24-24c0-13.27 10.75-24 24-24s24 10.73 24 24C456 285.3 445.3 296 432 296zM128 64h229.5L384 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C387.4 3.375 379.2 0 370.8 0H96C78.34 0 64 14.33 64 32v128h64V64z" />
                                </svg>
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M256 352c-16.53 0-33.06-5.422-47.16-16.41L0 173.2V400C0 426.5 21.49 448 48 448h416c26.51 0 48-21.49 48-48V173.2l-208.8 162.5C289.1 346.6 272.5 352 256 352zM16.29 145.3l212.2 165.1c16.19 12.6 38.87 12.6 55.06 0l212.2-165.1C505.1 137.3 512 125 512 112C512 85.49 490.5 64 464 64h-416C21.49 64 0 85.49 0 112C0 125 6.01 137.3 16.29 145.3z" />
                                </svg>
                                <svg class="pe-2" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path
                                        d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM96 392c-13.25 0-24-10.75-24-24S82.75 344 96 344s24 10.75 24 24S109.3 392 96 392zM96 296c-13.25 0-24-10.75-24-24S82.75 248 96 248S120 258.8 120 272S109.3 296 96 296zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM304 384h-128C167.2 384 160 376.8 160 368C160 359.2 167.2 352 176 352h128c8.801 0 16 7.199 16 16C320 376.8 312.8 384 304 384zM304 288h-128C167.2 288 160 280.8 160 272C160 263.2 167.2 256 176 256h128C312.8 256 320 263.2 320 272C320 280.8 312.8 288 304 288z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="shadow rounded   ">
                        <!-- reservation Record -->
                        <div class="card">
                            <div class="card-header d-flex flex-row align-items-center"
                                style="border-left:4px solid goldenrod;">
                                <div class="pe-3">
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path
                                            d="M480 192H592C618.5 192 640 213.5 640 240V464C640 490.5 618.5 512 592 512H48C21.49 512 0 490.5 0 464V144C0 117.5 21.49 96 48 96H64V24C64 10.75 74.75 0 88 0C101.3 0 112 10.75 112 24V96H176V24C176 10.75 186.7 0 200 0C213.3 0 224 10.75 224 24V96H288V48C288 21.49 309.5 0 336 0H432C458.5 0 480 21.49 480 48V192zM576 368C576 359.2 568.8 352 560 352H528C519.2 352 512 359.2 512 368V400C512 408.8 519.2 416 528 416H560C568.8 416 576 408.8 576 400V368zM240 416C248.8 416 256 408.8 256 400V368C256 359.2 248.8 352 240 352H208C199.2 352 192 359.2 192 368V400C192 408.8 199.2 416 208 416H240zM128 368C128 359.2 120.8 352 112 352H80C71.16 352 64 359.2 64 368V400C64 408.8 71.16 416 80 416H112C120.8 416 128 408.8 128 400V368zM528 256C519.2 256 512 263.2 512 272V304C512 312.8 519.2 320 528 320H560C568.8 320 576 312.8 576 304V272C576 263.2 568.8 256 560 256H528zM256 176C256 167.2 248.8 160 240 160H208C199.2 160 192 167.2 192 176V208C192 216.8 199.2 224 208 224H240C248.8 224 256 216.8 256 208V176zM80 160C71.16 160 64 167.2 64 176V208C64 216.8 71.16 224 80 224H112C120.8 224 128 216.8 128 208V176C128 167.2 120.8 160 112 160H80zM256 272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272zM112 320C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304C64 312.8 71.16 320 80 320H112zM416 272C416 263.2 408.8 256 400 256H368C359.2 256 352 263.2 352 272V304C352 312.8 359.2 320 368 320H400C408.8 320 416 312.8 416 304V272zM368 64C359.2 64 352 71.16 352 80V112C352 120.8 359.2 128 368 128H400C408.8 128 416 120.8 416 112V80C416 71.16 408.8 64 400 64H368zM416 176C416 167.2 408.8 160 400 160H368C359.2 160 352 167.2 352 176V208C352 216.8 359.2 224 368 224H400C408.8 224 416 216.8 416 208V176z" />
                                    </svg>
                                </div>
                                <div class="client">
                                    <h6>Mr. Ranaidinho <span><svg width="10" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 640 512">
                                                <path
                                                    d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z" />
                                            </svg></span></h6>
                                    <small>NB4637S743 | 029856</small>
                                </div>
                            </div>
                            <div class="card-body" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="row row-cols-3 text-center">
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <h4><b>1</b></h4>
                                        <small>Night</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2   mt-3">
                                    <div class="col reserv-date">
                                        <p>Booking Date</p>
                                        <small>20-12-2021</small>
                                    </div>
                                    <div class="col d-flex flex-row justify-content-center">
                                        <svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M315.1 271l-70.56-112.1C232.8 139.3 212.5 128 190.3 128H129.7c-22.22 0-42.53 11.25-54.28 30.09L4.873 271c-9.375 14.98-4.812 34.72 10.16 44.09c15 9.375 34.75 4.812 44.09-10.19l28.88-46.18L87.1 480c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32l0-144h16V480c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32V258.8l28.88 46.2C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271zM160 96c26.5 0 48-21.5 48-48S186.5 0 160 0C133.5 0 112 21.5 112 48S133.5 96 160 96z" />
                                        </svg>
                                        <p class="me-3">2</p>
                                        <svg width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M160 96c26.5 0 48-21.5 48-48s-21.5-48-47.1-48c-26.5 0-48 21.5-48 48S133.5 96 160 96zM315.1 271l-61.19-97.95C236.3 144.9 205.8 128 172.5 128H147.5C114.2 128 83.75 144.9 66.06 173.1L4.873 271C-4.502 286 .0607 305.8 15.03 315.1c15.03 9.375 34.75 4.812 44.09-10.19l32.62-52.19L47.1 384h40v96c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32v-96h16v96c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32v-96h40l-43.76-131.3l32.63 52.22C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271z" />
                                        </svg>
                                        <p>0</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2  ">
                                    <div class="col reserv-date">
                                        <p>Room Type</p>
                                        <small>306 / Breackfast</small>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p><b>Confirm</b></p>
                                        <small>Reservation</small>
                                    </div>
                                </div>
                                <div class="row row-cols-2 mt-2 ">
                                    <div class="col reserv-date">
                                        <p>Total</p>
                                        <p>Paid</p>
                                        <p class="text-danger">Balance</p>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p>$ 185.00</p>
                                        <p>$ 00.00</p>
                                        <p class="text-danger">$ 00.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M448 192H64C28.65 192 0 220.7 0 256v96c0 17.67 14.33 32 32 32h32v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h32c17.67 0 32-14.33 32-32V256C512 220.7 483.3 192 448 192zM384 448H128v-96h256V448zM432 296c-13.25 0-24-10.75-24-24c0-13.27 10.75-24 24-24s24 10.73 24 24C456 285.3 445.3 296 432 296zM128 64h229.5L384 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C387.4 3.375 379.2 0 370.8 0H96C78.34 0 64 14.33 64 32v128h64V64z" />
                                </svg>
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M256 352c-16.53 0-33.06-5.422-47.16-16.41L0 173.2V400C0 426.5 21.49 448 48 448h416c26.51 0 48-21.49 48-48V173.2l-208.8 162.5C289.1 346.6 272.5 352 256 352zM16.29 145.3l212.2 165.1c16.19 12.6 38.87 12.6 55.06 0l212.2-165.1C505.1 137.3 512 125 512 112C512 85.49 490.5 64 464 64h-416C21.49 64 0 85.49 0 112C0 125 6.01 137.3 16.29 145.3z" />
                                </svg>
                                <svg class="pe-2" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path
                                        d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM96 392c-13.25 0-24-10.75-24-24S82.75 344 96 344s24 10.75 24 24S109.3 392 96 392zM96 296c-13.25 0-24-10.75-24-24S82.75 248 96 248S120 258.8 120 272S109.3 296 96 296zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM304 384h-128C167.2 384 160 376.8 160 368C160 359.2 167.2 352 176 352h128c8.801 0 16 7.199 16 16C320 376.8 312.8 384 304 384zM304 288h-128C167.2 288 160 280.8 160 272C160 263.2 167.2 256 176 256h128C312.8 256 320 263.2 320 272C320 280.8 312.8 288 304 288z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="shadow rounded   ">
                        <!-- reservation Record -->
                        <div class="card">
                            <div class="card-header d-flex flex-row align-items-center"
                                style="border-left:4px solid goldenrod;">
                                <div class="pe-3">
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path
                                            d="M480 192H592C618.5 192 640 213.5 640 240V464C640 490.5 618.5 512 592 512H48C21.49 512 0 490.5 0 464V144C0 117.5 21.49 96 48 96H64V24C64 10.75 74.75 0 88 0C101.3 0 112 10.75 112 24V96H176V24C176 10.75 186.7 0 200 0C213.3 0 224 10.75 224 24V96H288V48C288 21.49 309.5 0 336 0H432C458.5 0 480 21.49 480 48V192zM576 368C576 359.2 568.8 352 560 352H528C519.2 352 512 359.2 512 368V400C512 408.8 519.2 416 528 416H560C568.8 416 576 408.8 576 400V368zM240 416C248.8 416 256 408.8 256 400V368C256 359.2 248.8 352 240 352H208C199.2 352 192 359.2 192 368V400C192 408.8 199.2 416 208 416H240zM128 368C128 359.2 120.8 352 112 352H80C71.16 352 64 359.2 64 368V400C64 408.8 71.16 416 80 416H112C120.8 416 128 408.8 128 400V368zM528 256C519.2 256 512 263.2 512 272V304C512 312.8 519.2 320 528 320H560C568.8 320 576 312.8 576 304V272C576 263.2 568.8 256 560 256H528zM256 176C256 167.2 248.8 160 240 160H208C199.2 160 192 167.2 192 176V208C192 216.8 199.2 224 208 224H240C248.8 224 256 216.8 256 208V176zM80 160C71.16 160 64 167.2 64 176V208C64 216.8 71.16 224 80 224H112C120.8 224 128 216.8 128 208V176C128 167.2 120.8 160 112 160H80zM256 272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272zM112 320C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304C64 312.8 71.16 320 80 320H112zM416 272C416 263.2 408.8 256 400 256H368C359.2 256 352 263.2 352 272V304C352 312.8 359.2 320 368 320H400C408.8 320 416 312.8 416 304V272zM368 64C359.2 64 352 71.16 352 80V112C352 120.8 359.2 128 368 128H400C408.8 128 416 120.8 416 112V80C416 71.16 408.8 64 400 64H368zM416 176C416 167.2 408.8 160 400 160H368C359.2 160 352 167.2 352 176V208C352 216.8 359.2 224 368 224H400C408.8 224 416 216.8 416 208V176z" />
                                    </svg>
                                </div>
                                <div class="client">
                                    <h6>Mr. Ranaidinho <span><svg width="10" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 640 512">
                                                <path
                                                    d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z" />
                                            </svg></span></h6>
                                    <small>NB4637S743 | 029856</small>
                                </div>
                            </div>
                            <div class="card-body" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="row row-cols-3 text-center">
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <h4><b>1</b></h4>
                                        <small>Night</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2   mt-3">
                                    <div class="col reserv-date">
                                        <p>Booking Date</p>
                                        <small>20-12-2021</small>
                                    </div>
                                    <div class="col d-flex flex-row justify-content-center">
                                        <svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M315.1 271l-70.56-112.1C232.8 139.3 212.5 128 190.3 128H129.7c-22.22 0-42.53 11.25-54.28 30.09L4.873 271c-9.375 14.98-4.812 34.72 10.16 44.09c15 9.375 34.75 4.812 44.09-10.19l28.88-46.18L87.1 480c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32l0-144h16V480c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32V258.8l28.88 46.2C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271zM160 96c26.5 0 48-21.5 48-48S186.5 0 160 0C133.5 0 112 21.5 112 48S133.5 96 160 96z" />
                                        </svg>
                                        <p class="me-3">2</p>
                                        <svg width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M160 96c26.5 0 48-21.5 48-48s-21.5-48-47.1-48c-26.5 0-48 21.5-48 48S133.5 96 160 96zM315.1 271l-61.19-97.95C236.3 144.9 205.8 128 172.5 128H147.5C114.2 128 83.75 144.9 66.06 173.1L4.873 271C-4.502 286 .0607 305.8 15.03 315.1c15.03 9.375 34.75 4.812 44.09-10.19l32.62-52.19L47.1 384h40v96c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32v-96h16v96c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32v-96h40l-43.76-131.3l32.63 52.22C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271z" />
                                        </svg>
                                        <p>0</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2  ">
                                    <div class="col reserv-date">
                                        <p>Room Type</p>
                                        <small>306 / Breackfast</small>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p><b>Confirm</b></p>
                                        <small>Reservation</small>
                                    </div>
                                </div>
                                <div class="row row-cols-2 mt-2 ">
                                    <div class="col reserv-date">
                                        <p>Total</p>
                                        <p>Paid</p>
                                        <p class="text-danger">Balance</p>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p>$ 185.00</p>
                                        <p>$ 00.00</p>
                                        <p class="text-danger">$ 00.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M448 192H64C28.65 192 0 220.7 0 256v96c0 17.67 14.33 32 32 32h32v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h32c17.67 0 32-14.33 32-32V256C512 220.7 483.3 192 448 192zM384 448H128v-96h256V448zM432 296c-13.25 0-24-10.75-24-24c0-13.27 10.75-24 24-24s24 10.73 24 24C456 285.3 445.3 296 432 296zM128 64h229.5L384 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C387.4 3.375 379.2 0 370.8 0H96C78.34 0 64 14.33 64 32v128h64V64z" />
                                </svg>
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M256 352c-16.53 0-33.06-5.422-47.16-16.41L0 173.2V400C0 426.5 21.49 448 48 448h416c26.51 0 48-21.49 48-48V173.2l-208.8 162.5C289.1 346.6 272.5 352 256 352zM16.29 145.3l212.2 165.1c16.19 12.6 38.87 12.6 55.06 0l212.2-165.1C505.1 137.3 512 125 512 112C512 85.49 490.5 64 464 64h-416C21.49 64 0 85.49 0 112C0 125 6.01 137.3 16.29 145.3z" />
                                </svg>
                                <svg class="pe-2" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path
                                        d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM96 392c-13.25 0-24-10.75-24-24S82.75 344 96 344s24 10.75 24 24S109.3 392 96 392zM96 296c-13.25 0-24-10.75-24-24S82.75 248 96 248S120 258.8 120 272S109.3 296 96 296zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM304 384h-128C167.2 384 160 376.8 160 368C160 359.2 167.2 352 176 352h128c8.801 0 16 7.199 16 16C320 376.8 312.8 384 304 384zM304 288h-128C167.2 288 160 280.8 160 272C160 263.2 167.2 256 176 256h128C312.8 256 320 263.2 320 272C320 280.8 312.8 288 304 288z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="shadow rounded   ">
                        <!-- reservation Record -->
                        <div class="card">
                            <div class="card-header d-flex flex-row align-items-center"
                                style="border-left:4px solid goldenrod;">
                                <div class="pe-3">
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path
                                            d="M480 192H592C618.5 192 640 213.5 640 240V464C640 490.5 618.5 512 592 512H48C21.49 512 0 490.5 0 464V144C0 117.5 21.49 96 48 96H64V24C64 10.75 74.75 0 88 0C101.3 0 112 10.75 112 24V96H176V24C176 10.75 186.7 0 200 0C213.3 0 224 10.75 224 24V96H288V48C288 21.49 309.5 0 336 0H432C458.5 0 480 21.49 480 48V192zM576 368C576 359.2 568.8 352 560 352H528C519.2 352 512 359.2 512 368V400C512 408.8 519.2 416 528 416H560C568.8 416 576 408.8 576 400V368zM240 416C248.8 416 256 408.8 256 400V368C256 359.2 248.8 352 240 352H208C199.2 352 192 359.2 192 368V400C192 408.8 199.2 416 208 416H240zM128 368C128 359.2 120.8 352 112 352H80C71.16 352 64 359.2 64 368V400C64 408.8 71.16 416 80 416H112C120.8 416 128 408.8 128 400V368zM528 256C519.2 256 512 263.2 512 272V304C512 312.8 519.2 320 528 320H560C568.8 320 576 312.8 576 304V272C576 263.2 568.8 256 560 256H528zM256 176C256 167.2 248.8 160 240 160H208C199.2 160 192 167.2 192 176V208C192 216.8 199.2 224 208 224H240C248.8 224 256 216.8 256 208V176zM80 160C71.16 160 64 167.2 64 176V208C64 216.8 71.16 224 80 224H112C120.8 224 128 216.8 128 208V176C128 167.2 120.8 160 112 160H80zM256 272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272zM112 320C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304C64 312.8 71.16 320 80 320H112zM416 272C416 263.2 408.8 256 400 256H368C359.2 256 352 263.2 352 272V304C352 312.8 359.2 320 368 320H400C408.8 320 416 312.8 416 304V272zM368 64C359.2 64 352 71.16 352 80V112C352 120.8 359.2 128 368 128H400C408.8 128 416 120.8 416 112V80C416 71.16 408.8 64 400 64H368zM416 176C416 167.2 408.8 160 400 160H368C359.2 160 352 167.2 352 176V208C352 216.8 359.2 224 368 224H400C408.8 224 416 216.8 416 208V176z" />
                                    </svg>
                                </div>
                                <div class="client">
                                    <h6>Mr. Ranaidinho <span><svg width="10" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 640 512">
                                                <path
                                                    d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z" />
                                            </svg></span></h6>
                                    <small>NB4637S743 | 029856</small>
                                </div>
                            </div>
                            <div class="card-body" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="row row-cols-3 text-center">
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <h4><b>1</b></h4>
                                        <small>Night</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2   mt-3">
                                    <div class="col reserv-date">
                                        <p>Booking Date</p>
                                        <small>20-12-2021</small>
                                    </div>
                                    <div class="col d-flex flex-row justify-content-center">
                                        <svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M315.1 271l-70.56-112.1C232.8 139.3 212.5 128 190.3 128H129.7c-22.22 0-42.53 11.25-54.28 30.09L4.873 271c-9.375 14.98-4.812 34.72 10.16 44.09c15 9.375 34.75 4.812 44.09-10.19l28.88-46.18L87.1 480c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32l0-144h16V480c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32V258.8l28.88 46.2C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271zM160 96c26.5 0 48-21.5 48-48S186.5 0 160 0C133.5 0 112 21.5 112 48S133.5 96 160 96z" />
                                        </svg>
                                        <p class="me-3">2</p>
                                        <svg width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M160 96c26.5 0 48-21.5 48-48s-21.5-48-47.1-48c-26.5 0-48 21.5-48 48S133.5 96 160 96zM315.1 271l-61.19-97.95C236.3 144.9 205.8 128 172.5 128H147.5C114.2 128 83.75 144.9 66.06 173.1L4.873 271C-4.502 286 .0607 305.8 15.03 315.1c15.03 9.375 34.75 4.812 44.09-10.19l32.62-52.19L47.1 384h40v96c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32v-96h16v96c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32v-96h40l-43.76-131.3l32.63 52.22C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271z" />
                                        </svg>
                                        <p>0</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2  ">
                                    <div class="col reserv-date">
                                        <p>Room Type</p>
                                        <small>306 / Breackfast</small>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p><b>Confirm</b></p>
                                        <small>Reservation</small>
                                    </div>
                                </div>
                                <div class="row row-cols-2 mt-2 ">
                                    <div class="col reserv-date">
                                        <p>Total</p>
                                        <p>Paid</p>
                                        <p class="text-danger">Balance</p>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p>$ 185.00</p>
                                        <p>$ 00.00</p>
                                        <p class="text-danger">$ 00.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M448 192H64C28.65 192 0 220.7 0 256v96c0 17.67 14.33 32 32 32h32v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h32c17.67 0 32-14.33 32-32V256C512 220.7 483.3 192 448 192zM384 448H128v-96h256V448zM432 296c-13.25 0-24-10.75-24-24c0-13.27 10.75-24 24-24s24 10.73 24 24C456 285.3 445.3 296 432 296zM128 64h229.5L384 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C387.4 3.375 379.2 0 370.8 0H96C78.34 0 64 14.33 64 32v128h64V64z" />
                                </svg>
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M256 352c-16.53 0-33.06-5.422-47.16-16.41L0 173.2V400C0 426.5 21.49 448 48 448h416c26.51 0 48-21.49 48-48V173.2l-208.8 162.5C289.1 346.6 272.5 352 256 352zM16.29 145.3l212.2 165.1c16.19 12.6 38.87 12.6 55.06 0l212.2-165.1C505.1 137.3 512 125 512 112C512 85.49 490.5 64 464 64h-416C21.49 64 0 85.49 0 112C0 125 6.01 137.3 16.29 145.3z" />
                                </svg>
                                <svg class="pe-2" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path
                                        d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM96 392c-13.25 0-24-10.75-24-24S82.75 344 96 344s24 10.75 24 24S109.3 392 96 392zM96 296c-13.25 0-24-10.75-24-24S82.75 248 96 248S120 258.8 120 272S109.3 296 96 296zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM304 384h-128C167.2 384 160 376.8 160 368C160 359.2 167.2 352 176 352h128c8.801 0 16 7.199 16 16C320 376.8 312.8 384 304 384zM304 288h-128C167.2 288 160 280.8 160 272C160 263.2 167.2 256 176 256h128C312.8 256 320 263.2 320 272C320 280.8 312.8 288 304 288z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="shadow rounded   ">
                        <!-- reservation Record -->
                        <div class="card">
                            <div class="card-header d-flex flex-row align-items-center"
                                style="border-left:4px solid goldenrod;">
                                <div class="pe-3">
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path
                                            d="M480 192H592C618.5 192 640 213.5 640 240V464C640 490.5 618.5 512 592 512H48C21.49 512 0 490.5 0 464V144C0 117.5 21.49 96 48 96H64V24C64 10.75 74.75 0 88 0C101.3 0 112 10.75 112 24V96H176V24C176 10.75 186.7 0 200 0C213.3 0 224 10.75 224 24V96H288V48C288 21.49 309.5 0 336 0H432C458.5 0 480 21.49 480 48V192zM576 368C576 359.2 568.8 352 560 352H528C519.2 352 512 359.2 512 368V400C512 408.8 519.2 416 528 416H560C568.8 416 576 408.8 576 400V368zM240 416C248.8 416 256 408.8 256 400V368C256 359.2 248.8 352 240 352H208C199.2 352 192 359.2 192 368V400C192 408.8 199.2 416 208 416H240zM128 368C128 359.2 120.8 352 112 352H80C71.16 352 64 359.2 64 368V400C64 408.8 71.16 416 80 416H112C120.8 416 128 408.8 128 400V368zM528 256C519.2 256 512 263.2 512 272V304C512 312.8 519.2 320 528 320H560C568.8 320 576 312.8 576 304V272C576 263.2 568.8 256 560 256H528zM256 176C256 167.2 248.8 160 240 160H208C199.2 160 192 167.2 192 176V208C192 216.8 199.2 224 208 224H240C248.8 224 256 216.8 256 208V176zM80 160C71.16 160 64 167.2 64 176V208C64 216.8 71.16 224 80 224H112C120.8 224 128 216.8 128 208V176C128 167.2 120.8 160 112 160H80zM256 272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272zM112 320C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304C64 312.8 71.16 320 80 320H112zM416 272C416 263.2 408.8 256 400 256H368C359.2 256 352 263.2 352 272V304C352 312.8 359.2 320 368 320H400C408.8 320 416 312.8 416 304V272zM368 64C359.2 64 352 71.16 352 80V112C352 120.8 359.2 128 368 128H400C408.8 128 416 120.8 416 112V80C416 71.16 408.8 64 400 64H368zM416 176C416 167.2 408.8 160 400 160H368C359.2 160 352 167.2 352 176V208C352 216.8 359.2 224 368 224H400C408.8 224 416 216.8 416 208V176z" />
                                    </svg>
                                </div>
                                <div class="client">
                                    <h6>Mr. Ranaidinho <span><svg width="10" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 640 512">
                                                <path
                                                    d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z" />
                                            </svg></span></h6>
                                    <small>NB4637S743 | 029856</small>
                                </div>
                            </div>
                            <div class="card-body" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="row row-cols-3 text-center">
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <h4><b>1</b></h4>
                                        <small>Night</small>
                                    </div>
                                    <div class="col reserv-date">
                                        <p>20-12-2021</p>
                                        <small>10.35.00</small>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2   mt-3">
                                    <div class="col reserv-date">
                                        <p>Booking Date</p>
                                        <small>20-12-2021</small>
                                    </div>
                                    <div class="col d-flex flex-row justify-content-center">
                                        <svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M315.1 271l-70.56-112.1C232.8 139.3 212.5 128 190.3 128H129.7c-22.22 0-42.53 11.25-54.28 30.09L4.873 271c-9.375 14.98-4.812 34.72 10.16 44.09c15 9.375 34.75 4.812 44.09-10.19l28.88-46.18L87.1 480c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32l0-144h16V480c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32V258.8l28.88 46.2C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271zM160 96c26.5 0 48-21.5 48-48S186.5 0 160 0C133.5 0 112 21.5 112 48S133.5 96 160 96z" />
                                        </svg>
                                        <p class="me-3">2</p>
                                        <svg width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                d="M160 96c26.5 0 48-21.5 48-48s-21.5-48-47.1-48c-26.5 0-48 21.5-48 48S133.5 96 160 96zM315.1 271l-61.19-97.95C236.3 144.9 205.8 128 172.5 128H147.5C114.2 128 83.75 144.9 66.06 173.1L4.873 271C-4.502 286 .0607 305.8 15.03 315.1c15.03 9.375 34.75 4.812 44.09-10.19l32.62-52.19L47.1 384h40v96c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32v-96h16v96c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32v-96h40l-43.76-131.3l32.63 52.22C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271z" />
                                        </svg>
                                        <p>0</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-2  ">
                                    <div class="col reserv-date">
                                        <p>Room Type</p>
                                        <small>306 / Breackfast</small>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p><b>Confirm</b></p>
                                        <small>Reservation</small>
                                    </div>
                                </div>
                                <div class="row row-cols-2 mt-2 ">
                                    <div class="col reserv-date">
                                        <p>Total</p>
                                        <p>Paid</p>
                                        <p class="text-danger">Balance</p>
                                    </div>
                                    <div class="col reserv-date text-end">
                                        <p>$ 185.00</p>
                                        <p>$ 00.00</p>
                                        <p class="text-danger">$ 00.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M448 192H64C28.65 192 0 220.7 0 256v96c0 17.67 14.33 32 32 32h32v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h32c17.67 0 32-14.33 32-32V256C512 220.7 483.3 192 448 192zM384 448H128v-96h256V448zM432 296c-13.25 0-24-10.75-24-24c0-13.27 10.75-24 24-24s24 10.73 24 24C456 285.3 445.3 296 432 296zM128 64h229.5L384 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C387.4 3.375 379.2 0 370.8 0H96C78.34 0 64 14.33 64 32v128h64V64z" />
                                </svg>
                                <svg class="pe-2" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M256 352c-16.53 0-33.06-5.422-47.16-16.41L0 173.2V400C0 426.5 21.49 448 48 448h416c26.51 0 48-21.49 48-48V173.2l-208.8 162.5C289.1 346.6 272.5 352 256 352zM16.29 145.3l212.2 165.1c16.19 12.6 38.87 12.6 55.06 0l212.2-165.1C505.1 137.3 512 125 512 112C512 85.49 490.5 64 464 64h-416C21.49 64 0 85.49 0 112C0 125 6.01 137.3 16.29 145.3z" />
                                </svg>
                                <svg class="pe-2" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path
                                        d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM96 392c-13.25 0-24-10.75-24-24S82.75 344 96 344s24 10.75 24 24S109.3 392 96 392zM96 296c-13.25 0-24-10.75-24-24S82.75 248 96 248S120 258.8 120 272S109.3 296 96 296zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM304 384h-128C167.2 384 160 376.8 160 368C160 359.2 167.2 352 176 352h128c8.801 0 16 7.199 16 16C320 376.8 312.8 384 304 384zM304 288h-128C167.2 288 160 280.8 160 272C160 263.2 167.2 256 176 256h128C312.8 256 320 263.2 320 272C320 280.8 312.8 288 304 288z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Start -->
            <div class="modal left fade" id="exampleModal" tabindex="" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="d-flex flex-row align-items-center ps-2"
                                style="border-left:4px solid goldenrod;">
                                <div class="pe-3">
                                    <svg width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path
                                            d="M480 192H592C618.5 192 640 213.5 640 240V464C640 490.5 618.5 512 592 512H48C21.49 512 0 490.5 0 464V144C0 117.5 21.49 96 48 96H64V24C64 10.75 74.75 0 88 0C101.3 0 112 10.75 112 24V96H176V24C176 10.75 186.7 0 200 0C213.3 0 224 10.75 224 24V96H288V48C288 21.49 309.5 0 336 0H432C458.5 0 480 21.49 480 48V192zM576 368C576 359.2 568.8 352 560 352H528C519.2 352 512 359.2 512 368V400C512 408.8 519.2 416 528 416H560C568.8 416 576 408.8 576 400V368zM240 416C248.8 416 256 408.8 256 400V368C256 359.2 248.8 352 240 352H208C199.2 352 192 359.2 192 368V400C192 408.8 199.2 416 208 416H240zM128 368C128 359.2 120.8 352 112 352H80C71.16 352 64 359.2 64 368V400C64 408.8 71.16 416 80 416H112C120.8 416 128 408.8 128 400V368zM528 256C519.2 256 512 263.2 512 272V304C512 312.8 519.2 320 528 320H560C568.8 320 576 312.8 576 304V272C576 263.2 568.8 256 560 256H528zM256 176C256 167.2 248.8 160 240 160H208C199.2 160 192 167.2 192 176V208C192 216.8 199.2 224 208 224H240C248.8 224 256 216.8 256 208V176zM80 160C71.16 160 64 167.2 64 176V208C64 216.8 71.16 224 80 224H112C120.8 224 128 216.8 128 208V176C128 167.2 120.8 160 112 160H80zM256 272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272zM112 320C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304C64 312.8 71.16 320 80 320H112zM416 272C416 263.2 408.8 256 400 256H368C359.2 256 352 263.2 352 272V304C352 312.8 359.2 320 368 320H400C408.8 320 416 312.8 416 304V272zM368 64C359.2 64 352 71.16 352 80V112C352 120.8 359.2 128 368 128H400C408.8 128 416 120.8 416 112V80C416 71.16 408.8 64 400 64H368zM416 176C416 167.2 408.8 160 400 160H368C359.2 160 352 167.2 352 176V208C352 216.8 359.2 224 368 224H400C408.8 224 416 216.8 416 208V176z" />
                                    </svg>
                                </div>
                                <div class="client">
                                    <h4>Mr. Ranaidinho <span><svg width="15" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 640 512">
                                                <path
                                                    d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z" />
                                            </svg></span></h4>
                                    <small> <span> <svg width="10" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 384 512">
                                                <path
                                                    d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z" />
                                            </svg> </span> United State Of America</small> <br>
                                    <small><svg width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path
                                                d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z" />
                                        </svg> 015412596</small>
                                    <small><svg width="12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path
                                                d="M256 352c-16.53 0-33.06-5.422-47.16-16.41L0 173.2V400C0 426.5 21.49 448 48 448h416c26.51 0 48-21.49 48-48V173.2l-208.8 162.5C289.1 346.6 272.5 352 256 352zM16.29 145.3l212.2 165.1c16.19 12.6 38.87 12.6 55.06 0l212.2-165.1C505.1 137.3 512 125 512 112C512 85.49 490.5 64 464 64h-416C21.49 64 0 85.49 0 112C0 125 6.01 137.3 16.29 145.3z" />
                                        </svg> anikdey@gmail.com</small>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row row-cols-12">
                                        <div class="col d-flex flex-row flex-wrap align-content-center">
                                            <div class="m-1">
                                                <div class="btn btn-sm btn-outline-primary">Edit Reservation</div>
                                            </div>
                                            <div class="m-1 px-2 py-0">
                                                <svg width="30" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 576 512">
                                                    <path
                                                        d="M512 32C547.3 32 576 60.65 576 96V128H0V96C0 60.65 28.65 32 64 32H512zM576 416C576 451.3 547.3 480 512 480H64C28.65 480 0 451.3 0 416V224H576V416zM112 352C103.2 352 96 359.2 96 368C96 376.8 103.2 384 112 384H176C184.8 384 192 376.8 192 368C192 359.2 184.8 352 176 352H112zM240 384H368C376.8 384 384 376.8 384 368C384 359.2 376.8 352 368 352H240C231.2 352 224 359.2 224 368C224 376.8 231.2 384 240 384z" />
                                                </svg>
                                            </div>
                                            <div class="m-1 px-2 py-0">
                                                <svg width="30" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M256 352c-16.53 0-33.06-5.422-47.16-16.41L0 173.2V400C0 426.5 21.49 448 48 448h416c26.51 0 48-21.49 48-48V173.2l-208.8 162.5C289.1 346.6 272.5 352 256 352zM16.29 145.3l212.2 165.1c16.19 12.6 38.87 12.6 55.06 0l212.2-165.1C505.1 137.3 512 125 512 112C512 85.49 490.5 64 464 64h-416C21.49 64 0 85.49 0 112C0 125 6.01 137.3 16.29 145.3z" />
                                                </svg>
                                            </div>
                                            <div class="m-1 px-2 py-0">
                                                <svg width="30" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M448 192H64C28.65 192 0 220.7 0 256v96c0 17.67 14.33 32 32 32h32v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h32c17.67 0 32-14.33 32-32V256C512 220.7 483.3 192 448 192zM384 448H128v-96h256V448zM432 296c-13.25 0-24-10.75-24-24c0-13.27 10.75-24 24-24s24 10.73 24 24C456 285.3 445.3 296 432 296zM128 64h229.5L384 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C387.4 3.375 379.2 0 370.8 0H96C78.34 0 64 14.33 64 32v128h64V64z" />
                                                </svg>
                                            </div>
                                            <div class="m-1 px-2 py-0">
                                                <svg width="30" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 640 512">
                                                    <path
                                                        d="M176 288C220.1 288 256 252.1 256 208S220.1 128 176 128S96 163.9 96 208S131.9 288 176 288zM544 128H304C295.2 128 288 135.2 288 144V320H64V48C64 39.16 56.84 32 48 32h-32C7.163 32 0 39.16 0 48v416C0 472.8 7.163 480 16 480h32C56.84 480 64 472.8 64 464V416h512v48c0 8.837 7.163 16 16 16h32c8.837 0 16-7.163 16-16V224C640 170.1 597 128 544 128z" />
                                                </svg>
                                            </div>
                                            <div class="m-1 px-2 py-0">
                                                <svg width="30" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 640 512">
                                                    <path
                                                        d="M541.2 448C542.1 453 544.1 458.4 544.1 464C544.1 490.5 522.6 512 496 512C469.5 512 448.1 490.5 448.1 464C448.1 458.4 449.2 453 450.1 448H253.1C254.9 453 256 458.4 256 464C256 490.5 234.5 512 208 512C181.5 512 160 490.5 160 464C160 458.4 161.1 453 162.9 448L96 448C78.4 448 64 433.6 64 416V80C64 71.16 56.84 64 48 64H32C14.4 64 0 49.6 0 32C0 14.4 14.4 0 32 0H64C99.2 0 128 28.8 128 64V384H608C625.6 384 640 398.4 640 416C640 433.6 625.6 448 608 448L541.2 448zM432 0C458.5 0 480 21.5 480 48V320H288V48C288 21.5 309.5 0 336 0H432zM336 96H432V48H336V96zM256 320H224C206.4 320 192 305.6 192 288V128C192 110.4 206.4 96 224 96H256V320zM576 128V288C576 305.6 561.6 320 544 320H512V96H544C561.6 96 576 110.4 576 128z" />
                                                </svg>
                                            </div>
                                            <div class="m-1 px-2 py-0">
                                                <svg width="30" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M480 128v208c0 97.05-78.95 176-176 176h-37.72c-53.42 0-103.7-20.8-141.4-58.58l-113.1-113.1C3.906 332.5 0 322.2 0 312C0 290.7 17.15 272 40 272c10.23 0 20.47 3.906 28.28 11.72L128 343.4V64c0-17.67 14.33-32 32-32s32 14.33 32 32l.0729 176C192.1 248.8 199.2 256 208 256s16.07-7.164 16.07-16L224 32c0-17.67 14.33-32 32-32s32 14.33 32 32l.0484 208c0 8.836 7.111 16 15.95 16S320 248.8 320 240L320 64c0-17.67 14.33-32 32-32s32 14.33 32 32l.0729 176c0 8.836 7.091 16 15.93 16S416 248.8 416 240V128c0-17.67 14.33-32 32-32S480 110.3 480 128z" />
                                                </svg>
                                            </div>
                                            <div class="m-1 px-2 py-0">
                                                <svg width="30" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M256 352c-16.53 0-33.06-5.422-47.16-16.41L0 173.2V400C0 426.5 21.49 448 48 448h416c26.51 0 48-21.49 48-48V173.2l-208.8 162.5C289.1 346.6 272.5 352 256 352zM16.29 145.3l212.2 165.1c16.19 12.6 38.87 12.6 55.06 0l212.2-165.1C505.1 137.3 512 125 512 112C512 85.49 490.5 64 464 64h-416C21.49 64 0 85.49 0 112C0 125 6.01 137.3 16.29 145.3z" />
                                                </svg>
                                            </div>
                                            <div class="m-1 px-2 py-0">
                                                <svg width="30" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M480 128v208c0 97.05-78.95 176-176 176h-37.72c-53.42 0-103.7-20.8-141.4-58.58l-113.1-113.1C3.906 332.5 0 322.2 0 312C0 290.7 17.15 272 40 272c10.23 0 20.47 3.906 28.28 11.72L128 343.4V64c0-17.67 14.33-32 32-32s32 14.33 32 32l.0729 176C192.1 248.8 199.2 256 208 256s16.07-7.164 16.07-16L224 32c0-17.67 14.33-32 32-32s32 14.33 32 32l.0484 208c0 8.836 7.111 16 15.95 16S320 248.8 320 240L320 64c0-17.67 14.33-32 32-32s32 14.33 32 32l.0729 176c0 8.836 7.091 16 15.93 16S416 248.8 416 240V128c0-17.67 14.33-32 32-32S480 110.3 480 128z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row row-cols-2">
                                        <div class="col reserv-date">
                                            <p>Reservation Number </p>
                                            <small>D4584VDF4</small>
                                        </div>
                                        <div class="col reserv-date">
                                            <h6 style="margin: 0;">Status</h6>
                                            <small>Confirm Reservation</small>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row row-cols-2">
                                        <div class="col reserv-date">
                                            <p>Arrival Date </p>
                                            <small>20-12-2020 | 10.30.00</small>
                                        </div>
                                        <div class="col reserv-date">
                                            <p>Departure Date </p>
                                            <small>25-12-2020 | 10.30.00</small>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row row-cols-2">
                                        <div class="col reserv-date">
                                            <p>Booking Date </p>
                                            <small>20-12-2020 | 10.30.00</small>
                                        </div>
                                        <div class="col reserv-date">
                                            <p>Room Type </p>
                                            <small>Ocean View</small>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row row-cols-2">
                                        <div class="col reserv-date">
                                            <p>Room Number </p>
                                            <small>210</small>
                                        </div>
                                        <div class="col reserv-date">
                                            <p>Rate Plan </p>
                                            <small>Breackfast</small>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row row-cols-2">
                                        <div class="col reserv-date">
                                            <div class="col d-flex flex-row">
                                                <svg width="15" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 320 512">
                                                    <path
                                                        d="M315.1 271l-70.56-112.1C232.8 139.3 212.5 128 190.3 128H129.7c-22.22 0-42.53 11.25-54.28 30.09L4.873 271c-9.375 14.98-4.812 34.72 10.16 44.09c15 9.375 34.75 4.812 44.09-10.19l28.88-46.18L87.1 480c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32l0-144h16V480c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32V258.8l28.88 46.2C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271zM160 96c26.5 0 48-21.5 48-48S186.5 0 160 0C133.5 0 112 21.5 112 48S133.5 96 160 96z" />
                                                </svg>
                                                <p class="me-3 ps-1">2</p>
                                                <svg width="10" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 320 512">
                                                    <path
                                                        d="M160 96c26.5 0 48-21.5 48-48s-21.5-48-47.1-48c-26.5 0-48 21.5-48 48S133.5 96 160 96zM315.1 271l-61.19-97.95C236.3 144.9 205.8 128 172.5 128H147.5C114.2 128 83.75 144.9 66.06 173.1L4.873 271C-4.502 286 .0607 305.8 15.03 315.1c15.03 9.375 34.75 4.812 44.09-10.19l32.62-52.19L47.1 384h40v96c0 17.67 14.33 32 32 32c17.67 0 31.1-14.33 31.1-32v-96h16v96c0 17.67 14.33 32 32 32c17.67 0 32-14.33 32-32v-96h40l-43.76-131.3l32.63 52.22C266.9 314.7 277.4 320 288 320c5.781 0 11.66-1.562 16.94-4.859C319.9 305.8 324.5 286 315.1 271z" />
                                                </svg>
                                                <p class="ps-1">0</p>
                                            </div>
                                        </div>
                                        <div class="col reserv-date">
                                            <p>Avrg. Daily Rate </p>
                                            <small>$ 0.00</small>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row row-cols-2 mt-2 ">
                                        <div class="col reserv-date">
                                            <p>Total</p>
                                            <p>Paid</p>
                                            <hr>
                                            <p class="text-danger">Balance</p>
                                        </div>
                                        <div class="col reserv-date">
                                            <p>$ 185.00</p>
                                            <p>$ 00.00</p>
                                            <hr>
                                            <p class="text-danger">$ 185.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal end -->
        </div>
    </main>
    <!-- <script src="https://kit.fontawesome.com/2173768088.js" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
