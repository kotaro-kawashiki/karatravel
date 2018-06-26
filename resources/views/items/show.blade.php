@extends('layouts.app')

@section('content')

        <table  class="table table-striped">
            <tbody>
            @foreach ($items as $item)
                <tr><td>{!! link_to_route('items.show', $item->id, ['id' => $item->id]) !!}</td>
                         <td>{{ $item->genre }}</td>
                         <td>{{ $item->namae }}</td>
                         <td>{{ $item->kinngaku }}</td>
                         <td>{!! Form::open(['route' => ['items.destroy', $item->id], 'method' => 'delete']) !!}
                             {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                             {!! Form::close() !!}</td>
                         </tr>
        
            @endforeach
            </tbody>
        </table>
       
        
        

<a href="/" >戻る</a>



@endsection
