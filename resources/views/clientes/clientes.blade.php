@extends('layouts.menu')


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


<div class="container"></div>
<div class="row"></div>
<div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <div class="row">
                <div class="col col-xs-6 text-right">
                  <a id="alta"   href="/empleados/create" type="button" class="btn btn-sm btn-primary btn-create">Ingresar Empleado</a>
              </div>
            </div>
          </div>
             <div class="table-responsive">
                <table  id="datos" class="table table-striped table-bordered table-list ">
                  <thead> 
                    <tr>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Email</th>
                      <th>Teléfono</th>
                    </tr> 
                  </thead>
                  <tbody
                    <tr>
                      <td> </td>
                      <td> </td>
                      <td> </td>
                      <td> </td>
                      <td align="center">
                      <a id='' href="" class="btn btn-default"><em class="fa fa-pencil"></em></a>           
                      <button id="" class="btn btn-danger fa fa-trash"></button>
                      </td>
                    </tr>
                  </tbody>
                
                </table>
              </div>
        </div>
      </div>
