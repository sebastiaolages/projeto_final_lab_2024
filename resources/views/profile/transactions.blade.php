<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @include('includes.header-perfil')
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    @if(count($purchasedExperiences) > 0)
                    
                    <div class="flex items-center justify-center">
                        <h1 class="text-3xl font-bold mb-6">Anúncios Comprados:</h1>
                    </div>
                    
                    <div id="activities-section" class="flex flex-wrap -mx-2">
                        @foreach ($purchasedExperiences as $transaction)
                            <div class="relative w-full sm:w-1/2 md:w-1/4 lg:w-1/4 px-2">
                                <div class="w-full h-full m-0 bg-white rounded border border-black pl-4 pt-4  pr-20">
                                    
                                    <div class="mb-8">
                                        <h3 class="text-lg font-semibold">{{ $transaction->experience->title }}</h3>
                                        <p class="text-gray-700">Descrição: {{ $transaction->experience->description }}.</p>
                                        <p class="text-gray-800 font-bold">Preço: {{ $transaction->experience->price }}€</p>
                                        <p class="text-gray-800 font-bold">Morada: {{ $transaction->experience->address }}.</p>
                                        <p class="text-gray-800 font-bold">Categoria: {{ $transaction->experience->category }}.</p>
                                        <p class="text-green-500 font-bold">Trasação: {{ $transaction->status }}.</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @else
                        <p class="text-3xl font-bold mb-6">Ainda não compraste nenhum anúncio.</p>
                        <p>O teu historico de compras irá aparecer aqui assim que comprares o teu primeiro anúncio.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>