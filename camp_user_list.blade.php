@extends('frontend.master')
@section('content')
<style>
.formcontrol{
    display: block;
height: calc(2.25rem + 2px);
padding: .375rem .75rem;
font-size: 0.8rem;
line-height: 1.5;
color: #495057;
background-color: #fff;
background-clip: padding-box;
border: 1px solid #ced4da;
border-radius: .25rem;
transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
</style>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- <script src="/content/js/jquery-ui.js"></script> -->
<script>

</script>
  <link rel="stylesheet" href="/resources/demos/style.css">
 

<div class="breadcrumbs">
<a href="{{ asset('complete-camp-request').'/'.$camprequest->token }}" class="btn btn-success" onclick="return confirm('Are you sure?')" >Camp Complete</a>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Candidate List</strong>

                                    <div id="addRow"> +Add Patient Row </div>
                            </div>

                            <div class="card-body">
                        
                                   
                                      
                                    <?php $num = 1; ?>

                                        @if($client_type=='Co-marketing Client')

                                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th>S.N.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Gender</th>
                                        <th>DOB</th>
                                        <th>Address</th>
                                        <th>Timeslot</th>
                                        <th>Date</th>
                                        <th>Sample Collected</th>
                                        @if($is_extra_test == '1')
                                        <th>Other Test</th>
                                        @endif
                                        <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                
                                        
                                        @foreach($campdata as $value)
                                        
                                    <tr>
                                    {{ Form::open(['url' => 'update-candidate-data', 'method' => 'POST', 'id'=>'my_form_'.$value->id]) }}
                                            <td>{{ $num }}</td>
                                            <td><input type="text" class="formcontrol" name="name" value="{{ $value->name }}">
                                            <input type="hidden" class="formcontrol" id="selectedTestName" name="selectedTestName" value="">
                                            <input type="hidden" class="formcontrol" id="hiddenPrice" name="hiddenPrice" value="">
                                        
                                        </td>
                                            <td><input type="text" class="formcontrol" name="email" value="{{ $value->email or '' }}"></td>
                                            <td><input type="text" class="formcontrol" name="mobile" value="{{ $value->mobile or '' }}"></td>
                                            <td><input type="text" class="formcontrol" name="gender" value="{{ $value->gender or '' }}"></td>
                                            <td><input type="text" class="formcontrol date" name="dob" @if($value->dob) value="{{ date('d-m-Y', strtotime($value->dob)) }}" @else value="" @endif ></td>
                                            <td><input type="text" class="formcontrol" name="address" value="{{ $value->address or '' }}"></td>
                                            <td><input type="text" class="formcontrol" name="timeslot" value="{{ $value->timeslot or '' }}"></td>
                                            <td><input type="text" class="formcontrol mydate" name="date" value="{{ $value->date or '' }}"></td>
                                            
                                            <td>

                                        <select name="is_checkup" class="formcontrol" id="is_checkup">
                                            <option value="">Select</option>
                                            <option value="Yes" @if($value->is_sample_collected=='Yes') selected="selected" @endif> Yes</option>
                                            <option value="No" @if($value->is_sample_collected=='No') selected="selected" @endif>No</option>
                                        </select>
                                           
                                        </td>
                                        @if($is_extra_test == '1')
                                            <td >
                                               
                                              @if(isset($value->is_sample_collected))

                                              @if($value->is_sample_collected == 'Yes')
                                              <select name="other_test_name" id="other_test_name" class="formcontrol">
                                                <option value="">Select</option>
                                                @foreach($test as $k=>$v)
                                                <option value="{{ $v->test_name }}" @if(isset($value->other_test_name)) @if($value->other_test_name == $v->test_name) selected="selected" @endif @endif>{{ $v->test_name }}</option>
                                                @endforeach
                                            </select>
                                            <!--  -->
                                            <hr>
                                            <input type="text" class="formcontrol test_price" name="test_price" value="{{ $value->extra_test_price_candidate or '0' }}" placeholder="Test Price">
                                            @else
                                            <!-- <span>Yes</span>
                                                <input type="checkbox" value="1" class="formcontrol other_test" name="is_other_test">
                                            <div class="other_test_event"></div> -->
                                            N/A
                                            @endif
                                            
                                            @else
                                            <span>Yes</span>
                                                <input type="checkbox" value="1" class="formcontrol other_test" name="is_other_test">
                                            <div class="other_test_event"></div>
                                            @endif
                                        </td>
                                        @endif
                                        <input type="hidden" name="user_id" value="{{ $value->id }}">
                                            <td><button type="submit" name="submit_{{ $value->id }}" class="btn btn-success btn-sm savedata">Save</button></td>
                                            </form>
                                        </tr>
                                        
                                        <?php $num++;?>
                                        @endforeach
                                     @else 

                                     <!--  adding functionality for the co-marketing bit -->

                                                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    
                                    <tbody>
                                       <table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info">

                                                     <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th>S.N.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Gender</th>
                                        <th>DOB</th>
                                        <th>Address</th>
                                        <th>Timeslot</th>
                                        <th>Date</th>
                                        <th>Sample Collected</th>
                                        @if($is_extra_test == '1')
                                        <th>Other Test</th>
                                        @endif
                                        <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                <thead id="myDynamicTable"> 

                    
             
                </thead>
            </table>
                                         

                                    @endif

                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div>
        <script src="/content/js/jquery-ui.js"></script>

<script>


// $(".savedata").click(function(){
//     $(this).closest('tr').find("input").each(function() {
//         // alert(this.value)
//     });
// });


// $(".other_test").click(function(){
//     var  xhtml;
//     xhtml = '<select name="other_test_name" id="other_test_name" class="formcontrol"><option value="">Select</option>';
//    // xhtml += '<option value="Yes">Yes</option><option value="No">No</option>';
//    @foreach($test as $key=>$val)
//    xhtml += '<option value="{{ $val->test_name }}">{{ $val->test_name }}</option>';
//    @endforeach
//     xhtml += '</select>';

//     var checked_other_test = $(this).is(':checked');
//     if (checked_other_test) {
//         $(this).siblings(".other_test_event").html(xhtml);
//     } else {
//         $(this).siblings(".other_test_event").html(null);
//     }
// });
$(document).on('click' ,'.other_test', function(){
    var  xhtml;
    xhtml = '<select name="other_test_name" id="other_test_name" class="formcontrol"><option value="">Select</option>';
   // xhtml += '<option value="Yes">Yes</option><option value="No">No</option>';
   @foreach($test as $key=>$val)
   xhtml += '<option value="{{ $val->test_name }}">{{ $val->test_name }}</option>';
   @endforeach
    xhtml += '</select><br>';
    xhtml += '<input type="text" class="formcontrol test_price" name="test_price" value="" placeholder="Test Price">';

    var checked_other_test = $(this).is(':checked');
    if (checked_other_test) {
        $(this).siblings(".other_test_event").html(xhtml);
    } else {
        $(this).siblings(".other_test_event").html(null);
    }
});


$(document).on('click','.btn-success',function(){

    // var selectedTestName = $(this).parent().parent().find('#other_test_name').val();
    // var hiddenPrice = $(this).parent().parent().find('.test_price').val();
    // $("#selectedTestName").val(selectedTestName);
    // $("#hiddenPrice").val(hiddenPrice);

        var name = $(this).parent().parent().find("input[name='name']").val();
        var email = $(this).parent().parent().find("input[name='email']").val();  
        var dob = $(this).parent().parent().find("input[name='dob']").val();

        if(name == '' || name == "undefined" ){
            alert("Please enter name");
            $(this).parent().parent().find("input[name='name']").focus();
            return false;

        }

        if(IsEmail(email)==false || email=="" || email=="undefined"){
            alert("Enter valid email");
            $(this).parent().parent().find("input[name='email']").focus();
            return false;
        }

            if(dob == '' || dob == "undefined" ){
            alert("Please enter Date of birth");
            $(this).parent().parent().find("input[name='dob']").focus();
            return false;

        }

    // console.log(selectedTestName+"----"+price);
    // return false;
});


 function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
    return false;
  }else{
    return true;
  }
}

