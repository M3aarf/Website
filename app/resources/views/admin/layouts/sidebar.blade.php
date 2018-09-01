@section('sidebar')	
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
		
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</div>

			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		<ul class="nav menu">
			<li class="active"><a href="{{url('/dashboard')}}"><em class="fa fa-dashboard">&nbsp;</em> لوحة التحكم</a></li>
			<li><a href="{{url('/admin/articles')}}"><em class="fa fa-pencil">&nbsp;</em> المقالات</a></li>
			<li><a href="{{url('/admin/courses')}}"><em class="fa fa-play">&nbsp;</em> الكورسات</a></li>
			<li><a href="{{url('/admin/tracks')}}"><em class="fa fa-clone">&nbsp;</em> المسارات</a></li>
			<li><a href="{{url('/admin/compaigns')}}"><em class="fa fa-bullhorn">&nbsp;</em> حملات التسويق</a></li>
			<li><a href="{{url('/admin/downloads')}}"><em class="fa fa-download">&nbsp;</em> التحميلات</a></li>
	</div><!--/.sidebar-->
@endsection