<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="Usuarios"></x-navbars.sidebar>
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
                                    <strong>Listado de usuarios</strong>
                                </h6>
                            </div>
                        </div>
                        <div class=" me-3 my-3 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="{{ route('users.create') }}"><i
                                    class="material-icons text-sm">add</i>&nbsp;&nbsp;Crear nuevo usuario</a>
                        </div> 
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table">
                                    <thead>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>cedula</th>
                                        <th>Username</th>
                                        <th>Roles</th>
                                        <th class="text-right">Acciones</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->cedula }}</td>
                                                <td>{{ $user->username }}</td>
                                                <td>
                                                    @forelse ($user->roles as $role)
                                                        <span>{{ $role->name }}</span> 
                                                    @empty
                                                        <span>No roles</span>
                                                    @endforelse 
                                                </td>
                                                <td class="td-actions text-right">

                                                    <a href="{{ route('users.edit', $user->id) }}"
                                                        class="btn btn-warning"><i
                                                            class="material-icons">edit</i></a>


                                                    <form action="#"
                                                        method="POST" style="display: inline-block;"
                                                        onsubmit="return confirm('Seguro?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit" rel="tooltip">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>
