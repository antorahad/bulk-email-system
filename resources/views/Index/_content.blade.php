<!-- Content Frontend part -->
<div id="content-tab" class="p-4 hidden">
    <form method="post" action="{{url('template/add')}}">
        @csrf
        <div class="mb-3">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm w-full p-2.5"
                placeholder="Title" name="title" value="{{optional($template)->title}}">
                @error('title')
                <div class="text-red-500">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
            <textarea class="bg-gray-50 border border-gray-300 text-gray-900 text-sm w-full p-2.5" placeholder="Content"
                name="content">{{optional($template)->content}}</textarea>
                @error('content')
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
