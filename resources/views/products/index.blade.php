@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Produtos</div>
                <div class="card-body">
                    <index-produtos
                        :produtos="{{ json_encode($produtos->toArray()['data']) }}"
                        :card-width="cardWidth"
                        token="{{ csrf_token() }}"
                    ></index-produtos>
                </div>
            </div>
            <div id="paginas">
                {{ $produtos->links() }}
            </div>
        </div>  
  </div>
@endsection
