  <footer class="main-footer">

    <div class="pull-right hidden-xs">

      <b>Version</b> 1.0

    </div>

    <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="#"><?=APP_NAME?></a>.
    </strong> All rights

    reserved.

  </footer>



  <!-- Control Sidebar -->

  <aside class="control-sidebar control-sidebar-dark">

    <!-- Create the tabs -->

    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>

    </ul>

    <!-- Tab panes -->

    <div class="tab-content">

      <!-- Home tab content -->

      <div class="tab-pane" id="control-sidebar-home-tab">

        <h3 class="control-sidebar-heading">Recent Activity</h3>

        <ul class="control-sidebar-menu">

          <li>

            <a href="javascript:void(0)">

              <i class="menu-icon fa fa-birthday-cake bg-red"></i>



              <div class="menu-info">

                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>



                <p>Will be 23 on April 24th</p>

              </div>

            </a>

          </li>

          <li>

            <a href="javascript:void(0)">

              <i class="menu-icon fa fa-user bg-yellow"></i>



              <div class="menu-info">

                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>



                <p>New phone +1(800)555-1234</p>

              </div>

            </a>

          </li>

          <li>

            <a href="javascript:void(0)">

              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>



              <div class="menu-info">

                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>



                <p>nora@example.com</p>

              </div>

            </a>

          </li>

          <li>

            <a href="javascript:void(0)">

              <i class="menu-icon fa fa-file-code-o bg-green"></i>



              <div class="menu-info">

                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>



                <p>Execution time 5 seconds</p>

              </div>

            </a>

          </li>

        </ul>

        <!-- /.control-sidebar-menu -->



        <h3 class="control-sidebar-heading">Tasks Progress</h3>

        <ul class="control-sidebar-menu">

          <li>

            <a href="javascript:void(0)">

              <h4 class="control-sidebar-subheading">

                Custom Template Design

                <span class="label label-danger pull-right">70%</span>

              </h4>



              <div class="progress progress-xxs">

                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>

              </div>

            </a>

          </li>

          <li>

            <a href="javascript:void(0)">

              <h4 class="control-sidebar-subheading">

                Update Resume

                <span class="label label-success pull-right">95%</span>

              </h4>



              <div class="progress progress-xxs">

                <div class="progress-bar progress-bar-success" style="width: 95%"></div>

              </div>

            </a>

          </li>

          <li>

            <a href="javascript:void(0)">

              <h4 class="control-sidebar-subheading">

                Laravel Integration

                <span class="label label-warning pull-right">50%</span>

              </h4>



              <div class="progress progress-xxs">

                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>

              </div>

            </a>

          </li>

          <li>

            <a href="javascript:void(0)">

              <h4 class="control-sidebar-subheading">

                Back End Framework

                <span class="label label-primary pull-right">68%</span>

              </h4>



              <div class="progress progress-xxs">

                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>

              </div>

            </a>

          </li>

        </ul>

        <!-- /.control-sidebar-menu -->



      </div>

      <!-- /.tab-pane -->

      <!-- Stats tab content -->

      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>

      <!-- /.tab-pane -->

      <!-- Settings tab content -->

      <div class="tab-pane" id="control-sidebar-settings-tab">

        <form method="post">

          <h3 class="control-sidebar-heading">General Settings</h3>



          <div class="form-group">

            <label class="control-sidebar-subheading">

              Report panel usage

              <input type="checkbox" class="pull-right" checked>

            </label>



            <p>

              Some information about this general settings option

            </p>

          </div>

          <!-- /.form-group -->



          <div class="form-group">

            <label class="control-sidebar-subheading">

              Allow mail redirect

              <input type="checkbox" class="pull-right" checked>

            </label>



            <p>

              Other sets of options are available

            </p>

          </div>

          <!-- /.form-group -->



          <div class="form-group">

            <label class="control-sidebar-subheading">

              Expose author name in posts

              <input type="checkbox" class="pull-right" checked>

            </label>



            <p>

              Allow the user to show his name in blog posts

            </p>

          </div>

          <!-- /.form-group -->



          <h3 class="control-sidebar-heading">Chat Settings</h3>



          <div class="form-group">

            <label class="control-sidebar-subheading">

              Show me as online

              <input type="checkbox" class="pull-right" checked>

            </label>

          </div>

          <!-- /.form-group -->



          <div class="form-group">

            <label class="control-sidebar-subheading">

              Turn off notifications

              <input type="checkbox" class="pull-right">

            </label>

          </div>

          <!-- /.form-group -->



          <div class="form-group">

            <label class="control-sidebar-subheading">

              Delete chat history

              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>

            </label>

          </div>

          <!-- /.form-group -->

        </form>

      </div>

      <!-- /.tab-pane -->

    </div>

  </aside>

  <!-- /.control-sidebar -->

  <!-- Add the sidebar's background. This div must be placed

       immediately after the control sidebar -->

  <div class="control-sidebar-bg"></div>

