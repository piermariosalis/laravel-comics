@extends('layouts.dashboard')

@section('content')
    <a href="{{route('admin.comics.create')}}" class="btn-dark ">Add Comics</a>
           <table class="table">
               <thead>
                   <tr>
                       <th>ID</th>
                       <th>Series</th>
                       <th>onSale</th>
                       <th>volume</th>
                       <th>trimSize</th>
                       <th>pageCount</th>
                       <th>rated</th>
                       <th>artBy</th>
                       <th>writtenBy</th>
                       <th>Cover</th>
                       <th>Admin Controls</th>


                   </tr>
               </thead>
               <tbody>
                   @foreach($comics as $comic)
                   <tr>
                       <td scope="row">{{$comic->id}}</td>
                       <td>{{$comic->series}}</td>
                       <td>{{$comic->onSale}}</td>
                       <td>{{$comic->volume}}</td>
                       <td>{{$comic->trimSize}}</td>
                       <td>{{$comic->pageCount}}</td>
                       <td>{{$comic->rated}}</td>
                       <td>{{$comic->artBy}}</td>
                       <td>{{$comic->writtenBy}}</td>
                       <td></td>
                       <td>
                           <a href="" ><i class="fas fa-eye  fa-md  "></i></a>
                           <a href="" ><i class="fas fa-pencil-alt  fa-md  "></i></a>
                           <a href="" ><i class="fas fa-trash  fa-md  "></i></a>

                       </td>

                   </tr>
                @endforeach
               </tbody>
           </table>











<!-- <div class="card card_admin">
                <div class=" card_admin card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> -->

@endsection
