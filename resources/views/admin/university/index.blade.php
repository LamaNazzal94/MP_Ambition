@extends('admin.layout.master')
@section('content')
<div>
    {{-- <section class="content"> --}}
        <a class="btn btn-primary  mb-3" href="{{route('universities.create') }}">Add University  </a>

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
                            University Name
                        </th>
                        <th >
                                University main_image
                        </th>
                        <th>
                                University image1
                        </th>
                        <th >
                                University image2
                        </th>
                        <th>
                                University image3
                            </th>
                            <th>
                                University accommodation
                            </th>
                            <th>
                                University offer
                            </th>
                            <th>
                                University ranking
                            </th>
                            <th>
                                University about
                            </th>
                            <th>
                                University requirement
                            </th>
                            <th>
                                University cost
                            </th>
                            <th>
                                University location
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
                    @foreach ($universities as $university )
                       <tr>
                        <th scope="row">{{$i}}</th>
    
                        <td>{{$university->name}}</td>
                        <td><img src="{{ url('/images/' . $university->main_image) }}" alt="" width="100px" height="100px"></td>
                        <td><img src="{{ url('/images/' . $university->image1) }}" alt="" width="100px" height="100px"></td>
                        <td><img src="{{ url('/images/' . $university->image2) }}" alt="" width="100px" height="100px"></td>
                        <td><img src="{{ url('/images/' . $university->image3) }}" alt="" width="100px" height="100px"></td>
                        <td>{{$university->accommodation}}</td>
                        <td>{{$university->offer}}</td>
                        <td>{{$university->ranking}}</td>
                        <td>{{$university->about}}</td>
                        <td>{{$university->requirement}}</td>
                        <td>{{$university->cost}}</td>
                        <td>{{$university->location}}</td>
                        <td>{{$university->country->name}}</td>


                        {{-- ?? --}}
                        {{-- <td>{{ optional($university->country)->name }}</td> --}}
                        {{-- <td>{{$university->country->name}}</td> --}}
                        

                        <td class="project-actions text-right">
    
                            <a class="btn btn-info " href="{{ route('universities.edit', $university->id) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
    
                            <form action="{{route('universities.destroy',$university->id)}}"  method="POST"  style="display: inline;">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this university?')">
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