 <x-layout>
     <section class="main-container overflow-hidden container">
         <h1>Film su FakeFlix</h1>
         <div class="box">
             @foreach ($films as $film)
                 <a href="{{ route('detail', ['uri' => $film['uri']]) }}">
                     <x-card :cover="$film['cover']" />
                 </a>
             @endforeach



         </div>
     </section>
 </x-layout>
