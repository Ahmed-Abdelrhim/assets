@extends('main')
@section('content')
    <form action="#" id="formadd">
        <div class="modal-header">

            <h5 class="modal-title"><?php echo trans('lang.add_data'); ?></h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label><?php echo trans('lang.name'); ?></label>
                <input name="name" type="text" id="name" class=" form-control" required
                       placeholder="<?php echo trans('lang.name');?>"/>
            </div>

            <div class="form-group">
                <label><?php echo trans('lang.description'); ?></label>
                <textarea class="form-control" name="description" id="description"
                          placeholder="<?php echo trans('lang.description');?>"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary"
                    id="save"><?php echo trans('lang.save'); ?></button>
            <button type="button" class="btn btn-default"
                    data-dismiss="modal"><?php echo trans('lang.close'); ?></button>
        </div>
    </form>


    <script>
    $("#formadd").validate({
    submitHandler: function(form) {
        $.ajax({
			method: "POST",
            url: "{{ url('savebrand')}}",
            data: $("#formadd").serialize(),
            dataType: "JSON",
            success: function(data) {
                console.log(data);

                $('#description').val('');
                $('#name').val('');

				$("#messagesuccess").css({'display':"block"});

                // window.setTimeout(function(){location.reload()},2000);

                window.location.href = 'http://127.0.0.1:8000/brandlist '; //Will take you to Google.

                {{--				iziToast.success({--}}
                {{--                title: 'Success',--}}
                {{--                message: 'Brand Was Added Successfully ',--}}
                {{--                position: 'topRight'--}}
                {{--                });--}}




            }
		});
    }
});

    </script>
@endsection

