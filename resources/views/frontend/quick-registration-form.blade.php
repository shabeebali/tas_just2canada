<x-layouts.frontend>
   <div class="row">
       <div class="col-md-4 col-12"></div>
       <div class="col-md-4 col-12">
           <div class="" style="display: flex; justify-content: center;">
               <img src="{{asset('images/logo.png')}}" alt="" class="img-fluid">
           </div>
           <div class="h4 text-center">
               <strong>Instant Registration Form</strong>
           </div>
           <hr>
           <div class="row">
               <div class="col-12">
                   <form method="POST" action="{{route('quick-registration-form')}}">
                       @csrf
                       <div class="form-group">
                           <label for="name-input">Name</label>
                           <input type="text" style="margin-bottom: 0px;"
                                  name="name"
                                  class="form-control @error('name') is-invalid @enderror"
                                  id="name-input"
                                  placeholder="Enter your name"
                                  value="{{old('name','')}}"
                           >
                           @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                           @enderror
                       </div>
                       <div class="form-group">
                           <label for="tel-input">Tel</label>
                           <input type="text"
                                  style="margin-bottom: 0px;"
                                  name="tel"
                                  class="form-control @error('tel') is-invalid @enderror"
                                  id="tel-input"
                                  value="{{old('tel','')}}"
                                  placeholder="Enter your telephone number">
                           @error('tel')
                           <div class="invalid-feedback">{{ $message }}</div>
                           @enderror
                       </div>
                       <div class="form-group">
                           <label for="email-input">Email</label>
                           <input type="email"
                                  style="margin-bottom: 0px;"
                                  name="email"
                                  class="form-control @error('email') is-invalid @enderror"
                                  id="email-input"
                                  value="{{old('email','')}}"
                                  placeholder="Enter your email address">
                           @error('email')
                           <div class="invalid-feedback">{{ $message }}</div>
                           @enderror
                       </div>
                       <div class="form-group">
                           <label for="country-input">Country</label>
                           <input type="text"
                                  style="margin-bottom: 0px;"
                                  name="country"
                                  class="form-control @error('country') is-invalid @enderror"
                                  id="country-input"
                                  value="{{old('country','')}}"
                                  placeholder="Enter your country of residence">
                           @error('country')
                           <div class="invalid-feedback">{{ $message }}</div>
                           @enderror
                       </div>
                       <div class="text-center">
                           <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                       </div>
                   </form>
               </div>
           </div>
       </div>
       <div class="col-md-4 col-12"></div>
   </div>
</x-layouts.frontend>
