@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Produtos</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <label>Selecione a Relatório</label>
                            <select data-column="" class="form-control filter-select">
                                <option value="">...</option>
                                <option value="">Quantidade Vendida</option>
                                <option value="Valor Vendido">Valor Vendido</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>Selecione a Industria</label>
                            <select data-column="3" class="form-control filter-select">
                                <option value="">...</option>
                                <option value="EMS S/A">EMS S/A</option>
                                <option value="HYPERA S/A">HYPERA S/A</option>
                            </select>
                        </div>            
                        <div class="col">
                            <label>Selecione a Data Inicial</label>
                            <select class="form-control filter-select-start">
                                <option value="">...</option>
                                <option value="4">01/2020</option>
                                <option value="5">02/2020</option>
                                <option value="6">03/2020</option>
                                <option value="7">04/2020</option>
                                <option value="8">05/2020</option>
                                <option value="9">06/2020</option>
                                <option value="10">07/2020</option>
                                <option value="11">08/2020</option>
                                <option value="12">09/2020</option>
                                <option value="13">10/2020</option>
                                <option value="14">11/2020</option>
                                <option value="15">12/2020</option>
                            </select>
                        </div>   
                        <div class="col">
                            <label>Selecione a Data Final</label>
                            <select class="form-control filter-select-final">
                                <option value="">..</option>
                                <option value="4">01/2020</option>
                                <option value="5">02/2020</option>
                                <option value="6">03/2020</option>
                                <option value="7">04/2020</option>
                                <option value="8">05/2020</option>
                                <option value="9">06/2020</option>
                                <option value="10">07/2020</option>
                                <option value="11">08/2020</option>
                                <option value="12">09/2020</option>
                                <option value="13">10/2020</option>
                                <option value="14">11/2020</option>
                                <option value="15">12/2020</option>
                            </select>
                        </div>   
                    </div>
                    <div class="row">
                        <div class="col mt-1">
                            <label>Selecione as Unidades</label>
                            <select  class="filter-select2 select2 
                            select2-container--bootstrap4 select2-container--above select2-container--focus" 
                            multiple="multiple" 
                            data-dropdown-css-class="select2"
                            style="width: 100%;">
                                <option value="Green Pharma - PE">Green Pharma - PE</option>
                                <option value="Green Pharma - BA">Green Pharma - BA</option>
                                <option value="Green Pharma - MG">Green Pharma - MG</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="product_table">
                        <thead>
                            <tr>
                                <th>Código do Produto</th>
                                <th>EAN</th>
                                <th>Descrição</th>
                                <th>Fornecedor</th>
                                <th>01/2020</th>
                                <th>02/2020</th>
                                <th>03/2020</th>
                                <th>04/2020</th>
                                <th>05/2020</th>
                                <th>06/2020</th>
                                <th>07/2020</th>
                                <th>08/2020</th>
                                <th>09/2020</th>
                                <th>10/2020</th>
                                <th>11/2020</th>
                                <th>12/2020</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
@section('js')
<script>
  $(document).ready( function () {
    let table = $('#product_table').DataTable({
      processing: true,
      serverSide: true,
      scrollX: true,
      ajax:{
        url: "{{ route('product.index') }}",
      },
      columns: [
        { data: 'product_code', name: 'product_code' },
        { data: 'EAN', name: 'EAN' },
        { data: 'description', name: 'description' },
        { data: 'provider', name: 'provider' },
        { data: 'jan', name: 'jan' },
        { data: 'fev', name: 'fev' },
        { data: 'mar', name: 'mar' },
        { data: 'abr', name: 'abr' },
        { data: 'mai', name: 'mai' },
        { data: 'jun', name: 'jun' },
        { data: 'jul', name: 'jul' },
        { data: 'ags', name: 'ags' },
        { data: 'set', name: 'set' },
        { data: 'nov', name: 'nov' },
        { data: 'out', name: 'out' },
        { data: 'dez', name: 'dez' },
      ]
    });

    $('.filter-select').change(function(){
        table.column( $(this).data('column'))
        .search( $(this).val() )
        .draw();
    })

    $('.filter-select-final').change(function(){
        let start = Number($('.filter-select-start').val())
        let final = Number($(this).val())
        console.log(start,final)
        table.columns().visible(false);
        if(start <= final)
        {
            table.columns(0).visible(true);
            table.columns(1).visible(true);
            table.columns(2).visible(true);
            table.columns(3).visible(true);
            for(start; start <= final; start++){
                table.columns(start).visible(true);
            }
        }else{
            alert("Data Inicial deve ser menor que a Final")
        }


    })

    $('.select2').select2()
  });
</script>
@stop