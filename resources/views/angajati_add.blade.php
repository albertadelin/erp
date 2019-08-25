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
        <form action="/angajati/add">
            <label >Nume</label>
            <input type="text" id="nume" name="nume" placeholder="Nume.." required>
        
            <label >CNP</label>
            <input type="text" id="cnp" name="cnp" placeholder="CNP.." required> 
        
            <label >Data Nasterii</label>
            <input type="text" id="data_nasterii" name="data_nasterii" placeholder="Data Nasterii.." required>

            <label >Adresa</label>
            <input type="text" id="adresa" name="adresa" placeholder="Adresa.." required>
          
           

            <input type="submit" value="Submit">
          </form>
    
</div>

@endsection