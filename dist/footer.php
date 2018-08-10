
    <!-- jQuery -->
	<script type="text/javascript" src="jquery/jquery-3.3.1.slim.min.js"></script>
	<!-- Popper js -->
	<script type="text/javascript" src="js/popper.js"></script>
	<!-- Bootstrap JavaScript plugins -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<script type="text/javascript">

        function showTel() {
            var tel = document.getElementById("forMail");
               tel.type = "tel";
               tel.placeholder = "Enter your mobile no... +254";
               tel.name = "tel_no";
        }

        function showMail() {
            var mail = document.getElementById("forMail");
               mail.type = "email";
               mail.placeholder = "Enter your email...";
               mail.name = "email";
        }
	</script>
</body>
</html>