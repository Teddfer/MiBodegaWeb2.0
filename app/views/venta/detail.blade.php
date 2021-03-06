{{--@extends('layouts.template')--}}

{{--@section('title', 'Productos')--}}

{{--@section('content')--}}
<div class="container">
    <form action="{{URL.'venta/save'}}" method="POST" id="myForm">
        <div class="form-group">
            <input type="hidden" name="IdVenta" value="{{$data->IdVenta}}">
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Cliente</label>
                    <select name="IdCliente">
                        @foreach ($clientes as $item)
                            <option value="{{$item->IdCliente}}" {{selected($item->IdCliente, $idcliente)}}>
                                {{$item->DNI}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Fecha de Emisión</label>
                    <input type="date" name="FEmision" id="FEmision" value="{{$data->FEmision}}">
                    <div class="messages"></div>
                </div> 
                <div class="form-group">
                    <label for="">Hora de Emisión</label>
                    <input type="time" name="HEmision" id="HEmision" value="{{$data->HEmision}}">
                    <div class="messages"></div>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-right">
            <div class="col modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="{{URL}}js/mis_scripts/validate.js"></script>
<script src="{{URL}}js/mis_scripts/show_errors_validations.js"></script>
<script src="{{URL}}js/mis_scripts/venta.js"></script>
{{--@endsection--}}