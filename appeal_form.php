<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>appleal form</title>
	<style>
		.frank{
			height:6px;
		}
		.sala{
			height: 1px;
		}
		.move_top
		{
			margin-top: -4px;
		}
		.move_bt{
			margin-bottom: 5px;
		}
		.f_family{
			font-family: sans-serif;
		}
	</style>
</head>
<body>
<div class="container bg-light">
	<div class="d-flex justify-content-center mt-4">
		<img src="photo/mzumbe1.png" width="100px" height="100px">
	</div>
	<hr class="sala bg-dark move_bt">
	<div class="row">
		<div class="col-md-9 f_family">
			Tel: +255 (0) 23 2604380/1/3/4<br>
			Fax: +255 (0) 23 2604382<br>
			Cell:+255 (0) 744694029<br>
			E-mail: mu@mzumbe.ac.tz
		
		</div>
		<div class="col-md-3 f_family">
			P.O.BOX 1<br>
			<b>MZUMBE</b><br>
			<b>MOROGORO, TANZANIA</b><br>
			Website: www.mzumbe.ac.tz
		</div>
	</div>
	<hr class="frank bg-dark move_top">
	<center>
		<h5 class="f_family">To be filled in duplicate</h5>
	</center>
	<div>
	<center>
	<h2 class="f_family">
		<b>APPEAL FORM</b>
	</h2>
	</center>
</div>
<div>
	<p  class = "f_family" style="text-align: justify;">
		Reguration 5(3) of Mzumbe University Examination Regulations and Student Assessment Criteria requires that all appeals must be filled in special forms that will be accompanied by a non-refundable appeal form. For the 2017/2018 academic year, the appeal fees is 20,000/= per subject. This fee must be paid to the University and a receipt obtained. A copy of the receipt be attached to this form.
	</p >
</div>
</div>
<div>
	<center>
	<h4>Part I</h4>
	</center>
</div>
<div class="card-body">
      <form>
      	<!-- left row col-6? -->
      	<div class="row">
  	
        	<div class="col-md-6">
	        		 <div class="col-md-12 form-group">
	            <input type="text" name="registration" placeholder="Registration Number:" class="form-control">
	          </div>
	          <div class="col-md-12 form-group">
	            <input type="date" name="date" placeholder="Date of loadged:" class="form-control">
	          </div>    
	          <div class="col-md-12 form-group">
	            <input type="text" name="receipt" placeholder="Appleal fee receipt No:" class="form-control">
	          </div>
	          <div class="col-md-12 forms-group">
           				<input type="text" name="name" placeholder="Name of Student:" class="form-control">
	          </div> 
        	</div>
        	<!-- right coln? -->
          <div class="col-md-6">
	          <div class="col-md-12 form-group">
	            <select name="name_faculty" id="gender" class="form-control">
	            <option value="">---Select Faculty/School---</option>
	            <option value="">FST</option>
	            <option value="">SOB</option>
	            <option value="">SOPAM</option>
	            <option value="">FSS</option>
	            <option value="">LAW</option>
	          </select>
           </div>  
           <div class="col-md-12 form-group">
            <input type="text" name="name_programme" placeholder="Name of Programme:" class="form-control">
          </div> 
	          <div class="col-md-12 form-group">
	            <select name="year_of_study" id="year" class="form-control">
	            <option value="">---Select Year of Study---</option>
	            <option value="">First year</option>
	            <option value="">Second year</option>
	            <option value="">Third year</option>
	         	 </select>
           </div>
          <div class="col-md-12 form-group">
          		<textarea name="nature_appeal" placeholder="Nature of Appeal" class="form-control"></textarea>
          	</div> 
      	</div>
        
        
          </div>            
        	</div>
        	<div class="justify-content-end d-flex">
        		 <div class="col-auto mr-3">
            	<button type="submit" class="text-white btn btn-block custom-btn-primary" style="background-color:#fd876d">Submit</button>
         			</div>
        	</div>
      
       </div>
      </form> 
    </div>
</body>
</html>