<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-dark table-striped mt-4">
                    <a href="/registro" class="">Crear</a>    
                    <thead>
                        <tr>
                            <th scope="col" class="">ID</th>
                            <th scope="col" class="">Producto</th>
                            <th scope="col" class="">Categoria</th>
                            <th scope="col" class="">Precio</th>
                            <th scope="col" class="">Stock</th>
                        </tr>
                        </thead>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
