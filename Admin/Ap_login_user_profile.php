<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/themify-icons.css">
	<link href="cropperjs/cropper.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="../css/AP_Stylecss.css">
	<style>
		/**/
	</style>
</head>
<body>
	<?php 	
			include '../config.php';
			include 'Ap_Header.php';
	 ?>
	<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12 px-0">
					<?php include 'Ap_SlideBar.php'; ?>
					<div class="Admin-Right-Area">
						<div class="Admin-Top d-flex justify-content-between">
							<div id="breadcrumbs">
								<ul>
									<li><a href="../index.php"><i class="ti-home"></i>  Home</a></li>
									<li>/</li>
									<li>User Profile</li>
								</ul>
							</div>
							<div id="back-button">
								<button class="btn btn-danger btn-sm"><a href="Ap_login_user.php"><i class="ti-angle-double-left"></i>  Back</a></button>
							</div>
						</div>
						<div class="col-xl-12  Admin-dash-panel">
							<div class="Admin-dash">
								<div class="col-xl-12 px-0 Admin-table1">
									<div id="Ap-Table-header" class="mb-5">
										<p>User Profile</p>
									</div>
									<div class="login_user_input col-sm-12 col-xl-12 col-lg-12 col-md-12 d-flex mb-5">

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<!-- PHOTO UPDATE MODALBOX -->
		<div class="container">
            <form method="post">
                <input type="file" id="crop_img" name="image" class="image" hidden>
                <input type="text" name="id" class="id" value="<?php echo($_SESSION['id']); ?>" hidden>
            </form>
        </div>

        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Crop image</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="img-container">
                            <div class="row">
                                <div class="col-md-8">  
                                    <!--  default image where we will set the src via jquery-->
                                    <img id="image">
                                </div>
                                <div class="col-md-4">
                                    <div class="preview"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="crop_user_profile">Crop</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="cropperjs/cropper.min.js" type="text/javascript"></script>
<script>
	$(document).ready(function() {
				load_Loggedinuser()
				function load_Loggedinuser(){
					$.ajax({
						url : "Ap_select_loggedin_user.php?stu_id=<?php echo($_GET['stu_id']); ?>",
						type : 'POST',
						success : function(data){
								$('.login_user_input').html(data);
						}
					});
				}	
			
				$(document).on('click', '#alu_save', function(event) {
					event.preventDefault();
					var alu_id = $('#alu_id').val();
					var alu_username = $('#alu_username').val();
					var alu_email = $('#alu_email').val();
					var alu_password = $('#alu_password').val();
					var alu_status = $('#alu_status').val();

					$.ajax({
						url : 'Ap_update_login_user.php',
						type : 'POST',
						data : {alu_id:alu_id,
								alu_username:alu_username,
								alu_email:alu_email,
								alu_password:alu_password,
								alu_status:alu_status},
						success : function(data){
							if (data == 1) {
								alert('Data Updated Successfully...');
								load_Loggedinuser();
							}else{
								alert('We Can not Able to Update Your Data...');
							}
						}
					});
				});
    var bs_modal = $('#modal');
    var image = document.getElementById('image');
    var cropper,reader,file;
   

    $("body").on("change", ".image", function(e) {
        var files = e.target.files;
        var done = function(url) {
            image.src = url;
            bs_modal.modal('show');
        };


        if (files && files.length > 0) {
            file = files[0];

            if (URL) {
                done(URL.createObjectURL(file));
            } else if (FileReader) {
                reader = new FileReader();
                reader.onload = function(e) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
            }
        }
    });

    bs_modal.on('shown.bs.modal', function() {
        cropper = new Cropper(image, {
            aspectRatio: 1,
            viewMode: 3,
            preview: '.preview'
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
    });

    $("#crop_user_profile").click(function() {
        canvas = cropper.getCroppedCanvas({
            minWidth : 256,
            minHeight : 256,
            maxWidth : 1500,
            maxHeight : 1500,
            fillColor : '#fff',
            imageSmoothingEnabled : true,
            imageSmoothingQuality : 'high',

        });
        canvas.toBlob(function(blob) {
            url = URL.createObjectURL(blob);
            var reader = new FileReader();
            var id = $('#alu_id').val();
            reader.readAsDataURL(blob);
            reader.onloadend = function() {
                var base64data = reader.result;

                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "upload.php",
                    data: {image: base64data,id:id},
                    success: function(data) { 
                        if (data == 1) {
                            bs_modal.modal('hide');
                            load_Loggedinuser();
                           // window.location = 'my_profile.php';  
                        }else{
                            alert('We Can not Get Your File...');
                        }
                        
                    }
                });
            };
        });
    });
    load_Loggedinuser();
});


</script>
</body>
</html>