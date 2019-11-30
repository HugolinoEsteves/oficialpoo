@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    @foreach($alunos as $aluno)
                    <li>{{ $aluno->id }}</li>
                    <li>{{ $aluno->Nome }}</li>
                    <li>{{ $aluno->Sobrenome }}</li>
                    <li>{{ $aluno->Email }}</li>
                    <li>{{ $aluno->Telefone }}</li>
                    <li>{{ $aluno->cursos_id }}</li>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
