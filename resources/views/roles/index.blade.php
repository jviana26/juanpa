<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="Roles"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Roles"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white mx-3">
                                    <strong>Listado de roles</strong>
                                </h6>
                            </div>
                        </div>
                        <div class=" me-3 my-3 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="{{ route('roles.create') }}"><i
                                    class="material-icons text-sm">add</i>&nbsp;&nbsp;Crear nuevo rol</a>
                        </div> 
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                            <table class="table ">
                                    <thead>
                                        <th> ID </th>
                                        <th> Nombre </th>
                                        <th> Guard </th>
                                        <th> Fecha de creación </th>
                                        <th> Permisos </th>
                                        <th class="text-right"> Acciones </th>
                                    </thead>
                                    <tbody>
                                        @forelse ($roles as $role)
                                            <tr>
                                                <td>{{ $role->id }}</td>
                                                <td>{{ $role->name }}</td>
                                                <td>{{ $role->guard_name }}</td>
                                                <td>
                                                    {{ $role->created_at->toFormattedDateString() }}</td>
                                                <td>
                                                    @forelse ($role->permissions as $permission)
                                                        <span>{{ $permission->name }}</span> <br>
                                                    @empty
                                                        <span >Sin permiso agregado</span>
                                                    @endforelse
                                                </td>
                                                <td class="td-actions text-right">
                                                    @can('role_edit')
                                                        <a href="{{ route('roles.edit', $role->id) }}"
                                                            class="btn btn-success"> <i class="material-icons">edit</i> </a>
                                                    @endcan
                                                    @can('role_destroy')
                                                        <form action="{{ route('roles.destroy', $role->id) }}" method="post"
                                                            onsubmit="return confirm('areYouSure')"
                                                            style="display: inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" rel="tooltip" class="btn btn-danger">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </form>
                                                    @endcan
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="2">Sin registros.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                {{-- {{ $users->links() }} --}}
                            </div>
                        </div>
                        <!--Footer-->
                        <div class="card-footer mr-auto">
                            {{ $roles->links() }}
                        </div>
                        <!--End footer-->
                    </div>
                </div>
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>
