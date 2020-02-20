@extends('layouts.app')

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
</head>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Clients</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/oauth/clients" target="_blank">Show Clients</a>

                    <form action="/oauth/clients" method="post">
                        @csrf
                        <input name="name" type="text" placeholder="Name"/>
                        <input name="redirect" type="text" placeholder="Redirect URL"/>
                        <input type="submit" value="Create Client" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
