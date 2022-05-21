@extends('layouts.master')
@section('content')
{{-- Congratulations Section Start --}}
<div class="row match-height">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card card-congratulations">
            <div class="card-body text-center">
                <img src="{{ asset('backend/app-assets/images/elements/decore-left.png') }}"
                    class="congratulations-img-left" alt="card-img-left">
                <img src="{{ asset('backend/app-assets/images/elements/decore-right.png') }}"
                    class="congratulations-img-right" alt="card-img-right">
                <div class="avatar avatar-xl bg-primary shadow">
                    <div class="avatar-content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-award font-large-1">
                            <circle cx="12" cy="8" r="7"></circle>
                            <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                        </svg>
                    </div>
                </div>
                <div class="text-center">
                    <h1 class="mb-1 text-white">Congratulations {{ auth()->user()->name }},</h1>

                    <p class="card-text m-auto w-75">
                        You have done <strong>30%</strong> configuration please <a href="">click here</a> to done over.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Congratulation Section End --}}

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header flex-column align-items-start pb-0">
                <div class="avatar bg-light-primary p-50 m-0">
                    <div class="avatar-content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-users font-medium-5">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                </div>
                <h2 class="font-weight-bolder mt-1">756+</h2>
                <p class="card-text">Client Gained</p>
            </div>
            <div id="gained-chart" style="min-height: 100px;">
                <div id="apexchartsirs478y6" class="apexcharts-canvas apexchartsirs478y6 apexcharts-theme-light"
                    style="width: 237px; height: 100px;"><svg id="SvgjsSvg1261" width="237" height="100"
                        xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                        transform="translate(0, 0)" style="background: transparent;">
                        <g id="SvgjsG1263" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                            <defs id="SvgjsDefs1262">
                                <clipPath id="gridRectMaskirs478y6">
                                    <rect id="SvgjsRect1268" width="243.5" height="102.5" x="-3.25" y="-1.25" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                        fill="#fff"></rect>
                                </clipPath>
                                <clipPath id="gridRectMarkerMaskirs478y6">
                                    <rect id="SvgjsRect1269" width="241" height="104" x="-2" y="-2" rx="0" ry="0"
                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                    </rect>
                                </clipPath>
                                <linearGradient id="SvgjsLinearGradient1274" x1="0" y1="0" x2="0" y2="1">
                                    <stop id="SvgjsStop1275" stop-opacity="0.7" stop-color="rgba(115,103,240,0.7)"
                                        offset="0">
                                    </stop>
                                    <stop id="SvgjsStop1276" stop-opacity="0.5" stop-color="rgba(241,240,254,0.5)"
                                        offset="0.8">
                                    </stop>
                                    <stop id="SvgjsStop1277" stop-opacity="0.5" stop-color="rgba(241,240,254,0.5)"
                                        offset="1">
                                    </stop>
                                </linearGradient>
                            </defs>
                            <line id="SvgjsLine1267" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3"
                                class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4"
                                filter="none" fill-opacity="0.9" stroke-width="1"></line>
                            <g id="SvgjsG1280" class="apexcharts-xaxis" transform="translate(0, 0)">
                                <g id="SvgjsG1281" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                            </g>
                            <g id="SvgjsG1283" class="apexcharts-grid">
                                <g id="SvgjsG1284" class="apexcharts-gridlines-horizontal" style="display: none;">
                                    <line id="SvgjsLine1286" x1="0" y1="0" x2="237" y2="0" stroke="#e0e0e0"
                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1287" x1="0" y1="20" x2="237" y2="20" stroke="#e0e0e0"
                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1288" x1="0" y1="40" x2="237" y2="40" stroke="#e0e0e0"
                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1289" x1="0" y1="60" x2="237" y2="60" stroke="#e0e0e0"
                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1290" x1="0" y1="80" x2="237" y2="80" stroke="#e0e0e0"
                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1291" x1="0" y1="100" x2="237" y2="100" stroke="#e0e0e0"
                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                </g>
                                <g id="SvgjsG1285" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                <line id="SvgjsLine1293" x1="0" y1="100" x2="237" y2="100" stroke="transparent"
                                    stroke-dasharray="0"></line>
                                <line id="SvgjsLine1292" x1="0" y1="1" x2="0" y2="100" stroke="transparent"
                                    stroke-dasharray="0">
                                </line>
                            </g>
                            <g id="SvgjsG1270" class="apexcharts-area-series apexcharts-plot-series">
                                <g id="SvgjsG1271" class="apexcharts-series" seriesName="Subscribers"
                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                    <path id="SvgjsPath1278"
                                        d="M 0 100L 0 77.77777777777777C 13.825 77.77777777777777 25.675 51.111111111111114 39.5 51.111111111111114C 53.325 51.111111111111114 65.175 60 79 60C 92.825 60 104.675 24.444444444444443 118.5 24.444444444444443C 132.325 24.444444444444443 144.175 55.55555555555556 158 55.55555555555556C 171.825 55.55555555555556 183.675 6.666666666666657 197.5 6.666666666666657C 211.325 6.666666666666657 223.175 17.777777777777786 237 17.777777777777786C 237 17.777777777777786 237 17.777777777777786 237 100M 237 17.777777777777786z"
                                        fill="url(#SvgjsLinearGradient1274)" fill-opacity="1" stroke-opacity="1"
                                        stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                        class="apexcharts-area" index="0" clip-path="url(#gridRectMaskirs478y6)"
                                        pathTo="M 0 100L 0 77.77777777777777C 13.825 77.77777777777777 25.675 51.111111111111114 39.5 51.111111111111114C 53.325 51.111111111111114 65.175 60 79 60C 92.825 60 104.675 24.444444444444443 118.5 24.444444444444443C 132.325 24.444444444444443 144.175 55.55555555555556 158 55.55555555555556C 171.825 55.55555555555556 183.675 6.666666666666657 197.5 6.666666666666657C 211.325 6.666666666666657 223.175 17.777777777777786 237 17.777777777777786C 237 17.777777777777786 237 17.777777777777786 237 100M 237 17.777777777777786z"
                                        pathFrom="M -1 140L -1 140L 39.5 140L 79 140L 118.5 140L 158 140L 197.5 140L 237 140">
                                    </path>
                                    <path id="SvgjsPath1279"
                                        d="M 0 77.77777777777777C 13.825 77.77777777777777 25.675 51.111111111111114 39.5 51.111111111111114C 53.325 51.111111111111114 65.175 60 79 60C 92.825 60 104.675 24.444444444444443 118.5 24.444444444444443C 132.325 24.444444444444443 144.175 55.55555555555556 158 55.55555555555556C 171.825 55.55555555555556 183.675 6.666666666666657 197.5 6.666666666666657C 211.325 6.666666666666657 223.175 17.777777777777786 237 17.777777777777786"
                                        fill="none" fill-opacity="1" stroke="#7367f0" stroke-opacity="1"
                                        stroke-linecap="butt" stroke-width="2.5" stroke-dasharray="0"
                                        class="apexcharts-area" index="0" clip-path="url(#gridRectMaskirs478y6)"
                                        pathTo="M 0 77.77777777777777C 13.825 77.77777777777777 25.675 51.111111111111114 39.5 51.111111111111114C 53.325 51.111111111111114 65.175 60 79 60C 92.825 60 104.675 24.444444444444443 118.5 24.444444444444443C 132.325 24.444444444444443 144.175 55.55555555555556 158 55.55555555555556C 171.825 55.55555555555556 183.675 6.666666666666657 197.5 6.666666666666657C 211.325 6.666666666666657 223.175 17.777777777777786 237 17.777777777777786"
                                        pathFrom="M -1 140L -1 140L 39.5 140L 79 140L 118.5 140L 158 140L 197.5 140L 237 140">
                                    </path>
                                    <g id="SvgjsG1272" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                        <g class="apexcharts-series-markers">
                                            <circle id="SvgjsCircle1299" r="0" cx="0" cy="0"
                                                class="apexcharts-marker ww1zgrkq9 no-pointer-events" stroke="#ffffff"
                                                fill="#7367f0" fill-opacity="1" stroke-width="2" stroke-opacity="0.9"
                                                default-marker-size="0"></circle>
                                        </g>
                                    </g>
                                </g>
                                <g id="SvgjsG1273" class="apexcharts-datalabels" data:realIndex="0"></g>
                            </g>
                            <line id="SvgjsLine1294" x1="0" y1="0" x2="237" y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                stroke-width="1" class="apexcharts-ycrosshairs"></line>
                            <line id="SvgjsLine1295" x1="0" y1="0" x2="237" y2="0" stroke-dasharray="0" stroke-width="0"
                                class="apexcharts-ycrosshairs-hidden"></line>
                            <g id="SvgjsG1296" class="apexcharts-yaxis-annotations"></g>
                            <g id="SvgjsG1297" class="apexcharts-xaxis-annotations"></g>
                            <g id="SvgjsG1298" class="apexcharts-point-annotations"></g>
                        </g>
                        <rect id="SvgjsRect1266" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                            stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                        <g id="SvgjsG1282" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                        <g id="SvgjsG1264" class="apexcharts-annotations"></g>
                    </svg>
                    <div class="apexcharts-legend" style="max-height: 50px;"></div>
                    <div class="apexcharts-tooltip apexcharts-theme-light">
                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                class="apexcharts-tooltip-marker" style="background-color: rgb(115, 103, 240);"></span>
                            <div class="apexcharts-tooltip-text"
                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                <div class="apexcharts-tooltip-y-group"><span
                                        class="apexcharts-tooltip-text-label"></span><span
                                        class="apexcharts-tooltip-text-value"></span></div>
                                <div class="apexcharts-tooltip-z-group"><span
                                        class="apexcharts-tooltip-text-z-label"></span><span
                                        class="apexcharts-tooltip-text-z-value"></span></div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                        <div class="apexcharts-yaxistooltip-text"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header flex-column align-items-start pb-0">
                <div class="avatar bg-light-warning p-50 m-0">
                    <div class="avatar-content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-package font-medium-5">
                            <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                </div>
                <h2 class="font-weight-bolder mt-1">38.4K</h2>
                <p class="card-text">Orders Received</p>
            </div>
            <div id="order-chart" style="min-height: 100px;">
                <div id="apexchartsa8f2012c" class="apexcharts-canvas apexchartsa8f2012c apexcharts-theme-light"
                    style="width: 237px; height: 100px;"><svg id="SvgjsSvg1301" width="237" height="100"
                        xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                        transform="translate(0, 0)" style="background: transparent;">
                        <g id="SvgjsG1303" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                            <defs id="SvgjsDefs1302">
                                <clipPath id="gridRectMaska8f2012c">
                                    <rect id="SvgjsRect1308" width="243.5" height="102.5" x="-3.25" y="-1.25" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                        fill="#fff"></rect>
                                </clipPath>
                                <clipPath id="gridRectMarkerMaska8f2012c">
                                    <rect id="SvgjsRect1309" width="241" height="104" x="-2" y="-2" rx="0" ry="0"
                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                    </rect>
                                </clipPath>
                                <linearGradient id="SvgjsLinearGradient1314" x1="0" y1="0" x2="0" y2="1">
                                    <stop id="SvgjsStop1315" stop-opacity="0.7" stop-color="rgba(255,159,67,0.7)"
                                        offset="0">
                                    </stop>
                                    <stop id="SvgjsStop1316" stop-opacity="0.5" stop-color="rgba(255,245,236,0.5)"
                                        offset="0.8">
                                    </stop>
                                    <stop id="SvgjsStop1317" stop-opacity="0.5" stop-color="rgba(255,245,236,0.5)"
                                        offset="1">
                                    </stop>
                                </linearGradient>
                            </defs>
                            <line id="SvgjsLine1307" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3"
                                class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4"
                                filter="none" fill-opacity="0.9" stroke-width="1"></line>
                            <g id="SvgjsG1320" class="apexcharts-xaxis" transform="translate(0, 0)">
                                <g id="SvgjsG1321" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                            </g>
                            <g id="SvgjsG1323" class="apexcharts-grid">
                                <g id="SvgjsG1324" class="apexcharts-gridlines-horizontal" style="display: none;">
                                    <line id="SvgjsLine1326" x1="0" y1="0" x2="237" y2="0" stroke="#e0e0e0"
                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1327" x1="0" y1="20" x2="237" y2="20" stroke="#e0e0e0"
                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1328" x1="0" y1="40" x2="237" y2="40" stroke="#e0e0e0"
                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1329" x1="0" y1="60" x2="237" y2="60" stroke="#e0e0e0"
                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1330" x1="0" y1="80" x2="237" y2="80" stroke="#e0e0e0"
                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1331" x1="0" y1="100" x2="237" y2="100" stroke="#e0e0e0"
                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                </g>
                                <g id="SvgjsG1325" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                <line id="SvgjsLine1333" x1="0" y1="100" x2="237" y2="100" stroke="transparent"
                                    stroke-dasharray="0"></line>
                                <line id="SvgjsLine1332" x1="0" y1="1" x2="0" y2="100" stroke="transparent"
                                    stroke-dasharray="0"></line>
                            </g>
                            <g id="SvgjsG1310" class="apexcharts-area-series apexcharts-plot-series">
                                <g id="SvgjsG1311" class="apexcharts-series" seriesName="Orders"
                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                    <path id="SvgjsPath1318"
                                        d="M 0 100L 0 60C 13.825 60 25.675 10 39.5 10C 53.325 10 65.175 80 79 80C 92.825 80 104.675 10 118.5 10C 132.325 10 144.175 90 158 90C 171.825 90 183.675 40 197.5 40C 211.325 40 223.175 80 237 80C 237 80 237 80 237 100M 237 80z"
                                        fill="url(#SvgjsLinearGradient1314)" fill-opacity="1" stroke-opacity="1"
                                        stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                        class="apexcharts-area" index="0" clip-path="url(#gridRectMaska8f2012c)"
                                        pathTo="M 0 100L 0 60C 13.825 60 25.675 10 39.5 10C 53.325 10 65.175 80 79 80C 92.825 80 104.675 10 118.5 10C 132.325 10 144.175 90 158 90C 171.825 90 183.675 40 197.5 40C 211.325 40 223.175 80 237 80C 237 80 237 80 237 100M 237 80z"
                                        pathFrom="M -1 160L -1 160L 39.5 160L 79 160L 118.5 160L 158 160L 197.5 160L 237 160">
                                    </path>
                                    <path id="SvgjsPath1319"
                                        d="M 0 60C 13.825 60 25.675 10 39.5 10C 53.325 10 65.175 80 79 80C 92.825 80 104.675 10 118.5 10C 132.325 10 144.175 90 158 90C 171.825 90 183.675 40 197.5 40C 211.325 40 223.175 80 237 80"
                                        fill="none" fill-opacity="1" stroke="#ff9f43" stroke-opacity="1"
                                        stroke-linecap="butt" stroke-width="2.5" stroke-dasharray="0"
                                        class="apexcharts-area" index="0" clip-path="url(#gridRectMaska8f2012c)"
                                        pathTo="M 0 60C 13.825 60 25.675 10 39.5 10C 53.325 10 65.175 80 79 80C 92.825 80 104.675 10 118.5 10C 132.325 10 144.175 90 158 90C 171.825 90 183.675 40 197.5 40C 211.325 40 223.175 80 237 80"
                                        pathFrom="M -1 160L -1 160L 39.5 160L 79 160L 118.5 160L 158 160L 197.5 160L 237 160">
                                    </path>
                                    <g id="SvgjsG1312" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                        <g class="apexcharts-series-markers">
                                            <circle id="SvgjsCircle1339" r="0" cx="0" cy="0"
                                                class="apexcharts-marker wjdxz9dol no-pointer-events" stroke="#ffffff"
                                                fill="#ff9f43" fill-opacity="1" stroke-width="2" stroke-opacity="0.9"
                                                default-marker-size="0"></circle>
                                        </g>
                                    </g>
                                </g>
                                <g id="SvgjsG1313" class="apexcharts-datalabels" data:realIndex="0"></g>
                            </g>
                            <line id="SvgjsLine1334" x1="0" y1="0" x2="237" y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                stroke-width="1" class="apexcharts-ycrosshairs"></line>
                            <line id="SvgjsLine1335" x1="0" y1="0" x2="237" y2="0" stroke-dasharray="0" stroke-width="0"
                                class="apexcharts-ycrosshairs-hidden"></line>
                            <g id="SvgjsG1336" class="apexcharts-yaxis-annotations"></g>
                            <g id="SvgjsG1337" class="apexcharts-xaxis-annotations"></g>
                            <g id="SvgjsG1338" class="apexcharts-point-annotations"></g>
                        </g>
                        <rect id="SvgjsRect1306" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                            stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                        <g id="SvgjsG1322" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                        <g id="SvgjsG1304" class="apexcharts-annotations"></g>
                    </svg>
                    <div class="apexcharts-legend" style="max-height: 50px;"></div>
                    <div class="apexcharts-tooltip apexcharts-theme-light">
                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                class="apexcharts-tooltip-marker" style="background-color: rgb(255, 159, 67);"></span>
                            <div class="apexcharts-tooltip-text"
                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                <div class="apexcharts-tooltip-y-group"><span
                                        class="apexcharts-tooltip-text-label"></span><span
                                        class="apexcharts-tooltip-text-value"></span></div>
                                <div class="apexcharts-tooltip-z-group"><span
                                        class="apexcharts-tooltip-text-z-label"></span><span
                                        class="apexcharts-tooltip-text-z-value"></span></div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                        <div class="apexcharts-yaxistooltip-text"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header flex-column align-items-start pb-0">
                <div class="avatar bg-light-primary p-50 m-0">
                    <div class="avatar-content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-users font-medium-5">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                </div>
                <h2 class="font-weight-bolder mt-1">756+</h2>
                <p class="card-text">Client Gained</p>
            </div>
            <div class="row">
                <div class="col-12"></div>
            </div>
            <div id="gained-chart" style="min-height: 100px;">
                <div id="apexchartsirs478y6" class="apexcharts-canvas apexchartsirs478y6 apexcharts-theme-light"
                    style="width: 100%; height: 100px;"><svg id="SvgjsSvg1261" width="237" height="100"
                        xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                        transform="translate(0, 0)" style="background: transparent;">
                        <g id="SvgjsG1263" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                            <defs id="SvgjsDefs1262">
                                <clipPath id="gridRectMaskirs478y6">
                                    <rect id="SvgjsRect1268" width="243.5" height="102.5" x="-3.25" y="-1.25" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                        fill="#fff"></rect>
                                </clipPath>
                                <clipPath id="gridRectMarkerMaskirs478y6">
                                    <rect id="SvgjsRect1269" width="241" height="104" x="-2" y="-2" rx="0" ry="0"
                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                    </rect>
                                </clipPath>
                                <linearGradient id="SvgjsLinearGradient1274" x1="0" y1="0" x2="0" y2="1">
                                    <stop id="SvgjsStop1275" stop-opacity="0.7" stop-color="rgba(115,103,240,0.7)"
                                        offset="0">
                                    </stop>
                                    <stop id="SvgjsStop1276" stop-opacity="0.5" stop-color="rgba(241,240,254,0.5)"
                                        offset="0.8">
                                    </stop>
                                    <stop id="SvgjsStop1277" stop-opacity="0.5" stop-color="rgba(241,240,254,0.5)"
                                        offset="1">
                                    </stop>
                                </linearGradient>
                            </defs>
                            <line id="SvgjsLine1267" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3"
                                class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4"
                                filter="none" fill-opacity="0.9" stroke-width="1"></line>
                            <g id="SvgjsG1280" class="apexcharts-xaxis" transform="translate(0, 0)">
                                <g id="SvgjsG1281" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                            </g>
                            <g id="SvgjsG1283" class="apexcharts-grid">
                                <g id="SvgjsG1284" class="apexcharts-gridlines-horizontal" style="display: none;">
                                    <line id="SvgjsLine1286" x1="0" y1="0" x2="237" y2="0" stroke="#e0e0e0"
                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1287" x1="0" y1="20" x2="237" y2="20" stroke="#e0e0e0"
                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1288" x1="0" y1="40" x2="237" y2="40" stroke="#e0e0e0"
                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1289" x1="0" y1="60" x2="237" y2="60" stroke="#e0e0e0"
                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1290" x1="0" y1="80" x2="237" y2="80" stroke="#e0e0e0"
                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1291" x1="0" y1="100" x2="237" y2="100" stroke="#e0e0e0"
                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                </g>
                                <g id="SvgjsG1285" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                <line id="SvgjsLine1293" x1="0" y1="100" x2="237" y2="100" stroke="transparent"
                                    stroke-dasharray="0"></line>
                                <line id="SvgjsLine1292" x1="0" y1="1" x2="0" y2="100" stroke="transparent"
                                    stroke-dasharray="0"></line>
                            </g>
                            <g id="SvgjsG1270" class="apexcharts-area-series apexcharts-plot-series">
                                <g id="SvgjsG1271" class="apexcharts-series" seriesName="Subscribers"
                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                    <path id="SvgjsPath1278"
                                        d="M 0 100L 0 77.77777777777777C 13.825 77.77777777777777 25.675 51.111111111111114 39.5 51.111111111111114C 53.325 51.111111111111114 65.175 60 79 60C 92.825 60 104.675 24.444444444444443 118.5 24.444444444444443C 132.325 24.444444444444443 144.175 55.55555555555556 158 55.55555555555556C 171.825 55.55555555555556 183.675 6.666666666666657 197.5 6.666666666666657C 211.325 6.666666666666657 223.175 17.777777777777786 237 17.777777777777786C 237 17.777777777777786 237 17.777777777777786 237 100M 237 17.777777777777786z"
                                        fill="url(#SvgjsLinearGradient1274)" fill-opacity="1" stroke-opacity="1"
                                        stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                        class="apexcharts-area" index="0" clip-path="url(#gridRectMaskirs478y6)"
                                        pathTo="M 0 100L 0 77.77777777777777C 13.825 77.77777777777777 25.675 51.111111111111114 39.5 51.111111111111114C 53.325 51.111111111111114 65.175 60 79 60C 92.825 60 104.675 24.444444444444443 118.5 24.444444444444443C 132.325 24.444444444444443 144.175 55.55555555555556 158 55.55555555555556C 171.825 55.55555555555556 183.675 6.666666666666657 197.5 6.666666666666657C 211.325 6.666666666666657 223.175 17.777777777777786 237 17.777777777777786C 237 17.777777777777786 237 17.777777777777786 237 100M 237 17.777777777777786z"
                                        pathFrom="M -1 140L -1 140L 39.5 140L 79 140L 118.5 140L 158 140L 197.5 140L 237 140">
                                    </path>
                                    <path id="SvgjsPath1279"
                                        d="M 0 77.77777777777777C 13.825 77.77777777777777 25.675 51.111111111111114 39.5 51.111111111111114C 53.325 51.111111111111114 65.175 60 79 60C 92.825 60 104.675 24.444444444444443 118.5 24.444444444444443C 132.325 24.444444444444443 144.175 55.55555555555556 158 55.55555555555556C 171.825 55.55555555555556 183.675 6.666666666666657 197.5 6.666666666666657C 211.325 6.666666666666657 223.175 17.777777777777786 237 17.777777777777786"
                                        fill="none" fill-opacity="1" stroke="#7367f0" stroke-opacity="1"
                                        stroke-linecap="butt" stroke-width="2.5" stroke-dasharray="0"
                                        class="apexcharts-area" index="0" clip-path="url(#gridRectMaskirs478y6)"
                                        pathTo="M 0 77.77777777777777C 13.825 77.77777777777777 25.675 51.111111111111114 39.5 51.111111111111114C 53.325 51.111111111111114 65.175 60 79 60C 92.825 60 104.675 24.444444444444443 118.5 24.444444444444443C 132.325 24.444444444444443 144.175 55.55555555555556 158 55.55555555555556C 171.825 55.55555555555556 183.675 6.666666666666657 197.5 6.666666666666657C 211.325 6.666666666666657 223.175 17.777777777777786 237 17.777777777777786"
                                        pathFrom="M -1 140L -1 140L 39.5 140L 79 140L 118.5 140L 158 140L 197.5 140L 237 140">
                                    </path>
                                    <g id="SvgjsG1272" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                        <g class="apexcharts-series-markers">
                                            <circle id="SvgjsCircle1299" r="0" cx="0" cy="0"
                                                class="apexcharts-marker ww1zgrkq9 no-pointer-events" stroke="#ffffff"
                                                fill="#7367f0" fill-opacity="1" stroke-width="2" stroke-opacity="0.9"
                                                default-marker-size="0"></circle>
                                        </g>
                                    </g>
                                </g>
                                <g id="SvgjsG1273" class="apexcharts-datalabels" data:realIndex="0"></g>
                            </g>
                            <line id="SvgjsLine1294" x1="0" y1="0" x2="237" y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                stroke-width="1" class="apexcharts-ycrosshairs"></line>
                            <line id="SvgjsLine1295" x1="0" y1="0" x2="237" y2="0" stroke-dasharray="0" stroke-width="0"
                                class="apexcharts-ycrosshairs-hidden"></line>
                            <g id="SvgjsG1296" class="apexcharts-yaxis-annotations"></g>
                            <g id="SvgjsG1297" class="apexcharts-xaxis-annotations"></g>
                            <g id="SvgjsG1298" class="apexcharts-point-annotations"></g>
                        </g>
                        <rect id="SvgjsRect1266" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                            stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                        <g id="SvgjsG1282" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                        <g id="SvgjsG1264" class="apexcharts-annotations"></g>
                    </svg>
                    <div class="apexcharts-legend" style="max-height: 50px;"></div>
                    <div class="apexcharts-tooltip apexcharts-theme-light">
                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                class="apexcharts-tooltip-marker" style="background-color: rgb(115, 103, 240);"></span>
                            <div class="apexcharts-tooltip-text"
                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                <div class="apexcharts-tooltip-y-group"><span
                                        class="apexcharts-tooltip-text-label"></span><span
                                        class="apexcharts-tooltip-text-value"></span></div>
                                <div class="apexcharts-tooltip-z-group"><span
                                        class="apexcharts-tooltip-text-z-label"></span><span
                                        class="apexcharts-tooltip-text-z-value"></span></div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                        <div class="apexcharts-yaxistooltip-text"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row match-height">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="row pb-50">
                    <div
                        class="col-sm-6 col-12 d-flex justify-content-between flex-column order-sm-1 order-2 mt-1 mt-sm-0">
                        <div class="mb-1 mb-sm-0">
                            <h2 class="font-weight-bolder mb-25">2.7K</h2>
                            <p class="card-text font-weight-bold mb-2">Avg Sessions</p>
                            <div class="font-medium-2">
                                <span class="text-success mr-25">+5.2%</span>
                                <span>vs last 7 days</span>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary waves-effect waves-float waves-light">View
                            Details</button>
                    </div>
                    <div
                        class="col-sm-6 col-12 d-flex justify-content-between flex-column text-right order-sm-2 order-1">
                        <div class="dropdown chart-dropdown">
                            <button
                                class="btn btn-sm border-0 dropdown-toggle p-50 waves-effect waves-float waves-light"
                                type="button" id="dropdownItem5" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Last 7 Days
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem5">
                                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                            </div>
                        </div>
                        <div id="avg-sessions-chart" style="min-height: 200px;">
                            <div id="apexcharts81ocna1g"
                                class="apexcharts-canvas apexcharts81ocna1g apexcharts-theme-light"
                                style="width: 216px; height: 200px;"><svg id="SvgjsSvg1870" width="216" height="200"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG1872" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(19.799999999999997, 0)">
                                        <defs id="SvgjsDefs1871">
                                            <linearGradient id="SvgjsLinearGradient1875" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1876" stop-opacity="0.4"
                                                    stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                <stop id="SvgjsStop1877" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop1878" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            </linearGradient>
                                            <clipPath id="gridRectMask81ocna1g">
                                                <rect id="SvgjsRect1880" width="220.00000000000003" height="200"
                                                    x="-17.799999999999997" y="0" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                                </rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMask81ocna1g">
                                                <rect id="SvgjsRect1881" width="188.4" height="204" x="-2" y="-2" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect id="SvgjsRect1879" width="13.83" height="200" x="0" y="0" rx="0" ry="0"
                                            opacity="1" stroke-width="0" stroke-dasharray="3"
                                            fill="url(#SvgjsLinearGradient1875)" class="apexcharts-xcrosshairs" y2="200"
                                            filter="none" fill-opacity="0.9"></rect>
                                        <g id="SvgjsG1892" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1893" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"></g>
                                        </g>
                                        <g id="SvgjsG1895" class="apexcharts-grid">
                                            <g id="SvgjsG1896" class="apexcharts-gridlines-horizontal"
                                                style="display: none;">
                                                <line id="SvgjsLine1898" x1="-15.799999999999999" y1="0"
                                                    x2="200.20000000000002" y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1899" x1="-15.799999999999999" y1="50"
                                                    x2="200.20000000000002" y2="50" stroke="#e0e0e0"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1900" x1="-15.799999999999999" y1="100"
                                                    x2="200.20000000000002" y2="100" stroke="#e0e0e0"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1901" x1="-15.799999999999999" y1="150"
                                                    x2="200.20000000000002" y2="150" stroke="#e0e0e0"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1902" x1="-15.799999999999999" y1="200"
                                                    x2="200.20000000000002" y2="200" stroke="#e0e0e0"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1897" class="apexcharts-gridlines-vertical"
                                                style="display: none;">
                                            </g>
                                            <line id="SvgjsLine1904" x1="0" y1="200" x2="184.4" y2="200"
                                                stroke="transparent" stroke-dasharray="0"></line>
                                            <line id="SvgjsLine1903" x1="0" y1="1" x2="0" y2="200" stroke="transparent"
                                                stroke-dasharray="0"></line>
                                        </g>
                                        <g id="SvgjsG1882" class="apexcharts-bar-series apexcharts-plot-series">
                                            <g id="SvgjsG1883" class="apexcharts-series" rel="1" seriesName="Sessions"
                                                data:realIndex="0">
                                                <path id="SvgjsPath1885"
                                                    d="M -6.915 200L -6.915 140.9575Q 0 134.04250000000002 6.915 140.9575L 6.915 140.9575L 6.915 200L 6.915 200z"
                                                    fill="rgba(235,240,247,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="square" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask81ocna1g)"
                                                    pathTo="M -6.915 200L -6.915 140.9575Q 0 134.04250000000002 6.915 140.9575L 6.915 140.9575L 6.915 200L 6.915 200z"
                                                    pathFrom="M -6.915 200L -6.915 200L 6.915 200L 6.915 200L 6.915 200L -6.915 200"
                                                    cy="137.5" cx="6.915" j="0" val="75" barHeight="62.5"
                                                    barWidth="13.83">
                                                </path>
                                                <path id="SvgjsPath1886"
                                                    d="M 23.818333333333335 200L 23.818333333333335 99.29083333333332Q 30.733333333333334 92.37583333333332 37.64833333333333 99.29083333333332L 37.64833333333333 99.29083333333332L 37.64833333333333 200L 37.64833333333333 200z"
                                                    fill="rgba(235,240,247,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="square" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask81ocna1g)"
                                                    pathTo="M 23.818333333333335 200L 23.818333333333335 99.29083333333332Q 30.733333333333334 92.37583333333332 37.64833333333333 99.29083333333332L 37.64833333333333 99.29083333333332L 37.64833333333333 200L 37.64833333333333 200z"
                                                    pathFrom="M 23.818333333333335 200L 23.818333333333335 200L 37.64833333333333 200L 37.64833333333333 200L 37.64833333333333 200L 23.818333333333335 200"
                                                    cy="95.83333333333333" cx="37.64833333333333" j="1" val="125"
                                                    barHeight="104.16666666666667" barWidth="13.83"></path>
                                                <path id="SvgjsPath1887"
                                                    d="M 54.55166666666667 200L 54.55166666666667 15.9575Q 61.46666666666667 9.0425 68.38166666666667 15.9575L 68.38166666666667 15.9575L 68.38166666666667 200L 68.38166666666667 200z"
                                                    fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="square" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask81ocna1g)"
                                                    pathTo="M 54.55166666666667 200L 54.55166666666667 15.9575Q 61.46666666666667 9.0425 68.38166666666667 15.9575L 68.38166666666667 15.9575L 68.38166666666667 200L 68.38166666666667 200z"
                                                    pathFrom="M 54.55166666666667 200L 54.55166666666667 200L 68.38166666666667 200L 68.38166666666667 200L 68.38166666666667 200L 54.55166666666667 200"
                                                    cy="12.5" cx="68.38166666666667" j="2" val="225" barHeight="187.5"
                                                    barWidth="13.83"></path>
                                                <path id="SvgjsPath1888"
                                                    d="M 85.285 200L 85.285 57.62416666666666Q 92.2 50.70916666666666 99.115 57.62416666666666L 99.115 57.62416666666666L 99.115 200L 99.115 200z"
                                                    fill="rgba(235,240,247,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="square" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask81ocna1g)"
                                                    pathTo="M 85.285 200L 85.285 57.62416666666666Q 92.2 50.70916666666666 99.115 57.62416666666666L 99.115 57.62416666666666L 99.115 200L 99.115 200z"
                                                    pathFrom="M 85.285 200L 85.285 200L 99.115 200L 99.115 200L 99.115 200L 85.285 200"
                                                    cy="54.16666666666666" cx="99.115" j="3" val="175"
                                                    barHeight="145.83333333333334" barWidth="13.83"></path>
                                                <path id="SvgjsPath1889"
                                                    d="M 116.01833333333333 200L 116.01833333333333 99.29083333333332Q 122.93333333333334 92.37583333333332 129.84833333333333 99.29083333333332L 129.84833333333333 99.29083333333332L 129.84833333333333 200L 129.84833333333333 200z"
                                                    fill="rgba(235,240,247,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="square" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask81ocna1g)"
                                                    pathTo="M 116.01833333333333 200L 116.01833333333333 99.29083333333332Q 122.93333333333334 92.37583333333332 129.84833333333333 99.29083333333332L 129.84833333333333 99.29083333333332L 129.84833333333333 200L 129.84833333333333 200z"
                                                    pathFrom="M 116.01833333333333 200L 116.01833333333333 200L 129.84833333333333 200L 129.84833333333333 200L 129.84833333333333 200L 116.01833333333333 200"
                                                    cy="95.83333333333333" cx="129.84833333333333" j="4" val="125"
                                                    barHeight="104.16666666666667" barWidth="13.83"></path>
                                                <path id="SvgjsPath1890"
                                                    d="M 146.7516666666667 200L 146.7516666666667 140.9575Q 153.66666666666669 134.04250000000002 160.5816666666667 140.9575L 160.5816666666667 140.9575L 160.5816666666667 200L 160.5816666666667 200z"
                                                    fill="rgba(235,240,247,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="square" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask81ocna1g)"
                                                    pathTo="M 146.7516666666667 200L 146.7516666666667 140.9575Q 153.66666666666669 134.04250000000002 160.5816666666667 140.9575L 160.5816666666667 140.9575L 160.5816666666667 200L 160.5816666666667 200z"
                                                    pathFrom="M 146.7516666666667 200L 146.7516666666667 200L 160.5816666666667 200L 160.5816666666667 200L 160.5816666666667 200L 146.7516666666667 200"
                                                    cy="137.5" cx="160.5816666666667" j="5" val="75" barHeight="62.5"
                                                    barWidth="13.83"></path>
                                                <path id="SvgjsPath1891"
                                                    d="M 177.485 200L 177.485 182.62416666666667Q 184.4 175.70916666666668 191.31500000000003 182.62416666666667L 191.31500000000003 182.62416666666667L 191.31500000000003 200L 191.31500000000003 200z"
                                                    fill="rgba(235,240,247,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="square" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask81ocna1g)"
                                                    pathTo="M 177.485 200L 177.485 182.62416666666667Q 184.4 175.70916666666668 191.31500000000003 182.62416666666667L 191.31500000000003 182.62416666666667L 191.31500000000003 200L 191.31500000000003 200z"
                                                    pathFrom="M 177.485 200L 177.485 200L 191.31500000000003 200L 191.31500000000003 200L 191.31500000000003 200L 177.485 200"
                                                    cy="179.16666666666666" cx="191.31500000000003" j="6" val="25"
                                                    barHeight="20.833333333333336" barWidth="13.83"></path>
                                            </g>
                                            <g id="SvgjsG1884" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        </g>
                                        <line id="SvgjsLine1905" x1="-15.799999999999999" y1="0" x2="200.20000000000002"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1906" x1="-15.799999999999999" y1="0" x2="200.20000000000002"
                                            y2="0" stroke-dasharray="0" stroke-width="0"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1907" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1908" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1909" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <g id="SvgjsG1894" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)">
                                    </g>
                                    <g id="SvgjsG1873" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend" style="max-height: 100px;"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(235, 240, 247);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label"></span><span
                                                    class="apexcharts-tooltip-text-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row avg-sessions pt-50">
                    <div class="col-6 mb-2">
                        <p class="mb-50">Goal: $100000</p>
                        <div class="progress progress-bar-primary" style="height: 6px">
                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50"
                                aria-valuemax="100" style="width: 50%"></div>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <p class="mb-50">Users: 100K</p>
                        <div class="progress progress-bar-warning" style="height: 6px">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60"
                                aria-valuemax="100" style="width: 60%"></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <p class="mb-50">Retention: 90%</p>
                        <div class="progress progress-bar-danger" style="height: 6px">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="70"
                                aria-valuemax="100" style="width: 70%"></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <p class="mb-50">Duration: 1yr</p>
                        <div class="progress progress-bar-success" style="height: 6px">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="90"
                                aria-valuemax="100" style="width: 90%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between pb-0">
                <h4 class="card-title">Hotel Tracker</h4>
                <div class="dropdown chart-dropdown">
                    <button class="btn btn-sm border-0 dropdown-toggle p-50 waves-effect waves-float waves-light"
                        type="button" id="dropdownItem4" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Last 7 Days
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem4">
                        <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                        <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                        <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-2 col-12 d-flex flex-column flex-wrap text-center">
                        <h1 class="font-large-2 font-weight-bolder mt-2 mb-0">56</h1>
                        <p class="card-text">CheckIn</p>
                    </div>
                    <div class="col-sm-10 col-12 d-flex justify-content-center">
                        <div id="support-trackers-chart" style="min-height: 253.208px;">
                            <div id="apexchartse8kadhy4"
                                class="apexcharts-canvas apexchartse8kadhy4 apexcharts-theme-light"
                                style="width: 300px; height: 253.208px;"><svg id="SvgjsSvg2425" width="300"
                                    height="253.20833333333337" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG2427" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(28, 20)">
                                        <defs id="SvgjsDefs2426">
                                            <clipPath id="gridRectMaske8kadhy4">
                                                <rect id="SvgjsRect2429" width="252" height="270" x="-3" y="-1" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMaske8kadhy4">
                                                <rect id="SvgjsRect2430" width="250" height="272" x="-2" y="-2" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient2435" x1="0" y1="1" x2="1" y2="1">
                                                <stop id="SvgjsStop2436" stop-opacity="1"
                                                    stop-color="rgba(115,103,240,1)" offset="0"></stop>
                                                <stop id="SvgjsStop2437" stop-opacity="1"
                                                    stop-color="rgba(255,255,255,1)" offset="1"></stop>
                                                <stop id="SvgjsStop2438" stop-opacity="1"
                                                    stop-color="rgba(255,255,255,1)" offset="1"></stop>
                                            </linearGradient>
                                            <linearGradient id="SvgjsLinearGradient2446" x1="0" y1="1" x2="1" y2="1">
                                                <stop id="SvgjsStop2447" stop-opacity="1"
                                                    stop-color="rgba(115,103,240,1)" offset="0"></stop>
                                                <stop id="SvgjsStop2448" stop-opacity="1" stop-color="rgba(234,84,85,1)"
                                                    offset="1"></stop>
                                                <stop id="SvgjsStop2449" stop-opacity="1" stop-color="rgba(234,84,85,1)"
                                                    offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g id="SvgjsG2431" class="apexcharts-radialbar">
                                            <g id="SvgjsG2432">
                                                <g id="SvgjsG2433" class="apexcharts-tracks">
                                                    <g id="SvgjsG2434"
                                                        class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                        <path id="apexcharts-radialbarTrack-0"
                                                            d="M 75.7551829268292 215.83042356502926 A 94.48963414634149 94.48963414634149 0 1 1 170.24481707317074 215.83042356502926"
                                                            fill="none" fill-opacity="1" stroke="rgba(255,255,255,0.85)"
                                                            stroke-opacity="1" stroke-linecap="butt"
                                                            stroke-width="16.828048780487805" stroke-dasharray="0"
                                                            class="apexcharts-radialbar-area"
                                                            data:pathOrig="M 75.7551829268292 215.83042356502926 A 94.48963414634149 94.48963414634149 0 1 1 170.24481707317074 215.83042356502926">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2440">
                                                    <g id="SvgjsG2445"
                                                        class="apexcharts-series apexcharts-radial-series"
                                                        seriesName="CompletedxTickets" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath2450"
                                                            d="M 75.7551829268292 215.83042356502926 A 94.48963414634149 94.48963414634149 0 1 1 216.3263099534417 148.78143536953007"
                                                            fill="none" fill-opacity="0.85"
                                                            stroke="url(#SvgjsLinearGradient2446)" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="16.828048780487805"
                                                            stroke-dasharray="8"
                                                            class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                            data:angle="249" data:value="83" index="0" j="0"
                                                            data:pathOrig="M 75.7551829268292 215.83042356502926 A 94.48963414634149 94.48963414634149 0 1 1 216.3263099534417 148.78143536953007">
                                                        </path>
                                                    </g>
                                                    <circle id="SvgjsCircle2441" r="81.07560975609758" cx="123" cy="134"
                                                        class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                    <g id="SvgjsG2442" class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)" style="opacity: 1;"><text
                                                            id="SvgjsText2443"
                                                            font-family="Helvetica, Arial, sans-serif" x="123" y="129"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="1rem" font-weight="400" fill="#5e5873"
                                                            class="apexcharts-text apexcharts-datalabel-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">Completed
                                                            CheckIn</text><text id="SvgjsText2444"
                                                            font-family="Helvetica, Arial, sans-serif" x="123" y="165"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="1.714rem" font-weight="400" fill="#5e5873"
                                                            class="apexcharts-text apexcharts-datalabel-value"
                                                            style="font-family: Helvetica, Arial, sans-serif;">83%</text>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine2451" x1="0" y1="0" x2="246" y2="0" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine2452" x1="0" y1="0" x2="246" y2="0" stroke-dasharray="0"
                                            stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g id="SvgjsG2428" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-1">
                    <div class="text-center">
                        <p class="card-text mb-50">Rservasion</p>
                        <span class="font-large-1 font-weight-bold">29</span>
                    </div>
                    <div class="text-center">
                        <p class="card-text mb-50">Guest</p>
                        <span class="font-large-1 font-weight-bold">33</span>
                    </div>
                    <div class="text-center">
                        <p class="card-text mb-50">Client</p>
                        <span class="font-large-1 font-weight-bold">45</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection