@php
    $Page = 'attendance';
@endphp
<x-app-layout>

    <div id="root">
        @include('layouts.student.sidebar')

        <div class="relative md:ml-64 bg-blueGray-50">

            <!-- Header -->

            <!-- Card stats -->
           
            <div class="px-4 md:px-10 mx-auto w-full -m-24">
                <div class="flex flex-wrap mt-4">
                    <div class="w-full mb-12 px-4">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">

                            <div class="rounded-t mb-0 px-4 downside py-3 border-0">
                                <div class="flex flex-wrap items-center justify-around">
                                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                        <h3 class="font-semibold uppercase text-lg text-blueGray-700">
                                            ALL attendances
                                        </h3>
                                    </div>
                                    <div class="relative px-8 create">
                                        <a class="font-bold text-2xl flex align-center justify-center flex-col text-blueGray-700"
                                            title="Set A New Attendance" href="{{ route('attendances.create') }}">+

                                        </a>
                                    </div>
                                </div>
                            </div>
                            @include('layouts.admin.alert')
                            <div class="block w-full overflow-x-auto">
                                <!-- Projects table -->
                                <table class="items-center downside w-full bg-transparent border-collapse">

                                    <x-attendances.index.table_header />
                                    <tbody>
                                        @foreach ($attendances as $attendance)
                                            {{-- {{$set_attendance->name}} --}}
                                            <x-attendances.index.table :attendance="$attendance" />
                                        @endforeach
                                    </tbody>
                                </table>
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
