<div id="root" class="relative bg-blueGray-50">
    {{$Page = ''}}
    @include('layouts.admin.sidebar')
    <div class="relative md:ml-64 bg-blueGray-50">
      
      <!-- Header -->


      <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
        <div class="px-4 md:px-10 mx-auto w-full">
          <div>
            <!-- Card stats -->
            @include('layouts.admin.cardstats')
          </div>
        </div>
      </div>
      <div class="px-4 md:px-10 mx-auto w-full -m-24">
        <div class="flex flex-wrap">
          <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 downside shadow-lg rounded bg-blueGray-700">
              <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                <div class="flex flex-wrap items-center">
                  <div class="relative w-full max-w-full flex-grow flex-1">
                    <h6 class="uppercase text-blueGray-100 mb-1 text-xs font-semibold">
                      Overview
                    </h6>
                    <h2 class="text-white text-xl font-semibold">
                      Sales value
                    </h2>
                  </div>
                </div>
              </div>
              <div class="p-4 flex-auto">
                <!-- Chart -->
                <div class="relative h-350-px">
                  <canvas style="height: 350px" id="line-chart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full xl:w-4/12 px-4">
            <div class="relative flex flex-col min-w-0 break-words downside bg-white w-full mb-6 shadow-lg rounded">
              <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                <div class="flex flex-wrap items-center">
                  <div class="relative w-full max-w-full flex-grow flex-1">
                    <h6 class="uppercase text-blueGray-400 mb-1 text-xs font-semibold">
                      Costomers
                    </h6>
                    <h2 class="text-blueGray-700 text-xl font-semibold">
                      Top customers Bookings
                    </h2>
                  </div>
                </div>
              </div>
              <div class="p-4 flex-auto">
                <!-- Chart -->
                <div class="relative h-350-px">
                  <canvas style="height:350px" id="bar-chart"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap mt-4">
          <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4 ">
            <div class="relative flex flex-col min-w-0 break-words downside bg-white w-full mb-6 shadow-lg rounded">

              <div class="rounded-t mb-0 px-4 bg-pink-900 py-3 bg-transparent">
                <div class="flex flex-wrap items-center">
                  <div class="relative w-full max-w-full flex-grow flex-1">
                    <h6 class="uppercase text-blueGray-100 mb-1 text-xs font-semibold">
                      Performance
                    </h6>
                    <h2 class="text-white  text-xl font-semibold">
                      Room Booked Charts
                    </h2>
                  </div>
                </div>
              </div>
              <div class="p-4 flex-auto">
                <!-- Chart -->
                <div class="relative h-350-px">
                  <canvas style="height: 600px" id="donut"></canvas>
                </div>
              </div>
            </div>

          </div>
          <div class="w-full xl:w-4/12 px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
              <div class="rounded-t mb-0 px-4 py-3 border-0">
                <div class="flex flex-wrap items-center">
                  <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-base text-blueGray-700">
                      Social traffic
                    </h3>
                  </div>
                  <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                    <button
                      class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                      type="button">
                      See all
                    </button>
                  </div>
                </div>
              </div>
              <div class="block w-full overflow-x-auto">
                <!-- Projects table -->
                <table class="items-center w-full bg-transparent border-collapse">
                  <thead class="thead-light">
                    <tr>
                      <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Referral
                      </th>
                      <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Visitors
                      </th>
                      <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th
                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        Facebook
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        1,480
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">60%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                              <div style="width: 60%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500">
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th
                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        Facebook
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        5,480
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">70%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-emerald-200">
                              <div style="width: 70%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500">
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th
                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        Google
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        4,807
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">80%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-purple-200">
                              <div style="width: 80%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-500">
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th
                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        Instagram
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        3,678
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">75%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-lightBlue-200">
                              <div style="width: 75%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-lightBlue-500">
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th
                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        twitter
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        2,645
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">30%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-orange-200">
                              <div style="width: 30%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500">
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        @include('layouts.footer')
      </div>
    </div>

    <script>
      window.addEventListener("scroll", function () {
             let header = document.querySelector("sidebar");
             header.classList.toggle("md:top-8", window.scrollY > 52)
         })
 </script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" charset="utf-8"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script type="text/javascript" defer>
      /* Make dynamic date appear */
        var _labels= {!! json_encode($bookingslabels)  !!};
        var _data= {!!  json_encode($bookingsdata)  !!};
          var _rlabels= {!! json_encode($roomslabels)  !!};
        var _rdata= {!!  json_encode($roomsdata)  !!};
          var _userslabels= {!! json_encode($costomerslabels)  !!};
        var _usersdata= {!!  json_encode($costomersdata)  !!};
       
          (function () {
            if (document.getElementById("get-current-year")) {
              document.getElementById(
                "get-current-year"
              ).innerHTML = new Date().getFullYear();
            }
          })();
          /* Sidebar - Side navigation menu on mobile/responsive mode */
          function toggleNavbar(collapseID) {
            document.getElementById(collapseID).classList.toggle("hidden");
            document.getElementById(collapseID).classList.toggle("bg-white");
            document.getElementById(collapseID).classList.toggle("m-2");
            document.getElementById(collapseID).classList.toggle("py-3");
            document.getElementById(collapseID).classList.toggle("px-6");
          }
         
    
          (function () {
            /* Chart initialisations */
            /* Line Chart */
            var config = {
              type: "line",
              data: {
                labels:_labels,
                datasets: [
                  {
                    label: "Number of Room Booked",
                    backgroundColor: "#4c51bf",
                    borderColor: "#4c51bf",
                    data: _data,
                    fill: false,
                  },
                //   {
                //     label: new Date().getFullYear() - 1,
                //     fill: false,
                //     backgroundColor: "#fff",
                //     borderColor: "#fff",
                //     data: [40, 68, 86, 74, 56, 60, 87],
                //   },
                ],
              },
              options: {
                maintainAspectRatio: false,
                responsive: true,
                title: {
                  display: false,
                  text: "Sales Charts",
                  fontColor: "white",
                },
                legend: {
                  labels: {
                    fontColor: "white",
                  },
                  align: "end",
                  position: "bottom",
                },
                tooltips: {
                  mode: "index",
                  intersect: false,
                },
                hover: {
                  mode: "nearest",
                  intersect: true,
                },
                scales: {
                  xAxes: [
                    {
                      ticks: {
                        fontColor: "rgba(255,255,255,.7)",
                      },
                      display: true,
                      scaleLabel: {
                        display: false,
                        labelString: "Month",
                        fontColor: "white",
                      },
                      gridLines: {
                        display: false,
                        borderDash: [2],
                        borderDashOffset: [2],
                        color: "rgba(33, 37, 41, 0.3)",
                        zeroLineColor: "rgba(0, 0, 0, 0)",
                        zeroLineBorderDash: [2],
                        zeroLineBorderDashOffset: [2],
                      },
                    },
                  ],
                  yAxes: [
                    {
                      ticks: {
                        fontColor: "rgba(255,255,255,.7)",
                      },
                      display: true,
                      scaleLabel: {
                        display: false,
                        labelString: "Value",
                        fontColor: "white",
                      },
                      gridLines: {
                        borderDash: [3],
                        borderDashOffset: [3],
                        drawBorder: false,
                        color: "rgba(255, 255, 255, 0.15)",
                        zeroLineColor: "rgba(33, 37, 41, 0)",
                        zeroLineBorderDash: [2],
                        zeroLineBorderDashOffset: [2],
                      },
                    },
                  ],
                },
              },
            };

            var ctx = document.getElementById("line-chart").getContext("2d");
            window.myLine = new Chart(ctx, config);
    
            /* Bar Chart */
            config = {
              type: "bar",
              data: {
                labels: _userslabels,
                datasets: [
                  {
                    label: "Costomers booking ",
                    backgroundColor: "#ed64a6",
                    borderColor: "#ed64a6",
                    data: _usersdata,
                    fill: false,
                    barThickness: 12,
                  },
                ],
              },
              options: {
                maintainAspectRatio: false,
                responsive: true,
                title: {
                  display: false,
                  text: "Orders Chart",
                },
                tooltips: {
                  mode: "index",
                  intersect: false,
                },
                hover: {
                  mode: "nearest",
                  intersect: true,
                },
                legend: {
                  labels: {
                    fontColor: "rgba(0,0,0,.4)",
                  },
                  align: "end",
                  position: "bottom",
                },
                scales: {
                  xAxes: [
                    {
                      display: false,
                      scaleLabel: {
                        display: true,
                        labelString: "Month",
                      },
                      gridLines: {
                        borderDash: [2],
                        borderDashOffset: [2],
                        color: "rgba(33, 37, 41, 0.3)",
                        zeroLineColor: "rgba(33, 37, 41, 0.3)",
                        zeroLineBorderDash: [2],
                        zeroLineBorderDashOffset: [2],
                      },
                    },
                  ],
                  yAxes: [
                    {
                      display: true,
                      scaleLabel: {
                        display: false,
                        labelString: "Value",
                      },
                      gridLines: {
                        borderDash: [2],
                        drawBorder: false,
                        borderDashOffset: [2],
                        color: "rgba(33, 37, 41, 0.2)",
                        zeroLineColor: "rgba(33, 37, 41, 0.15)",
                        zeroLineBorderDash: [2],
                        zeroLineBorderDashOffset: [2],
                      },
                    },
                  ],
                },
              },
            };
            ctx = document.getElementById("bar-chart").getContext("2d");
            window.myBar = new Chart(ctx, config);
          })();

          const ctx = document.getElementById('donut').getContext('2d');
            const myChart = new Chart(ctx, {
            // const config = {
              type: 'doughnut',
              data:{
              labels:  _rlabels,
              datasets: [{
                label: 'Rooms Booked',
                data:  _rdata,
                backgroundColor: [
                  'rgb(255, 99, 132)',
                  'rgb(54, 162, 235)',
                  'rgb(255, 205, 86)',
                  'rgb(255, 0, 0)',
                  'rgb(0, 0, 255)',
                  'rgb(12, 255, 0)',
                  'rgb(0, 255, 225)',

                ],
                hoverOffset: 4
              }],
               options: {
                maintainAspectRatio: false,
                responsive: true,
                title: {
                  display: false,
                  text: "Room Booked Charts",
                  fontColor: "white",
                },
                legend: {
                  labels: {
                    fontColor: "white",
                  },
                  align: "end",
                  position: "bottom",
                },
                tooltips: {
                  mode: "index",
                  intersect: false,
                },
                hover: {
                  mode: "nearest",
                  intersect: true,
                },
                scales: {
                  xAxes: [
                    {
                      ticks: {
                        fontColor: "rgba(255,255,255,.7)",
                      },
                      display: true,
                      scaleLabel: {
                        display: false,
                        labelString: "Month",
                        fontColor: "white",
                      },
                      gridLines: {
                        display: false,
                        borderDash: [2],
                        borderDashOffset: [2],
                        color: "rgba(33, 37, 41, 0.3)",
                        zeroLineColor: "rgba(0, 0, 0, 0)",
                        zeroLineBorderDash: [2],
                        zeroLineBorderDashOffset: [2],
                      },
                    },
                  ],
                  yAxes: [
                    {
                      ticks: {
                        fontColor: "rgba(255,255,255,.7)",
                      },
                      display: true,
                      scaleLabel: {
                        display: false,
                        labelString: "Value",
                        fontColor: "white",
                      },
                      gridLines: {
                        borderDash: [3],
                        borderDashOffset: [3],
                        drawBorder: false,
                        color: "rgba(255, 255, 255, 0.15)",
                        zeroLineColor: "rgba(33, 37, 41, 0)",
                        zeroLineBorderDash: [2],
                        zeroLineBorderDashOffset: [2],
                      },
                    },
                  ],
                },
              },
            }
            });
          

    </script> --}}
  </div>