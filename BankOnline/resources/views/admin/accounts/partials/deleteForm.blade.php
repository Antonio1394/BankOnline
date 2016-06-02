{!!Form::open(['route' => ['admin.cuentas.destroy', $id], 'method' => 'DELETE'])!!}
    <h4>
        Desea eliminar este registro?
    </h4>
    <div class="modal-footer">
        {!!Form::submit('Si', ['class' => 'btn btn-primary'])!!}
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
    </div>
{!!Form::close()!!}

<script type="text/javascript">
    $('#generalModal form').submit(function(e){
        $("#generalModal .btn-primary").prop('disabled', true);
    });
</script>
