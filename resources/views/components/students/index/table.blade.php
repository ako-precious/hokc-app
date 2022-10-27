<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <tr>
        <th
            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left ">
            <span class="ml-3 font-bold text-blueGray-600">
                {{ $student->id }}
            </span>
        </th>
        <td
            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
            {{ $student->name }}
    
        </td>
        <td
            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
            {{ $student->matric }}
    
        </td>
        <td
            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
            {{ $student->email }}
    
        </td>
        <td
            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
           
            {{ $student->phone_number}} 
        </td>
       
        <td
            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
            {{ $student->course }}
        </td>
        <td
            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
            {{ $student->level }}
        </td>
        <td
            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
            <div class="flex items-center justify-center">
                <a href="students/{{$student->id}}/edit"
                    class="text-sm py-2 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blue-900 ">
    
                    <i class="fas fa-edit mr-2 text-sm "></i>
                </a>
                <form class='pull-right' action="students/{{ $student->id }}"
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
</div>