@extends("layouts/head")
<body>
<section class="h-full gradient-form bg-gray-200 md:h-screen" style="
background-color: #645527;
background-image: url('https://www.transparenttextures.com/patterns/45-degree-fabric-light.png');
">
  <div class="container py-12 px-12 h-full" style="margin: 0 auto;">
    <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
      <div class="xl:w-5/12">
        <div class="block bg-white shadow-lg rounded-lg">
          <div class="lg:flex lg:flex-wrap g-0">
            <div class="lg:w-full px-4 md:px-0">
              <div class="p-12 md:mx-6">
                <div class="text-center">
                  <img
                    class="mx-auto w-48 rounded-lg"
                    src="{{ asset('storage/images/logo.png') }}""
                    alt="logo"
                  />
                  
                </div>
                <form name="form" method="POST" action="{{route('check-login')}}">
                  @csrf 
                  <p class="mb-4 text-center">Por favor, introduzca sus credenciales</p>
                  <div class="mb-4">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="userInput"
                      placeholder="Usuario"
                      name="user"
                      required
                    />
                  </div>
                  <div class="mb-4">
                    <input
                      type="password"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="passwordInput"
                      placeholder="Contraseña"
                      name="password"
                      required
                    />
                  </div>
                  <div class="text-center pt-1 mb-12 pb-1">
                    <button
                      class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                      type="submit"
                      data-mdb-ripple="true"
                      data-mdb-ripple-color="dark"
                      style="
                        background: 
                          #a58c40;
            
                      "
                    >
                     Acceder
                    </button>

                    @if ($errors->any())
                    <h1 class="mt-2 text-red-500">Usuario o/y contraseña incorrectos</h1>
                    @else
                    <h1 class="mt-2 text-red-500 invisible">Usuario o/y contraseña incorrectos</h1>
                    @endif
                    {{-- <a class="text-gray-500" href="#!">Ha olvidado su contraseña?</a> --}}
                    
                   </div>
                  
                  {{-- <div class="flex items-center justify-between pb-6">
                    <p class="mb-0 mr-2">Don't have an account?</p>
                    <button
                      type="button"
                      class="inline-block px-6 py-2 border-2 border-red-600 text-red-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                      data-mdb-ripple="true"
                      data-mdb-ripple-color="light"
                    >
                      Danger
                    </button>
                  </div> --}}
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>