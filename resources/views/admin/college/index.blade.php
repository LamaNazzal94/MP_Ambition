@extends('admin.layout.master')
@section('content')
<div>
    {{-- <section class="content"> --}}
        <a class="btn btn-primary  mb-3" href="{{route('colleges.create') }}">Add College  </a>

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Universities</h3>
    
       
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects text-center">
                <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            College Name
                        </th>
                        <th >
                                College image
                        </th>
                        <th>
                                Country Name
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
                    @foreach ($colleges as $college )
                       <tr>
                        <th scope="row">{{$i}}</th>
    
                        <td>{{$college->name}}</td>
                        <td><img src="{{ url('/images/' . $college->image) }}" alt="" width="100px" height="100px"></td>
                        <td>{{$college->name}}</td>

                        {{-- <td>{{$college->university->name }}</td> --}}
                        

                        <td class="project-actions text-right">
    
                            <a class="btn btn-info " href="{{ route('colleges.edit', $college->id) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
    
                            <form action="{{route('colleges.destroy',$college->id)}}"  method="POST"  style="display: inline;">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this college?')">
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