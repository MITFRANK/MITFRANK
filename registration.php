<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration Form</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
  <center>
     <h2>Registration Form</h2>
  </center>
    <div class="card-body">
      <form>
        <div class="row">
          <div class="col-md-4 form-group">
            <input type="text" name="firstname" placeholder="First Name" class="form-control">
          </div>
          <div class="col-md-4 form-group">
            <input type="text" name="middlename" placeholder="Middle Name" class="form-control">
          </div>
          <div class="col-md-4 form-group">
            <input type="text" name="lastname" placeholder="Last name" class="form-control">
          </div>   
        </div>
        <div class="row mt-0">
          <div class="col-md-4 form-group">
            <input type="text" name="username" placeholder="Username" class="form-control">
          </div>
          <div class="col-md-4 form-group">
            <input type="date" name="birthdate" placeholder="Birth of date" class="form-control">
          </div>
          <div class="col-md-4 form-group">
            <input type="email" name="email" placeholder="Email" class="form-control">
          </div> 
          <div class="col-md-4 form-group">
            <select name="gender" id="gender" class="form-control">
            <option value="">---Select Gender---</option>
            <option value="">Male</option>
            <option value="">Female</option>
            <option value="">Other</option>
          </select>
           </div>  
           <div class="col-md-4 form-group">
            <input type="text" name="registration_number" placeholder="Registration Number" class="form-control">
          </div>
           <div class="col-md-4 form-group">
            <input type="number" name="year_of_study" placeholder="Year of Study" class="form-control">
          </div>
           <div class="col-md-4 form-group">
             <select name="department" id="department" class="form-control">
               <option value="">---Select Department---</option>
               <option value="">CSS</option>
               <option value="">MMS</option>
               <option value="">IMS</option>
               <option value="">LAW</option>
              </select>
          </div>
           <div class="col-md-4 form-group">
             <select name="gender" id="gender" class="form-control">
              <option value="">---Select Faculty---</option>
              <option value="">FST</option>
              <option value="">SOB</option>
              <option value="">SOPAM</option>
              <option value="">FSS</option>
            </select>
          </div>
           <div class="col-md-4 form-group">
            <input type="text" name="mobile" placeholder="Mobile" class="form-control">
          </div>
          <div class="col-auto">
            <button type="submit" class="text-white btn btn-color" style="background-color:#fd876d">Submit</button>
         <!-- </div>
          <button type="clear" class="btn btn-primary">Clear your detail</button>
       </div> -->
      </form> 
    </div>

</body>
</html>