@extends('layouts.admin.main')
{{-- css --}}
@section('extracss')
@stop

{{-- Content --}}
@section('content')

  <div class="row">
      <div class="col-lg-12">
          <div class="ibox ">
              <div class="ibox-title">
                  <h5>Listado de Compras </h5>
              </div>
              <div class="ibox-content">

                <form method="GET" action="{{ route('admin.purchases.list') }}" id="mainForm">
                  <input type="hidden" name="order_col" value="{{$order_col}}" id="order_col" />
                  <input type="hidden" name="order" value="{{$order}}" id="order" />

                    <div class="row">
                        <div class="col-sm-3">
                            <div class="input-group"><input name="q" placeholder="Compra a buscar" type="text" class="form-control form-control-sm" value="{{$q}}">
                              <span class="input-group-append">
                                <button type="button" class="btn btn-sm btn-primary">Buscar</button>
                              </span>
                            </div>
                            <br>
                        </div>
                    </div>

                  </form>

                  <div class="table-responsive">
                      <table class="table table-striped">
                          <thead>
                          <tr>
                              <th></th>
                              <th>Proveedor {!! Helper::OrderColumn('username',$order_col,$order) !!}</th>
                              <th>Fecha {!! Helper::OrderColumn('name',$order_col,$order) !!}</th>
                              <th>Estado {!! Helper::OrderColumn('email',$order_col,$order) !!}</th>
                              <th>Observaciones {!! Helper::OrderColumn('active',$order_col,$order) !!}</th>
                              <th>Acciones</th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach($purchases as $purchase)
                              <tr>
                                <td>{{ $purchase->id }}</td>
                                <td>{{ $purchase->Vendor->name }}</td>
                                <td>{{ Helper::showDate($purchase->date) }}</td>
                                <td>{{ $purchase->Status->name }}</td>
                                <td>{{ $purchase->observations }}</td>
                                <td>
                                  <a href="{{ route('admin.purchases.edit', ['id'=>$purchase->id]) }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil-square-o"></i> Editar</a>
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                      </table>
                  </div>


                  @if ($purchases->hasMorePages() || $purchases->lastPage())
                  <div class="row">
                      <div class="col-12">
                          {{ $purchases->appends( Request::except('page') )->links() }}
                      </div>
                  </div>
                  @endif

              </div>
          </div>
      </div>

  </div>

@stop
{{-- Scripts --}}
@section('scripts')
  <script>
    $(document).ready(function() {
      orderColumn();
    });
  </script>
@stop