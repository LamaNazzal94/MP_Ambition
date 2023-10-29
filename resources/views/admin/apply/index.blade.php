@extends('admin.layout.master')
@section('content')
<div>
    {{-- <section class="content"> --}}
        <a class="btn btn-primary  mb-3" href="{{route('applies.create') }}">Add University  </a>

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Applies</h3>
    
       
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects text-center">
                <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                                first_name                        </th>
                        <th >
                                last_name                        </th>
                        <th>
                                email                        </th>
                        <th >
                                high_school_certificate                        </th>
                        <th>
                                age                            </th>
                            <th>
                                nationalID                            </th>
                            <th>
                                bio
                            </th>
                        
                            <th>
                                department name
                            </th>
                            <th>
                                user name
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
                    @foreach ($applies as $apply )
                       <tr>
                        <th scope="row">{{$i}}</th>
    
                        <td>{{$apply->first_name}}</td>
                        <td>{{$apply->last_name}}</td>
                        <td>{{$apply->email}}</td>
                        <td>{{$apply->high_school_certificate}}</td>
                        <td>{{$apply->age}}</td>
                        <td>{{$apply->nationalID}}</td>
                        <td>{{$apply->bio}}</td>

                        <td>{{$apply->country->name}}</td>


                        {{-- ?? --}}
                        {{-- <td>{{ optional($apply->country)->name }}</td> --}}
                        {{-- <td>{{$apply->country->name}}</td> --}}
                        

                        <td class="project-actions text-right">
    
                            <a class="btn btn-info " href="{{ route('applies.edit', $apply->id) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
    
                            <form action="{{route('applies.destroy',$apply->id)}}"  method="POST"  style="display: inline;">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this apply?')">
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