</div>

<!-- ./wrapper -->



<!-- jQuery 3 -->

<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>

<!-- jQuery UI 1.11.4 -->

<script src="assets/bower_components/jquery-ui/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>

  $.widget.bridge('uibutton', $.ui.button);

</script>

<!-- Bootstrap 3.3.7 -->

<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Morris.js charts -->

<script src="assets/bower_components/raphael/raphael.min.js"></script>

<script src="assets/bower_components/morris.js/morris.min.js"></script>

<!-- Sparkline -->

<script src="assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

<!-- jvectormap -->

<script src="assets/bower_components/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>

<script src="assets/bower_components/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- jQuery Knob Chart -->

<script src="assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>

<!-- daterangepicker -->

<script src="assets/bower_components/moment/min/moment.min.js"></script>

<script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- datepicker -->

<script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<!-- Bootstrap WYSIHTML5 -->

<script src="assets/bower_components/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<!-- Slimscroll -->

<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<!-- FastClick -->

<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>

<script src="assets/bower_components/jquery-confirm/confirm.js"></script>



<!-- DataTables -->

<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>

<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>





<!-- AdminLTE App -->

<script src="assets/bower_components/dist/js/adminlte.min.js"></script>

<script src="assets/bower_components/dist/js/demo.js"></script>
<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script> 
<script src="fancybox/source/jquery.fancybox.js"></script>

<?php  include_once'myscript.php'; ?>

<script>
 function deleteRecord(id,table){
		 $.confirm({
    title: 'Confirmation!',
    content: 'Are you sure to delete!',
	animation: 'zoom',
    closeAnimation: 'scale',
	autoClose: 'cancel|5000',
	type: 'red',
	buttons: {
        deleteUser: {
            text : 'Yes',
			btnClass: 'btn-primary',
            action: function () {
                // if user click ok the row will be deleted by the following code
				//ajax call to delete	
				$.ajax({
				url: "<?php echo base_url().'crud/delete'; ?>",
				type: 'POST',
				data: {id:id,table:table},
				dataType: "json",
				success: function(response) {
					$(".ui-item").hide();
				if (response.status == 1)
				{   
				$("#row_"+id).hide('slow');
				}
				else if (response.status ==0)
				{  
				$.alert('Error',':You could not delete');
				}
				else  
				{  
				$.alert('Error',response);
				}
				}
				});
            }
        },
        cancel: function () {
			text : 'Yes'
        },
    }
	});  
	} 

 $('.fancybox').fancybox();
$('.datatable').dataTable();
//////////////////
	 function getSubject(class_id){
		 		    $.ajax({
			url: "<?php echo base_url().'auth/getsubject'; ?>",
			type: 'POST',
			data: {class_id:class_id},
			dataType: "json",
			success: function(response) {
			if (response.status == 200)
            {
				$('#subjectDiv').html(response.data);
			}
			else  
			{   
			showAlert('response error');
			}
			}
		});

		 } 

