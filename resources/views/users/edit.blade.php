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
                  <strong>Editar usuario</strong>
                </h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <form action="{{ route('users.update', $user->id) }}" method="post" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" autofocus>
                        @if ($errors->has('name'))
                        <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="row">
                      <label for="username" class="col-sm-2 col-form-label">Nombre de usuario</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="username" value="{{ old('username', $user->username) }}">
                        @if ($errors->has('username'))
                        <span class="error text-danger" for="input-username">{{ $errors->first('username') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="row">
                      <label for="email" class="col-sm-2 col-form-label">Correo</label>
                      <div class="col-sm-7">
                        <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}">
                        @if ($errors->has('email'))
                        <span class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="row">
                      <label for="cedula" class="col-sm-2 col-form-label">Cedula</label>
                      <div class="col-sm-7">
                        <input type="number" class="form-control" name="cedula" value="{{ old('cedula', $user->cedula) }}">
                        @if ($errors->has('cedula'))
                        <span class="error text-danger" for="input-cedula">{{ $errors->first('cedula') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="row">
                      <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                      <div class="col-sm-7">
                        <input type="password" class="form-control" name="password" placeholder="Ingrese la contraseña sólo en caso de modificarla">
                        @if ($errors->has('password'))
                        <span class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="row">
                      <label for="name" class="col-sm-2 col-form-label">Roles</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <div class="tab-content">
                            <div class="tab-pane active" id="profile">
                              <table class="table">
                                <tbody>
                                  @foreach ($roles as $id => $role)
                                  <tr>
                                    <td>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" name="roles[]" value="{{ $id }}" {{ $user->roles->contains($id) ? 'checked' : '' }}>
                                          <span class="form-check-sign">
                                            <span class="check" value=""></span>
                                          </span>
                                        </label>
                                      </div>
                                    </td>
                                    <td>
                                      {{ $role }}
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
                  </div>
                  <!--Footer-->
                  <div class="card-footer ml-auto mr-auto">
                    <button type="submit" class="btn btn-info">Actualizar</button>
                  </div>
                  <!--End footer-->
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
      <x-footers.auth></x-footers.auth>
    </div>
  </main>
  <x-plugins></x-plugins>

</x-layout>