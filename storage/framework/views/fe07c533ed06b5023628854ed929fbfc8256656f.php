
<?php $__env->startSection('pageTitle'); ?>
    All Message
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Phone Number</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    	<?php $__currentLoopData = $messageInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($message->phone); ?></td>
            <td><?php echo e($message->message); ?></td>
            <td>
                <button type="button" id="<?php echo e($message->id); ?>" class="btn btn-danger dltVideo">Delete</button>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
   
</table>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script type="">
    
    $(".dltVideo").click(function(){

                 var element=$(this);
                 var id = element.attr("id");
                 var APP_URL = $('meta[name="_base_url"]').attr('content');
                 $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                 swal({
                  title: "Are you sure?",
                  text: "Once deleted, you will not be able to recover this  file!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {

                        
                         jQuery.ajax({
                            url: APP_URL+'/admin/generel/messageDelete',
                            method: 'post',
                            data:{id:id},
                            success: function(result){


                                location.reload(true);
                            },
                              error: function() {
                                alert('Error occurs!');
                             }
                        });



                    swal("Poof! Your  file has been deleted!", {
                      icon: "success",
                    });
                  } else {
                    swal("Your  file is safe!");
                  }
                });
            })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\bdshoppingzon\resources\views/admin/user/message.blade.php ENDPATH**/ ?>