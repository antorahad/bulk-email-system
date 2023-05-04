<!-- Process Frontend part -->
<div id="process-tab" class="p-4 hidden">
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead class="text-xs uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">Send Time</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($process as $process)
                    <tr class="bg-white">
                    <th scope="col" class="px-6 py-3">{{$process->email}}</th>
                    <th scope="col" class="px-6 py-3">
                        @if ($process->status == 1)
                            <p class="text-green-400">Send</p>
                            @elseif ($process->status == 0)
                            <p class="text-yellow-400">Pending</p>
                            @else
                            <p class="text-red-400">Error</p>
                        @endif
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{\Carbon\Carbon::createFromTimestamp($process->send_time)->format('Y-m-d H:i:s')}}
                    </th>
                    </tr>
                    @endforeach

            </tbody>
        </table>
    </div>
</div>
