@extends('admin.layout.master')
@section('content')
<div>
    {{-- <section class="content"> --}}
        <a class="btn btn-primary  mb-3" href="{{route('countries.create') }}">Add country  </a>

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Countries</h3>
    
       
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects text-center">
                <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            Country Image
                        </th>
                        <th >
                            Country Name
                        </th>
                        <th>
                            Country Description
                        </th>
                        <th >
                            Country Quote
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                         $i=1;
                    @endphp
                    @foreach ($countries as $country )
                       <tr>
                        <th scope="row">{{$i}}</th>
                        <td><img src="{{ url('/images/' . $country->image) }}" alt="" width="100px" height="100px"></td>
    
                        <td>{{$country->name}}</td>
                        <td>{{$country->description}}</td>
                        <td>{{$country->quote}}</td>

                        <td class="project-actions text-right">
    
                            <a class="btn btn-info " href="{{ route('countries.edit', $country->id) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
    
                            <form action="{{route('countries.destroy',$country->id)}}"  method="POST"  style="display: inline;">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this admin?')">
                                <i class="fas fa-trash">
                                </i>Delete</button>
                              </form>
                        </td>
                    </tr>
                    @php
                    $i++;
                @endphp
                    @endforeach
                  
                </tbody>
    
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
    
    </section>
    <div>
@endsection