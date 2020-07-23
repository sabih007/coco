
<div class="content-wrapper">
       <section class="content-header">
        <h1>
          Data Tables
          <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Tables</a></li>
          <li class="active">Data tables</li>
        </ol>
      </section>
   
    <section class="content">
      <div class="right_col" role="main">
        <div class="row">
            <div class="col-sm-12 main"  id="" >
                       
              <h4 class="StepTitle"  style="font-family: serif;margin-left:5px;"><b>Family Information</b></h4>
              <table class="table table-border" style="background-color: yellow">
                <thead>
                  <tr>
                      <th>Name</th>     
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input type="text" id="qname" name="qname" value="abcd"></td>
                  </tr>
                </tbody>
              </table>
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <input type="submit" name="" id="addData" class="btn btn-primary btn-sm" value="Add Data">
                    <input type="submit" name="" id="saveData" class="btn btn-success btn-sm"  value="Save to Server">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12" style="margin:8px">
                  <div class="col input">
                  </div>
                  <table id="data_table">
                    <thead>
                      <tr>
                        <th>Name:</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>
                        <input type="text" name="" class="form-control input-sm text-right" id="name" readonly>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>
  </section>
</div>
<script>
  $(document).ready(function () {
  
    


    $('#addData').click(function(){
      alert($("#qname").val());
      var _name =$("#qname").val();
      
      // //append inputs to table
      $('#data_table tbody:last-child').append(
        '<tr>'+
          '<td>'+_name+'</td>'+
          
        '</tr>'
        );
    
    });

  
  });

</script>