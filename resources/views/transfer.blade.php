<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ABC BANK') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex m-5">
                    <h1 class="text-3xl">Transfer Money</h1>
                </div>
                <div class="flex justify-center">
  <div>

    <div class="mb-3 xl:w-96">
      <label for="exampleFormControlInpu3" class="form-label inline-block mb-2 text-gray-700"
        >Email ID</label
      >
      <input
        type="text"
        class="
          form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
        id="exampleFormControlInput3"
        placeholder="Enter your email input"
      />
    </div>

    <div class="mb-3 xl:w-96">
      <label
        for="exampleFormControlInput4"
        class="form-label inline-block mb-2 text-gray-700 text-sm"
        >Amount</label
      >
      <input
        type="text"
        class="
        form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
        id="exampleFormControlInput4"
        placeholder="Enter amount"
      />
    </div>
  </div>
</div>
        <div class="flex space-x-2 justify-center m-3">
        <button type="submit" value="Save" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Transfer</button>
        </div>
            </div>
        </div>
    </div>
</x-app-layout>
