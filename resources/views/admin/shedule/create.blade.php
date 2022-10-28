<x-app-layout>
<div class="container">

    <!-- component -->
    <div class="bg-white">
        <h2 class="text-gray-900 text-lg mb-5 font-medium title-font">Pending:</h2>

        <div class="overflow-x-auto border-x border-t">
            <table class="table-auto w-full">
                <thead class="border-b">
                    <tr class="bg-gray-50">
                        <th class="text-left p-4 font-medium">
                        ID
                        </th>
                        <th class="text-left p-4 font-medium">
                        Name
                        </th>
                        <th class="text-left p-4 font-medium">
                        Select
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-4">
                        Prof. Lucie Waters 
                        </td>
                        <td class="p-4">
                        basic@example.com 
                        </td>
                        <td class="p-4">
                        Administrator
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-4">
                        Anahi Bashirian (You) 
                        </td>
                        <td class="p-4">
                        admin@example.com  
                        </td>
                        <td class="p-4">
                        <button>X</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col w-full md:py-8 mt-8 md:mt-0">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Details</h2>
        <div class="relative mb-4">
            <label for="id" class="leading-7 text-sm text-gray-600">ID</label>
            <input type="number" id="id" name="id" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        <div class="relative mb-4">
          <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
          <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="location" class="leading-7 text-sm text-gray-600">Location</label>
          <select name="location" id="location" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            <option value="a">a</option>
            <option value="b">b</option>
            <option value="c">c</option>
            <option value="d">d</option>
          </select>
        </div>

        <div class="relative mb-4">
            <label for="timeFrom" class="leading-7 text-sm text-gray-600">Time From</label>
            <input type="datetime-local" id="timeFrom" name="timeFrom" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
            <label for="timeTo" class="leading-7 text-sm text-gray-600">Time To</label>
            <input type="datetime-local" id="timeTo" name="timeTo" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        
        <button class="text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
      </div>
        
</div>
</x-app-layout>
