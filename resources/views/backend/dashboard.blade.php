@extends('backend.layout.backend')

@section('title')
    Administration Karibu Kwako
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h4 class="nk-block-title page-title">Dashboard</h4>
                    </div>
                </div>
            </div>
            <div class="nk-block">
                <div class="row g-gs">
                    @include('backend.components._statistic', [
                        'username' => "Apartment",
                        'amount' => \App\Models\House::count()
                    ])
                    @include('backend.components._statistic', [
                       'username' => "Reservation",
                       'amount' => \App\Models\Reservation::count()
                   ])
                    @include('backend.components._statistic', [
                        'username' => "Client",
                        'amount' => \App\Models\Client::count()
                    ])

                    @include('backend.components._statistic', [
                       'username' => "Transaction",
                       'amount' => \App\Models\Transaction::count()
                   ])

                    <div class="col-xxl-8 col-lg-12">
                        <div class="card h-100">
                            <div class="nk-ecwg nk-ecwg5">
                                <div class="card-inner">
                                    <div class="card-title-group align-start pb-3 g-2">
                                        <div class="card-title">
                                            <h6 class="title">Reservation par Jours</h6>
                                        </div>
                                    </div>
                                    <div class="nk-ecwg5-ck">
                                        <canvas
                                            class="lms-line-chart-s4 chartjs-render-monitor"
                                            id="storeVisitors"
                                            style="display: block; width: 433px; height: 440px;"
                                            width="433"
                                            height="440">
                                        </canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-md-6"><div class="card h-100"><div class="card-inner"><div class="card-title-group mb-2"><div class="card-title"><h6 class="title">Store Statistics</h6></div></div><ul class="nk-store-statistics"><li class="item"><div class="info"><div class="title">Orders</div><div class="count">1,795</div></div><em class="icon bg-primary-dim ni ni-bag"></em></li><li class="item"><div class="info"><div class="title">Customers</div><div class="count">2,327</div></div><em class="icon bg-info-dim ni ni-users"></em></li><li class="item"><div class="info"><div class="title">Products</div><div class="count">674</div></div><em class="icon bg-pink-dim ni ni-box"></em></li><li class="item"><div class="info"><div class="title">Categories</div><div class="count">68</div></div><em class="icon bg-purple-dim ni ni-server"></em></li></ul></div></div></div>
                    <div class="col-xxl-4 col-md-6"><div class="card card-full overflow-hidden"><div class="nk-ecwg nk-ecwg4 h-100"><div class="card-inner flex-grow-1"><div class="card-title-group mb-4"><div class="card-title"><h6 class="title">Traffic Sources</h6></div><div class="card-tools"><div class="dropdown"><a href="#" class="dropdown-toggle link link-light link-sm dropdown-indicator" data-bs-toggle="dropdown">30 Days</a><div class="dropdown-menu dropdown-menu-sm dropdown-menu-end"><ul class="link-list-opt no-bdr"><li><a href="#"><span>15 Days</span></a></li><li><a href="#" class="active"><span>30 Days</span></a></li><li><a href="#"><span>3 Months</span></a></li></ul></div></div></div></div><div class="data-group"><div class="nk-ecwg4-ck"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div><canvas class="lms-doughnut-s1 chartjs-render-monitor" id="trafficSources" style="display: block; width: 180px; height: 180px;" width="180" height="180"></canvas></div><ul class="nk-ecwg4-legends"><li><div class="title"><span class="dot dot-lg sq" data-bg="#9cabff" style="background: rgb(156, 171, 255) none repeat scroll 0% 0%;"></span><span>Organic Search</span></div><div class="amount amount-xs">4,305</div></li><li><div class="title"><span class="dot dot-lg sq" data-bg="#ffa9ce" style="background: rgb(255, 169, 206) none repeat scroll 0% 0%;"></span><span>Referrals</span></div><div class="amount amount-xs">482</div></li><li><div class="title"><span class="dot dot-lg sq" data-bg="#b8acff" style="background: rgb(184, 172, 255) none repeat scroll 0% 0%;"></span><span>Social Media</span></div><div class="amount amount-xs">859</div></li><li><div class="title"><span class="dot dot-lg sq" data-bg="#f9db7b" style="background: rgb(249, 219, 123) none repeat scroll 0% 0%;"></span><span>Others</span></div><div class="amount amount-xs">138</div></li></ul></div></div><div class="card-inner card-inner-md bg-light"><div class="card-note"><em class="icon ni ni-info-fill"></em><span>Traffic channels have beed generating the most traffics over past days.</span></div></div></div></div></div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script>
        $(function(){

            const cData = JSON.parse({{ $data['chart_data'] }});
            const ctx = $("#storeVisitors");

            const data = {
                labels: cData.label,
                datasets: [
                    {
                        data: cData.data,
                        backgroundColor: [
                            "#DEB887",
                            "#A9A9A9",
                            "#DC143C",
                            "#F4A460",
                            "#2E8B57",
                            "#1D7A46",
                            "#CDA776",
                        ],
                        borderColor: [
                            "#CDA776",
                            "#989898",
                            "#CB252B",
                            "#E39371",
                            "#1D7A46",
                            "#F4A460",
                            "#CDA776",
                        ],
                        borderWidth: [1, 1, 1, 1, 1, 1, 1]
                    }
                ]
            };

            const options = {
                responsive: true,
                title: {
                    display: true,
                    position: "top",
                    text: "Last Week Registered Users -  Day Wise Count",
                    fontSize: 18,
                    fontColor: "#111"
                },
                legend: {
                    display: true,
                    position: "bottom",
                    labels: {
                        fontColor: "#333",
                        fontSize: 16
                    }
                }
            };

            const chart1 = new Chart(ctx, {
                type: "pie",
                data: data,
                options: options
            });
        });
    </script>
@endsection
