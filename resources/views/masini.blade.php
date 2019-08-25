@extends('layouts.master')

@section('content')

<a href="/masini/showAdd/" class="btn btn-success" style="margin: 25px;">Adauga Masina</a>

<table class="tabela-masini">
        <thead>
    <tr>
      <th>Id</th>
      <th>Numar Inmatriculare</th> 
      <th>Marca</th>
      <th>Model</th>
      <th>An</th>
      <th>Editeaza</th>
      <th>Sterge</th>
    </tr>
    <thead>

    <tbody>
    
    </tbody>
  </table>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

  <script>



    $(document).ready( function () {

        var table = $('.tabela-masini').DataTable({

                'ajax': '/masini/show',

                "columns": [

                    { "data": "id" },
                    { "data": "numar_inmatriculare" },
                    { "data": "marca" },
                    { "data": "model" },
                    { "data": "an" },
                    { "data" : "id",
                        "render": function ( data, type, row, meta ) {
                            return '<a href="/masini/'+data+'/showEdit" class="btn btn-info update-btn" data-id="'+ data +'">Editeaza</a>';
                        },
                    },
                    { "data" : "id",
                        "render": function ( data, type, row, meta ) {
                            return '<a href="/masini/'+data+'/delete" class="btn btn-danger delete-btn" onclick="return confirm(\'Sigur vrei sa stergi masina?\')" data-id="'+ data +'">Sterge</a>';
                        
                        },
                    }
                ],

                "lengthMenu": [[10, 25, -1], [10, 25, "All"]]

        });

    });



    

</script>

@endsection