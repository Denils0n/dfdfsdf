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
                    You're logged in!

                    <table>
                       <tr>
                           <th>nome</th>
                           <th>ataque1</th>
                           <th>ataque2</th>
                           <th>ataque3</th>
                           <th>ataque4</th>
                       </tr>
                        @foreach(Auth::user()->pokemon as $pokemon)
                        
                        <tr>
                                <td>{{$pokemon->nome}}</td>
                                <td>{{$pokemon->ataque1}}</td>
                                <td>{{$pokemon->ataque2}}</td>
                                <td>{{$pokemon->ataque3}}</td>
                                <td>{{$pokemon->ataque4}}</td>
                                <td>
                                <form action="/apagar-pokemon/{{$pokemon->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="Apagar" data-toggle="modal" data-target="#exampleModal" onclick="return confirm('Tem certeza que deseja excluir esse pokemon?');">APAGAR</button>
                                </form>
                                <a href="/editar-pokemon/{{$pokemon->id}}" method="GET"> editar</a>
                                <a href="/editar-pokemon/{{$pokemon->id}}" method="GET"> editar</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    <form action="/add-pokemon" method="POST">
                        @csrf
                        <input type="text" name="nome" placeholder="nome">
                        <input type="text" name="ataque1" placeholder="ataque1">
                        <input type="text" name="ataque2" placeholder="ataque2">
                        <input type="text" name="ataque3" placeholder="ataque3">
                        <input type="text" name="ataque4" placeholder="ataque4">
                        <input type="submit" value="Adicionar">
                    </form>





                    @foreach(App\Models\Pokemon equipe as $p)

                    <div>{{$p -> nome}}</div>

                        


                    @endforeach




                </div>
            </div>
        </div>
    </div>
</x-app-layout>
