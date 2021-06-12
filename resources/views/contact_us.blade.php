@extends('layouts.template')

@section('title', 'Contact Us')
@section('banner', 'CONTACT US')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ url('css/app.css') }}" />
</head>

<body>
<table id="tblcontent" align="center">
    <tr>
        <td>
        <div class="container">
            <p class="cntntitle" style="padding-left:0px;">Contact Us</p>
            <div class="row">
                <div class="col-md-7 col-md-offset-4">
                    <p class="cntn" style="padding-left:0px;">Have any question or feedback?</p>
                    <center><hr style="color: #4D4378; width:99%; opacity:100%" size="5"></center>

                    @if(Session::has('status'))
                    <div class="alert alert-success">{{ Session::get('status') }}</div>
                    @endif

                    <form action="" method="post">

                        {{ csrf_field() }}

                        <label for="name"><p class="cntn" style="padding-left:0px; line-height: 0">Name</p></label>
                        <input class="form-control" type="text" name="name" placeholder="Your Name..." style="border-color: #D8005F;" /><br>
                        
                        <label for="email"><p class="cntn" style="padding-left:0px; line-height: 0">Email</p></label>
                        <input class="form-control" type="email" name="email" placeholder="Your Email Address..." style="border-color: #D8005F;" /><br>
                        
                        <label for="message"><p class="cntn" style="padding-left:0px; line-height: 0">Message</p></label>
                        <textarea class="form-control" name="message" id="" placeholder="Your Message..." cols="30" rows="10" style="border-color: #D8005F;" ></textarea>

                        <br>

                        <center><button class="btn btn-primary btn-block">Send</button></center>
                        <br>
                    <form>
                </div>

                <div class="col-md-5 col-md-offset-4">
                    <p class="cntn">
                        Or you can contact one of the media below
                        <center><hr style="color: #4D4378; width:99%; opacity:100%" size="5"></center>
                        <table>
                        <tr>
                            <td>
                                <img style="width: 80px; height: 80px;" src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c521.png" alt="">
                            </td>
                            <td><p class="cntn">ntc_kampunginggris_tulungagung</p></td>
                        </tr>
                        <tr>
                            <td>
                                <img style="width: 80px; height: 80px;" src="https://fsyofian.files.wordpress.com/2010/06/fb-icon.png" alt="">
                            </td>
                            <td><p class="cntn">kursus bahasa inggris tulungagung</p></td>
                        </tr>
                        <tr>
                            <td>
                                <img style="width: 80px; height: 80px;" src="https://selsdonprimary.files.wordpress.com/2019/11/580b57fcd9996e24bc43c543.png" alt="">
                            </td>
                            <td><p class="cntn">085856362225</p></td>
                        </tr>
                        </table>

                    </p>
                </div>
            </div>
        </div>
        </td>
    </tr>
</table>
<br>
</body>
</html>

@endsection