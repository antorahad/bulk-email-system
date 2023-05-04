<!-- Customer Frontend part -->
<div id="customers-tab" class="p-4 hidden">
    <form method="post" action="{{url('customer/add')}}">
        @csrf
        <div class="mb-3">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customer
                Email</label>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm w-full p-2.5"
                placeholder="Customer Email" name="customer_email" value="">
                @error('customer_email')
                <div class="text-red-500">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customer
                Name</label>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm w-full p-2.5"
                placeholder="Customer Name" name="customer_name" value="">
                @error('customer_name')
                <div class="text-red-500">
                    {{$message}}
                </div>
            @enderror
        </div>
        <button type="submit"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Save
    </button>
    </form>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead class="text-xs uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr class="bg-white">
                    <th scope="col" class="px-6 py-3">{{$customer->customer_email}}</th>
                    <th scope="col" class="px-6 py-3">{{$customer->customer_name}}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
