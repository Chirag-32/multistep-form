<?php include('header.php')?>
<div class="container">
	<!-- <h2>Example: Multi Step Form using jQuery, Bootstrap and PHP</h2>		
	<div class="progress">
	<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div> -->
	<div class="alert alert-success hide"></div>	
	<form id="register_form"  action="form_action.php"  method="post">	
	<fieldset class="step1">
	<h2>Step 1: Add Account Details</h2>
	<div class="form-group">
        <label for=""> Full Name</label>
        <span class="name">
            <input type="text" name="name" value="" id="fname" class="form-control">
        </span>
    </div>
    <div class="form-group">
        <label for="" > Email</label>
        <span class="email">
            <input type="text" name="email" id="email" class="form-control">
        </span>
    </div>
    <div class="form-group">
        <label for="" > Password</label>
        <span class="pass">
            <input type="text" name="password" id="pass" class="form-control">
        </span>
    </div>
	<input type="button" class="next-form btn btn-info" value="Next" />
	</fieldset>	
	<fieldset class="d-none step2">
	<h2> Step 2: Add Education Details</h2>
	<div class="form-group">
        <label class="col-md-3">Education level</label>  
        <div class="col-md-8">
            <select class="form-control"  name="edu_level" >
                <option value="1">High school or equivalent</option>
                <option value="2">Diploma</option>
                <option value="3">Higher National Diploma</option>
                <option value="4">Bachelo's</option>
                <option value="5">Master's</option>
                <option value="6">Doctorate</option>
            </select>
        </div>
    </div>

        <br><br>
        <br>
    <!-- Text input-->
    <div class="form-group">
       <label class="col-md-3">Field of Study</label>
        <div class="col-md-8">
            <span class="fstudy">
                <input type="text"  name="field_study" id="field_stu" class="form-control" placeholder="e.g. Computer Science, Intellectual Property,Psychology." required>
            </span> 
        </div>      		
    </div>

    <br><br>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-3">University</label>
        <div class="col-md-8">
            <span class="uni">
                <input type="text"  name="university" id="university" class="form-control" placeholder="" required>
            </span>    
        </div>
    </div>
    <br><br>

    <!-- Text input-->
    <div class="form-group">

    <label class="col-md-3">Time period</label>
    <div class="col-md-8">
         <div class="col-md-4">
			<select class="form-control"  name="edu_from[]" >
				
                <option value="1995">	1995	</option>
                <option value="1996">	1996	</option>
                <option value="1997">	1997	</option>
                <option value="1998">	1998	</option>
                <option value="1999">	1999	</option>
                <option value="2000">	2000	</option>
                <option value="2001">	2001	</option>
                <option value="2002">	2002	</option>
                <option value="2003">	2003	</option>
                <option value="2004">	2004	</option>
                <option value="2005">	2005	</option>
                <option value="2006">	2006	</option>
                <option value="2007">	2007	</option>
                <option value="2008">	2008	</option>
                <option value="2009">	2009	</option>
                <option value="2010">	2010	</option>
                <option value="2011">	2011	</option>
                <option value="2012">	2012	</option>
                <option value="2013">	2013	</option>
                <option value="2014">	2014	</option>
                <option value="2015">	2015	</option>
                <option value="2016">	2016	</option>

					
				</select>
		</div>
		 <div class="col-md-1">
		<label>To</label>
		</div>
		
		 <div class="col-md-4">
			<select class="form-control"  name="edu_to[]" >
			
						<option value="1980">	1980	</option>
<option value="2000">	2000	</option>
<option value="2001">	2001	</option>
<option value="2002">	2002	</option>
<option value="2003">	2003	</option>
<option value="2004">	2004	</option>
<option value="2005">	2005	</option>
<option value="2006">	2006	</option>
<option value="2007">	2007	</option>
<option value="2008">	2008	</option>
<option value="2009">	2009	</option>
<option value="2010">	2010	</option>
<option value="2011">	2011	</option>
<option value="2012">	2012	</option>
<option value="2013">	2013	</option>
<option value="2014">	2014	</option>
<option value="2015">	2015	</option>
<option value="2016">	2016	</option>
<option value="2017">	2017	</option>
<option value="2018">	2018	</option>
<option value="2019">	2019	</option>
<option value="2020">	2020	</option>

