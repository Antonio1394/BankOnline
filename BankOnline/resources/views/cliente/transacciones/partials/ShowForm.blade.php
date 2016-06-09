<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No.</th>
            <th># de Cuenta</th>
            <th>Monto</th>
            <th>Fecha de Operacion</th>

        </tr>
    </thead>
    <tbody>
      @foreach($trans as  $key => $data)
         <tr>
             <td>{{ $key + 1   }}</td>
             <td>{{ $data->cuenta_destino }} </td>
             <td>{{ $data->monto }} </td>
             <td>{{ date("d/m/Y", strtotime($data->fecha)) }}</td>

         </tr>
     @endforeach
    </tbody>
</table>
