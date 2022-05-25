<div>
    <div class="grid grid-cols-4 gap-4 mt-3">
        <div>
            <label for="q" class="block text-sm font-medium text-gray-700">Concidentes con:</label>
            <input wire:model.defer='filters.q' type="text" id="q" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <div>
        </div>
        <div>asd</div>
        <div>asd</div>
    </div>
    <div class="grid grid-cols-4 gap-4 mt-3">
        <div>
        <button wire:click="search()" type="button" class="bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Aplicar</button>
        </div>
    </div>
    <div class="grid grid-cols-4 gap-4 mt-3">
        @foreach($data['hits']??[] as $v)
            <p> {{$v['recipe']['label']}} </p>
        @endforeach
    </div>
</div>
