@extends('layouts.app')

@section('title','Book')

@section('page-title','Book')

@section('dashboard-content')
    <a href="#" class="btn btn-primary">
        Tambah
    </a>
    <table class="table">
        <tr>
            <th>Nama</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Action</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{$book->name}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->publisher}}</td>
            <td>{{$book->year}}</td>
            <td>
                <a href="#" class="btn btn-success">
                    <i class="fa fa-pencil"></i>
                </a>
				<form action="{{URL('book/'.$book->id)}}" method="POST" >
					{{ csrf_field() }}
					{{ method_field('DELETE')}} 
					<button type="Submit" class="btn btn-danger">
						<i class="fa fa-trash"></i>	
					</button>
				</form
            </td>
        </tr>
        @endforeach
    </table>
    
@endsection
