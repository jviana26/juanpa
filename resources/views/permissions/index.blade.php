<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="Permisos"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Usuarios"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white mx-3">
                                    <strong>Listado de permisos</strong>
                                </h6>
                            </div>
                        </div>
                        <div class=" me-3 my-3 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="{{ route('permissions.create') }}"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Crear nuevo permiso</a>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table">
                                    <thead>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Guard</th>
                                        <th>Fecha de creación</th>
                                        <th class="text-rigth">Acciones</th>
                                    </thead>
                                    <tbody>
                                        @forelse ($permissions as $permission)
                                        <tr>
                                            <td>{{ $permission->id }}</td>
                                            <td>{{ $permission->name }}</td>
                                            <td>{{ $permission->guard_name }}</td>
                                            <td>{{ $permission->created_at }}</td>
                                            <td class="td-actions text-right">
                                                @can('permission_edit')
                                                <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                @endcan
                                                @can('permission_destroy')
                                                <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Desea eliminar este usuario de forma permanente?')">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger" type="submit" rel="tooltip">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </form>
                                                @endcan
                                            </td>
                                        </tr>
                                        @empty
                                        No tine datos
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer mr-auto">
                                    {{ $permissions->links() }}
                                </div>
                    </div>
                </div>
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>