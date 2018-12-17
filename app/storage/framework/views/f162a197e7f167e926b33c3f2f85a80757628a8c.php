<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    
      <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>معارف - لوحة التحكم</title>
     <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    
	<link href="<?php echo e(asset('adm/css/bootstrap.min.css')); ?>" rel="stylesheet">
     <link href="<?php echo e(asset('adm/css/styles.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('adm/css/font-awesome.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('adm/css/datepicker3.css')); ?>" rel="stylesheet">
	 <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="shortcut icon" href="http://www.m3aarf.com/images/admin-icon.png">

  
	
</head>
<body>
    <?php echo $__env->make('inc/messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->yieldContent('navbar'); ?>;
    
	<?php echo $__env->yieldContent('sidebar'); ?>;
    
	<?php echo $__env->yieldContent('content'); ?>;
		
	
	<script src="<?php echo e(asset('adm/js/jquery-1.11.1.min.js')); ?>"></script>
    
	<script src="<?php echo e(asset('adm/js/script.js')); ?>"></script>
	<script src="<?php echo e(asset('adm/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('adm/js/chart.min.js')); ?>"></script>
	<script src="<?php echo e(asset('adm/js/chart-data.js')); ?>"></script>
	<script src="<?php echo e(asset('adm/js/easypiechart.js')); ?>"></script>
	<script src="<?php echo e(asset('adm/js/easypiechart-data.js')); ?>"></script>
	<script src="<?php echo e(asset('adm/js/bootstrap-datepicker.js')); ?>"></script>
	<script src="<?php echo e(asset('adm/js/custom.js')); ?>"></script>
       <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
    
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		 <script type="text/javascript">
$(document).ready(function() {
    oTable = $('#users').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "<?php echo e(route('datatable.getposts')); ?>",
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'category', name: 'category',orderable:false},
            {data: 'views', name: 'views',searchable:false},
            {data: 'action', name: 'action',orderable:false,searchable:false}
           
        ],
        "oLanguage": {"sSearch": "بحث :","sLengthMenu": "عرض _MENU_ من المقالات"}
    });
});
</script>
    		 <script type="text/javascript">
$(document).ready(function() {
    oTable = $('#cats').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "<?php echo e(route('datatable.getCat')); ?>",
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'views', name: 'views',searchable:false},
            {data: 'posts', name: 'views',searchable:false},
            {data: 'action', name: 'action',orderable:false,searchable:false}
           
        ],
        "oLanguage": {"sSearch": "بحث :","sLengthMenu": "عرض _MENU_ من المقالات"}
    });
});
                 
</script>
<script type="text/javascript">
$(document).ready(function() {
    oTable = $('#camp').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "<?php echo e(route('datatable.getCam')); ?>",
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'ip', name: 'ip'},
            {data: 'country', name: 'country'},
            {data: 'timeZone', name: 'timeZone'},
            {data: 'created_at', name: 'created_at',orderable:false}
           
        ],
        "oLanguage": {"sSearch": "بحث :","sLengthMenu": "عرض _MENU_ من المقالات"}
    });
});
                 
</script>

<script type="text/javascript">
$(document).ready(function() {
    oTable = $('#downloads').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "<?php echo e(route('datatable.getDown')); ?>",
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'views', name: 'views'},
            {data: 'down_page', name: 'down_page'},
            {data: 'lesson_downloads', name: 'lesson_downloads'},
            {data: 'real_downloads', name: 'real_downloads'}
           
        ],
        "oLanguage": {"sSearch": "بحث :","sLengthMenu": "عرض _MENU_ من الكورسات"}
    });
});
                 
</script>
   
        		 <script type="text/javascript">
$(document).ready(function() {
    oTable = $('#cats_courses').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "<?php echo e(route('datatable.getCatCourses')); ?>",
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'views', name: 'views',searchable:false},
            {data: 'courses', name: 'courses',orderable:false},
            {data: 'action', name: 'action',orderable:false,searchable:false}
           
        ],
        "oLanguage": {"sSearch": "بحث :","sLengthMenu": "عرض _MENU_ من الكورسات"}
    });
});
                 
</script>
    
     <script type="text/javascript">
$(document).ready(function() {
    oTable = $('#courses').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "<?php echo e(route('datatable.getCourses')); ?>",
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'views', name: 'views',searchable:false},
            {data: 'category', name: 'category',orderable:false},
            {data: 'action', name: 'action',orderable:false,searchable:false}
           
        ],
        "oLanguage": {"sSearch": "بحث :","sLengthMenu": "عرض _MENU_ من الكورسات"}
    });
});
                 
</script>
    
     <script type="text/javascript">
         course_id = $('#course_id').text();
$(document).ready(function() {
    console.log(course_id);
    oTable = $('#lessons').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax":"<?php echo e(url('datatable/getLessons/')); ?>"+"/"+course_id,
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'main_link', name: 'main_link'},
            {data: 'action', name: 'action',orderable:false,searchable:false}
           
        ],
        "oLanguage": {"sSearch": "بحث :","sLengthMenu": "عرض _MENU_ من الدروس"}
    });
});
                 
</script>
         <script type="text/javascript">
$(document).ready(function() {
    console.log(course_id);
    oTable = $('#tracks').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax":"<?php echo e(route('datatable.getTracks')); ?>",
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'views', name: 'views'},
            {data: 'action', name: 'action',orderable:false,searchable:false}
           
        ],
        "oLanguage": {"sSearch": "بحث :","sLengthMenu": "عرض _MENU_ من المسارات"}
    });
});
                 
