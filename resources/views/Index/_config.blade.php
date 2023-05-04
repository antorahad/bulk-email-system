<!-- Config Frontend part -->
<div id="config-tab" class="p-4">
    <form method="post" action="{{url('mail-config/add')}}">
        @csrf
        <div class="mb-3">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mail Server</label>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm w-full p-2.5"
                placeholder="Mail Server" name="mail_server" value="{{optional($mailConfig)->mail_server}}">
                @error('mail_server')
                    <div class="text-red-500">
                        {{$message}}
                    </div>
                @enderror
        </div>
        <div class="mb-3">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gate</label>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm w-full p-2.5"
                placeholder="Gate" name="gate" value="{{optional($mailConfig)->gate}}">
                @error('gate')
                    <div class="text-red-500">
                        {{$message}}
                    </div>
                @enderror
        </div>
        <div class="mb-3">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm w-full p-2.5"
                placeholder="Email" name="email" value="{{optional($mailConfig)->email}}">
                @error('email')
                    <div class="text-red-500">
                        {{$message}}
                    </div>
                @enderror
        </div>
        <div class="mb-3">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm w-full p-2.5"
                placeholder="Password" name="password" value="{{optional($mailConfig)->password}}">
                @error('password')
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
</div>
