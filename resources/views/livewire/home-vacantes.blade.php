<div>
    <livewire:filtrar-vacantes />

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-extrabold text-4xl text-gray-700 mb-12">
                Nuestras Vacantes disponibles
            </h3>


            {{-- <div class="bg-white shadow-sm rounded-lg p-6 divide-y divide-gray-200"> --}}
            <div class="p-6 grid grid-cols-3 gap-5">
                @forelse ( $vacantes as $vacante )
                    <div class="md:flex md:flex-col md:justify-between md:items-center py-5 border border-gray-200 rounded-lg shadow bg-white p-2">
                        <div class="md:flex-1 flex flex-col gap-3">
                            <a href="{{ route('vacantes.show', $vacante->id)}}" class="text-2xl font-extrabold text-gray-600 border-bottom border-b-2 my-3">
                                {{$vacante->titulo}}
                            </a>
                            <p class="text-base text-gray-600 mb-1">{{$vacante->empresa}}</p>
                            <p class="text-xs font-bold text-gray-600 mb-1">{{$vacante->categoria->categoria}}</p>
                            <p class="text-base text-gray-600 mb-1">{{$vacante->salario->salario}}</p>
                            <p class="font-bold text-xs text-gray-600">Ultimo dia para postularse: 
                                <span class="font-normal ">
                                    {{$vacante->ultimo_dia->format('d-m-Y')}}
                                </span>
                            </p>
                        </div>

                        <div class="mt-5 md:mt-10">
                            <a href="{{ route('vacantes.show', $vacante->id)}}" class="bg-orange-500 p-3 text-sm uppercase font-bol text-white rounded-lg hover:bg-orange-700 block text-center">
                                Ver Vacante
                            </a>
                        </div>
                    </div>


                @empty
                    <p class="p-3 text-center text-sm text-gray-600">No hay vacantes aún</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
