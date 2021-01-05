<style>
    ::placeholder {
    font-size: 11.9px !important;
}
</style>
    <div class="value-container1 wow fadeInUp">
            <div class="row values-div1">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 value-div-txt">
                  <h3>Get a FREE utility audit for your commercial facility</h3>
                  <h4>Just fill in the form and we will get in touch with you regarding your FREE power audit</h4>
               </div>
            </div>
            <div class="row values-div2 hide">
               <div class="efi-blks">
                  <img src="content/images/energy-efficiency/efi-icon.png" />
                  <h5>Enter your ZIP code  to view available plans</h5>
               </div>
               <div class="efi-blks">
                  <img src="content/images/energy-efficiency/efi-icon.png" />
                  <h5>Compare your choices and find  one that matches your values</h5>
               </div>
               <div class="efi-blks">
                  <img src="content/images/energy-efficiency/efi-icon.png" />
                  <h5>Complete the sign up process  in under 10 minutes</h5>
               </div>
            </div>
            <div class="row values-div3">
            {{ Form::open(['url' => 'power-audit','method' => 'POST', 'id'=> 'from']) }}
               <div class="form-div">
                     <!-- <select class="form-inp">
                        <option>Area of interest</option>
                        <option>Option1</option>
                        <option>Option2</option>
                     </select> -->
                     <input type="text" placeholder="First Name*" name="first_name" id="first_name" class="form-inp" />
                     <input type="text" placeholder="Last Name*" name="last_name" id="last_name" class="form-inp" />
                  </div>
                  <div class="form-div"> 
                     <input type="text"  placeholder="Company Title" name="area_code" id="area_code" class="form-inp"  required/>
                     <input type="email" placeholder="Email*" name="email_id" id="email_id" class="form-inp" />
                  <div class="form-div adr-field">                     
                     <textarea class="form-inp" placeholder="Address" name="address" id="address"/></textarea>
                  </div>
                  <div class="form-div">                                      
                     <input type="text" placeholder="City" name="city" id="city" class="form-inp city-field" />
                     <input type="text" placeholder="State" name="state" id="state" class="form-inp state-field" />
                     <div id="form11" style="display:unset !important;">
                     <input type="tel" step="1" min="0" placeholder="PhoneNumber(541-754-3010)" name="mobile" id="mobile_num" class="form-inp area-field" maxlength="12" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required/></div>
                  </div>
                  <div class="form-div">
                     <button type="button" onclick="return power_audit();">Submit</button>
                     <span>We hate spam as much you do.</span>
                     <!-- <a class="btn-view-best-offer">View best offers</a> -->
                  </div>
               </form>
            </div>
         </div>
