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
                        <th class="d-flex justify-content-end align-items-center">Azione</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->slug }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>{{ $post->created_at }}</td>
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