</select>
		
		</div>
	
</div>
</div>
<br><br>
<hr>


<!--end field0-->
	<input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
	<input type="button" name="next" class="next-form btn btn-info" value="Next" />
	</fieldset>	
	<fieldset class="d-none ">
	<h2>Step 3: Add Work Information</h2>
	
				
                    
           
                
<!-- Text input-->

<div class="form-group">
  <label class="col-md-3">Job Title</label>  
    <div class="col-md-8">
        <span class="job">
            <input type="text"  name="job_tit" id="job_tit" class="form-control" placeholder="e.g. Java/php Developer" required> 
        </span>
    </div>
</div>

<br><br>
<br>
<!-- Text input-->
<div class="form-group">
<label class="col-md-3">Company</label>
            <div class="col-md-8">
                <span class="company">
                    <input type="text"  name="company" id="company" class="form-control" placeholder="" required> 
                </span>
            </div>              
</div>

<br><br>
<!-- Text input-->
<div class="form-group">
 <label class="col-md-3">City</label>
    <div class="col-md-8">
        <span class="jcity">
            <input type="text"  name="city" id="city" class="form-control" placeholder="" required>
        </span>
    </div>
</div>
<br><br>

<!-- Text input-->
<div class="form-group">
 <label class="col-md-3">Time period</label>
 <div class="col-md-8">
         <div class="col-md-4">
			<select class="form-control"  name="work_from[]" >	
<option value="1995">	1995	</option>
<option value="1996">	1996	</option>
<option value="1997">	1997	</option>
<option value="1998">	1998	</option>
<option value="1999">	1999	</option>
<option value="2000">	2000	</option>
<option value="2001">	2001	</option>
<option value="2002">	2002	</option>
<option value="2003">	2003	</option>
<option value="2004">	2004	</option>
<option value="2005">	2005	</option>
<option value="2006">	2006	</option>
<option value="2007">	2007	</option>
<option value="2008">	2008	</option>
<option value="2009">	2009	</option>
<option value="2010">	2010	</option>
<option value="2011">	2011	</option>
<option value="2012">	2012	</option>
<option value="2013">	2013	</option>
<option value="2014">	2014	</option>
<option value="2015">	2015	</option>
<option value="2016">	2016	</option>
		</select>
		</div>
		 <div class="col-md-1">
		<label>To</label>
		</div>
		
		 <div class="col-md-4">
		<select class="form-control"  name="work_to[]" >
			<option value="1980">	1980	</option>
<option value="2000">	2000	</option>
<option value="2001">	2001	</option>
<option value="2002">	2002	</option>
<option value="2003">	2003	</option>
<option value="2004">	2004	</option>
<option value="2005">	2005	</option>
<option value="2006">	2006	</option>
<option value="2007">	2007	</option>
<option value="2008">	2008	</option>
<option value="2009">	2009	</option>
<option value="2010">	2010	</option>
<option value="2011">	2011	</option>
<option value="2012">	2012	</option>
<option value="2013">	2013	</option>
<option value="2014">	2014	</option>
<option value="2015">	2015	</option>
<option value="2016">	2016	</option>
<option value="2017">	2017	</option>
<option value="2018">	2018	</option>
<option value="2019">	2019	</option>
<option value="2020">	2020	</option>
		</select>
	</div>
</div>
</div>

<br>

        <div class="form-group">
        <input type="checkbox" name="cur_work[]" value="cur_work"> I currently work here<br>
        </div>
	<input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
	<input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
	</fieldset>
	</form>
</div>
<?php include('footer.php')?>