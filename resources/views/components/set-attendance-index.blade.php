<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
    {{$Page = 'set attendance';}}
    <div id="root">
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
                <div class="flex flex-wrap mt-4">
                    <div class="w-full mb-12 px-4">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
    
                            <div class="rounded-t mb-0 px-4 downside py-3 border-0">
                                <div class="flex flex-wrap items-center justify-around">
                                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                        <h3 class="font-semibold uppercase text-lg text-blueGray-700">
                                            ALL SET attendances
                                        </h3>
                                    </div>
                                    <div class="relative px-8 create">
                                        <a class="font-bold text-2xl flex align-center justify-center flex-col text-blueGray-700"
                                            title="Set A New Attendance" href="{{ route('set_attendances.create') }}">+
    
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @include('layouts.admin.alert')
                            <div class="block w-full overflow-x-auto">
                                <!-- Projects table -->
                                <table class="items-center downside w-full bg-transparent border-collapse">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                                ID
                                            </th>
                                            <th
                                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                                Name
                                            </th>
                                            <th
                                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                                Created By
                                            </th>
                                            <th
                                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                               Time Starts
                                            </th>
                                            <th
                                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                                Time Stops
                                            </th>
                                           
                                            <th
                                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                               Create At
                                            </th>
                                            <th
                                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($set_attendances as $set_attendance)
                                        <tr>
                                            <th
                                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                                <span class="ml-3 font-bold text-blueGray-600">
                                                    {{ $set_attendance->id }}
                                                </span>
                                            </th>
                                            <td
                                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                {{ $set_attendance->name }}
    
                                            </td>
                                            <td
                                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                {{ $set_attendance->name }}
    
                                            </td>
                                            <td
                                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                {{ $set_attendance->starts }}
    
                                            </td>
                                            <td
                                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                               
                                                {{ $set_attendance->stops}} 
                                            </td>
                                           
                                            <td
                                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                {{ $set_attendance->created_at }}
                                            </td>
                                            <td
                                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
                                                <div class="flex items-center justify-center">
                                                    <a href="set_attendances/{{$set_attendance->id}}/edit"
                                                        class="text-sm py-2 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blue-900 ">
    
                                                        <i class="fas fa-edit mr-2 text-sm "></i>
                                                    </a>
                                                    <form class='pull-right' action="set_attendances/{{ $set_attendance->id }}"
                                                        method="POST">
                                                        @method('DELETE')
                                                        @csrf
    
                                                        <button name="delete-post" type="submit"
                                                            class="text-sm py-2 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-red-900">
                                                            <i class="fas fa-trash mr-2 text-sm "></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            
                                            </td>
                                        </tr>
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
</div>
{{-- <script type="text/javascript">
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
</script> --}}