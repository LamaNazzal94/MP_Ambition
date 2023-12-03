@extends('admin.layout.master')
@section('content')
    <div>
        <a class="btn btn-primary  mb-3" href="{{ route('lanAcadimes.create') }}">Add acadmy </a>
    
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
                                acadmy Name
                            </th>
                            <th>
                                acadmy image
                            </th>

                            <th>
                                acadmy description
                            </th>

                            <th>
                                acadmy location
                            </th>

                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($academies as $acadmy)
                            <tr>
                                <th scope="row">{{ $i }}</th>

                                <td>{{ $acadmy->name }}</td>
                                <td><img src="{{ url('/images/' . $acadmy->image) }}" alt="" width="100px"
                                        height="100px"></td>
                                <td>{{ $acadmy->description }}</td>
                                <td>{{ $acadmy->location }}</td>
                                <td class="project-actions text-right">

                                     <a class="btn btn-info " href="{{ route('lanAcadimes.edit', $acadmy->id) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>

                                    <form action="{{ route('lanAcadimes.destroy', $acadmy->id) }}" method="POST"
                                        style="display: inline;">
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