// 
    // $( function() {
    $( ".date,.mydate" ).datepicker({
          changeMonth: true,
          changeYear: true,
          yearRange: "-100:+1"
        
    });;
  // } );


    
var sr = 1;
   

        $(document).on('click','#addRow',function(){
            sr++;

            var newRow = `<tr role="row" class="even">
                <form method="POST" action="http://appointmenttool.tk/update-candidate-data" accept-charset="UTF-8" id="my_form_1"></form><input name="_token" type="hidden" value="pDlFA8ztfKSOcQX6lW2zmNijDG3yZ35pk7HrwoXI">
                        <td class="">${sr}</td>
                        <td><input type="text" class="formcontrol" name="name" value="">
                        <input type="hidden" class="formcontrol" id="selectedTestName" name="selectedTestName" value="">
                        <input type="hidden" class="formcontrol" id="hiddenPrice" name="hiddenPrice" value="">
                    
                    </td>
                        <td><input type="text" class="formcontrol" name="email" value=""></td>
                        <td><input type="text" class="formcontrol" name="mobile" value=""></td>
                        <td><input type="text" class="formcontrol" name="gender" value=""></td>
                        <td><input type="text" class="formcontrol" name="dob" value=""></td>
                        <td><input type="text" class="formcontrol" name="address" value=""></td>
                        <td><input type="text" class="formcontrol" name="timeslot" value=""></td>
                        <td><input type="text" class="formcontrol mydate hasDatepicker" name="date" value="" id="dp1580382274050"></td>
                        
                        <td>

                    <select name="is_checkup" class="formcontrol" id="is_checkup">
                        <option value="">Select</option>
                        <option value="Yes" selected="selected"> Yes</option>
                        <option value="No">No</option>
                    </select>
                       
                    </td>
                                                                <td>
                           
                          
                                                                        <select name="other_test_name" id="other_test_name" class="formcontrol">
                            <option value="">Select</option>
                                                                            <option value="5-HYDROXY INDOLE ACETIC ACID">5-HYDROXY INDOLE ACETIC ACID</option>
                                                                            <option value="ACTIVATED PROTEIN C RESISTANCE">ACTIVATED PROTEIN C RESISTANCE</option>
                                                                            <option value="Glucose">Glucose</option>
                                                                            <option value="Extended Newborn Screening Panel">Extended Newborn Screening Panel</option>
                                                                            
                                                                        </select>
                        <!--  -->
                        <hr>
                        <input type="text" class="formcontrol test_price" name="test_price" value="0" placeholder="Test Price">
                                                                    
                                                                </td>
                                                            <input type="hidden" name="user_id" value="1">
                        <td><button type="submit" name="submit_1" class="btn btn-success btn-sm savedata">Save</button></td>


                        <td><button type="submit" name="submit_1" class="btn btn-delete btn-sm savedata">Delete</button></td>
                        
                    </tr>`;

                    // $(newRow).after("#myDynamicTable tr:last");

                    $("#myDynamicTable").append(newRow);

            // $("#myDynamicTable").append();
        });


        // function deleteRow(currentRow){

        //         console.log(currentRow);
        //     }

            $(document).on('click','.btn-delete',function(){
                sr--;
                $(this).parent().parent().remove();
            })

