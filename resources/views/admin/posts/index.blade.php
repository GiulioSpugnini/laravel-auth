@extends('layouts.app')

@section('content')
    <div class="container">
        <header>
            <h2>I miei Posts</h2>
        </header>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo:</th>
                        <th scope="col">Slug:</th>
                        <th scope="col">Data di crezione:</th>
                        <th scope="col">Azione</th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->slug }}</td>
                            <td>{{ $post->created_at }}</td>
                            <th class="d-flex justify-content-end align-items-center">
                                <a class="btn btn-sm btn-primary mr-2" href=""><i class="fas fa-eye"></i></a>
                                <a class="btn btn-sm btn-warning mr-2" href=""><i class="fas fa-pencil"></i></a>
                                <a class="btn btn-sm btn-danger" href=""><i class="fas fa-trash-alt"></i></a>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="">
                                <h3>Non ci sono post</h3>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