///////////////////
function shopStatus(id,status,tblName){

				var id;

				var rowid= "div_status_"+id;

				var status;

				var tblName;

				var changed;

				if(status==1){

					changed=0;

					}

	else{

		changed=1;

		}

    $.ajax({

        url: "<?php echo base_url().'crud/changeStatus'; ?>",

        type: 'POST',

		 data: {id:id,status:status,tblName:tblName},

		dataType : "json",

        success: function(response) {

		   if(response.chaged == true){

			var q="'";

			 if(response.status=="Inactive"){

				 mehtml = '<a style="margin: 4px 0 5px 0;" class="btn btn-danger" href="javascript:void(0);" onclick="shopStatus(\''+id+'\',\''+changed+'\',\''+tblName+'\')">shop is closed</a>';

				 }

				 else{

					 mehtml = '<a style="margin: 4px 0 5px 0;" class="btn btn-success" href="javascript:void(0);" onclick="shopStatus(\''+id+'\',\''+changed+'\',\''+tblName+'\')">shop is open</a>';

					 }

			 

			 $("#"+rowid).html(mehtml);

			 

			   }

          

           }

	 });

	 } 	


//var interval = 1000*10*1; 
//setInterval("checkOrder()",interval);
function checkOrder(){
	 $.ajax({
			type: "POST",
			url: "<?php echo base_url().'order/getNewOrderCount'; ?>",
			dataType: 'JSON',
			success: function(data) {
			$('#loader').addClass('hidden');
            if (data.status == 1){ 
			if(data.unreadCounter>0){
				var audio = new Audio('assets/sound.MP3');
				//audio.play();
				setTimeout(function(){

		//location.reload();

	},2000);
			}
			$("#unreadCounter").text(data.unreadCounter);
            }
           else if (data.status ==0){  
			
            }
			
           }
	 });
}

 
$(document).ready(function(e) {
		var BTN = '<button type="button" class="btn btn-primary btnemailbtn" data-toggle="modal" data-target="#emailSender">Send Email</button>  ';
			$( ".email_templating" ).after( BTN );
			$("#checkAll").click(function(){
			$('.checkItem:checkbox').not(this).prop('checked', this.checked);
			
		});

		$('#emailSubmitButton').click(function (){
			
		
				var checkedfilter = $("#post_table tbody input:checkbox:checked").map(function(){
				return $(this).val();
				}).get(); 
				
				
				if(checkedfilter!='')
				{
					sendEmailTempalatetoUser(checkedfilter);
				}
				else
				{
					alert('select atleast 1 checkbox to continue');	
				}
				return false;
	})

 });
 
 /**********************************************/
   
   	
	function sendEmailTempalatetoUser(checkedfilter)
	{
	
			
			var formData = new FormData();
			var other_data = $('#emailsenderform').serializeArray();
			$.each(other_data,function(key,input){
			formData.append(input.name,input.value);
			});   
			rawHTML = CKEDITOR.instances.rawHTML.getData();
			formData.append("rawHTML", rawHTML);

			if($('#attachmentt').val()!='')
			{
				formData.append("attachmentt", document.getElementById('attachmentt').files[0]);
				
			} 
			formData.append("checkedids", checkedfilter);
	
		    $.ajax({
			type: "POST",
			url: "<?php echo base_url().'crud/sendEmailTempalatetoUser'; ?>",
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			dataType: 'JSON',
			beforeSend: function() {
			$('#loader').removeClass('hidden');
		
			},
			success: function(data) {
			$('#loader').addClass('hidden');
				if (data.status == 1)
				{   
					getMsg('success',data.message);
				}
				else if (data.status ==0)
				{  
					getMsg('error',data.message);
				}
				else if (data.status == "validation_error")
				{   
					getMsg('error',data.message);
				
				}
			
           }
	 });

	
    }
 
 
 function getMsg(type,msg)
	{
			var msgg = '<div class="message '+type+'">'+msg+'</div>';
			$(".pagealert").show();
			$(".pagealert").addClass('error');
			$(".pagealert").html(msgg);
			$(".pagealert").focus();
			setTimeout(function()
			{
				$(".pagealert").fadeOut().html('');
			},5000);	
	}
 

 
</script>

<!------------------------>

  
		<script src="assets/bower_components/ckeditor/ckeditor.js"></script>
        <script type="text/javascript">
        
			$(function () 
			{
				CKEDITOR.replace('rawHTML');
			});
        </script>
       
          <?php echo emailSenderEvent(uri_string());?>
          
<!------------------------>
</body>

</html>



