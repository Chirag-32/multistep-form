    <?php include('header.php');?>
    <br>
    <section class="contact">
        <div class="container">
        <!-- onsubmit="return validation()" -->
            <form >
                <div class="form-group">
                    <label for=""> Full Name</label>
                    <input type="text" name="" value="" id="fname" class="form-control">
                    <span id="fnameerror" class="text-danger error">First name is invalid</span>
                </div>
                <div class="form-group">
                    <label for=""> Email</label>
                    <input type="text" name="" id="email" class="form-control">
                    <span id="emailerror" class="text-danger error">First name is invalid</span>
                </div>
                <div class="form-group">
                    <label for=""> Mobile No.</label>
                    <input type="text" name="" id="mobile" class="form-control" onkeypress="phoneno()" maxlength="10">
                    <span id="mobileerror" class="text-danger error">First name is invalid</span>
                </div>
                <div class="form-group">
                    <label for=""> Password</label>
                    <input type="text" name="" id="pass" class="form-control">
                    <span id="passerror" class="text-danger error">First name is invalid</span>
                </div>
                <div class="form-group">
                    <label for=""> Confirm Password</label>
                    <input type="text" name="" id="cpass" class="form-control">
                    <span id="cpasserror" class="text-danger error">First name is invalid</span>
                </div>
                <input type="submit" id="submit" value="Submit" class="btn btn-primary">
            </form>
        </div>
    </section>
    <?php include('footer.php');?>
