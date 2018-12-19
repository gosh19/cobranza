  <div class="col">
    <div class="table">
      <table class="table-responsive">
        <tr>
          <th>Comentario</th>
          <th>Fecha</th>
        </tr>
        @foreach ($comentarios as $comentario)
          <tr>
            <td>{{$comentario['comentario']}}</td>
            <td>{{$comentario['created_at']}}</td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
