@include('Includes.header')
<div id="login-box">

  <div class="left">
  
    <form  method="POST" action="\login" >
    <h1>Sign In</h1>
      @csrf
        <input type="text" name="CNIC" placeholder="Enter your CNIC number" class="box" />
        <div style="color: red;">{{$errors->first("CNIC")}}</div>
      <div class="container">
        <input type="submit" name="signin_submit" value="Sign in" />
          <div class="flex-item-right">
             <a href="signup" ><input  value="Register" class="bttt" /></a>
          </div>
      </div>
    </form>
  </div>

</div>
@include('Includes.footer')
