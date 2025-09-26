<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-4">¡Bienvenido, {{ Auth::user()->name }}!</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <h4 class="font-medium text-blue-900">Información del Usuario</h4>
                                <p class="text-sm text-blue-700 mt-2">
                                    <strong>Email:</strong> {{ Auth::user()->email }}<br>
                                    <strong>Rol:</strong> {{ Auth::user()->role->name ?? 'Sin rol asignado' }}<br>
                                    <strong>Registrado:</strong> {{ Auth::user()->created_at->format('d/m/Y H:i') }}
                                </p>
                            </div>
                            <div class="bg-green-50 p-4 rounded-lg">
                                <h4 class="font-medium text-green-900">Estado de la Cuenta</h4>
                                <p class="text-sm text-green-700 mt-2">
                                    @if(Auth::user()->email_verified_at)
                                        <span class="text-green-600">✓ Email verificado</span>
                                    @else
                                        <span class="text-red-600">⚠ Email no verificado</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h4 class="font-medium text-gray-900 mb-3">Acciones Disponibles</h4>
                        <div class="flex flex-wrap gap-3">
                            @if(Auth::user()->isStudent())
                                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Ver Mis Cursos
                                </a>
                                <a href="#" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                    Ver Tareas
                                </a>
                            @elseif(Auth::user()->isTeacher())
                                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Gestionar Cursos
                                </a>
                                <a href="#" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                    Crear Tarea
                                </a>
                            @elseif(Auth::user()->isCoordinator())
                                <a href="#" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">
                                    Panel de Control
                                </a>
                                <a href="#" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
                                    Gestionar Usuarios
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
