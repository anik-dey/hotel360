@extends('layouts.controllerlayout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>Packages <sub><small>All Packages</small></sub></h3>
                {{-- Modal Form togglar --}}
                <div class="col-md-12 col-sm-12 pl-0 mb-1 mt-2">
                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#large">
                        <svg style="fill: white" width=" 15" class="mr-1" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path
                                d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z" />
                        </svg><span class="text-white">Add</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row d-flex justify-content-around mt-2 ">
    <div class="col-lg-4 mt-2">
        <div class="card cardHover">
            <div class="card-header text-center d-flex flex-column jusify-content-center align-items-center"
                style="background:#80808044; border-bottom:1px solid goldenrod">
                <h3 class="card-title">Package 01</h3>
                <div class="card-icon-boxes mt-1">
                    <a href="">
                        <svg class="mr-1" style="fill: #3db63d" width="20" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 512">
                            <path
                                d="M592 288H576V212.7c0-41.84-30.03-80.04-71.66-84.27C456.5 123.6 416 161.1 416 208V288h-16C373.6 288 352 309.6 352 336v128c0 26.4 21.6 48 48 48h192c26.4 0 48-21.6 48-48v-128C640 309.6 618.4 288 592 288zM496 432c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S513.6 432 496 432zM528 288h-64V208c0-17.62 14.38-32 32-32s32 14.38 32 32V288zM224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM320 336c0-8.672 1.738-16.87 4.303-24.7C308.6 306.6 291.9 304 274.7 304H173.3C77.61 304 0 381.7 0 477.4C0 496.5 15.52 512 34.66 512h301.7C326.3 498.6 320 482.1 320 464V336z" />
                        </svg>
                    </a>
                    <a class="mr-1 btn btn-primary btn-sm" href="">Active</a>
                    <a href="">
                        <svg class="mr-1" style="fill: #5454d1d0" width="18" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path
                                d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z" />
                        </svg>
                    </a>
                    <a href="">
                        <svg class="mr-1" style="fill: #ff6347bd" width="18" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path
                                d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="card-body text-center mt-1">
                <p>1 Business Locations</p>
                <p>Unlimited Users</p>
                <p>1000 Products</p>
                <p>Unlimited Invoices</p>
                <p>7 Trial Days</p>
                <p>Essentials Module</p>
                <h1>$ 15,000.00 / 12 Months</h1>
            </div>
            <div class="card-footer">
                <p>Per year service charge will be 3000/- BDT, Per branch Attachment 5000/1000 one time/yearly</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mt-2">
        <div class="card cardHover">
            <div class="card-header text-center d-flex flex-column jusify-content-center align-items-center"
                style="background:#80808044; border-bottom:1px solid goldenrod">
                <h3 class="card-title">Package 01</h3>
                <div class="card-icon-boxes mt-1">
                    <a href="">
                        <svg class="mr-1" style="fill: #3db63d" width="20" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 512">
                            <path
                                d="M592 288H576V212.7c0-41.84-30.03-80.04-71.66-84.27C456.5 123.6 416 161.1 416 208V288h-16C373.6 288 352 309.6 352 336v128c0 26.4 21.6 48 48 48h192c26.4 0 48-21.6 48-48v-128C640 309.6 618.4 288 592 288zM496 432c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S513.6 432 496 432zM528 288h-64V208c0-17.62 14.38-32 32-32s32 14.38 32 32V288zM224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM320 336c0-8.672 1.738-16.87 4.303-24.7C308.6 306.6 291.9 304 274.7 304H173.3C77.61 304 0 381.7 0 477.4C0 496.5 15.52 512 34.66 512h301.7C326.3 498.6 320 482.1 320 464V336z" />
                        </svg>
                    </a>
                    <a class="mr-1 btn btn-primary btn-sm" href="">Active</a>
                    <a href="">
                        <svg class="mr-1" style="fill: #5454d1d0" width="18" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path
                                d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z" />
                        </svg>
                    </a>
                    <a href="">
                        <svg class="mr-1" style="fill: #ff6347bd" width="18" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path
                                d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="card-body text-center mt-1">
                <p>1 Business Locations</p>
                <p>Unlimited Users</p>
                <p>1000 Products</p>
                <p>Unlimited Invoices</p>
                <p>7 Trial Days</p>
                <p>Essentials Module</p>
                <h1>$ 15,000.00 / 12 Months</h1>
            </div>
            <div class="card-footer">
                <p>Per year service charge will be 3000/- BDT, Per branch Attachment 5000/1000 one time/yearly</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mt-2">
        <div class="card cardHover">
            <div class="card-header text-center d-flex flex-column jusify-content-center align-items-center"
                style="background:#80808044; border-bottom:1px solid goldenrod">
                <h3 class="card-title">Package 01</h3>
                <div class="card-icon-boxes mt-1">
                    <a href="">
                        <svg class="mr-1" style="fill: #3db63d" width="20" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 512">
                            <path
                                d="M592 288H576V212.7c0-41.84-30.03-80.04-71.66-84.27C456.5 123.6 416 161.1 416 208V288h-16C373.6 288 352 309.6 352 336v128c0 26.4 21.6 48 48 48h192c26.4 0 48-21.6 48-48v-128C640 309.6 618.4 288 592 288zM496 432c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S513.6 432 496 432zM528 288h-64V208c0-17.62 14.38-32 32-32s32 14.38 32 32V288zM224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM320 336c0-8.672 1.738-16.87 4.303-24.7C308.6 306.6 291.9 304 274.7 304H173.3C77.61 304 0 381.7 0 477.4C0 496.5 15.52 512 34.66 512h301.7C326.3 498.6 320 482.1 320 464V336z" />
                        </svg>
                    </a>
                    <a class="mr-1 btn btn-primary btn-sm" href="">Active</a>
                    <a href="">
                        <svg class="mr-1" style="fill: #5454d1d0" width="18" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path
                                d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z" />
                        </svg>
                    </a>
                    <a href="">
                        <svg class="mr-1" style="fill: #ff6347bd" width="18" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path
                                d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="card-body text-center mt-1">
                <p>1 Business Locations</p>
                <p>Unlimited Users</p>
                <p>1000 Products</p>
                <p>Unlimited Invoices</p>
                <p>7 Trial Days</p>
                <p>Essentials Module</p>
                <h1>$ 15,000.00 / 12 Months</h1>
            </div>
            <div class="card-footer">
                <p>Per year service charge will be 3000/- BDT, Per branch Attachment 5000/1000 one time/yearly</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mt-2">
        <div class="card cardHover">
            <div class="card-header text-center d-flex flex-column jusify-content-center align-items-center"
                style="background:#80808044; border-bottom:1px solid goldenrod">
                <h3 class="card-title">Package 01</h3>
                <div class="card-icon-boxes mt-1">
                    <a href="">
                        <svg class="mr-1" style="fill: #3db63d" width="20" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 512">
                            <path
                                d="M592 288H576V212.7c0-41.84-30.03-80.04-71.66-84.27C456.5 123.6 416 161.1 416 208V288h-16C373.6 288 352 309.6 352 336v128c0 26.4 21.6 48 48 48h192c26.4 0 48-21.6 48-48v-128C640 309.6 618.4 288 592 288zM496 432c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S513.6 432 496 432zM528 288h-64V208c0-17.62 14.38-32 32-32s32 14.38 32 32V288zM224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM320 336c0-8.672 1.738-16.87 4.303-24.7C308.6 306.6 291.9 304 274.7 304H173.3C77.61 304 0 381.7 0 477.4C0 496.5 15.52 512 34.66 512h301.7C326.3 498.6 320 482.1 320 464V336z" />
                        </svg>
                    </a>
                    <a class="mr-1 btn btn-primary btn-sm" href="">Active</a>
                    <a href="">
                        <svg class="mr-1" style="fill: #5454d1d0" width="18" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path
                                d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z" />
                        </svg>
                    </a>
                    <a href="">
                        <svg class="mr-1" style="fill: #ff6347bd" width="18" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path
                                d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="card-body text-center mt-1">
                <p>1 Business Locations</p>
                <p>Unlimited Users</p>
                <p>1000 Products</p>
                <p>Unlimited Invoices</p>
                <p>7 Trial Days</p>
                <p>Essentials Module</p>
                <h1>$ 15,000.00 / 12 Months</h1>
            </div>
            <div class="card-footer">
                <p>Per year service charge will be 3000/- BDT, Per branch Attachment 5000/1000 one time/yearly</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mt-2">
        <div class="card cardHover">
            <div class="card-header text-center d-flex flex-column jusify-content-center align-items-center"
                style="background:#80808044; border-bottom:1px solid goldenrod">
                <h3 class="card-title">Package 01</h3>
                <div class="card-icon-boxes mt-1">
                    <a href="">
                        <svg class="mr-1" style="fill: #3db63d" width="20" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 512">
                            <path
                                d="M592 288H576V212.7c0-41.84-30.03-80.04-71.66-84.27C456.5 123.6 416 161.1 416 208V288h-16C373.6 288 352 309.6 352 336v128c0 26.4 21.6 48 48 48h192c26.4 0 48-21.6 48-48v-128C640 309.6 618.4 288 592 288zM496 432c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S513.6 432 496 432zM528 288h-64V208c0-17.62 14.38-32 32-32s32 14.38 32 32V288zM224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM320 336c0-8.672 1.738-16.87 4.303-24.7C308.6 306.6 291.9 304 274.7 304H173.3C77.61 304 0 381.7 0 477.4C0 496.5 15.52 512 34.66 512h301.7C326.3 498.6 320 482.1 320 464V336z" />
                        </svg>
                    </a>
                    <a class="mr-1 btn btn-primary btn-sm" href="">Active</a>
                    <a href="">
                        <svg class="mr-1" style="fill: #5454d1d0" width="18" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path
                                d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z" />
                        </svg>
                    </a>
                    <a href="">
                        <svg class="mr-1" style="fill: #ff6347bd" width="18" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path
                                d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="card-body text-center mt-1">
                <p>1 Business Locations</p>
                <p>Unlimited Users</p>
                <p>1000 Products</p>
                <p>Unlimited Invoices</p>
                <p>7 Trial Days</p>
                <p>Essentials Module</p>
                <h1>$ 15,000.00 / 12 Months</h1>
            </div>
            <div class="card-footer">
                <p>Per year service charge will be 3000/- BDT, Per branch Attachment 5000/1000 one time/yearly</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mt-2">
        <div class="card cardHover">
            <div class="card-header text-center d-flex flex-column jusify-content-center align-items-center"
                style="background:#80808044; border-bottom:1px solid goldenrod">
                <h3 class="card-title">Package 01</h3>
                <div class="card-icon-boxes mt-1">
                    <a href="">
                        <svg class="mr-1" style="fill: #3db63d" width="20" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 512">
                            <path
                                d="M592 288H576V212.7c0-41.84-30.03-80.04-71.66-84.27C456.5 123.6 416 161.1 416 208V288h-16C373.6 288 352 309.6 352 336v128c0 26.4 21.6 48 48 48h192c26.4 0 48-21.6 48-48v-128C640 309.6 618.4 288 592 288zM496 432c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S513.6 432 496 432zM528 288h-64V208c0-17.62 14.38-32 32-32s32 14.38 32 32V288zM224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM320 336c0-8.672 1.738-16.87 4.303-24.7C308.6 306.6 291.9 304 274.7 304H173.3C77.61 304 0 381.7 0 477.4C0 496.5 15.52 512 34.66 512h301.7C326.3 498.6 320 482.1 320 464V336z" />
                        </svg>
                    </a>
                    <a class="mr-1 btn btn-primary btn-sm" href="">Active</a>
                    <a href="">
                        <svg class="mr-1" style="fill: #5454d1d0" width="18" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path
                                d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z" />
                        </svg>
                    </a>
                    <a href="">
                        <svg class="mr-1" style="fill: #ff6347bd" width="18" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path
                                d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="card-body text-center mt-1">
                <p>1 Business Locations</p>
                <p>Unlimited Users</p>
                <p>1000 Products</p>
                <p>Unlimited Invoices</p>
                <p>7 Trial Days</p>
                <p>Essentials Module</p>
                <h1>$ 15,000.00 / 12 Months</h1>
            </div>
            <div class="card-footer">
                <p>Per year service charge will be 3000/- BDT, Per branch Attachment 5000/1000 one time/yearly</p>
            </div>
        </div>
    </div>
</div>
{{-- Add New Packge Modal --}}
<div class="modal fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Packages <sub><small>Add New package</small></sub></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="row d-flex justify-content-around ">
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label for="name"> Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Package Name" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label for="description"> Package Description:</label>
                                <input type="text" class="form-control" id="description"
                                    placeholder="Enter Package Description" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label for="location"> Number of Locations:</label>
                                <input type="number" class="form-control" id="location"
                                    placeholder="Enter Locatin Number" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label for="activeuser"> Number of active users:</label>
                                <input type="number" class="form-control" id="activeuser"
                                    placeholder="Enter Active User" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label for="numberRoom"> Number of Room:</label>
                                <input type="number" class="form-control" id="numberRoom"
                                    placeholder="Enter Room Quantity" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label for="bulding"> Number of building:</label>
                                <input type="number" class="form-control" id="building"
                                    placeholder="Enter Building Quantity" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label for="basicInput">Price Interval:</label>
                                <select class="select2 form-control form-control-lg">
                                    <option>Please Select</option>
                                    <option value="day">Day</option>
                                    <option value="month">Month</option>
                                    <option value="year">Year</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label for="interval"> Interval:</label>
                                <input type="number" class="form-control" id="interval"
                                    placeholder="Enter Interval Number" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label for="trial"> Trial Days:</label>
                                <input type="number" class="form-control" id="trial"
                                    placeholder="Enter Trial Days Number" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label for="trial"> Price:</label>
                                <div class="form-group input-group mb-3">
                                    <span class="input-group-text" id="price">BDT <span class="pl-1"
                                            data-toggle="tooltip"
                                            data-original-title="Package Price Currency Set From Application Setting"
                                            data-trigger="click"><svg style="fill: blue" width="18"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path
                                                    d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 400c-18 0-32-14-32-32s13.1-32 32-32c17.1 0 32 14 32 32S273.1 400 256 400zM325.1 258L280 286V288c0 13-11 24-24 24S232 301 232 288V272c0-8 4-16 12-21l57-34C308 213 312 206 312 198C312 186 301.1 176 289.1 176h-51.1C225.1 176 216 186 216 198c0 13-11 24-24 24s-24-11-24-24C168 159 199 128 237.1 128h51.1C329 128 360 159 360 198C360 222 347 245 325.1 258z" />
                                            </svg></span>
                                    </span>
                                    <input type="number" class="form-control" placeholder="Enter Price">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <div class="custom-control custom-control-info custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="privatForSuper" />
                                    <label class="custom-control-label" for="privatForSuper">Private Superadmin
                                        only</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <div class="custom-control custom-control-info custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="oneTime" />
                                    <label class="custom-control-label" for="oneTime">One time only
                                        subscription</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <div class="custom-control custom-control-info custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customLink" />
                                    <label class="custom-control-label" for="customLink">Enable custom subscription
                                        link</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <div class="custom-control custom-control-info custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="crm" />
                                    <label class="custom-control-label" for="crm">Crm Module</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <div class="custom-control custom-control-info custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="essentialModule" />
                                    <label class="custom-control-label" for="essentialModule">Essentials Module</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <div class="custom-control custom-control-info custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="manufactureModule" />
                                    <label class="custom-control-label" for="manufactureModule">Manufacturing
                                        Module</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <div class="custom-control custom-control-info custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="active" checked />
                                    <label class="custom-control-label" for="active">Activate</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Submit</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection