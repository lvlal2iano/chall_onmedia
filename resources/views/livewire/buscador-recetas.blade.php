<div>
    <div class="absolute top-2 right-2" wire:loading>
        <div style="border-top-color:transparent" class="w-5 h-5 border-4 border-blue-400 border-double rounded-full animate-spin"></div>        
    </div>
    <div class="grid grid-cols-5 gap-5">
        <div class="relative">
            <label for="q" class="block text-sm font-medium text-gray-700">Concidentes con:</label>
            <input wire:model.defer='filters.q' type="text" id="q" class="mt-1 pl-9 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('filters.q') <span class="error absolute bottom-0 left-0 text-red">{{ $message }}</span> @enderror
            <svg class="absolute h-5 w-5 bottom-2 left-2"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"/></svg>
        </div>
        <div class="relative">
            <label for="ingr" class="block text-sm font-medium text-gray-700">Ingredientes maximos:</label>
            <input wire:model.defer='filters.ingr' type="number" id="ingr" min="1" class="mt-1 pl-9 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            <svg class="absolute h-5 w-5 bottom-2 left-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M298.2 156.6C245.5 130.9 183.7 146.1 147.1 189.4l55.27 55.31c6.25 6.25 6.25 16.33 0 22.58c-3.127 3-7.266 4.605-11.39 4.605s-8.068-1.605-11.19-4.605L130.3 217l-128.1 262.8c-2.875 6-3 13.25 0 19.63c5.5 11.12 19 15.75 30 10.38l133.6-65.25L116.7 395.3c-6.377-6.125-6.377-16.38 0-22.5c6.25-6.25 16.37-6.25 22.5 0l56.98 56.98l102-49.89c24-11.63 44.5-31.26 57.13-57.13C385.5 261.1 359.9 186.8 298.2 156.6zM390.2 121.8C409.7 81 399.7 32.88 359.1 0c-50.25 41.75-52.51 107.5-7.875 151.9l8 8C404.5 204.5 470.4 202.3 512 152C479.1 112.3 430.1 102.3 390.2 121.8z"/></svg>
        </div>
        <div class="relative">
            <label for="mealType" class="block text-sm font-medium text-gray-700">Tipo de comida</label>
            <select wire:model.defer="filters.mealType" id="mealType"  class="mt-1 pl-9 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option selected>Todas</option>
                <option value="Breakfast">Desayuno</option>
                <option value="Dinner">Cena</option>
                <option value="Lunch">Almuerzo</option>
                <option value="Snack">Merienda</option>
                <option value="Teatime">Hora del té</option>
            </select>
            <svg class="absolute h-5 w-5 bottom-2 left-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M221.6 148.7C224.7 161.3 224.8 174.5 222.1 187.2C219.3 199.1 213.6 211.9 205.6 222.1C191.1 238.6 173 249.1 151.1 254.1V472C151.1 482.6 147.8 492.8 140.3 500.3C132.8 507.8 122.6 512 111.1 512C101.4 512 91.22 507.8 83.71 500.3C76.21 492.8 71.1 482.6 71.1 472V254.1C50.96 250.1 31.96 238.9 18.3 222.4C10.19 212.2 4.529 200.3 1.755 187.5C-1.019 174.7-.8315 161.5 2.303 148.8L32.51 12.45C33.36 8.598 35.61 5.197 38.82 2.9C42.02 .602 45.97-.4297 49.89 .0026C53.82 .4302 57.46 2.303 60.1 5.259C62.74 8.214 64.18 12.04 64.16 16V160H81.53L98.62 11.91C99.02 8.635 100.6 5.621 103.1 3.434C105.5 1.248 108.7 .0401 111.1 .0401C115.3 .0401 118.5 1.248 120.9 3.434C123.4 5.621 124.1 8.635 125.4 11.91L142.5 160H159.1V16C159.1 12.07 161.4 8.268 163.1 5.317C166.6 2.366 170.2 .474 174.1 .0026C178-.4262 181.1 .619 185.2 2.936C188.4 5.253 190.6 8.677 191.5 12.55L221.6 148.7zM448 472C448 482.6 443.8 492.8 436.3 500.3C428.8 507.8 418.6 512 408 512C397.4 512 387.2 507.8 379.7 500.3C372.2 492.8 368 482.6 368 472V352H351.2C342.8 352 334.4 350.3 326.6 347.1C318.9 343.8 311.8 339.1 305.8 333.1C299.9 327.1 295.2 320 291.1 312.2C288.8 304.4 287.2 296 287.2 287.6L287.1 173.8C288 136.9 299.1 100.8 319.8 70.28C340.5 39.71 369.8 16.05 404.1 2.339C408.1 .401 414.2-.3202 419.4 .2391C424.6 .7982 429.6 2.62 433.9 5.546C438.2 8.472 441.8 12.41 444.2 17.03C446.7 21.64 447.1 26.78 448 32V472z"/></svg>
        </div>
        <div class="relative">
            <label for="dishType" class="block text-sm font-medium text-gray-700">Tipo de plato</label>
            <select wire:model.defer="filters.dishType" id="dishType"  class="mt-1 pl-9 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option selected>Todos</option>
                <option value="Biscuits and cookies">Galletas</option>
                <option value="Bread">Pan</option>
                <option value="Cereals">Cereales</option>
                <option value="Condiments and sauces">Condimentos y salsas</option>
                <option value="Desserts">Postres</option>
                <option value="Drinks">Bebidas</option>
                <option value="Egg">Huevos</option>
                <option value="Omelet">Omelet</option>
                <option value="Main course">Plato principal</option>
                <option value="Pancake">Panques</option>
                <option value="Preps">Preparaciones</option>
                <option value="Preserve">Concerbas</option>
                <option value="Salad">Ensaladas</option>
                <option value="Sandwiches">Sandwiches</option>
                <option value="Soup">Sopas</option>
                <option value="Starter">Entradas</option>
            </select>
            <svg class="absolute h-5 w-5 bottom-2 left-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M481.9 270.1C490.9 279.1 496 291.3 496 304C496 316.7 490.9 328.9 481.9 337.9C472.9 346.9 460.7 352 448 352H64C51.27 352 39.06 346.9 30.06 337.9C21.06 328.9 16 316.7 16 304C16 291.3 21.06 279.1 30.06 270.1C39.06 261.1 51.27 256 64 256H448C460.7 256 472.9 261.1 481.9 270.1zM475.3 388.7C478.3 391.7 480 395.8 480 400V416C480 432.1 473.3 449.3 461.3 461.3C449.3 473.3 432.1 480 416 480H96C79.03 480 62.75 473.3 50.75 461.3C38.74 449.3 32 432.1 32 416V400C32 395.8 33.69 391.7 36.69 388.7C39.69 385.7 43.76 384 48 384H464C468.2 384 472.3 385.7 475.3 388.7zM50.39 220.8C45.93 218.6 42.03 215.5 38.97 211.6C35.91 207.7 33.79 203.2 32.75 198.4C31.71 193.5 31.8 188.5 32.99 183.7C54.98 97.02 146.5 32 256 32C365.5 32 457 97.02 479 183.7C480.2 188.5 480.3 193.5 479.2 198.4C478.2 203.2 476.1 207.7 473 211.6C469.1 215.5 466.1 218.6 461.6 220.8C457.2 222.9 452.3 224 447.3 224H64.67C59.73 224 54.84 222.9 50.39 220.8zM372.7 116.7C369.7 119.7 368 123.8 368 128C368 131.2 368.9 134.3 370.7 136.9C372.5 139.5 374.1 141.6 377.9 142.8C380.8 143.1 384 144.3 387.1 143.7C390.2 143.1 393.1 141.6 395.3 139.3C397.6 137.1 399.1 134.2 399.7 131.1C400.3 128 399.1 124.8 398.8 121.9C397.6 118.1 395.5 116.5 392.9 114.7C390.3 112.9 387.2 111.1 384 111.1C379.8 111.1 375.7 113.7 372.7 116.7V116.7zM244.7 84.69C241.7 87.69 240 91.76 240 96C240 99.16 240.9 102.3 242.7 104.9C244.5 107.5 246.1 109.6 249.9 110.8C252.8 111.1 256 112.3 259.1 111.7C262.2 111.1 265.1 109.6 267.3 107.3C269.6 105.1 271.1 102.2 271.7 99.12C272.3 96.02 271.1 92.8 270.8 89.88C269.6 86.95 267.5 84.45 264.9 82.7C262.3 80.94 259.2 79.1 256 79.1C251.8 79.1 247.7 81.69 244.7 84.69V84.69zM116.7 116.7C113.7 119.7 112 123.8 112 128C112 131.2 112.9 134.3 114.7 136.9C116.5 139.5 118.1 141.6 121.9 142.8C124.8 143.1 128 144.3 131.1 143.7C134.2 143.1 137.1 141.6 139.3 139.3C141.6 137.1 143.1 134.2 143.7 131.1C144.3 128 143.1 124.8 142.8 121.9C141.6 118.1 139.5 116.5 136.9 114.7C134.3 112.9 131.2 111.1 128 111.1C123.8 111.1 119.7 113.7 116.7 116.7L116.7 116.7z"/></svg>
        </div>
        <div class="relative">
            <label for="cuisineType" class="block text-sm font-medium text-gray-700">Tipo de cocina</label>
            <select wire:model.defer="filters.cuisineType" id="cuisineType"  class="mt-1 pl-9 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option selected>Todos</option>
                <option value="American">American</option>
                <option value="Asian">Asian</option>
                <option value="British">British</option>
                <option value="Caribbean">Caribbean</option>
                <option value="Central Europe">Central Europe</option>
                <option value="Chinese">Chinese</option>
                <option value="Eastern Europe">Eastern Europe</option>
                <option value="French">French</option>
                <option value="Indian">Indian</option>
                <option value="Italian">Italian</option>
                <option value="Japanese">Japanese</option>
                <option value="Kosher">Kosher</option>
                <option value="Mediterranean">Mediterranean</option>
                <option value="Mexican">Mexican</option>
                <option value="Middle Eastern">Middle Eastern</option>
                <option value="Nordic">Nordic</option>
                <option value="South American">South American</option>
                <option value="South East Asian">South East Asian</option>
            </select>
            <svg class="absolute h-5 w-5 bottom-2 left-2"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 80V0L71.37 23.79C87.68 29.23 104.8 32 121.1 32H390C407.2 32 424.3 29.23 440.6 23.79L512 0V80C512 106.5 490.5 128 464 128H448V192H384V128H288V192H224V128H128V192H64V128H48C21.49 128 0 106.5 0 80zM32 288C14.33 288 0 273.7 0 256C0 238.3 14.33 224 32 224H480C497.7 224 512 238.3 512 256C512 273.7 497.7 288 480 288H448V480C448 497.7 433.7 512 416 512C398.3 512 384 497.7 384 480V288H128V480C128 497.7 113.7 512 96 512C78.33 512 64 497.7 64 480V288H32z"/></svg>
        </div>
    </div>
    <div class="grid grid-cols-5 gap-4 my-3 pb-3 border-b relative botonera">
        <div>
            <label for="per_page" class="block text-sm font-medium text-gray-700">Cantidad por pagina:</label>
            <select wire:model.defer="per_page" id="per_page"  class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="10" selected>10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
        </div>

        <div class="flex items-end">
            <button wire:click="aply" wire:loading.attr="disabled" type="button" class="h-9 bg-white py-2 px-3 text-white border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Aplicar</button>
            <button wire:click="export" wire:loading.attr="disabled" type="button" class="h-9 bg-white py-2 px-3 text-white border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-3">Download</button>
        </div>
        <div class="text-sm text-blue-600/50">
            <p class="absolute bottom-1 right-5"> Se encontraron {{$data['count']}} coincidencias.</p>
        </div>
    </div>
    <div class="grid grid-cols-4 gap-4 mt-3 pb-3 border-b">
        @foreach($data['hits']??[] as $v)
            @include('livewire.buscador-recetas.card', ['receta' => $v['recipe']])
        @endforeach
    </div>
    <div class="flex justify-center	mt-3 pb-3">
            
                <button @if($page == 1) disabled @endif wire:click="prev" wire:loading.attr="disabled" type="button" class="h-9 bg-white py-2 px-3 text-white border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium bg-indigo-600 disabled:bg-indigo-200 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <svg class="h-5 w-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M447.1 256C447.1 273.7 433.7 288 416 288H109.3l105.4 105.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448s-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L109.3 224H416C433.7 224 447.1 238.3 447.1 256z"/></svg>
                </button>
            <div class="text-2xl text-blue-600/50 mx-5">
                {{$page}}
            </div>
            
                <button @if($page == (ceil($data['count'] / $per_page))) disabled @endif wire:click="sig" wire:loading.attr="disabled" type="button" class="h-9 bg-white py-2 px-3 text-white border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium bg-indigo-600  disabled:bg-indigo-200  hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <svg class="h-5 w-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"/></svg>
                </button>
    </div>
    <div class="flex justify-center	mt-3 pb-3">
        <div class="text-sm">Hay {{ceil($data['count'] / $per_page)}} paginas</div>
    </div>
</div>