$(document).ready(function(){
               var newRow = `<tr role="row" class="even">
                <form method="POST" action="http://appointmenttool.tk/update-candidate-data" accept-charset="UTF-8" id="my_form_1"></form><input name="_token" type="hidden" value="pDlFA8ztfKSOcQX6lW2zmNijDG3yZ35pk7HrwoXI">
                        <td class="">${sr}</td>
                        <td><input type="text" class="formcontrol" name="name" value="">
                        <input type="hidden" class="formcontrol" id="selectedTestName" name="selectedTestName" value="">
                        <input type="hidden" class="formcontrol" id="hiddenPrice" name="hiddenPrice" value="">
                    
                    </td>
                        <td><input type="text" class="formcontrol" name="email" value=""></td>
                        <td><input type="text" class="formcontrol" name="mobile" value=""></td>
                        <td><input type="text" class="formcontrol" name="gender" value=""></td>
                        <td><input type="text" class="formcontrol" name="dob" value=""></td>
                        <td><input type="text" class="formcontrol" name="address" value=""></td>
                        <td><input type="text" class="formcontrol" name="timeslot" value=""></td>
                        <td><input type="text" class="formcontrol mydate hasDatepicker" name="date" value="" id="dp1580382274050"></td>
                        
                        <td>

                    <select name="is_checkup" class="formcontrol" id="is_checkup">
                        <option value="">Select</option>
                        <option value="Yes" selected="selected"> Yes</option>
                        <option value="No">No</option>
                    </select>
                       
                    </td>
                                                                <td>
                           
                          
                                                                        <select name="other_test_name" id="other_test_name" class="formcontrol">
                            <option value="">Select</option>
                                                                            <option value="5-HYDROXY INDOLE ACETIC ACID">5-HYDROXY INDOLE ACETIC ACID</option>
                                                                            <option value="ACTIVATED PROTEIN C RESISTANCE">ACTIVATED PROTEIN C RESISTANCE</option>
                                                                            <option value="Glucose">Glucose</option>
                                                                            <option value="Extended Newborn Screening Panel">Extended Newborn Screening Panel</option>
                                                                            
                                                                        </select>
                        <!--  -->
                        <hr>
                        <input type="text" class="formcontrol test_price" name="test_price" value="0" placeholder="Test Price">
                                                                    
                                                                </td>
                                                            <input type="hidden" name="user_id" value="1">
                        <td><button type="submit" name="submit_1" class="btn btn-success btn-sm savedata">Save</button></td>


                        <td><button type="submit" name="submit_1" class="btn btn-delete btn-sm savedata">Delete</button></td>
                        
                    </tr>`;

                   $("#myDynamicTable").append(newRow);
});



</script>


@endsection

                                                
                                               
                                            