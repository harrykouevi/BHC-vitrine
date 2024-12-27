@extends('layouts.admin')

@section('title', 'Dashboard')

@push('css')
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{ asset('css/accounting.css') }}" />
@endpush


@section('content')
<div class="container">
    <h1>Create Article</h1>
    @livewire('manage-post',['articleId' => $postId])
</div>
@endsection

@push('scripts')

@endpush
