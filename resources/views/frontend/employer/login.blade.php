<x-layouts.frontend>
    <section id="aboutus" class="about_us_area   row">
        <div class="container">
            <div class="row about_row" style="padding-top:0;">
                <div class="tittle wow fadeInUpBig" style="text-align: left; visibility: visible;">
                    <h1 class="welc-text">  Employer Login  </h1>
                    <br>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-div">
                        <form class="text-left   row-20 ng-pristine ng-valid" action="{{route('employer.login.post')}}" method="post" enctype="multipart/form-data" name="contactus" id="contactus" accept-charset="UTF-8">
                            <input type="hidden" name="submitted" id="submitted" value="1">
                            @csrf
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-inner">
                                <div class="col-md-12">Email id    <input id=" " type="text" class="form-control col-12" maxlength="40" name="email" value="{{old('email')}}"></div>
                                <div class="col-md-12">Password:  <input id=" " type="password" class="form-control col-12" maxlength="40" name="password"></div>
                                <div class="col-md-12">
                                    <a href="">Forgot Username</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <a href="">Forgot Password</a>    </div>
                                <div class="clearfix"></div>
                                <br>
                                <center>
                                    <input type="submit" value="Submit" class="btn">
                                </center>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="text-center">
                                    Don't have an account ?
                                    <br>
                                    <a href="{{route('employer.register')}}" class="btn">Register</a>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.frontend>
