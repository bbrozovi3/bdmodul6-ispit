@extends('layouts.main')

@section('title', 'Links')

@section('content')

    <div class="col-md-4">
        <a type="button" class="btn btn-primary" href="{{ route('links.create') }}">Add link</a>
    </div>


    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Links</th>
                        <th scope="col">Remove</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
            
                <tbody>
                    <?php $i = 1;  ?>	
                    @foreach ($links as $link)
                        <tr>
                            <td> <?php echo $i; ?> </td>
                            <td>{{ $link->title }}</td>
                                <form action="{{ route('links.destroy', ['link' => $link->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <td> 
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </td>
                                </form>
                                <form action="{{ route('links.edit', ['link' => $link->id]) }}" method="POST">
                                    @method('GET')
                                    @csrf
                                    <td> 
                                        <input type="submit" class="btn btn-warning" value="Edit">
                                    </td>
                                </form>
                        </tr>
                        <?php $i++;  ?>	
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection