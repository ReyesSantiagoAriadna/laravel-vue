@extends('app')

@section('content')

<div id="crud" class="row">
    <div class="col-xs-12">
        <h1 class="page-header">CRUD Laravel y VUEjs</h1>
    </div>

    <div class="col-sm-7">
        <!--  <a href="#create" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">Nueva Tarea</a> -->

        <button type="button" class="btn btn-primary pull-right" data-bs-toggle="modal" data-bs-target="#create">
            Nueva Tarea
          </button>

        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tarea</th>
                    <th colspan="2">
                        &nbsp;
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="keep in keeps">
                    <td width="10px">@{{ keep.id }}</td>
                    <td>@{{ keep.keep }}</td>
                    <td width=10px>
                        <a href="#" class="btn btn-warning btn-sm" v-on:click.prevent="editKeep(keep)">Editar</a> 
                    </td>
                    <td width=10px>
                        <a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="deleteKeep(keep)">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li v-if="pagination.current_page > 1" class="page-item">
                  <a class="page-link" href="#" @click.prevent="changePage(pagination.current_page -1)">
                     Atras
                  </a>
              </li>
              
              <li class="page-item" v-for="page in pagesNumber">
                  <a class="page-link" href="#" @click.prevent="changePage(page)">
                      @{{ page }}
                  </a>
              </li>
               
              <li v-if="pagination.current_page < pagination.last_page " class ="page-item">
                  <a class="page-link" href="#"  @click.prevent="changePage(pagination.current_page +1)">
                    Siguiente
                </a>
              </li>
            </ul>
          </nav>

        @include('create')
        @include('edit')
    </div>
    <div class="col-sm-5">
        <pre>
            @{{$data}}
        </pre>
    </div>
</div>
    
@endsection