</script>
    <script>
    function delete_tip(id)
                {
        var del_id =id;
        var info = 'id=' + del_id;
        if(confirm("Are you sure you want to delete this Record?")){
            $.ajax({
               headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
                type: "POST",
                url: "<?php echo e(url('admin/tips/delete_tip/')); ?>"+"/"+del_id,
                data: info,
                success: function()
                {
                $('.page-header').append("<div class='alert alert-success text-center' dir='rtl'>تم المسح بنجاح</div>");    
                $('#tip'+id).remove();   
                setTimeout(function() {
                    $('.alert').fadeOut('slow');
                }, 1000);    
                    
                } 
            });
    }
    }
        
    
    </script>

    <Script>

    function delete_tracks(id)
    {
        var del_id =id;
        var info = 'id=' + del_id;
        if(confirm("Are you sure you want to delete this Record?")){
            $.ajax({
               headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
                type: "POST",
                url: "<?php echo e(url('/admin/tracks/delete_tracks/')); ?>"+"/"+del_id,
                data: info,
                success: function()
                {
                $('.page-header').append("<div class='alert alert-success text-center' dir='rtl'>تم المسح بنجاح</div>");    
                $('#tracks').DataTable().ajax.reload(); 
                setTimeout(function() {
                    $('.alert').fadeOut('slow');
                }, 1000);    
                    
                } 
            });
    }
    }
function delete_post(id)
    {
        var del_id =id;
        var info = 'id=' + del_id;
        if(confirm("Are you sure you want to delete this Record?")){
            $.ajax({
               headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
                type: "POST",
                url: "<?php echo e(url('admin/articles/delete_post/')); ?>"+"/"+del_id,
                data: info,
                success: function()
                {
                $('.page-header').append("<div class='alert alert-success text-center' dir='rtl'>تم المسح بنجاح</div>");    
                $('#users').DataTable().ajax.reload();
                $('#cats').DataTable().ajax.reload();    
                setTimeout(function() {
                    $('.alert').fadeOut('slow');
                }, 1000);    
                    
                } 
            });
    }
    }
function delete_cat(id)
    {
        var del_id =id;
        var info = 'id=' + del_id;
        if(confirm("Are you sure you want to delete this Record?")){
            $.ajax({
               headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
                type: "POST",
                url: "<?php echo e(url('admin/articles/delete_cat/')); ?>"+"/"+del_id,
                data: info,
                success: function(response)
                {
                    
                $('.page-header').append("<div class='alert alert-success text-center' dir='rtl'>"+response+"</div>");     
                $('#cats').DataTable().ajax.reload();
                setTimeout(function() {
                    $('.alert').fadeOut('slow');
                }, 5000);    
                        
                } 
            });
    }
    }
  function delete_cat_courses(id)
    {
        var del_id =id;
        var info = 'id=' + del_id;
        if(confirm("Are you sure you want to delete this Record?")){
            $.ajax({
               headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
                type: "POST",
                url: "<?php echo e(url('admin/courses/delete_cat/')); ?>"+"/"+del_id,
                data: info,
                success: function(response)
                {
                    
                $('.page-header').append("<div class='alert alert-success text-center' dir='rtl'>"+response+"</div>");     
                $('#cats_courses').DataTable().ajax.reload();
                setTimeout(function() {
                    $('.alert').fadeOut('slow');
                }, 5000);    
                        
                } 
            });
    }
    }
          function delete_course(id)
    {
        var del_id =id;
        var info = 'id=' + del_id;
        if(confirm("Are you sure you want to delete this Record?")){
            $.ajax({
               headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
                type: "POST",
                url: "<?php echo e(url('admin/courses/delete_course')); ?>"+"/"+del_id,
                data: info,
                success: function(response)
                {
                    
                $('.page-header').append("<div class='alert alert-success text-center' dir='rtl'>"+response+"</div>");     
                $('#courses').DataTable().ajax.reload();
                setTimeout(function() {
                    $('.alert').fadeOut('slow');
                }, 5000);    
                        
                } 
            });
    }
    }
               function delete_lesson(id)
    {
        var del_id =id;
        var info = 'id=' + del_id;
        if(confirm("Are you sure you want to delete this Record?")){
            $.ajax({
               headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
                type: "POST",
                url: "<?php echo e(url('/admin/course/delete_lesson/')); ?>/"+del_id,
                data: info,
                success: function(response)
                {
                    
                $('.page-header').append("<div class='alert alert-success text-center' dir='rtl'>"+response+"</div>");     
                $('#lessons').DataTable().ajax.reload();
                setTimeout(function() {
                    $('.alert').fadeOut('slow');
                }, 5000);    
                        
                } 
            });
    }
    } 
        $("#add_lesson_form").on('submit',function(event){
                                 
             event.preventDefault();
             var form_data = $(this).serialize();
            $.ajax({
                url:"<?php echo e(url('/admin/course/add_lesson/')); ?>",
                method:"POST",
                data:form_data,
                datatype:"json",
                success:function(response)
                {
                $('.page-header').append("<div class='alert alert-success text-center' dir='rtl'>"+response+"</div>");     
                $('#lessons').DataTable().ajax.reload();
                setTimeout(function() {
                    $('.alert').fadeOut('slow');
                }, 5000); 
                     $("#lesson_title").val("");
                   $("#lesson_link").val("");
                }
            })
                                 
                                 });
</Script>
</body>
</html>