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
                    <h1 class="text-3xl">Withdraw Money</h1>
                </div>
                <div class="flex justify-center">
  <div class="mb-3 xl:w-96">
    <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700"
      >Amount</label
    >
    <input
      type="text"
      class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:outline-none"
      id="exampleFormControlInput1"
      placeholder="Enter amount to withdraw"
    />
  </div>
</div>
        <div class="flex space-x-2 justify-center m-3">
        <button type="submit" value="Save" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Withdraw</button>
        </div>
            </div>
        </div>
    </div>
</x-app-layout>
