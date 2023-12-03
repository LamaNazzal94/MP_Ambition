@extends('admin.layout.master')
@section('content')
<div>
    {{-- <section class="content"> --}}
        <a class="btn btn-primary  mb-3" href="{{route('departments.create') }}">Add Department  </a>

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Departments</h3>
    
       
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects text-center">
                <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            Department Name
                        </th>
                      
                        <th>
                                Department image
                        </th>
                      
                            <th>
                                Department introduction
                            </th>
                            <th>
                                Department apportunities
                            </th>
                            <th>
                                Department apportunitie2
                            </th>
                            <th>
                                Department apportunitie3
                            </th>
                            <th>
                                Department apportunitie4
                            </th>
                            <th>
                                Department apportunitie5
                            </th>
                            <th>
                                Department apportunitie6
                            </th>
                            <th>
                                Department apportunitie7
                            </th>
                            <th>
                                Department cost
                            </th>
                            <th>
                                Department duration study
                            </th>
                            
                            <th>
                              College Name
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
                    @foreach ($departments as $college )
                       <tr>
                        <th scope="row">{{$i}}</th>
    
                        <td>{{$college->name}}</td>
                        <td><img src="{{ url('/images/' . $college->image) }}" alt="" width="100px" height="100px"></td>
                        <td>{{$college->introduction}}</td>
                        <td>{{$college->apportunities}}</td>
                        <td>{{$college->apportunitie2}}</td>
                        <td>{{$college->apportunitie3}}</td>
                        <td>{{$college->apportunitie4}}</td>
                        <td>{{$college->apportunitie5}}</td>
                        <td>{{$college->apportunitie6}}</td>
                        <td>{{$college->apportunitie7}}</td>

                        <td>{{$college->cost}}</td>
                        <td>{{$college->duration_study}}</td>

                        <td>{{$college->college->name}}</td>

                        

                        <td class="project-actions text-right">
    
                            <a class="btn btn-info " href="{{ route('departments.edit', $college->id) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
    
                            <form action="{{route('departments.destroy',$college->id)}}"  method="POST"  style="display: inline;">
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