<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $search = request('search'); // Metodo para validar a pesquisa

        if($search){
            //Logica da pesquisa na query
            $events = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();

        }else{
            $events = Event::all(); // Acesso ao dados vindo da BD
        }

        return view('welcome',['events'=> $events,'search'=> $search]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event = new Event;
        $event->title = $request->title;
        $event->date = $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;

        /**
         * Imagem Upload
         * @return string
         */
        if($request->hasFile('image') && $request->file('image')->isValid()){
            //Request da imagem
            $requestImage = $request->image;
            //Extensão da imagem
            $extension = $requestImage->extension();
            //Caminho completo da imagem
            $imageName = md5($requestImage->getClientOriginalName(). strtotime("now")) . "." . $extension;
            // Add a imagem na pasta
            $request->image->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }

        //Salvar o evento requerendo o evento
        $user = Auth()->user();
        $event->user_id = $user->id;

        $event->save();
        return redirect('/')->with('msg','Evento criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $event = Event::findOrFail($id);

        //Verificação se um evento já foi marcado com presença

        $user = auth()->user();
        $hasUserJoined = false;

        if ($user) {
            # code...
            $userEvents = $user->eventsAsParticipant->toArray();

            foreach($userEvents as $userEvent){
                if($userEvent['id'] == $id){
                    $hasUserJoined = true;
                }
            }
        }

        /**
         * registro de quem é o proprietário do evento
         * @return $eventOwner
         */
        $eventOwner = User::where('id', $event->user_id)->first()->toArray();

        return view('events.show',['event' => $event, 'eventOwner'=>$eventOwner, 'hasUserJoined' => $hasUserJoined]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $user = auth()->user();

        $event = Event::findOrFail($id);

        if ($user->id != $event->user->id) {
            return redirect('/dashboard');
        }
        return view('events.edit', ['event' =>$event]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $event = $request->all();

        /**
         * Imagem Upload
         * @return string
         */
        if($request->hasFile('image') && $request->file('image')->isValid()){
            //Request da imagem
            $requestImage = $request->image;
            //Extensão da imagem
            $extension = $requestImage->extension();
            //Caminho completo da imagem
            $imageName = md5($requestImage->getClientOriginalName(). strtotime("now")) . "." . $extension;
            // Add a imagem na pasta
            $request->image->move(public_path('img/events'), $imageName);

            $data['image'] = $imageName;
        }

        Event::findOrFail($request->id)->update($data);
        return redirect('/dashboard')->with('msg','Evento editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        //
        Event::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg','Evento excluído com sucesso');
    }

    public function dashboard(){
        $user = auth()->user();

        $events = $user->events;

        /**
         * exibindo os eventos dos usuarios
         * @eventAsParticipant
         * @return string
         */
        $eventAsParticipant = $user->eventsAsParticipant;

        return view('events.dashboard',
        ['events' => $events, 'eventsasparticipant' =>$eventAsParticipant]);
    }

    /**
     * metodo Saida de dadas da relação muito por muitos
     * @return string
     */

    public function joinEvent($id){

        $user = auth()->user();

        $user->eventsAsParticipant()->attach($id);

        $event = Event::findOrFail($id);

        return redirect('/dashboard')->with('msg', 'Sua presença esta confirmada no evento '. $event->title);
    }

    /**
     * Metodo pra sair de um determinado evento
     * @return string
     */
    public function leaveEvent($id){
        //Diferença entre um metodo e uma função
        $user = auth()->user();

        $user->eventsAsParticipant()->detach($id);

        $event = Event::findOrFail($id);

        return redirect('/dashboard')->with('msg','Você saiu com sucesso do evento: '. $event->title);
    }
}
