<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <tr>
        <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left ">
            <span class="ml-3 font-bold text-blueGray-600">
                {{ $attendance->id }}
            </span>
        </th>
        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
            {{-- {{ $ }} --}}
            {{ $attendance->setattendance->name}}
            {{-- {{ $attendance->set_attendance_id }} --}}

        </td>
        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
            {{ $attendance->user->name }}
            {{-- {{ $attendance->id }} --}}
            
        </td>
        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
            {{ $attendance->user->email }}
            {{-- {{ $attendance->email }} --}}
            
        </td>
        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
            {{ $attendance->user->level }}
            {{-- {{ $attendance->level }} --}}
        </td>
        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
            {{ $attendance->status }}
        </td>
        
        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
            {{ $attendance->created_at }}
        </td>
        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
            <div class="flex items-center justify-center">
                <a href="attendances/{{ $attendance->id }}/edit"
                    class="text-sm py-2 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blue-900 ">

                    <i class="fas fa-edit mr-2 text-sm "></i>
                </a>
                <form class='pull-right' action="attendances/{{ $attendance->id }}" method="POST">
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
</div>
