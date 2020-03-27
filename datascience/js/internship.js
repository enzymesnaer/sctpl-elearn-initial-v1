$(document).ready(function(){
			setBindings();
			flowLoad();
			// table();
			comboOffer();
			address();
			maps();
		});
		function setBindings(){
			$(".head_panel nav").click(function(e){
			e.preventDefault();
			var sectionId = "section-" + e.currentTarget.id ;
			
			$("html body").animate({
				scrollTop:$("#"+sectionId).offset().top + (-60)
			},1000);
			
			});
		}

		function flowLoad(){
				var vid11 = '<div class="embed-responsive embed-responsive-16by9"><iframe class=" embed-responsive-item" src="https://www.youtube.com/embed/gMBQI4Nvs24"></iframe></div><br><div class="embed-responsive embed-responsive-16by9"><iframe class=" embed-responsive-item" src="https://www.youtube.com/embed/4ECTHWJLF9g"></iframe></div><br><div class="embed-responsive embed-responsive-16by9"><iframe class=" embed-responsive-item" src="https://www.youtube.com/embed/V5VSjaD04CE"></iframe></div><p class="text-right"> For more feedback <a href="http://suvenconsultants.com/feedback.php" class="btn btn-link">Click here</a></p>';
				$('#vid11').html(vid11);
				var vid13 = '<div class="embed-responsive embed-responsive-16by9"><iframe class=" embed-responsive-item" src="https://www.youtube.com/embed/hqa2ssLwE4E"></iframe></div>';
				$('#vid13').html(vid13);
			}

		function table(){
			var t_level1 = "<tr><th><h1>Batch</h1></th><th><h1>Day</h1></th><th><h1>Start-Date</h1></th><th><h1>End-Date</h1></th><th><h1>Timing</h1></th><th><h1>Fees*</h1></th><th><h1>Internship dates</h1></th></tr>";
			var t_level2 = "<tr><th><h1>Batch</h1></th><th><h1>Day</h1></th><th><h1>Timing</h1></th><th><h1>Start-Date</h1></th><th><h1>End-Date</h1></th><th><h1>Fees*</h1></th><th><h1>Interview  dates</h1></th></tr>";
			var ctb = "<tr><th><h1>Batch</h1></th><th><h1>Day</h1></th><th><h1>Start-Date</h1></th><th><h1>End-Date</h1></th><th><h1>Timings</h1></th><th><h1>Fees*</h1></th>";
			$(".first-row-heading").html(t_level1);
			$(".first-row-heading2").html(t_level2);
			$(".first-row-heading3").html(ctb);
		}
		
		function comboOffer(){
			
			var offer2 = '<table class="table table-bordered"><tr><th class="text-center"> Choose any one placement track (Each with 100% Placement calls) <a href="https://drive.google.com/open?id=0B4rCFkKCsCeKc0pDZDdQY3dmVG8" target="_blank"> Click here </a> </th></tr><tr><th class="text-center" style="font-size:14px;">Track 4 : Android Os programming level 1 + level 2 (including JSP+Servlets , Material Design, MVP , GitHub) + <a href="http://android.suvenconsultants.com/#section-ios" target="_blank">iOS {Swift Programming}</a> + <a href="https://goo.gl/OEZROH" target="_blank"> Angular 4 - Bootstrap (For Hybrid App development )</a></th></tr><tr><th class="text-center" style="font-size:14px;">Time Table for Angular 4 - Bootstrap<a href="https://goo.gl/oBXJs1" target="_blank" class="btn btn-link"> Click here</a></th></tr></table>';

			var offer1 = '<table class="table table-bordered"><tr><th class="text-center"> Choose any one placement track (Each with 100% Placement calls) <a href="https://drive.google.com/open?id=0B4rCFkKCsCeKc0pDZDdQY3dmVG8" target="_blank"> Click here </a> </th></tr><tr><th class="text-center" style="font-size:14px;">Track 4 : Android Os programming level 1 + level 2 (including JSP+Servlets , Material Design, MVP , GitHub) + <a href="http://android.suvenconsultants.com/#section-ios" target="_blank">iOS {Swift Programming}</a> + <a href="https://goo.gl/OEZROH" target="_blank"> Angular 4 - Bootstrap (For Hybrid App development )</a></th></tr><tr><th class="text-center" style="font-size:14px;">Time Table for Angular 4 - Bootstrap <a href="https://goo.gl/oBXJs1" target="_blank" class="btn btn-link"> Click here</a></th></tr></table>';
			$('.comboOffer').html(offer1);

			$('.comboOffer2').html(offer2);
		}
		function address(){
			var add1_dadar ="<strong><span class='glyphicon glyphicon-map-marker' style='font-size: 20px; color:#ff4d4d'></span> SCTPL-DADAR </strong><br>c/o : Kalpana Coaching Classes<br> 205, 2nd Floor, Pearl Centre,<br>Senapati Bapat Road, Dadar West, <br>Mumbai 400028.<br><span class='glyphicon glyphicon-phone-alt' style='font-size: 20px; color:#ffc34d'></span> 022-24362136 <br> <span class='glyphicon glyphicon-phone' style='font-size: 20px; color:#DDA6AE'></span> 9867674602.";
			$(".dadar_address").html(add1_dadar);

			var add2_thane = "<strong><span class='glyphicon glyphicon-map-marker' style='font-size: 20px; color:#ff4d4d'></span>SCTPL-THANE </strong><br>c/o : Kalpana Coaching Classes<br>202, Second Floor, Crystal Court, <br>Above lagoo Bandhu Jewellers, <br>B-Cabin, Thane-West, Mumbai 400601.<br><span class='glyphicon glyphicon-phone' style='font-size: 20px; color:#DDA6AE'></span> 9967504602.";
			$(".thane_address").html(add2_thane);

			var add3_kandivali = "<strong><span class='glyphicon glyphicon-map-marker' style='font-size: 20px; color:#ff4d4d'></span>SCTPL-KANDIVALI </strong><br>510, 5th Floor , Ghanshyam Enclave,<br>Link Road, Lalji-pada Junction<br>Kandivali West, Mumbai 400067.<br><span class='glyphicon glyphicon-phone-alt' style='font-size: 20px; color:#ffc34d'></span> 022-28674177<br> <span class='glyphicon glyphicon-phone' style='font-size: 20px; color:#DDA6AE'></span>9870014450.";
			$(".kandivali_address").html(add3_kandivali);
			var add4_chembur = "<strong><span class='glyphicon glyphicon-map-marker' style='font-size: 20px; color:#ff4d4d'></span>SCTPL-CHEMBUR</strong><br>4/B wing,Trishul Apartments,<br>Sindhi Society Rd Number 1,<br>Chembur, Mumbai 400071.<br><span class='glyphicon glyphicon-phone-alt' style='font-size: 20px; color:#ffc34d'></span> 022-25277413 <br> <span class='glyphicon glyphicon-phone' style='font-size: 20px; color:#DDA6AE'></span>7666034450.";
			$(".chembur_address").html(add4_chembur);
			
			var add5_dadar ="<strong><span class='glyphicon glyphicon-map-marker' style='font-size: 20px; color:#ff4d4d'></span>Suven Consultants & Technology Pvt. Ltd. <br>c/o </strong>kalpana classes<br> 205, 2nd Floor, Pearl Centre,<br>Senapati Bapat Road, Dadar West, <br>Mumbai 400028.<br><span class='glyphicon glyphicon-phone' style='font-size: 20px; color:#DDA6AE'></span> 9870014450.";
			$(".dadarnew_address").html(add5_dadar);

			var add6_thane = "<strong><span class='glyphicon glyphicon-map-marker' style='font-size: 20px; color:#ff4d4d'></span>Suven Consultants & Technology Pvt. Ltd. <br>c/o </strong>kalpana classes<br>2nd Floor, Yashodhan Building,<br>above monginee cake shop,<br>Thane West, Mumbai 400601.<br><span class='glyphicon glyphicon-phone' style='font-size: 20px; color:#DDA6AE'></span> 9870014450.";
			$(".thanenew_address").html(add6_thane);
		}
		function maps(){
			var dadar_map1 = '<iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJsTH7P9rO5zsRqeZLOA3tXzg&key=AIzaSyAtDPmoOQCoJK15KJDiTsg5gK5AZSBHrYQ" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>';
			$(".dadar_map").html(dadar_map1);
			var thane_map1 = '<iframe src="https://www.google.com/maps/embed/v1/place?q=kalpana%20classes%20thane&key=AIzaSyAtDPmoOQCoJK15KJDiTsg5gK5AZSBHrYQ" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>';
			$(".thane_map").html(thane_map1);
			var kandivali_map1 ='<iframe src="https://www.google.com/maps/embed/v1/place?q=Suven%20Consultants%20Kandivali%20west&key=AIzaSyAtDPmoOQCoJK15KJDiTsg5gK5AZSBHrYQ" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>';
			$(".kandivali_map").html(kandivali_map1);
			$(".kandivali_map").html(kandivali_map1);
			var chembur_map = '<iframe src="https://www.google.com/maps/embed/v1/place?q=Suven%20Consultants%20Kandivali%20west&key=AIzaSyAtDPmoOQCoJK15KJDiTsg5gK5AZSBHrYQ" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>';
			$(".chembur_map").html(chembur_map);
		}
		function level(link) {
   			var pwd = prompt("Please enter a Password", "");
   			
    		var enc = btoa(pwd);
    		

    		if (enc == "U3VWZU4wODA5MDM=") {
    		
				if(link==1){
				window.open('https://drive.google.com/file/d/0B4rCFkKCsCeKYkFxWldZRHJmSjQ/view',"_blank");
				}
			}
			else
			{
			alert("Password you enter was incorrect");
			}
		}

		function level2(link)
		{
			
			var pwd = prompt("Please enter a Password");
    		var enc = btoa(pwd);
			//alert('enc');

    		if (enc == "c3V2ZW40NTY=") {
				if(link==21){
				window.open("http://ctb.suvenconsultants.com/downloads/JDBC-ODBC_programs.rar","_blank");
				}
				else if(link==26){
				//servet api
				window.open("https://drive.google.com/file/d/0B4rCFkKCsCeKQnlZN2V5b3dmejg/view","_blank");
				}
				else if(link==22){
				//Servlet programs 
				window.open("http://ctb.suvenconsultants.com/downloads/Servlets.rar","_blank");
				}
				
			}
			else
			{
			alert("Password you enter was incorrect");
			}
		}
	function level13(link)
		{
			
			var pwd = prompt("Please enter a Password");
    		//var enc = btoa(pwd);
			//alert('enc');

    		if (pwd == "AnDroiD_SuVeN_2018") {
				if(link==1){
				window.open("https://drive.google.com/open?id=0B4rCFkKCsCeKUkJFWjZxeDB3dXc","_blank");
				}
				else if(link==2){
				//RESTFul_Web_Project
				window.open("https://drive.google.com/open?id=0BwviNroVryoBMC1LUnp1dlNGelk","_blank");
				}
				else if(link==3){
				//RESTFul_Android_App
				window.open("https://drive.google.com/open?id=0BwviNroVryoBZmxwZVkxbkdLS3c","_blank");
				}
				else if(link==4){
				//ReadMefile
				window.open("https://drive.google.com/open?id=0BwviNroVryoBZ0EzUzFXVzM1VXM","_blank");
				}
				else if(link==5){
				//ReadMefile
				window.open("https://drive.google.com/open?id=0B4rCFkKCsCeKUEthZTJPcU1JeG8","_blank");
				}
					else if(link==6){
				//ReadMefile
				window.open("https://drive.google.com/open?id=1rrNS6UL6UkUpoihPAZ8hDPchbXfEbrci","_blank");
				}
				
				// Android Newly Added
				
				else if(link==7){
				//section a
				window.open("https://drive.google.com/open?id=0B4rCFkKCsCeKNmRZX2RLMjZ6N2s","_blank");
				}
				else if(link==8){
				//section b
				window.open("https://drive.google.com/open?id=0B4rCFkKCsCeKUldaM0ttN3dDVkk","_blank");
				}
				else if(link==9){
				//section b
				window.open("https://drive.google.com/open?id=0B4rCFkKCsCeKZGg4d09NY1UzWGs","_blank");
				}
				else if(link==10){
				//section b
				window.open(" https://drive.google.com/open?id=0B4rCFkKCsCeKSXNMVFhlU09qQzA","_blank");
				}
				
				// Android Projects Newly Added
				
				else if(link==11){
				// RestFul_Project
				window.open("https://drive.google.com/file/d/1WPa9hghQ4P10BL_iNKNLX6-Piopt_tL0/view?usp=sharing","_blank");
				}
				else if(link==12){
				// RecyclerView,Picasso,GSON
				window.open("https://drive.google.com/file/d/1aWWDyIZCwecO_NIBQXR7-R6NPxUOiD4-/view?usp=sharing","_blank");
				}
				else if(link==13){
				// Material Design
				window.open("https://drive.google.com/file/d/1rBGf16Uk8qa8_MbtNkRNA26wM7eOUs10/view?usp=sharing","_blank");
				}
				
			}
			else
			{
			alert("Password you enter was incorrect");
			}
		}
	/*	function level11(link)
		{
			
			var pwd = prompt("Please enter a Password");
    		var enc = btoa(pwd);
			//alert('enc');

    		if (enc == "c3V2ZW40NTY=") {
				if(link==1){
				//section a
				window.open("https://drive.google.com/open?id=0B4rCFkKCsCeKNmRZX2RLMjZ6N2s","_blank");
				}
				else if(link==2){
				//section b
				window.open("https://drive.google.com/open?id=0B4rCFkKCsCeKUldaM0ttN3dDVkk","_blank");
				}
				else if(link==3){
				//section b
				window.open("https://drive.google.com/open?id=0B4rCFkKCsCeKZGg4d09NY1UzWGs","_blank");
				}
				else if(link==4){
				//section b
				window.open(" https://drive.google.com/open?id=0B4rCFkKCsCeKSXNMVFhlU09qQzA","_blank");
				}
				
			}
			else
			{
			alert("Password you enter was incorrect");
			}
		}*/