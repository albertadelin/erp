@extends('layouts.master')

@section('content')

<a href="/produse/showAdd/" class="btn btn-success" style="margin: 25px;">Adauga Produs</a>

<table class="tabela-produse">
        <thead>
    <tr>
      <th>Id</th>
      <th>Nume</th> 
      <th>Gramaj</th>
      <th>Pret</th>
      <th>Discount</th>
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

        var table = $('.tabela-produse').DataTable({

                'ajax': '/produse/show',

                "columns": [

                    { "data": "id" },
                    { "data": "nume" },
                    { "data": "gramaj" },
                    { "data": "pret" },
                    { "data": "discount" },
                    { "data" : "id",
                        "render": function ( data, type, row, meta ) {
                            return '<a href="/produse/'+data+'/showEdit" class="btn btn-info update-btn" data-id="'+ data +'">Editeaza</a>';
                            
                        },
                    },
                    { "data" : "id",
                        "render": function ( data, type, row, meta ) {
                            return '<a href="/produse/'+data+'/delete" class="btn btn-danger delete-btn" onclick="return confirm(\'Sigur vrei sa stergi produsul?\')" data-id="'+ data +'">Sterge</a>';                            
                        },
                    }
                ],

                "lengthMenu": [[10, 25, -1], [10, 25, "All"]]

        });

    });



    

</script>

@endsection