<div class="wrapper antialiased text-gray-900">
  <div>
      
      <img src="{{$receta['image']}}" alt=" random imgee" class="w-full object-cover object-center rounded-lg shadow-md">    
      
   <div class="relative px-4 -mt-35">
     <div class="bg-custom p-6 rounded-lg shadow-lg relative">
      <div class="flex items-baseline">
        <div class="text-gray-600 uppercase text-xs font-semibold tracking-wider">{{count($receta['ingredients'])}} ingredientes.</div>  
      </div>
      
      <h4 class="mt-1 text-xl font-semibold uppercase leading-tight">{{$receta['label']}}</h4>
   
    <div class="mt-1">
      {{intval($receta['yield'])}}
      <span class="text-gray-600 text-sm"> / porciones</span>
    </div>
    <div class="mt-1">
      {{ceil($receta['calories'])}}
      <span class="text-gray-600 text-sm"> / calorias</span>
    </div>
    <div class="mt-1">
      <a class="card-link-vermas" href="{{$receta['url']}}" target="_blank">Ver Mas</a>
    </div>
    </div>
   </div>
    
  </div>
</div>