@php
$Page = 'set attendance';
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
                        <div class="relative flex downside flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
                            <div class="rounded-t mb-0 px-4 py-3 border-0">
                                <div class="flex flex-wrap items-center">
                                    <div class="relative w-full p-4 max-w-full flex-grow flex-1">
                                        <h3 class="font-semibold capitalize text-lg text-blueGray-700">
                                            set attendance
                                        </h3>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="block w-full">
                               
                                  <x-set_attendance.create-form/>
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