@php
    $Page = 'attendance';
@endphp
<x-app-layout>


    <div id="root">
        @include('layouts.admin.sidebar')

        <div class="relative md:ml-64 bg-blueGray-500">


            <!-- Header -->
            <div class="relative bg-blue-700 md:pt-32 pb-32 pt-12">
                <div class="px-4 md:px-10 mx-auto w-full">

                </div>
            </div>
            <div class="px-4 md:px-10 mx-auto w-full -m-24">

                <div class="flex flex-wrap mt-4">
                    <div class="w-full mb-12 px-4">
                        <div
                            class="relative flex downside flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
                            <div class="rounded-t mb-0 px-4 py-3 border-0">
                                <div class="flex flex-wrap items-center">
                                    <div class="relative w-full p-4 max-w-full flex-grow flex-1">
                                        <h3 class="font-semibold capitalize text-lg text-blueGray-700">
                                            Take attendance
                                        </h3>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="block w-full">

                                {{-- <div class=" flex flex-col justify-center items-center text-center">
                                    <div class="visible-print py-6">
                                        {!! QrCode::eye('circle')->style('round')->gradient(255, 0, 0,0, 0, 255,"radial")->color (255, 0, 0)->format('svg')->size(300)->generate(Request::url()) !!}
                                    </div>
                                    <div>

                                        <p class=" py-8">Scan me to Sign your attendance.</p>
                                    </div>
                                    OrCode:: (400)
                                    ->generate('https://www.simplesoftware.io/#/docs/ simple-arcode'); 11)                                   14

                                    <p>Scan me to return to the original page.</p>
                                </div> --}}
                                <form enctype="multipart/form-data" class='px-6 py-8' action="{{ route('set_attendances.store') }}" method="POST">
                                    @csrf
                                <div class="relative z-0 w-full mb-6 group">
                                <select name="setattendance" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                id="">
                                    @foreach ($set_attendances as $setattendance)
                                        
                                    <option class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    value="{{$setattendance->id}}">{{$setattendance->id}} {{$setattendance->name}}</option>
                                    @endforeach
                                </select>
                                    {{-- <input type="text" name="username" id="useername" value="{{ Auth::User()->name }}" readonly
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " required=""> --}}
                                    <label for="useername"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                        Select Which Attendance you would like to take </label>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                @include('layouts.footer')
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script type="text/javascript">
        /* Make dynamic date appear */
        (function() {
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
        /* Function for dropdowns */
        function openDropdown(event, dropdownID) {
            let element = event.target;
            while (element.nodeName !== "A") {
                element = element.parentNode;
            }
            Popper.createPopper(element, document.getElementById(dropdownID), {
                placement: "bottom-start",
            });
            document.getElementById(dropdownID).classList.toggle("hidden");
            document.getElementById(dropdownID).classList.toggle("block");
        }
    </script>
</x-app-layout>
