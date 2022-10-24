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