@php
    $title = __('Posts');
@endphp
@extends('layouts.my')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ __('Author') }}</th>
                    <th>{{ __('Title') }}</th>
                    <th>{{ __('Body') }}</th>
                    <th>{{ __('Created') }}</th>
                    <th>{{ __('Updated') }}</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr>
                <td>
                        <a href="{{ url('users/' . $post->user->id) }}">
                            {{ $post->user->name }}
                        </a>
                    </td>
                    <td>
                        <a href="{{ url('posts/'.$post->id) }}">{{ $post->title }}</a>
                    </td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                 </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{ $posts->links() }}
</div>
@endsectio