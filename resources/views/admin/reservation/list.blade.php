<div class="ml-4 flex space-x-2">
    <img class="h-10 w-10 rounded-md" src="{{ Storage::url($getRecord()->room->photo_path) }}" alt="">
    <div>
        <h1 class="uppercase font-bold text-gray-700">{{ $getRecord()->room->name }}</h1>
        <h1 class="uppercase text-sm font-medium leading-3 text-gray-700">
            &#8369;{{ number_format($getRecord()->room->price, 2) }}</h1>
    </div>
</div>
