@include('layout.header')
<div class="container">
    <div class="row d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
  <form method="post" action="{{route('login.post')}}">
   @csrf 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">email</label>
    <input placeholder="Enter your email" type="email" name="fullname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input placeholder="enter your password"type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
    </div>
</div>