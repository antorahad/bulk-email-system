<!-- Send mail Frontend part -->
<div id="send-mail-tab" class="p-4 hidden">
    <form method="post" action="{{url('send-mail')}}">
        @csrf
        <div class="mb-3">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose
                Customer</label>
            <select name="list_email[]" class="js-select2-multi" multiple="multiple">
                @foreach($customers as $customer)
                <option value="{{$customer->customer_email}}">{{$customer->customer_email}} -   {{$customer->customer_name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Send
        </button>
    </form>
</div>
