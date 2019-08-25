@extends('layouts.master')

@section('content')

<style>
        label{
         font-weight: 700;   
         margin-top: 30px;
        }
        input[type=text], select {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        
        input[type=submit] {
          width: 100%;
          background-color: #4CAF50;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }
        
        input[type=submit]:hover {
          background-color: #45a049;
        }
        
        div {
          border-radius: 5px;
          background-color: #ffffff;
          padding: 20px;
        }
        </style>

<div class = "container">
        <form action="/masini/add">
            <label >Numar Inmatriculare</label>
            <input type="text" id="numar_inmatriculare" name="numar_inmatriculare" placeholder="Numar Inmatriculare.." required>
        
            <label >Marca</label>
            <input type="text" id="marca" name="marca" placeholder="Marca.." required> 
        
            <label >Model</label>
            <input type="text" id="model" name="model" placeholder="Model.." required>

            <label >An</label>
            <input type="text" id="an" name="an" placeholder="An.." required>
          
           

            <input type="submit" value="Submit">
          </form>
    
</div>

@endsection