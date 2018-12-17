<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta content="<?php if(View::hasSection('pageDesc')): ?><?php echo $__env->yieldContent('pageDesc'); ?><?php else: ?>منصة معارف التعليمية متخصصه فى المقالات العملية و الدورات التدريبية و الكورسات المجانية وكل ما يخص السفر و التاشيرات<?php endif; ?> " name="description" />
    <meta content="<?php if(View::hasSection('keywords')): ?><?php echo $__env->yieldContent('keywords'); ?><?php else: ?>مقالات عن الحياة العملية , مقالات ثقافية,كورسات محاسبة,كورسات لغات,كورسات برمجة,كورسات ببلاش,كورسات مجانا,كورسات حاسب الى,دورات تدريبية مجانا ,معلومات عن السفر,التأشيرات و الجوازات,الحياة العلمية و العملية , الانترفيو و السى في<?php endif; ?>" name="keywords" />
    <meta name="viewport" content="width=device-width,,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta content="text/html; charset=utf-8" http-equiv="content-type" />
    <meta content="all" name="audience" />
    <meta content="general" name="rating" />
    <meta content="all" name="robots" />
    <meta content="index,follow,all" name="robots" />
    <meta content="ar" name="language" />
    <meta content="1days" name="revisit" />
    <meta content="1days" name="revisit-after" />
    <meta content="document" name="resource-type" />
    <meta content="معارف" name="author" />
    <meta content="index, follow, ydir, odp, imageindex" name="googlebot" />
    <meta content="index, follow, ydir, odp, archive" name="slurp" />
    <meta content="document" name="resource-type" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="IE=EmulateIE7" http-equiv="X-UA-Compatible" />
    <meta property="og:url" content="https://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>" />
    <meta property="og:title" content="<?php if(View::hasSection('pageTitle')): ?><?php echo $__env->yieldContent('pageTitle'); ?><?php else: ?>منصة معارف التعليمية - نشر العلم متعة<?php endif; ?>" />
    <meta property="og:description" content="<?php if(View::hasSection('pageDesc')): ?><?php echo $__env->yieldContent('pageDesc'); ?><?php else: ?>منصة معارف التعليمية متخصصه فى المقالات العملية و الدورات التدريبية و الكورسات المجانية وكل ما يخص السفر و التاشيرات<?php endif; ?> " />
    <meta property="og:image" content="<?php if(View::hasSection('image')): ?><?php echo e(url('/')); ?>/storage/images/<?php echo $__env->yieldContent('image'); ?>
    <?php else: ?> <?php echo e(asset('images/m3aarf.png')); ?> <?php endif; ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"> 
    <title><?php if(View::hasSection('pageTitle')): ?><?php echo $__env->yieldContent('pageTitle'); ?><?php else: ?>منصة معارف التعليمية - نشر العلم متعة<?php endif; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>?v=208">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Tajawal:400,500,700,800,900" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo e(asset('images/letter-v.png')); ?>">
	<link href="https://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>" rel="canonical"/>
	<?php if(View::hasSection('style')): ?> 
		<link rel="stylesheet" href="<?php echo e(asset('css/')); ?>/<?php echo $__env->yieldContent('style'); ?>?v=52">
	<?php endif; ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122653473-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122653473-1');
</script>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{2066371486962944}',
      xfbml      : true,
      version    : 'v3.1'
    });
  
    FB.AppEvents.logPageView();
  
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-7381615423486585",
          enable_page_level_ads: true
     });
</script>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "<?php echo e(url('')); ?>",
  "logo": "<?php echo e(asset('images/m3aarf.png')); ?>"
}

</script>

</head>

<body>
    <section id="head">
        <div class="top-header">
            <div class="container">
			<div class="row">
			<div class="col-lg-2">
                <a href="<?php echo e(url('/')); ?>" class="logo-mb"><img src="<?php echo e(asset('images/logo.png')); ?>"></a>
				</div>
				<div class="col-lg-10 none-mb">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- add -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-7381615423486585"
                         data-ad-slot="4506345860"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    </div>
				</div>
            </div>
        </div>
        <div class="header">
            <ul> 
                <a href="<?php echo e(url('/اقسام-المقالات')); ?>">
                    <li>مقالات</li>
                </a>
                <a href="<?php echo e(url('/كورسات-مجانا')); ?>" id="course-btn">
                    <li>دورات تدريبية
					
					</li>
					
                </a>	
<!--				
                <a href="<?php echo e(url('/المسارات-التعليمية')); ?>">
                    <li>المسارات التعليمية</li>
                </a> !-->
                <a href="<?php echo e(url('/السفر')); ?>">
                    <li>السفر</li>
                </a>
                <a href="<?php echo e(url('/الحياة-العملية')); ?>">
                    <li>الحياة العملية</li>
                </a>
            </ul>
        </div>
		
				
					
        <div id="mob-menu" class="header-mob header-mob-hide">
         <div class="container-fluid">  
			<div class="row">
			    <div class="col-3">
					<a href="<?php echo e(url('/مقالات')); ?>">
						عرض
						<br>
						المقالات
						
					</a>
				</div>
				<div class="col-3">
                <a href="<?php echo e(url('/كورسات-مجانا')); ?>">
                   الدورات <br> تدريبية
                </a>
				</div>
				<div class="col-3">
                <a href="<?php echo e(url('/المسارات-التعليمية')); ?>">
                   المسارات <br>التعليمية
                </a>
				</div>
				<div class="col-3">
                <a href="<?php echo e(url('/الحياة-العملية')); ?>">
                   الحياة
					<br>
					العملية
					
                </a>
				</div>
			</div>
           </div>
        </div>
    </section><?php if($__env->yieldContent('content')): ?>
    <div class="main">
        <div class="container">
            <div class="row"><?php echo $__env->make('inc/messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
            <div class="row"><?php echo $__env->yieldContent('content'); ?> <?php echo $__env->yieldContent('sidebar'); ?> <?php echo $__env->yieldContent('suggest'); ?></div>
        </div>
    </div><?php endif; ?> <?php echo $__env->yieldContent('content2'); ?> <?php echo $__env->yieldContent('courses'); ?>
    <div class="footer">
        <h6 class="text-center"><a href="<?php echo e(url('/')); ?>"><img style="width:180px" src="<?php echo e(asset('images/logo.png')); ?>"></a></h6></div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $(".panel-content").not(":first").css("border-top", "1px solid #cecece")
    </script>
    <script>
        $("a[href='#home']").parent().addClass("active_tab a"), $(".nav li").click(function() {
            $(".nav li").removeClass("active_tab"), $(this).addClass("active_tab a")
        })
    </script>
    <script src="<?php echo e(asset('js/script.js')); ?>?v=2"></script>
	<script>
	function c_down(id)
	{
		 var info = 'id=' + id;
		     $.ajax({
               headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
                type: "POST",
                url: "<?php echo e(route('update_course_downloads')); ?>",
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
	</script>
    <script>
        $(".course-search select").change(function() {
            var e = $(this).val(),
                s = $(this).find("option:selected").text().split(" ").join("-"); 
            console.log(s), $(".course-search a").attr("href", "/courses/cat/" + e + "/" + s)
        })
    </script>
    <script>
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover()
        })
    </script>
<script>

$('ul.pagination li').hide().filter(':lt(1), :nth-last-child(1)').show();

</script>
</body>

</html>