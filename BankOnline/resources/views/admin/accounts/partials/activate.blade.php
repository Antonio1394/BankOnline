{!!Form::open(['route' => ['admin/cuenta/activate',$id], 'method' => 'PUT'])!!}
    <h4>
        Desea Activar el Usuario?
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
