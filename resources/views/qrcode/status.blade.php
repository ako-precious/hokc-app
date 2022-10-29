<x-app-layout>

<div id="root">

    <div class="relative  bg-blueGray-500">

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
                                         attendance status
                                    </h3>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="block w-full">

                            <div class=" flex flex-col justify-center items-center text-center relative">
                                {{-- <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="popup-modal">
                                    Toggle modal
                                  </button> --}}
                                  
                                  <div id="popup-modal" tabindex="-1" class=" overflow-y-auto overflow-x-hidden static top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center" aria-hidden="true">
                                      <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                          <div class="relative bg-white rounded-lg shadow dark:bg-gray-200">
                                              <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                                                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                  <span class="sr-only">Close modal</span>
                                              </button>
                                              <div class="p-6 text-center">
                                                <img class="mx-auto mb-4 w-30 h-30 text-gray-400 dark:text-gray-200 dark:rounded-full" src="{{asset('images/checked.jpg')}}" alt="">
                                                  {{-- <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> --}}
                                                  @include('layouts.admin.alert')
                                                  <h3 class="mb-5 text-lg font-bold text-blue-700 dark:text-blue-500">Welcome To Church🎉🎊</h3>
                                                 </div>
                                          </div>
                                      </div>
                                  </div>
                                  
                            </div>
                           
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
