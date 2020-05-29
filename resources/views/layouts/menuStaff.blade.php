<div class="menuContainerAuth">
        <ul class="headerMenu">
          <li class="headerMenuItem"><a href="{{ route('home') }}" title="Va alla Home ">Home</a></li>
          <li class="headerMenuItem"><a href="{{route('catalog1')}}">Catalogo</a></li>
          <li class="headerMenuItemStaff" id="newProduct"><a href="{{ route('newproduct') }}" title="Inserisce nuovi prodotti">Inserisci Prodotto</a></li>
         
          @auth
          <li class="headerMenuItem" id="logout"><a href="" class="" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
          @endauth 
        </ul>
</div>