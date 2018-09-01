@extends('layouts.app')@section('pageTitle', "الحية العملية - منصة معارف")@section('pageDesc', "بعد تخرجك من الجامعه عليك ان تعلم بعض المعلومات العامة التى تخص حياتك العملية ك السير الذاتية و المقابلات الشخصية و غيرها من المعلومات بداخل منصة معارف سوف تقدم كل نصائح فى الحياة العملية وخطوات فتح شركة جديدة")@section('content2')
<div class="white">
    <div class="section career-item pad-140">
        <div class="space"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 border-left">
                    <div class="item"><img src="{{asset('images/interview.png')}}">
                        <p>الرهبة والخوف والإحساس بالتوتر والقلق الذى قد يؤدون إلى فشل محقق هى المشاعر التى تتخلل أى مقابلة عمل، لذلك يجب عليك الاستعداد جيداً لاجتياز المقابلة</p><a href="{{url('/المقابلة-الشخصية-الانترفيو')}}" class="main-btn-blue no-margin">ابدء لآن</a></div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="item"><img src="{{asset('images/cv-item.png')}}">
                        <p>السيرة الذاتية هي بوابة العبور إلى الوظيفة ومن خلال كتابتها بالشكل الملائم تستطيع الحصول على الوظيفة التي تتمناها. والسيرة الذاتية المكتوبة بطريقة جيدة سوف تجذب مدير التوظيف</p><a href="{{url('/السيرة-الذاتية')}}" class="main-btn-blue no-margin">ابدء الان</a></div>
                </div>
            </div>
        </div>
        <div class="space"></div>
    </div>
</div>@endsection